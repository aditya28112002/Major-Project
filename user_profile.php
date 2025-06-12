<?php
include 'header.php';
include 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>window.location.href = 'user_login.php';</script>";
    exit();
}

$user_id = $_SESSION['user_id'];
$status_filter = $_GET['status'] ?? '';

// Fetch user details
$user_sql = "SELECT name, email, phone_number FROM users WHERE id = ?";
$user_stmt = $conn->prepare($user_sql);
$user_stmt->bind_param("i", $user_id);
$user_stmt->execute();
$user_result = $user_stmt->get_result();
$user = $user_result->fetch_assoc();

// Fetch service history with optional filter
if (!empty($status_filter)) {
    $history_sql = "SELECT service_name, service_type, service_provider, status, amount, service_date 
                    FROM service_history 
                    WHERE user_id = ? AND status = ?
                    ORDER BY service_date DESC";
    $history_stmt = $conn->prepare($history_sql);
    $history_stmt->bind_param("is", $user_id, $status_filter);
} else {
    $history_sql = "SELECT service_name, service_type, service_provider, status, amount, service_date 
                    FROM service_history 
                    WHERE user_id = ? 
                    ORDER BY service_date DESC";
    $history_stmt = $conn->prepare($history_sql);
    $history_stmt->bind_param("i", $user_id);
}
$history_stmt->execute();
$history_result = $history_stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile - <?php echo htmlspecialchars($user['name']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-section {
            margin: 40px auto;
            max-width: 1000px;
        }
        .card-custom {
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.08);
        }
        .table-container {
            margin-top: 30px;
        }
        .filter-form {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container profile-section">
    <!-- User Info -->
    <div class="card card-custom p-4 mb-4">
        <h3 class="mb-3">User Information</h3>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($user['name']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
        <p><strong>Phone:</strong> <?php echo htmlspecialchars($user['phone_number']); ?></p>
    </div>

    <!-- Service History -->
    <div class="table-container">
        <div class="d-flex justify-content-between align-items-center filter-form">
            <h4>Service History</h4>
            <form method="GET" class="d-flex">
                <label class="me-2">Filter by Status:</label>
                <select name="status" onchange="this.form.submit()" class="form-select form-select-sm w-auto">
                    <option value="">All</option>
                    <option value="Pending" <?php if($status_filter === 'Pending') echo 'selected'; ?>>Pending</option>
                    <option value="Completed" <?php if($status_filter === 'Completed') echo 'selected'; ?>>Completed</option>
                    <option value="Cancelled" <?php if($status_filter === 'Cancelled') echo 'selected'; ?>>Cancelled</option>
                </select>
            </form>
        </div>

        <table class="table table-bordered table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Service</th>
                    <th>Type</th>
                    <th>Provider</th>
                    <th>Status</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($history_result->num_rows > 0): ?>
                    <?php while ($row = $history_result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['service_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['service_type']); ?></td>
                            <td><?php echo htmlspecialchars($row['service_provider']); ?></td>
                            <td><?php echo htmlspecialchars($row['status']); ?></td>
                            <td>₹<?php echo number_format($row['amount'], 2); ?></td>
                            <td><?php echo date("d M Y, h:i A", strtotime($row['service_date'])); ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-muted">No services used yet.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>

<?php
$user_stmt->close();
$history_stmt->close();
$conn->close();
include 'footer.php';
?>
