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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);
    $position = $conn->real_escape_string($_POST['position']);
    $location = $conn->real_escape_string($_POST['location']);
    $linkedin = $conn->real_escape_string($_POST['linkedin']);
    $cover_letter = $conn->real_escape_string($_POST['cover_letter']);
    $education = $conn->real_escape_string($_POST['education']);
    $experience = $conn->real_escape_string($_POST['experience']);
    $employers = $conn->real_escape_string($_POST['employers']);
    $skills = $conn->real_escape_string($_POST['skills']);
    $certifications = $conn->real_escape_string($_POST['certifications']);
    $start_date = $conn->real_escape_string($_POST['start_date']);
    $employment_type = $conn->real_escape_string($_POST['employment_type']);
    $referencesname = $conn->real_escape_string($_POST['referencesname']);
    $portfolio = $conn->real_escape_string($_POST['portfolio']);
    $referral = $conn->real_escape_string($_POST['referral']);

    // Handle file upload
    if ($_FILES['resume']['size'] > 0) {
        $resume = file_get_contents($_FILES['resume']['tmp_name']);
        $resume = $conn->real_escape_string($resume);
    } else {
        $resume = NULL;
    }

    // Insert data into database
    $sql = "INSERT INTO applications (name, email, phone, address, position, location, resume, linkedin, cover_letter, education, experience, employers, skills, certifications, start_date, employment_type, referencesname, portfolio, referral) VALUES ('$name', '$email', '$phone', '$address', '$position', '$location', '$resume', '$linkedin', '$cover_letter', '$education', '$experience', '$employers', '$skills', '$certifications', '$start_date', '$employment_type', '$referencesname', '$portfolio', '$referral')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
