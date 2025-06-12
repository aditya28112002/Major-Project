<?php
include "config.php"; // database connection
include "header.php"; // your admin panel header

// Fetch pending queries
$sql = "SELECT * FROM contact_queries WHERE status = 'pending' ORDER BY submitted_at DESC";
$result = $conn->query($sql);
?>

<!-- Remove container or container-fluid. Use plain div -->
<div class="mt-5 mb-5 px-5">
    <h2 class="text-center mb-4">Pending Contact Queries</h2>

    <div style="overflow-x: auto;">
        <table class="table table-bordered table-hover w-100">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody class="text-center">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . htmlspecialchars($row['full_name']) . "</td>
                        <td>" . htmlspecialchars($row['email']) . "</td>
                        <td>" . htmlspecialchars($row['phone_number']) . "</td>
                        <td>" . nl2br(htmlspecialchars($row['message'])) . "</td>
                        <td>" . $row['submitted_at'] . "</td>
                        <td>
                            <form action='fix_query.php' method='POST'>
                                <input type='hidden' name='query_id' value='" . $row['id'] . "'>
                                <button type='submit' class='btn btn-success btn-sm'>Query Fixed</button>
                            </form>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='8' class='text-center'>No pending queries found.</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    
    <!-- Logout Button -->
    <a href="admin_logout.php" class="btn btn-danger btn-lg mt-4">Logout</a>
</div>

<?php include "footer.php"; ?>
