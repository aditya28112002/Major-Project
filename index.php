<?php
include "header.php";
?>
    <!---hero-section--->
    <section id="video-show" class="bg-main bg-color hero-section">
        <div class="container">
            <div class="row mb-5">
                <div
                    class=" mt-5 mt-lg-0 text-center text-lg-start order-lg-0 order-1 col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-item-center">
                    <h1 class="text-capitalize fw-bolder text-white">We offer top services like </h1>
                    <div class="typing-container"><span id="typing-text"></span><span id="cursor"></span></div>
                    <p class="mt-3 mb-5 para-width text-light-grey">Welcome to Service Care! <br>
                        Service Care is a trusted supplier of home services and establishment
                        essentials. Our commitment to excellence ensures that we provide a comprehensive range of
                        high-quality services to meet the diverse needs of our customers. Whether you need
                        cleaning, electrician, plumber, or facility maintenance, we have everything to
                        keep your workspace well-equipped and maintained.</p>
                    <div class="text-center w-100 text-mid-start">
                        <div class="d-inline-block" tabindex="0">
                            <a href="service.php"><button type="submit" class="btn btn-primary"
                                    id="button-service">Services</button></a>
                        </div>
                        <br><br><br><br><br><br><br><br><br>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-6 order-lg-1 order-0 ">
                    <div class="text-center text-lg-end">
                        <video src="img/pexels-tima-miroshnichenko-6169116 (2160p).mp4" loop muted autoplay
                            class="section-video"></video>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--top service section start-->
    <section class="service-section">
        <div class="container text-center common-title fw-bold">
            <h2 class="common-heading text-capitalize">top demanded services</h2>
            <hr class="wd-25 mx-auto">
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-12">
                    <div class="text-center card-box rounded-2 p-5">
                        <img src="img/Cleaner.png" alt="Cleaner" class="img-fluid-house" width="200px">
                        <h5 class="my-3 fw-normal">Cleaner</h5>
                        <p class="mb-5">Discover the excellence of Service Care's housekeeping products, meticulously
                            designed to elevate your cleaning experience. We offer a comprehensive range of cleaning
                            essentials that ensure every corner of your space remains immaculate.</p>
                        <div class="d-flex justify-content-center align-item-center">
                            <a href="cleaning.php" class="icon-span rounded-circle">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 col-md-12">
                    <div class="text-center card-box rounded-2 p-5">
                        <img src="img/electro.jpg" alt="Electrician" class="img-fluid-computer" width="200px">
                        <h5 class="my-3 fw-normal">Electrician</h5>
                        <p class="mb-5">Discover Service Care's superior line of computing solutions, meticulously designed
                            to elevate your digital experience. Explore a comprehensive range of products crafted
                            meticulously to meet your every computing need with precision.</p>
                        <div class="d-flex justify-content-center align-item-center">
                            <a href="electrician.php" class="icon-span rounded-circle">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 col-md-12">
                    <div class="text-center card-box rounded-2 p-5">
                        <img src="img/Plumber.jpg" alt="Plumber" class="img-fluid-printer"
                            width="200px">
                        <h5 class="my-3 fw-normal">Plumber</h5>
                        <p class="mb-5">Discover the excellence of Motherson's office essentials, elevate your
                            workspace. We offer a comprehensive range of stationery that combine functionality with
                            aesthetic appeal and professional. Trust in our quality and innovation to support your
                            productivity.</p>
                        <div class="d-flex justify-content-center align-item-center">
                            <a href="plumber.php" class="icon-span rounded-circle">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--buy-service-font start-->
    <section class="bg-color more-info-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 img-section">
                    <figure>
                        <img src="img/phone.gif" alt="picture " class="img-fluid">
                    </figure>
                </div>
                <div class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-item-center">
                    <h2 class="text-capitalize fw-bolder text-white">buy our services through <br> Contact Us</h2>
                    <p class="mt-3 mb-5 para-width text-light-grey">Experience the unparalleled quality and excellence
                        of our services. Elevate your business with our innovative solutions tailored to meet your
                        unique needs. Invest in success and choose us as your trusted partner for unparalleled results.
                    </p>
                    <div class="text-center w-100 text-mid-start">
                        <div class="d-inline-block" tabindex="0">
                            <a href="contact.php"><button type="submit" class="btn btn-primary"
                                    id="button-service">Contact Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
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
                                <img id="housekeeping-service-img-set" src="img/Cleaner.png"
                                    class="card-img-top" alt="Cleaner">
                                <div class="card-body">
                                    <h5 class="card-title text-capitalize">Cleaner</h5>
                                    <p class="card-text mt-2 mb-3">Discover the excellence of Motherson's housekeeping
                                        products, meticulously designed to elevate your cleaning experience.</p>
                                    <a href="cleaning.php" class="btn btn-primary px-4">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-12 col-md-6 col-lg-3 card-box rounded-2">
                        <div class="d-flex justify-content-center align-item-center">
                            <div class="card" style="width: 18rem;">
                                <img id="computer-accessories-set" src="img/electro.jpg"
                                    class="card-img-top" alt="Electrician">
                                <div class="card-body">
                                    <h5 class="card-title text-capitalize">Electrician</h5>
                                    <p class="card-text mt-2 mb-3">Discover Motherson's superior line of computing
                                        solutions, meticulously designed to elevate your digital experience.</p>
                                    <a href="electrician.php" class="btn btn-primary px-4">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 card-box rounded-2">
                        <div class="d-flex justify-content-center align-item-center">
                            <div class="card" style="width: 18rem;">
                                <img src="img/Plumber.jpg" class="card-img-top"
                                    alt="Plumber">
                                <div class="card-body">
                                    <h5 class="card-title text-capitalize">Plumber</h5>
                                    <p class="card-text mt-2 mb-3">Discover the excellence of Motherson's office
                                        essentials designed to elevate your workspace. Aesthetic appeal.</p>
                                    <a href="plumber.php" class="btn btn-primary px-4">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 card-box rounded-2">
                        <div class="d-flex justify-content-center align-item-center">
                            <div class="card" style="width: 18rem;">
                                <img src="img/packers.webp" class="card-img-top" alt="Packagers">
                                <div class="card-body">
                                    <h5 class="card-title text-capitalize">Cabs and Packagers</h5>
                                    <p class="card-text mt-2 mb-3">Elevate your dining experience with Motherson's
                                        exceptional range of Crockery and Cutlery.</p>
                                    <a href="cabs.php" class="btn btn-primary px-4">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 card-box rounded-2">
                        <div class="d-flex justify-content-center align-item-center">
                            <div class="card" style="width: 18rem;">
                                <img src="img/carpenter.webp" class="card-img-top" alt="carpenter">
                                <div class="card-body">
                                    <h5 class="card-title text-capitalize">Carpainter</h5>
                                    <p class="card-text mt-2 mb-3"> We offer a comprehensive range of furniture products
                                        that combine functionality with aesthetic appeal and professional.</p>
                                    <a href="carpainter.php" class="btn btn-primary px-4">Read More</a>
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
                                        ensuring that every document, report, and presentation makes a professional
                                        impact.</p>
                                    <a href="painter.php" class="btn btn-primary px-4">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!--contact us-->
    <section id="contact-section-link" class="common-section contact-section text-white pt-5 bg-color">
        <div class="custom-shape-divider-top-1709301682">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
        <div class="container text-center common-title fw-bold">
            <h2 class="common-heading text-white">Contact Us</h2>
            <hr class="wd-25 mx-auto">
        </div>

        <div class="container">
            <div class="form-section mx-auto">
                <form action="https://formspree.io/f/xzzdlydj" method="POST">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <label for="exampleForUserFirstName" class="form-label">Full Name</label>
                                <input type="text" name="Full Name" class="form-control" id="exampleForUserFirstName"
                                    placeholder="Full name" required autocomplete="off">
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="exampleForUserLastName" class="form-label">Number</label>
                                <input type="text" inputmode="numeric" appearance-none name="phone" class="form-control"
                                    id="exampleForUserLastName" placeholder="Number" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="Email address" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Email address" required autocomplete="off">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" name="Description" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Please enter your query or request here." required autocomplete="off"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <br><br><br><br>
                </form>
            </div>
        </div>
    </section>
  <?php include "footer.php"; ?>