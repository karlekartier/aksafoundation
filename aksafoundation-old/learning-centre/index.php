<?php
$menu_name = "Learning Center";
include('../layout/header.php') ?>
<?php include('../layout/top-nav.php') ?>

<main>

    <section class="hero-section hero-section-full-height">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel" data-bs-ride="carousel" style="height: 70vh; overflow: hidden;">
                        <video class="carousel-image img-fluid position-relative" autoplay muted loop>
                            <source src="../images/file.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="carousel-over">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <p class="text-center text-white fw-bold fs-lg-2 fs-1 mb-4 ln_font">AKSA LEARNING CENTRE</p>
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


    <section class="py-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <h3 class="text-dark text-start mb-3 pe-lg-4 px-lg-0 px-4 font_5">All About Us</h3>
                    <p class=" text-lg-start  mb-3 fs-5 pe-lg-4 px-lg-0 px-4 ln">
                        At AKSA Learning Centre, we provide special educational services that foster meaningful learning experiences through traditional teaching methods, tailored to each child's unique needs. Our welcoming environment equips young individuals with essential life skills preparing them for independent living.
                    </p>
                </div>
                <div class="col-lg-7 col-12 pb-lg-5 pb-0 px-0">
                    <img class="img-fluid w-100 aboutusimg responsive-image1" src="../images/learning/l5.JPG" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="pb-1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-dark text-lg-start text-center mb-3 ln_head">Our Holistic Approach</h3>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed  ul_head " type="" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Academic Development
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Individualized Educational Plan (IEP)</li>
                                    <li class="li_head">Remedial Education</li>
                                    <li class="li_head">Functional Academics</li>
                                    <li class="li_head">Multisensory Integration</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed  ul_head" type="" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Life Skills Programs
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Activities of Daily Living (ADL)</li>
                                    <li class="li_head">Communication Skills</li>
                                    <li class="li_head">Interpersonal Skills</li>
                                    <li class="li_head">Leisure Skills</li>
                                    <li class="li_head">Pre-Vocational Skills</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed  ul_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Cognitive Development
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Perceptual Skills</li>
                                    <li class="li_head">Critical Thinking</li>
                                    <li class="li_head">Problem-Solving</li>
                                    <li class="li_head">Memory and Attention</li>
                                    <li class="li_head">Logical Reasoning</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed  ul_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Motor Skills Development
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Fine Motor Activities</li>
                                    <li class="li_head">Gross Motor Activities</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed  ul_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Social and Emotional Growth
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Social Skills</li>
                                    <li class="li_head">Behavioral and Emotional Regulation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed  ul_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    Physical Development
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Physical Activities</li>
                                    <li class="li_head">Sports Programs</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed  ul_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                    Therapy Services
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Occupational Therapy</li>
                                    <li class="li_head">Speech Therapy</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEight">
                                <button class="accordion-button collapsed  ul_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                    Extra Curricular Activities
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Arts and Crafts</li>
                                    <li class="li_head">Music and Movement</li>
                                    <li class="li_head">Yoga and Mindfulness</li>
                                    <li class="li_head">Games and Sports</li>
                                    <li class="li_head">Storytelling</li>
                                    <li class="li_head">Brain Gym</li>
                                    <li class="li_head">Pottery</li>
                                    <li class="li_head">Audio-Visual Lessons</li>
                                    <li class="li_head">Community Outreach Programs</li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-2">
        <div class="container-fluid py-5" style="background-color: #80808026;">
            <div class="row">
                <div class="owl-carousel carousel-2 col-12">
                    <div class="item">
                        <img class="img-fluid  rounded-circle position-relative" src="../images/learning/l8.JPG" alt="Image 1">
                    </div>

                    <div class="item">
                        <img class="img-fluid  rounded-circle position-relative" src="../images/learning/l2.JPG" alt="Image 2">
                    </div>

                    <div class="item">
                        <img class="img-fluid  rounded-circle position-relative" src="../images/learning/l1.jpg" alt="Image 3">
                    </div>

                    <div class="item">
                        <img class="img-fluid  rounded-circle position-relative" src="../images/learning/l6.JPG" alt="Image 3">
                    </div>

                    <div class="item">
                        <img class="img-fluid  rounded-circle position-relative" src="../images/learning/l4.JPG" alt="Image 3">
                    </div>

                    <div class="item">
                        <img class="img-fluid  rounded-circle position-relative" src="../images/learning/l7.JPG" alt="Image 3">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 pb-5">
                    <h3 class="text-dark text-lg-start  mb-3 ln_head" style="margin-left: 2.5em">Program Overview</h3>
                    <img class="img-fluid" style="height:100%; align-items:center;margin-left: 3em" src="../images/learning/lp2.jpg" alt="">
                </div>
                <div class="col-lg-6 col-12 pt-5">
                    <p class="text-dark text-lg-start  mb-3 fs-5 ln">
                        Join us and discover how our specialized programs transform your child's educational journey.
                    </p>
                    <img class="img-fluid img-radius w-100 aboutusimg" style="height:400px" src="../images/learning/l3.JPG" alt="">
                </div>

            </div>
        </div>
    </section>

</main>


<?php include('../layout/footer.php'); ?>