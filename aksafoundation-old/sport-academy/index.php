<?php
$menu_name = "Sports Academy";
include('../layout/header.php') ?>
<?php include('../layout/top-nav.php') ?>

<main>

    <section class="hero-section hero-section-full-height">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel" data-bs-ride="carousel" style="height: 70vh; overflow: hidden;">
                        <video class="carousel-image img-fluid position-relative w-100" autoplay muted loop>
                            <source src="../images/file (1).mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="carousel-over">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <p class="text-center text-white fw-bold fs-lg-2 fs-1 mb-4 ln_font">AKSA SPORTS ACADEMY</p>
                                <a href="../contact/" class="btn btn-light position-relative top-50 start-50 translate-middle rounded-pill px-3">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .carousel-image {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .hero-section-full-height {
            min-height: 500px !important;
            overflow: hidden;
            height: 500px !important;
            position: relative;
        }

        @media screen and (max-width: 580px) {
            .hero-section-full-height {
                min-height: 320px !important;
                overflow: hidden;
                height: 320px !important;
                position: relative;
            }

            .carousel-over {
                height: 50vh;
            }
        }

        .responsive-image1 {
            width: 100%;
            height: auto;
            max-height: 380px;
            object-fit: contain;
            border-radius: 10px;
            display: block;
        }

        /* Mobile View */
        @media (max-width: 768px) {
            .responsive-image1 {
                max-height: 100%;
            }
        }
    </style>


    <section class="pt-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h3 class="text-dark text-start mb-3 pe-lg-4 px-lg-0 px-4 font_5">All About Us</h3>
                    <p class="text-lg-start  mb-3 fs-5 pe-lg-4 px-lg-0 px-4 ln">
                        Our journey began in 2013, led by the renowned Head Coach, Mr. Sathish Kumar, who laid the foundation of AKSA with a specific focus on swimming programs tailored for therapeutic and competitive purposes.
                    </p>

                </div>
                <div class="col-lg-6 col-12 pb-lg-5">
                    <p class="text-lg-start  mb-3 fs-5 pe-lg-4 px-lg-0 px-4 ln">At AKSA, we believe:</p>
                    <p class=" text-lg-start fst-italic  mb-3 fs-5 pe-lg-4 px-lg-0 px-4" style="text-align: justify !important;font-family: baskervillemtw01-smbdit, serif !important; font-size: 19px !important; font-weight:bold !important ; color:black !important">
                        "Every child deserves to experience the joy of playing sports."
                    </p>
                    <p class="text-lg-start  mb-3 fs-5 pe-lg-4 px-lg-0 px-4 ln">
                        This includes children with special needs and disabilities, who often face unique challenges in accessing physical activity opportunities.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="">
        <div class="container-fluid py-3 px-lg-5" style="background-color: #f0f0f0;">
            <div class="row">
                <div class="col-lg-6 col-12 pb-lg-0 pb-4">
                    <video class="img-fluid" autoplay muted loop>
                        <source src="../images/file (2).mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                </div>
                <div class="col-lg-6 col-12 pb-5">
                    <h3 class="text-dark text-start text-left mb-3 pe-lg-4 px-lg-0 px-4 ln_head">The Power Of Sports</h3>
                    <p class="text-dark text-lg-start text-center mb-3 fs-5 pe-lg-4 px-lg-0 px-4 cni" style="text-align: justify !important;">
                        Participating in sports is essential for the overall development of children, offering numerous benefits, such as:
                    </p>
                    <ul class="pt-3 ps-5">
                        <li class="cni">Boosting self-confidence</li>
                        <li class="cni">Improving physical and emotional well-being</li>
                        <li class="cni">Fostering teamwork and collaboration</li>
                        <li class="cni">Managing weight effectively</li>
                        <li class="cni">Promoting a sense of inclusion within the community</li>
                        <li class="cni">Enhancing motor skills</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-3">
        <h3 class="text-dark text-lg-start text-center ln_head">Our Training Programs</h3>
    </div>
    <section class="pb-lg-5">
        <div class="container-fluid py-2 px-lg-2" style="background-color: #f0f0f0;">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <style>
                        .accordion {
                            background: #f0f0f0 !important;
                        }
                    </style>

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed sp_head" type="" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    01 Swimming (Hydrotherapy & Competitive)
                                </button>
                            </h2>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed sp_head" type="" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    02 Sea Swimming
                                </button>
                            </h2>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed sp_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    03 Badminton
                                </button>
                            </h2>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed sp_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    04 Athletics
                                </button>
                            </h2>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed sp_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    05 Basketball
                                </button>
                            </h2>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed sp_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    06 Cycling
                                </button>
                            </h2>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed sp_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                    07 Physical Activities
                                </button>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 py-lg-0 py-5">
                    <div>
                        <img class="img-fluid rounded-5 aboutusimg mb-4" style="height:250px ;    width: -webkit-fill-available;" src="../images/sports/s3.jpg" alt="">
                    </div>
                    <div>
                        <h3 class="text-dark text-start mb-3 pe-lg-4 px-lg-0 px-4 ln_head"> Elite Training Programs</h3>
                        <p class="text-dark text-lg-start text-center mb-3 fs-5 pe-lg-4 px-lg-0 px-4 cni" style="text-align: justify !important;">
                            We offer expert open-water swimming and competitive swimming training for national and international-level athletes, tailored to unlock peak performance and achieve greatness.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- <section class="pb-lg-3">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-6 col-12 py-lg-0 py-3">
                    <div>
                        <img class="img-fluid rounded-5 aboutusimg mb-4 " style="height:400px" src="../images/sports/s1.jpg" alt="">
                    </div>

                </div>
                <div class="col-lg-6 col-12 py-lg-0 pb-5">
                    <div>
                        <h3 class="text-dark text-start mb-3 pe-lg-4 px-lg-0 px-4 ln_head">Our philosophy,</h3>
                        <p class=" text-lg-start fst-italic  mb-3 fs-5 pe-lg-4 px-lg-0 px-4" style="text-align: justify !important;font-family: baskervillemtw01-smbdit, serif !important; font-size: 19px !important; font-weight:bold !important ; color:black !important">
                            "Swimming, fitness, and health are integral parts of life at AKSA."
                        </p>
                        <p class="text-dark text-lg-start fst-italic text-center mb-3 fs-5 pe-lg-4 px-lg-0 px-4 cni" style="text-align: justify !important; font-style:italic !important;">
                            - Mr. Sathish, Head Coach.
                        </p>

                    </div>
                    <div class="d-flex justify-content-center px-lg-2 px-4">
                        <img class="img-fluid rounded-5 aboutusimg mb-4" style="height:300px !important;  width: 350px;;" src="../images/sports/s2.jpg" alt="">
                    </div>
                    <div>
                        <p class="text-dark text-lg-start text-center mb-3 fs-5 pe-lg-4 px-lg-0 px-4 ln" style="text-align: justify !important;">
                            We cultivate an active lifestyle by providing a safe, educational and enjoyable environment for our students.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section> -->

    <section class="">
        <div class="container ">
            <div class="row align-items-center">
                <!-- Left Image Column -->
                <div class="col-lg-6 col-12 ">
                    <div>
                        
                        <p class="text-dark text-lg-start fst-italic mb-3 fs-5 pe-lg-4 px-lg-0 px-4 " >
                           &emsp; &emsp; &emsp;
                        </p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-5 aboutusimg mb-4" style="height: 500px; width: 100%; object-fit: cover;" src="../images/sports/s1.jpg" alt="">
                    </div>
                </div>

                <!-- Right Content Column -->
                <div class="col-lg-6 col-12">
                    <div>
                        <h3 class="text-dark text-start mb-3 pe-lg-4 px-lg-0 px-4 ln_head">Our philosophy,</h3>
                        <p class="text-dark text-lg-start fst-italic mb-3 fs-5 pe-lg-4 px-lg-0 px-4" style="text-align: justify; font-family: baskervillemtw01-smbdit, serif; font-size: 19px; font-weight: bold; color: black;">
                            "Swimming, fitness, and health are integral parts of life at AKSA."
                        </p>
                        <p class="text-dark text-lg-start fst-italic mb-3 fs-5 pe-lg-4 px-lg-0 px-4 cni" style="text-align: justify; font-style: italic;">
                            - Mr. Sathish, Head Coach.
                        </p>
                    </div>

                    <!-- Right Portrait Image -->
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid rounded-5 aboutusimg mb-4" style="height: 400px; width: auto; object-fit: cover;" src="../images/sports/s2.jpg" alt="">
                    </div>

                    <!-- Description Text -->
                    <div>
                        <p class="text-dark text-lg-start mb-3 fs-5 pe-lg-4 px-lg-0 px-4 ln" style="text-align: justify;">
                            We cultivate an active lifestyle by providing a safe, educational, and enjoyable environment for our students.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>


<?php include('../layout/footer.php'); ?>