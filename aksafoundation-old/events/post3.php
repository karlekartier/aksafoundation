<?php
$menu_name = "Donate Now";
include('../layout/header.php') ?>
<?php include('../layout/top-nav.php') ?>
<style>
    #hero-slide {
        height: auto;
        /* Adjust height dynamically */
        max-height: 400px;
        /* Set a max-height to prevent overflow */
        overflow: hidden;
        /* Ensures no unwanted overflow */
        margin-bottom: 20px;
        /* Space between video and text */
    }

    #hero-slide video {
        width: 100%;
        height: auto;
        max-height: 400px;
        /* Ensures it doesn’t stretch too much */
        object-fit: cover;
        /* Keeps video dimensions looking good */
        border-radius: 10px;
        /* Adds smooth corners */
    }

    .responsive-img {
        max-width: 75%;
        /* Limits image width */
        height: auto;
        /* Maintains aspect ratio */
        display: block;
        margin: 0 auto;
        /* Centers the image */
        border-radius: 10px;
        /* Smooth corners */
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        /* Optional shadow */
    }

    @media (max-width: 768px) {
        .responsive-img {
            max-width: 90%;
            /* Adjust for smaller screens */
        }
    }
</style>


<main>

    <section class="pb-5">
        <div class="container">
            <div class="row px-lg-0 px-2 flex-wrap">
                <div class="col-lg-12 col-12 p-2 mb-4" style="min-height: 580px">


                    <div class="d-flex mb-2">
                        <div class="col-9 d-flex">
                            <div class="d-flex justify-content-center align-items-center px-3">
                                <img class="img-fluid" src="../images/vedio/small_logo.avif" alt="">
                            </div>
                            <div class="py-2 pe-3">
                                <div>
                                    <p class="m-0">AKSA</p>
                                </div>
                                <div>
                                    <p class="m-0">Feb 3</p>
                                </div>
                            </div>
                            <div class="py-2 d-flex align-items-end">
                                <div>
                                    <p class="m-0">. 1 min read</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 d-flex">
                            <div class="d-flex align-items-center px-4">
                                <a href=""><i class="bi bi-three-dots-vertical threedoticon fs-4 position-relative"></i></a>
                                <div class="position-absolute top-0 start-100 translate-middle post" style="display: none;">
                                    <h1>asadsdgasfdsf</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="p_head">Wave Riders: A Historic 604 km Swim Completed!</h4>

                    
                    <div class="d-flex justify-content-center px-2 px-md-5 py-2">
                        <img class="responsive-img" src="../images/vedio/p3.avif" alt="Image">
                    </div>

                    <p class="p_body">
                        In an extraordinary display of resilience and determination, Wave Riders has officially completed its ambitious 604 km relay swim! This groundbreaking event saw 15 physically and mentally challenged athletes defy the odds, proving that courage and perseverance know no boundaries.
                    </p>

                    <p class="p_body">The journey, spanning 11 days across multiple locations, was nothing short of inspiring. Each swimmer pushed beyond their limits, braving unpredictable sea conditions, physical exhaustion, and mental barriers. With the unwavering support of their families, coaches, and the local fishermen community, these young athletes achieved what many deemed impossible.</p>

                    <p class="p_body">Safety and innovation played a crucial role in the event’s success. A dedicated team of experts ensured that the swimmers were monitored at all times, with boats accompanying them for protection. The event also showcased adaptive techniques tailored to each participant’s abilities, further proving that limitations exist only in the mind.</p>


                    <div id="hero-slide" class="carousel py-2 px-3 px-md-5" data-bs-ride="carousel">
                        <video class="carousel-image img-fluid position-relative" autoplay muted loop>
                            <source src="../images/vedio/wave.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>


                    <p class="p_body">
                        The impact of Wave Riders extends far beyond the waters. It has set a new benchmark in inclusivity and athletic excellence, inspiring individuals worldwide. The event has also received significant media attention, bringing much-needed awareness to the potential of differently-abled athletes. The World Records acknowledgment adds another feather to this incredible feat, making it a historic milestone.
                    </p>

                    <p class="p_body">But this is just the beginning. Wave Riders is more than an event—it is a movement. The success of this initiative has opened doors for future challenges, greater inclusivity in sports, and increased opportunities for differently-abled athletes.</p>

                    <p class="p_body">As we celebrate this achievement, we look forward to what’s next. The spirit of Wave Riders will continue to make waves, breaking barriers and rewriting possibilities. Stay tuned for more incredible stories from these unstoppable champions!</p>

                    <div class="d-flex px-3">
                        <div class="col-lg-6 col-12 d-flex">
                            <div class="d-flex p-2">
                                <a href="">
                                    <i class="bi bi-facebook px-2"></i>
                                </a>
                            </div>
                            <div class="d-flex p-2">
                                <a href="">
                                    <i class="bi bi-twitter px-2 "></i>
                                </a>
                            </div>
                            <div class="d-flex p-2">
                                <a href="">
                                    <i class="bi bi-linkedin px-2"></i>
                                </a>
                            </div>
                            <div class="d-flex p-2">
                                <a href="">
                                    <i class="bi bi-link px-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    <hr class="px-4">

                    <div class="d-flex justify-content-evenly px-3">
                        <div class="col-9 d-flex">
                            <div class="d-flex p-2 me-2">
                                <i class="bi bi-eye px-2"></i>
                                <span>11</span>
                            </div>
                            <div class="d-flex p-2">
                                <i class="bi bi-chat-left px-2"></i>
                                <span>2</span>
                            </div>
                        </div>
                        <div class="col-3 d-flex">
                            <div class="d-flex p-2">
                                <span>3</span>
                                <a href="">
                                    <i class="bi bi-heart-fill px-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>


<style>
    .bi-heart-fill {
        color: #dbd6d6;
        transition: 0.2s;
    }

    .bi-heart-fill:hover {
        color: red;
    }

    .main-content h6,
    .main-content p {
        transition: 0.2s;
    }

    .main-content:hover h6,
    .main-content:hover p {
        color: #4a56f3;
    }

    .post {
        transition: 0.2s;
    }

    .threedoticon:hover+.post {
        display: in !important;
    }
</style>


<?php include('../layout/footer.php'); ?>