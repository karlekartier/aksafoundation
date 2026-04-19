<?php
$menu_name = "Donate Now";
include('../layout/header.php') ?>
<?php include('../layout/top-nav.php') ?>

<style>
    #hero-slide {
        width: 100%;
        height: auto;
        max-height: none;
        /* Allow full height */
        overflow: hidden;
        position: relative;
        margin-bottom: 20px;
        /* Space below the video */
        display: flex;
        justify-content: center;
        /* Centers the video */
    }

    #hero-slide video {
        width: 100%;
        height: auto;
        /* Maintain aspect ratio */
        max-height: 100vh;
        /* Ensures it fits within the viewport */
        object-fit: contain;
        /* Ensures full video is visible without cropping */
        border-radius: 10px;
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

                    <h4 class="p_head">Independence Day Celebration at AKSA Foundation</h4>

                    <p class="p_body">AKSA Foundation marked Independence Day with immense pride and enthusiasm, bringing together children, teachers, and supporters for a heartwarming celebration. The event began with the hoisting of the national flag, as the children proudly saluted and sang the national anthem, filling the air with patriotism. Teachers and guests delivered inspiring speeches, emphasizing the true meaning of freedom—not just for the nation but also for individuals with unique abilities.</p>

                    <div id="hero-slide" class="carousel py-2 px-3 px-md-5" data-bs-ride="carousel">
                        <video class="carousel-image img-fluid position-relative" autoplay muted loop controls>
                            <source src="../images/file (4).mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>


                    <p class="p_body">
                        The children took center stage with cultural performances that showcased their incredible talents. From soulful patriotic songs to energetic dance performances and skits depicting India’s freedom struggle, their enthusiasm was contagious. Each act reflected their unwavering spirit and the Foundation’s commitment to inclusivity and empowerment.
                    </p>

                    <p class="p_body">Art and craft activities added a creative touch, allowing children to express their love for the country through drawings and handmade flags. The event concluded with a heartfelt message about breaking barriers and creating opportunities for children with autism to thrive. AKSA Foundation continues to inspire by fostering an environment where every child is celebrated and given the freedom to dream big. The Independence Day celebration was not just about remembering the past but also about shaping a future filled with possibilities.</p>


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