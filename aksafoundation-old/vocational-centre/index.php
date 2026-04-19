<?php
$menu_name = "Vocation Center";
include('../layout/header.php') ?>
<?php include('../layout/top-nav.php') ?>

<main>

    <section class="hero-section hero-section hero-section-full-height">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel" data-bs-ride="carousel" style="height: 70vh; overflow: hidden;">
                        <img class="carousel-image img-fluid position-relative w-100" src="../images/vocation/v5.JPG" alt="">
                        <div class="carousel-over">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <p class="text-center text-white fw-bold fs-lg-2 fs-1 mb-4 ln_font">AKSA VOCATIONAL CENTRE</p>
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
    </style>


    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h3 class="text-dark text-start mb-3 pe-lg-4 px-lg-0 px-4 font_5">All About Us</h3>
                    <p class="text-dark text-lg-start  mb-3 fs-5 pe-lg-4 px-lg-0 px-4 ln" >
                        At AKSA Vocational Centre, we are committed to transform the lives of special children through tailored training programs and comprehensive support services. Our innovative programs foster independence, teamwork, confidence, leadership and employability.
                    </p>

                </div>
                <div class="col-lg-6 col-12 pb-lg-5">
                    <p class="text-dark text-lg-start  mb-3 fs-5 pe-lg-4 px-lg-0 px-4 ln" >
                        We believe every child possesses unique strengths and abilities. Our supportive and inclusive environment empowers students to discover their potential and pursue meaningful paths in life.
                    </p>
                    <p class="text-dark text-lg-start  mb-3 fs-5 pe-lg-4 px-lg-0 px-4 ln" >
                        Our dedicated team of professionals works closely with each child offering personalized guidance and resources.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="owl-carousel carousel-3 col-12">
                    <div class="item">
                        <img class="img-fluid carousel_learning_img position-relative img-radius" src="../images/vocation/v7.JPG" alt="Image 1">
                    </div>

                    <div class="item">
                        <img class="img-fluid carousel_learning_img position-relative img-radius" src="../images/vocation/v3.JPG" alt="Image 2">
                    </div>

                    <div class="item">
                        <img class="img-fluid carousel_learning_img position-relative img-radius" src="../images/vocation/v4.JPG" alt="Image 3">
                    </div>

                    <div class="item">
                        <img class="img-fluid carousel_learning_img position-relative img-radius" src="../images/vocation/v2.JPG" alt="Image 3">
                    </div>

                    <div class="item">
                        <img class="img-fluid carousel_learning_img position-relative img-radius" src="../images/vocation/v1.JPG" alt="Image 3">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h3 class="text-dark text-lg-start text-center mb-3 px-3 ln_head">​Skill Development Programs</h3>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed ul_head" type="" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Digital Literacy
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Essential computer skills</li>
                                    <li class="li_head">Data entry and proofreading training</li>
                                    <li class="li_head">Enhanced employability and productivity</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed ul_head" type="" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Financial Literacy
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Money concept</li>
                                    <li class="li_head">Money management</li>
                                    <li class="li_head">Improved financial independence</li>
                                    <li class="li_head">Provision store (model)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed ul_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Baking and Cooking Unit
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Practical culinary skills</li>
                                    <li class="li_head">Creativity and health conscious cooking</li>
                                    <li class="li_head">Enhanced culinary expertise</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed ul_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Weaving
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Traditional and modern techniques</li>
                                    <li class="li_head">Craftsmanship and artistic expression</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed ul_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Block Printing
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Artistic expression on various materials</li>
                                    <li class="li_head">Creativity and design skills</li>
                                    <li class="li_head">Enhanced artistic expression</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed ul_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    Pottery
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Pottery making techniques</li>
                                    <li class="li_head">Artistic skills and therapeutic outlet</li>
                                    <li class="li_head">Foster creativity and relaxation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed ul_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                    Housekeeping
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Essential home management skills</li>
                                    <li class="li_head">Cleaning, organization, and maintenance</li>
                                    <li class="li_head">Improved daily living skills</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEight">
                                <button class="accordion-button collapsed ul_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                    Weighing and Packaging Unit
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Packaging</li>
                                    <li class="li_head">Labeling,wrapping and sealing.</li>
                                    <li class="li_head">Weighing and measurement</li>
                                    <li class="li_head">Time management</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingNine">
                                <button class="accordion-button collapsed ul_head" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                    Hair Styling
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                <ul class="pt-4">
                                    <li class="li_head">Only for Girls</li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-6 col-12 py-5">
                    <img class="img-fluid img-radius w-100 aboutusimg" style="height:400px" src="../images/vocation/v6.JPG" alt="">
                </div>

            </div>
        </div>
    </section>
</main>


<?php include('../layout/footer.php'); ?>