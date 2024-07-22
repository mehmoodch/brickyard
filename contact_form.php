<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic presence check
    if (empty($_POST['cname']) || empty($_POST['cemail']) || empty($_POST['csubject']) || empty($_POST['cmessage'])) {
        echo "All fields are required.";
        exit();
    }

    // Validate email format
    $cemail = $_POST['cemail'];
    if (!filter_var($cemail, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit();
    }

    // Additional validation
    $cname = $_POST['cname'];
    $csubject = $_POST['csubject'];
    $cmessage = $_POST['cmessage'];

    // Example: Check if name contains only letters
    if (!preg_match("/^[a-zA-Z ]*$/", $cname)) {
        echo "Invalid name format.";
        exit();
    }

    // Example: Check if subject length is within a certain range
    if (strlen($csubject) < 5 || strlen($csubject) > 50) {
        echo "Subject must be between 5 and 50 characters.";
        exit();
    }

    // Example: Check if message length is within a certain range
    if (strlen($cmessage) < 10) {
        echo "Message must be at least 10 characters.";
        exit();
    }

    // Database connection parameters
    $host = 'localhost';
    $user = 'ewangrou_root';
    $password = 'v3l(sx5CDO#8';
    $database = 'ewangrou_brickyard';

    // Create a database connection
    $conn = new mysqli($host, $user, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Securely insert data into the database using prepared statements
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $cname, $cemail, $csubject, $cmessage);

    if ($stmt->execute()) {
        // Redirect to the index.html page
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: index.php");
    exit();
}
?>
