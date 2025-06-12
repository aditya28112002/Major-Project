<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

include 'header.php'; // your admin panel header
?>

<div class="container mt-5 text-center">
    <h2 class="mb-4">Welcome Admin!</h2>

    <div class="d-grid gap-3 col-6 mx-auto">
        <a href="pending_providers.php" class="btn btn-primary btn-lg">View Pending Providers</a>
        <a href="pending_queries.php" class="btn btn-warning btn-lg">View Pending Queries</a>
        <a href="pending_bookings.php" class="btn btn-success btn-lg">View Pending Bookings</a>
    </div>

    <!-- Logout Button -->
    <a href="admin_logout.php" class="btn btn-danger btn-lg mt-4">Logout</a>
</div>

<?php include 'footer.php'; ?>
