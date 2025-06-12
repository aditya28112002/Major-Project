<?php
session_start(); // Start session at top (only once)

include "header.php";
include "config.php"; // Include the database connection file
?>

<section id="img-show-officeitems" class="bg-main bg-color hero-section">
    <div class="container">
        <div class="row mb-5">
            <div class="mt-5 mt-lg-0 text-center text-lg-start order-lg-0 order-1 col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                <h1 class="text-capitalize fw-bolder text-white">Electricians</h1>
                <p class="mt-3 mb-5 para-width text-light-grey">Find trusted electricians at ServiceCare to handle your home and office electrical needs professionally and safely. Get the best services now!</p>
                <div class="text-center w-100 text-md-start">
                    <div class="d-inline-block" tabindex="0">
                        <a href="contact.php"><button type="submit" class="btn btn-primary" id="button-service">Contact Us</button></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 order-lg-1 order-0">
                <div class="text-center text-lg-end">
                    <img id="img-set-house" src="img/electro.jpg" alt="electrician" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Electricians List Section -->
<section id="electrician-list" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Meet Our Electricians</h2>
        <div class="row">
        <?php
// Fetch approved electricians from the database
$sql = "SELECT * FROM providers WHERE service_type = 'Electrician'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($row['full_name']); ?></h5>
                    <p class="card-text">
                        <strong>Experience:</strong> <?php echo htmlspecialchars($row['work_experience']); ?> years<br>
                        <strong>Service Charge:</strong> <?php echo htmlspecialchars($row['service_charge']); ?> Rs<br>
                        <strong>Mobile:</strong> <?php echo htmlspecialchars($row['mobile_number']); ?><br>
                        <strong>Email:</strong> <?php echo htmlspecialchars($row['email']); ?><br>
                    </p>

                    <?php if (isset($_SESSION['user_id'])): ?>
                        <a href="booking.php?provider_id=<?php echo $row['id']; ?>" class="btn btn-primary">Book Now</a>
                    <?php else: ?>
                        <a href="user_login.php" class="btn btn-primary">Book Now</a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
<?php
    }
} else {
    echo '<p class="text-center">No Electricians available at the moment. Please check back later!</p>';
}
?>

        </div>
    </div>
</section>

<?php include "footer.php"; ?>
