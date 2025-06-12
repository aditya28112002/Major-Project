<?php
include "config.php"; // database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = htmlspecialchars($_POST['fullName']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone_number = htmlspecialchars($_POST['phoneNumber']);
    $message = htmlspecialchars($_POST['message']);
    $subject = "User Query"; // default subject

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email address.'); window.history.back();</script>";
        exit;
    }

    // Insert into database
    $sql = "INSERT INTO contact_queries (full_name, email, phone_number, subject, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $full_name, $email, $phone_number, $subject, $message);

    if ($stmt->execute()) {
        // Send email to admin
        $to = "servicecare3003@gmail.com";
        $mail_subject = "New Contact Form Submission";
        $mail_message = "
            New Contact Query:

            Name: $full_name
            Email: $email
            Phone Number: $phone_number
            Message:
            $message
        ";

        $headers = "From: no-reply@servicecare.info\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        mail($to, $mail_subject, $mail_message, $headers);

        echo "<script>alert('Your query has been submitted successfully! We will contact you soon.'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Failed to submit your query. Please try again later.'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<script>window.location.href='index.php';</script>";
}
?>
