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

// SQL query to select all records from the applications table
$sql = "SELECT * FROM applications";
$result = $conn->query($sql);

// Check if there are any records
if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Position Applied For</th>
                <th>Preferred Location</th>
                <th>LinkedIn Profile</th>
                <th>Cover Letter</th>
                <th>Highest Level of Education</th>
                <th>Years of Relevant Experience</th>
                <th>Previous Employers</th>
                <th>Key Skills</th>
                <th>Certifications</th>
                <th>Earliest Start Date</th>
                <th>Employment Type</th>
                <th>References</th>
                <th>Portfolio or Work Samples</th>
                <th>How Did You Hear About Us?</th>
                <th>Resume/CV</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["address"] . "</td>
                <td>" . $row["position"] . "</td>
                <td>" . $row["location"] . "</td>
                <td>" . $row["linkedin"] . "</td>
                <td>" . $row["cover_letter"] . "</td>
                <td>" . $row["education"] . "</td>
                <td>" . $row["experience"] . "</td>
                <td>" . $row["employers"] . "</td>
                <td>" . $row["skills"] . "</td>
                <td>" . $row["certifications"] . "</td>
                <td>" . $row["start_date"] . "</td>
                <td>" . $row["employment_type"] . "</td>
                <td>" . $row["referencesname"] . "</td>
                <td>" . $row["portfolio"] . "</td>
                <td>" . $row["referral"] . "</td>
                <td><a href='serve_cv.php?id=" . $row["id"] . "' target='_blank'>View CV</a></td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
