<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize the email address
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
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

        // Insert the email into the database
        $stmt = $conn->prepare("INSERT INTO subscriptions (email) VALUES (?)");
        $stmt->bind_param("s", $email);

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
        echo "Invalid email address.";
    }
} else {
    // If the form is not submitted, redirect to the subscription form page
    header("Location: index.php");
    exit();
}
?>
