
<?php
/*session_start();

// Check if user is authenticated
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}*/

error_reporting(E_ALL);
ini_set('display_errors', '1');
// Database Connection
$host = 'localhost';
$user = '';
$password = '';
$database = 'brickyard';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Number of records per page
$recordsPerPage = 10;

// Determine the current page
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;
}

// Calculate the starting record for the current page
$startFrom = ($currentPage - 1) * $recordsPerPage;

// Fetch Data from Database with Pagination
$sql = "SELECT * FROM contact_data ORDER BY id DESC LIMIT $startFrom, $recordsPerPage";
$result = $conn->query($sql);

if (!$result) {
    die("Error: " . $conn->error);
}

// Count total number of records
$totalRecordsQuery = "SELECT COUNT(*) as total FROM contact_data";
$totalRecordsResult = $conn->query($totalRecordsQuery);

if (!$totalRecordsResult) {
    die("Error: " . $conn->error);
}

$row = $totalRecordsResult->fetch_assoc();
$totalRecords = $row['total'];

// Calculate total number of pages
$totalPages = ceil($totalRecords / $recordsPerPage);

// Check if delete request is present in the URL
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $deleteId = $_GET['delete'];

    // Execute the DELETE statement
    $deleteQuery = "DELETE FROM contact_data WHERE id = $deleteId";
    $deleteResult = $conn->query($deleteQuery);

    if (!$deleteResult) {
        die("Error deleting record: " . $conn->error);
    }

    // Redirect back to the same page after deletion
    header("Location: {$_SERVER['PHP_SELF']}");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Contact Form Data</h2>
        <table class="table table-bordered table-striped table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['fmessage'] ?></td>
                        <td>
                        <a href="?delete=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

       <!-- Pagination -->
<nav aria-label="Page navigation">
    <ul class="pagination">
        <?php if ($currentPage > 1) : ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?= $currentPage - 1 ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        <?php endif; ?>

        <?php for ($page = 1; $page <= $totalPages; $page++) : ?>
            <li class="page-item <?= ($page == $currentPage) ? 'active' : '' ?>">
                <a class="page-link" href="?page=<?= $page ?>"><?= $page ?></a>
            </li>
        <?php endfor; ?>

        <?php if ($currentPage < $totalPages) : ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?= $currentPage + 1 ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</nav>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Close Connection
$conn->close();
?>
