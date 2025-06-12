<?php
include "header.php";

?>

<style>
    body {
        background-image: url("img/join_us_background.jpg"); /* Replace with your own */
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        color: black; /* Optional: makes text more visible over the image */
    }

    .form-control, .form-select {
        background-color: rgba(255, 255, 255, 0.9);
        color: #000;
    }

    label {
        color: #fff;
    }

    h2, p {
        color: #fff;
    }
</style>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs to prevent any harmful data
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $mobileNumber = htmlspecialchars($_POST['mobileNumber']);
    $serviceType = htmlspecialchars($_POST['serviceType']);
    $workExperience = htmlspecialchars($_POST['workExperience']);
    $price = htmlspecialchars($_POST['price']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email address.'); window.history.back();</script>";
        exit;
    }

    include 'db_connect.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO pending_sellers (full_name, email, mobile_number, service_type, work_experience, service_charge)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $fullName, $email, $mobileNumber, $serviceType, $workExperience, $price);

    if ($stmt->execute()) {
        $to = "servicecare3003@gmail.com";
        $subject = "New Service Provider Registration";
        $message = "
            A new service provider has registered:

            Name: $fullName
            Email: $email
            Mobile: $mobileNumber
            Service Type: $serviceType
            Work Experience: $workExperience
            Service Charge: ₹$price
        ";

        $headers = "From: no-reply@servicecare.info\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (mail($to, $subject, $message, $headers)) {
            echo "<script>alert('Your request has been submitted successfully!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Error sending email. Please try again later.'); window.history.back();</script>";
        }

    } else {
        echo "<script>alert('Error submitting your request. Please try again later.'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<section class="container mt-5">
    <h2 class="text-center">Join Us</h2>
    <p class="text-center">Thank you for your interest in joining our team! We are always looking for talented individuals to help us provide the best services. Please check back for any open positions or opportunities.</p>

    <form id="joinUsForm" class="mt-4" action="profile.php" method="POST">
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="mobileNumber" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="mobileNumber" name="mobileNumber" required>
        </div>
        <div class="mb-3">
            <label for="serviceType" class="form-label">Select Service Type</label>
            <select class="form-select" id="serviceType" name="serviceType" required>
                <option value="" disabled selected>Select a service</option>
                <option value="Carpenter">Carpenter</option>
                <option value="Electrician">Electrician</option>
                <option value="Plumber">Plumber</option>
                <option value="Cleaner">Cleaner</option>
                <option value="Painter">Painter</option>
                <option value="Cabs">Cabs</option>
                <option value="Packagers">Packagers</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="workExperience" class="form-label">Work Experience</label>
            <input type="text" class="form-control" id="workExperience" name="workExperience" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Service Charge</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>

<?php include "footer.php"; ?>
