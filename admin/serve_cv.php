<?php
// Database configuration
$servername = "localhost";
$username = 'ewangrou_root';
$password = 'v3l(sx5CDO#8';
$dbname = 'ewangrou_brickyard';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start output buffering
//ob_start();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    // SQL query to select the resume file path for the given id
    $sql = "SELECT resume FROM applications WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $resume_path = $row['resume'];

        // Construct the full path to the file
        $resume_full_path = __DIR__ . '/' . $resume_path;

        if (file_exists($resume_full_path)) {
            // Set headers to download the file
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="' . basename($resume_full_path) . '"');
            header('Content-Length: ' . filesize($resume_full_path));

            // Clear the output buffer
            // ob_clean();
            // flush();

            // Read the file and output its content
            readfile($resume_full_path);

            // End output buffering and flush output
            //ob_end_flush();
            exit;
        } else {
            echo "File not found.";
        }
    } else {
        echo "No record found for the given ID.";
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
mysqli_close($conn);

// End output buffering if not already ended
// if (ob_get_length()) {
//     ob_end_flush();
// }
?>