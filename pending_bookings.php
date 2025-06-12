<?php
include "header.php"; // Admin panel header
include "config.php"; // Database connection

// Fetch pending bookings from the database
$sql = "SELECT * FROM pending_bookings WHERE status = 'pending' ORDER BY booking_date DESC";
$result = $conn->query($sql);
?>

<div class="container-fluid mt-5">
    <h2 class="text-center mb-4">Pending Bookings</h2>
    
    <!-- Table Wrapper -->
    <div style="overflow-x: auto;">
        <table class="table table-bordered table-hover w-100">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Provider Name</th>
                    <th>Provider Email</th>
                    <th>Service Type</th>
                    <th>Booking Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . htmlspecialchars($row['user_name']) . "</td>
                        <td>" . htmlspecialchars($row['user_email']) . "</td>
                        <td>" . htmlspecialchars($row['service_type']) . "</td>
                        <td>" . $row['booking_date'] . "</td>
                        <td>" . $row['status'] . "</td>
                        <td>
                            <form action='update_booking.php' method='POST' style='display:inline;'>
                                <input type='hidden' name='booking_id' value='" . $row['id'] . "'>
                                <button type='submit' name='action' value='confirm' class='btn btn-success btn-sm'>Confirm</button>
                            </form>
                            <form action='update_booking.php' method='POST' style='display:inline;'>
                                <input type='hidden' name='booking_id' value='" . $row['id'] . "'>
                                <button type='submit' name='action' value='reject' class='btn btn-danger btn-sm'>Reject</button>
                            </form>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='7' class='text-center'>No pending bookings at the moment.</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    <a href="admin_logout.php" class="btn btn-danger btn-lg mt-4">Logout</a>
</div>

<?php
$conn->close();
include "footer.php"; // Footer
?>
