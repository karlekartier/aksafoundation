<?php
$menu_name = "Donate Now";
include('../layout/header.php') ?>
<?php include('../layout/top-nav.php') ?>
<style>
    #hero-slide {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        max-height: 50vh;
        /* Limits height to 50% of viewport height */
    }

    .carousel-image {
        width: 100%;
        height: 100%;
        max-height: 400px;
        /* Limits height to prevent stretching */
        object-fit: cover;
        /* Ensures no distortion while filling the space */
        border-radius: 10px;
        /* Optional: Rounded edges */
    }

    /* Mobile View - Ensure Full Video Visibility */
    @media (max-width: 768px) {
        #hero-slide {
            max-height: none;
            /* Remove height limit */
        }

        .carousel-image {
            height: auto;
            /* Allow video to maintain its natural aspect ratio */
            max-height: 100%;
            /* Ensure full visibility */
            object-fit: contain;
            /* Show full video without cropping */
        }
    }

    .responsive-image {
        width: 100%;
        height: 100%;
        max-height: 400px;
        /* Matches video max-height */
        object-fit: cover;
        /* Ensures image is cropped properly */
        border-radius: 10px;
        /* Optional: Rounded corners */
    }

    /* Mobile View - Show Full Image Without Cropping */
    @media (max-width: 768px) {
        .responsive-image {
            height: auto;
            /* Maintain aspect ratio */
            max-height: 100%;
            /* Ensure full visibility */
            object-fit: contain;
            /* Show full image without cropping */
        }
    }

    .truncate-text {

        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        /* Truncate after 2 lines */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
    }

    /* 📌 Mobile View: Adjust font size & truncation */
    @media (max-width: 768px) {
        .truncate-text {
            font-size: var(--font-size-mobile, 14px);
            /* Smaller font on mobile */
            -webkit-line-clamp: 3;
            /* Show more lines on mobile */
        }
    }

    .ft {
        font-family: "Madefor-Text", "HelveticaNeueW01-45Light",
            "HelveticaNeueW02-45Light", "HelveticaNeueW10-45Light", sans-serif;
        font-size: 14px !important;
        /* Default size if variable is not set */
    }

    .ft1 {
        font-family: "Madefor-Text", "HelveticaNeueW01-45Light",
            "HelveticaNeueW02-45Light", "HelveticaNeueW10-45Light", sans-serif;
        font-size: 22px !important;
        font-weight: bold !important;
        text-align: justify !important;
    }
