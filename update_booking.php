<?php
include "config.php"; // Database connection

if (isset($_POST['booking_id'], $_POST['action'])) {
    $booking_id = $_POST['booking_id'];
    $action = $_POST['action'];

    // Check the action (confirm or reject)
    if ($action == 'confirm') {
        $status = 'confirmed';
    } elseif ($action == 'reject') {
        $status = 'rejected';
    } else {
        die('Invalid action.');
    }

    // Fetch booking details before updating
    $sql = "SELECT * FROM bookings WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $booking_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $booking = $result->fetch_assoc();

        // Update the status of the booking
        $update_sql = "UPDATE bookings SET status = ? WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("si", $status, $booking_id);
        $update_stmt->execute();

        if ($update_stmt->affected_rows > 0) {
            // If confirmed, move the booking to service_history
            if ($status == 'confirmed') {
                // Insert into service_history table
                $insert_sql = "INSERT INTO service_history (user_name, user_email, service_type, booking_date, status, provider_id, service_charge) 
                               VALUES (?, ?, ?, ?, ?, ?, ?)";
                $insert_stmt = $conn->prepare($insert_sql);
                $insert_stmt->bind_param("sssssis", 
                    $booking['user_name'], 
                    $booking['user_email'], 
                    $booking['service_type'], 
                    $booking['booking_date'], 
                    $status, 
                    $booking['provider_id'], 
                    $booking['service_charge']);
                $insert_stmt->execute();
            }

            // Redirect back to pending bookings page
            header("Location: pending_bookings.php");
            exit();
        } else {
            echo "Failed to update the booking status.";
        }

        $update_stmt->close();
        $insert_stmt->close();
    } else {
        echo "Booking not found.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
