<?php
include "header.php";
?>

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
            <form action="contact_process.php" method="POST">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <label for="exampleForUserFirstName" class="form-label">Full Name</label>
                        <input type="text" name="fullName" class="form-control" id="exampleForUserFirstName"

                                    placeholder="Full name" required autocomplete="off">
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="exampleForUserLastName" class="form-label">Number</label>
                        <input type="text" inputmode="numeric" appearance-none name="phoneNumber" class="form-control"

                                    id="exampleForUserLastName" placeholder="Number" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"

                            aria-describedby="emailHelp" placeholder="Email address" required autocomplete="off">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"

                            placeholder="Please enter your query or request here." required autocomplete="off"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <br><br><br><br>
                </form>
            </div>
        </div>
    </section>
   <?php include "footer.php"; ?>