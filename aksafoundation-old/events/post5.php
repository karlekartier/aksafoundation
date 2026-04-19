<?php
$menu_name = "Donate Now";
include('../layout/header.php') ?>
<?php include('../layout/top-nav.php') ?>

<style>
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
                                    <p class="m-0">Jan 28</p>
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

                    <h4 class="p_head">Lighting Up Lives: A Joyful Diwali at AKSA Foundation</h4>

                    <p class="p_body">At AKSA Foundation, Diwali was more than just a festival—it was a celebration of hope and togetherness. The school sparkled with colorful diyas and vibrant decorations made by our special children, each piece reflecting their creativity and joy. The sound of laughter echoed as they shared sweets, lit sparklers, and embraced the warmth of the festive spirit. </p>


                    
                    <div class="d-flex justify-content-center px-2 px-md-5 py-2">
                        <img class="responsive-img" src="../images/vedio/diwali.avif" alt="Image">
                    </div>


                    <p class="p_body">
                        Watching their faces light up with wonder reminded us of the importance of inclusion and love. This Diwali, our children didn’t just light lamps; they illuminated hearts and showed us the true essence of happiness. Together, we celebrated the festival of lights in the most beautiful way. 💖
                    </p>


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