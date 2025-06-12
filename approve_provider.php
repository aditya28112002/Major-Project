<?php
session_start();

// 🔥 Add this logout code here:
if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
}

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $action = $_POST['action'];

    if ($action === 'approve') {
        // Fetch the data from pending_sellers
        $stmt = $conn->prepare("SELECT * FROM pending_sellers WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $provider = $result->fetch_assoc();
        $stmt->close();

        if ($provider) {
            // Insert into providers table
            $insert = $conn->prepare("INSERT INTO providers (full_name, email, mobile_number, service_type, work_experience, service_charge) VALUES (?, ?, ?, ?, ?, ?)");
            $insert->bind_param(
                "ssssss",
                $provider['full_name'],
                $provider['email'],
                $provider['mobile_number'],
                $provider['service_type'],
                $provider['work_experience'],
                $provider['service_charge']
            );
            $insert->execute();
            $insert->close();

            // Send a congratulations email to the provider
            $to = $provider['email'];
            $subject = "Congratulations! Your Application is Approved - ServiceCare";
            $message = "Hello " . $provider['full_name'] . ",\n\n";
            $message .= "Congratulations! Your application has been successfully approved on ServiceCare.\n";
            $message .= "You can now offer your services on our platform.\n\n";
            $message .= "Thank you for being a part of ServiceCare!\n";
            $message .= "- Team ServiceCare";

            $headers = "From: servicecare.info@gmail.com"; // Replace with your real admin email

            mail($to, $subject, $message, $headers);

            // Delete from pending_sellers
            $delete = $conn->prepare("DELETE FROM pending_sellers WHERE id = ?");
            $delete->bind_param("i", $id);
            $delete->execute();
            $delete->close();
        }
    } elseif ($action === 'reject') {
        // Just delete the entry
        $delete = $conn->prepare("DELETE FROM pending_sellers WHERE id = ?");
        $delete->bind_param("i", $id);
        $delete->execute();
        $delete->close();
    }
}

$conn->close();
header("Location: admin_panel.php");
exit();
?>
