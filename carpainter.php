<?php
include "header.php"; 
include "config.php";
?>
    <section id="img-show-officeitems" class="bg-main bg-color hero-section">
        <div class="container">
            <div class="row mb-5">
                <div class="mt-5 mt-lg-0 text-center text-lg-start order-lg-0 order-1 col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <h1 class="text-capitalize fw-bolder text-white">Carpainters</h1>
                    <p class="mt-3 mb-5 para-width text-light-grey">Discover the excellence of carpainter services with ServiceCare essentials, meticulously designed to elevate your workspace. We offer a comprehensive range of stationery and furniture products that combine functionality with aesthetic appeal and professional.</p>
                    <div class="text-center w-100 text-md-start">
                        <div class="d-inline-block" tabindex="0">
                            <a href="contact.php"><button type="submit" class="btn btn-primary" id="button-service">Contact Us</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 order-lg-1 order-0">
                    <div class="text-center text-lg-end">
                        <img id="img-set-house" src="img/carpenter.webp"
                            alt="carpenter" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Carpenters List Section -->
<section id="carpenter-list" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Meet Our Carpenters</h2>
        <div class="row">
        <?php
            // Fetch approved carpenters from the database
            $sql = "SELECT * FROM providers WHERE service_type = 'Carpenter'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">' . htmlspecialchars($row['full_name']) . '</h5>
                                    <p class="card-text">
                                        <strong>Experience:</strong> ' . htmlspecialchars($row['work_experience']) . ' years<br>
                                        <strong>Service Charge:</strong> ' . htmlspecialchars($row['service_charge']) . ' Rs<br>
                                        <strong>Mobile:</strong> ' . htmlspecialchars($row['mobile_number']) . '<br>
                                        <strong>Email:</strong> ' . htmlspecialchars($row['email']) . '<br>
                                    </p>
                                    <a href="booking-form.php?provider=' . urlencode($row['full_name']) . '" class="btn btn-primary">Book Now</a>
                                </div>
                            </div>
                        </div>';
                }
            } else {
                echo '<p class="text-center">No Carpenter available at the moment. Please check back later!</p>';
            }
            ?>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>