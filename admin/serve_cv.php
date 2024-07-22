<?php
// Database configuration
$servername = "localhost";
$username = "root";  // replace with your MySQL username
$password = "";      // replace with your MySQL password
$dbname = "brickyard"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'id' parameter is present in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // SQL query to select the resume for the given id
    $sql = "SELECT resume FROM applications WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $resume = $row['resume'];

        // Set headers to download the file
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="resume_' . $id . '.pdf"');
        header('Content-Length: ' . strlen($resume));

        // Output the file
        echo $resume;
    } else {
        echo "No record found for the given ID.";
    }
} else {
    echo "Invalid request.";
}

// Close connection
$conn->close();
?>
