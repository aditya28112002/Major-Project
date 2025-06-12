<?php
// Include necessary files
include "header.php";
include "config.php"; // Include the database connection file

// Check if provider_id is passed in the URL
if (isset($_GET['provider_id'])) {
    $provider_id = $_GET['provider_id'];

    // Check if the user is logged in
    if (isset($_SESSION['user_id'])) {
        // Fetch logged in user details
        $user_id = $_SESSION['user_id'];
        $user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : ''; // Assuming you store user name in session
        $user_email = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : ''; // Assuming you store user email in session
        $user_mobile = isset($_SESSION['user_mobile']) ? $_SESSION['user_mobile'] : ''; // Assuming you store user mobile in session

        // Fetch provider details
        $sql_provider = "SELECT * FROM providers WHERE id = '$provider_id'";
        $result_provider = $conn->query($sql_provider);

        if ($result_provider->num_rows > 0) {
            $provider = $result_provider->fetch_assoc();
            $provider_name = $provider['full_name'];
            $service_type = $provider['service_type'];
            $provider_charge = $provider['service_charge'];
            $provider_email = $provider['email'];

            // Insert booking into the pending_bookings table
            $sql_booking = "INSERT INTO pending_bookings (user_id, user_name, user_email, user_mobile, provider_id, provider_name, service_type, provider_charge, status)
                            VALUES ('$user_id', '$user_name', '$user_email', '$user_mobile', '$provider_id', '$provider_name', '$service_type', '$provider_charge', 'pending')";

            if ($conn->query($sql_booking) === TRUE) {
                echo "<div class='alert alert-success'>Your booking request is confirmed!</div>";
            } else {
                echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
            }
        } else {
            echo "<div class='alert alert-warning'>Provider not found!</div>";
        }
    } else {
        // If the user is not logged in, redirect to login page
        header("Location: login.php");
        exit();
    }
} else {
    echo "<div class='alert alert-warning'>No provider selected.</div>";
}

include "footer.php"; // Include footer
?>
