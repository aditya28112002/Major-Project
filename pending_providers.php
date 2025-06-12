<?php
include "header.php"; // Admin panel header
include "config.php"; // Database connection

// Fetch pending providers
$sql = "SELECT * FROM pending_sellers ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!-- Full-screen container for table -->
<div class="mt-5 mb-5 px-5">
    <h2 class="text-center mb-4">Pending Service Providers</h2>
    
    <!-- Table Wrapper -->
    <div style="overflow-x: auto;">
        <table class="table table-bordered table-hover w-100">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Service Type</th>
                    <th>Experience</th>
                    <th>Service Charge</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . htmlspecialchars($row['full_name']) . "</td>
                        <td>" . htmlspecialchars($row['email']) . "</td>
                        <td>" . htmlspecialchars($row['mobile_number']) . "</td>
                        <td>" . htmlspecialchars($row['service_type']) . "</td>
                        <td>" . htmlspecialchars($row['work_experience']) . " years</td>
                        <td>₹" . htmlspecialchars($row['service_charge']) . "</td>
                        <td>
                            <form action='approve_provider.php' method='POST' style='display:inline;'>
                                <input type='hidden' name='id' value='" . $row['id'] . "'>
                                <button type='submit' name='action' value='approve' class='btn btn-success btn-sm'>Approve</button>
                            </form>
                            <form action='approve_provider.php' method='POST' style='display:inline;'>
                                <input type='hidden' name='id' value='" . $row['id'] . "'>
                                <button type='submit' name='action' value='reject' class='btn btn-danger btn-sm'>Reject</button>
                            </form>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='8' class='text-center'>No pending providers at the moment.</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    
    <!-- Logout button (Fixed to top-right) -->
    <a href="admin_logout.php" class="btn btn-danger btn-lg mt-4">Logout</a>
</div>

<?php
$conn->close();
include "footer.php"; // Footer
?>
