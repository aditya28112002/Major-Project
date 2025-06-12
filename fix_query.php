<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['query_id'])) {
    $query_id = intval($_POST['query_id']);

    // Step 1: Fetch the user's email first
    $fetch_sql = "SELECT email FROM contact_queries WHERE id = ?";
    $fetch_stmt = $conn->prepare($fetch_sql);
    $fetch_stmt->bind_param("i", $query_id);
    $fetch_stmt->execute();
    $fetch_result = $fetch_stmt->get_result();

    if ($fetch_result->num_rows > 0) {
        $row = $fetch_result->fetch_assoc();
        $user_email = $row['email'];

        // Step 2: Send an email to the user
        $subject = "Your Query Has Been Fixed!";
        $message = "Hello,\n\nYour query has been successfully fixed by our team. Thank you for reaching out to us!\n\n- ServiceCare Team"; // Edit message if you want
        $headers = "From: servicecare.info@gmail.com"; // Put your admin email here

        // Send the email
        mail($user_email, $subject, $message, $headers);

        // Step 3: Now delete the query
        $sql = "DELETE FROM contact_queries WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $query_id);

        if ($stmt->execute()) {
            echo "<script>alert('Query marked as fixed and email sent successfully!'); window.location.href='pending_queries.php';</script>";
        } else {
            echo "<script>alert('Failed to fix the query.'); window.history.back();</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Query not found.'); window.history.back();</script>";
    }

    $fetch_stmt->close();
}
?>
