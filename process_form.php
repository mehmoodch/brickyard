<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Database Connection
    $host = 'localhost';
    $user = 'ewangrou_root';
    $password = 'v3l(sx5CDO#8';
    $database = 'ewangrou_brickyard';

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Form Data
    $name = $_POST['name'];
    $countryCode = $_POST['countryCode'];
    $phone  = $_POST['phone'];
    $fmessage = $_POST['fmessage'];
    
    // Concatenate country code with phone number
    $fullPhoneNumber = $countryCode . $phone;
    
    // Save to Database
    $sql = "INSERT INTO contact_data (name, phone, fmessage) VALUES ('$name', '$fullPhoneNumber', '$fmessage')";
    $result = $conn->query($sql);

    if (!$result) {
        die("Error: " . $conn->error);
    }

    // Send Email
    $to = 'mehmoodasgharch@gmail.com';
    $subject = 'New Contact Form Submission';
    $headers = "From: mehmoodasghar1122@gmail.com\r\n";
    $message = "Name: $name\r\nPhone: $phone\r\nMessage: $fmessage";

    //mail($to, $subject, $message, $headers);

    // Close Connection
    $conn->close();

    // Redirect to a thank you page
    header("Location: index.php");
    exit();
} else {
    // If the form is not submitted, redirect to the form page or handle accordingly
    header("Location: index.php");
    exit();
}
?>