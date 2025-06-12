<?php
include "header.php";
?>

    <!-- search bar -->
    <section class="hero-section-service">
        <div class="d-flex justify-content-center">
            <div class="search">
                <input type="text" id="find" class="search-input" placeholder="Search..." name="">
                <a href="#" class="search-icon"> <i class="fa fa-search"></i> </a>
            </div>
        </div>
        <div id="search-results" class="d-flex justify-content-center mt-3">
            <!-- Search results will be displayed here -->
        </div>
    </section>

    <!--services section-->
    <section id="service-show" class="common-section mb-5 pt-5">
        <div class="container text-center common-title fw-bold">
            <h2 class="common-heading text-capitalize"> we assist you</h2>
            <hr class="wd-25 mx-auto mb-5">

            <div class="container">
                <div class="row g-5 gx-5">
                    <div class="col-xl-3 col-md-6 col-lg-3 card-box rounded-2">
                        <div class="d-flex justify-content-center align-item-center">
                            <div class="card" style="width: 18rem;">
                                <img id="housekeeping-service-img-set" src="img/Plumber.jpg"
                                    class="card-img-top" alt="Plumber">
                                <div class="card-body">
                                    <h5 class="card-title text-capitalize">Plumber</h5>
                                    <p class="card-text mt-2 mb-3">Discover the excellence of Motherson's housekeeping
                                        products, meticulously designed to elevate your cleaning experience.</p>
                                    <a href="plumber.php" class="btn btn-primary px-4">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-12 col-md-6 col-lg-3 card-box rounded-2">
                        <div class="d-flex justify-content-center align-item-center">
                            <div class="card" style="width: 18rem;">
                                <img id="computer-accessories-set" src="img/Cleaner.png"
                                    class="card-img-top" alt="Cleaner">
                                <div class="card-body">
                                    <h5 class="card-title text-capitalize">Cleaner</h5>
                                    <p class="card-text mt-2 mb-3">Discover Motherson's superior line of computing
                                        solutions, meticulously designed to elevate your digital experience.</p>
                                    <a href="cleaning.php" class="btn btn-primary px-4">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 card-box rounded-2">
                        <div class="d-flex justify-content-center align-item-center">
                            <div class="card" style="width: 18rem;">
                                <img src="img/electro.jpg" class="card-img-top"
                                    alt="Electrician">
                                <div class="card-body">
                                    <h5 class="card-title text-capitalize">Electrician</h5>
                                    <p class="card-text mt-2 mb-3">Discover the excellence of Motherson's office
                                        essentials designed to elevate your workspace. Aesthetic appeal.</p>
                                    <a href="electrician.php" class="btn btn-primary px-4">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 card-box rounded-2">
                        <div class="d-flex justify-content-center align-item-center">
                            <div class="card" style="width: 18rem;">
                                <img src="img/carpenter.webp" class="card-img-top" alt="carpenter">
                                <div class="card-body">
                                    <h5 class="card-title text-capitalize">Carpainter</h5>
                                    <p class="card-text mt-2 mb-3">Elevate your dining experience with Motherson's
                                        exceptional range of Crockery and Cutlery.</p>
                                    <a href="carpainter.php" class="btn btn-primary px-4">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 card-box rounded-2">
                        <div class="d-flex justify-content-center align-item-center">
                            <div class="card" style="width: 18rem;">
                                <img src="img/packers.webp" class="card-img-top" alt="Cabs&packagers">
                                <div class="card-body">
                                    <h5 class="card-title text-capitalize">Cabs and Packagers</h5>
                                    <p class="card-text mt-2 mb-3"> We offer a comprehensive range of furniture products
                                        that combine functionality with aesthetic appeal and professional.</p>
                                        <a href="cabs.php" class="btn btn-primary px-4">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 card-box rounded-2">
                        <div class="d-flex justify-content-center align-item-center">
                            <div class="card" style="width: 18rem;">
                                <img id="set-img-priting-sta" src="img/painters.jpg" class="card-img-top"
                                    alt="painters">
                                <div class="card-body">
                                    <h5 class="card-title text-capitalize">Painter</h5>
                                    <p class="card-text mt-2 mb-3">Our range combines functionality with
                                        ensuring that every document, report, and presentation makes
                                        impact.</p>
                                        <a href="painter.php" class="btn btn-primary px-4">Read More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="search.js"></script>
    <script src="search-data.js"></script>
    <script src="search-card.js"></script>
</body>
<?php include "footer.php"; ?>