</style>
<main>
    <section class="py-5">
        <div class="container">
            <div class="row px-lg-0 px-3 flex-wrap">
                <div class="card col-lg-4 col-12 p-2 mb-4" style="min-height: 480px">
                    <!-- <img class="img-fluid mb-1" src="https://static.wixstatic.com/media/dd705e_6cf8c75358104482a9beb4090178f468~mv2.png/v1/fill/w_326,h_245,fp_0.50_0.50,q_95,enc_auto/dd705e_6cf8c75358104482a9beb4090178f468~mv2.png" alt=""> -->
                    <div id="hero-slide" class="carousel py-2 px-3 px-md-5" data-bs-ride="carousel">
                        <video class="carousel-image img-fluid position-relative" autoplay muted loop>
                            <source src="../images/vedio/em_vido.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>


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
                                    <p class="m-0">Feb 2</p>
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

                    <div>
                        <a href="post1.php" class="main-content">
                            <h6 class="ft1 truncate-text">Emoji Day Celebration at AKSA Foundation 😃🎉</h6>
                            <p class="ft truncate-text">AKSA Foundation turned into a world of smiles and giggles as we celebrated World Emoji Day with our little stars! 🌟 The day was filled...</p>
                        </a>
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
                <div class="card col-lg-4 col-12 p-2 mb-4" style="min-height: 480px">
                    <!-- <img class="img-fluid mb-1" src="https://static.wixstatic.com/media/dd705e_6cf8c75358104482a9beb4090178f468~mv2.png/v1/fill/w_326,h_245,fp_0.50_0.50,q_95,enc_auto/dd705e_6cf8c75358104482a9beb4090178f468~mv2.png" alt=""> -->
                    <div id="hero-slide" class="carousel py-2 px-3 px-md-5" data-bs-ride="carousel">
                        <video class="carousel-image img-fluid position-relative" autoplay muted loop>
                            <source src="../images/file (4).mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

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
                                    <p class="m-0">Feb 2</p>
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

                    <div>
                        <a href="post2.php" class="main-content">
                            <h6 class="ft1 truncate-text">Independence Day Celebration at AKSA Foundation</h6>
                            <p class="ft truncate-text">AKSA Foundation marked Independence Day with immense pride and enthusiasm, bringing together children, teachers, and supporters for a...</p>
                        </a>
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
                <div class="card col-lg-4 col-12 p-2 mb-4" style="min-height: 480px">
                    <img class="img-fluid mb-1 responsive-image" src="https://static.wixstatic.com/media/dd705e_6cf8c75358104482a9beb4090178f468~mv2.png/v1/fill/w_326,h_245,fp_0.50_0.50,q_95,enc_auto/dd705e_6cf8c75358104482a9beb4090178f468~mv2.png" alt="">

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
                                    <p class="m-0">Feb 2</p>
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

                    <div>
                        <a href="post3.php" class="main-content">
                            <h6 class="ft1 truncate-text">Wave Riders: A Historic 604 km Swim Completed!</h6>
                            <p class="ft truncate-text">In an extraordinary display of resilience and determination, Wave Riders has officially completed its ambitious 604 km relay swim! This...</p>
                        </a>
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
                <div class="card col-lg-4 col-12 p-2 mb-4" style="min-height: 480px">
                    <!-- <img class="img-fluid mb-1" src="https://static.wixstatic.com/media/dd705e_6cf8c75358104482a9beb4090178f468~mv2.png/v1/fill/w_326,h_245,fp_0.50_0.50,q_95,enc_auto/dd705e_6cf8c75358104482a9beb4090178f468~mv2.png" alt=""> -->
                    <div id="hero-slide" class="carousel py-2 px-3 px-md-5" data-bs-ride="carousel">
                        <video class="carousel-image img-fluid position-relative" autoplay muted loop>
                            <source src="../images/vedio/xmax.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

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
                                    <p class="m-0">Feb 2</p>
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

                    <div>
                        <a href="post4.php" class="main-content">
                            <h6 class="ft1 truncate-text">Spreading Love and Joy: A Heartwarming Christmas at AKSA Foundation</h6>
                            <p class="ft truncate-text">Christmas at AKSA Foundation was a magical celebration filled with love, laughter, and togetherness. Our special children decorated the...</p>
                        </a>
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
                <div class="card col-lg-4 col-12 p-2 mb-4" style="min-height: 480px">
                    <img class="img-fluid mb-1 responsive-image" src="../images/vedio/diwali.avif" alt="">

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
                                    <p class="m-0">Feb 2</p>
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

                    <div>
                        <a href="post5.php" class="main-content">
                            <h6 class="ft1 truncate-text">Lighting Up Lives: A Joyful Diwali at AKSA Foundation</h6>
                            <p class="ft truncate-text">At AKSA Foundation, Diwali was more than just a festival—it was a celebration of hope and togetherness. The school sparkled with colorful...</p>
                        </a>
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
                <div class="card col-lg-4 col-12 p-2 mb-4" style="min-height: 480px">
                    <img class="img-fluid mb-1 responsive-image" src="../images/vedio/pongal1.webp" alt="">

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
                                    <p class="m-0">Feb 2</p>
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

                    <div>
                        <a href="post6.php" class="main-content">
                            <h6 class="ft1 truncate-text">A Harvest of Smiles: Celebrating Pongal at AKSA Foundation</h6>
                            <p class="ft truncate-text">At AKSA Foundation, Pongal wasn’t just a festival; it was a celebration of unity, tradition, and the incredible spirit of our special...</p>
                        </a>
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