<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brickyard";

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
        $uploads_dir = __DIR__ . '/admin/uploads';
        if (!is_dir($uploads_dir)) {
            mkdir($uploads_dir, 0777, true);
        }

        $resume_path = $uploads_dir . '/' . basename($_FILES['resume']['name']);
        if (move_uploaded_file($_FILES['resume']['tmp_name'], $resume_path)) {
            $resume_path_db = 'uploads/' . basename($_FILES['resume']['name']);
        } else {
            echo "Failed to move uploaded file.";
            exit;
        }
    } else {
        $resume_path_db = NULL;
    }

    $sql = "INSERT INTO applications (name, email, phone, address, position, location, resume, linkedin, cover_letter, education, experience, employers, skills, certifications, start_date, employment_type, referencesname, portfolio, referral) VALUES ('$name', '$email', '$phone', '$address', '$position', '$location', '$resume_path_db', '$linkedin', '$cover_letter', '$education', '$experience', '$employers', '$skills', '$certifications', '$start_date', '$employment_type', '$referencesname', '$portfolio', '$referral')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: career.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>