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

                    <h4 class="p_head">A Harvest of Smiles: Celebrating Pongal at AKSA Foundation</h4>

                    <p class="p_body">At AKSA Foundation, Pongal wasn’t just a festival; it was a celebration of unity, tradition, and the incredible spirit of our special children. As a school dedicated to nurturing children with various disabilities, we always strive to create moments that inspire, connect, and bring out their boundless potential. </p>

                    <p class="p_body">This Pongal, the campus came alive with vibrant kolams (rangoli) drawn by the children, their enthusiasm shining through every colorful stroke. Teachers and staff guided them in creating traditional patterns, and their excitement was infectious. The festive spirit was further heightened as everyone dressed in traditional attire, bringing a touch of Tamil heritage to the occasion.</p>
                    <div class="d-flex justify-content-center px-2 px-md-5 py-2">
                        <img class="responsive-img" src="../images/vedio/pongal1.webp" alt="Image">
                    </div>

                    <p class="p_body">
                        The highlight of the day was the traditional Pongal pot, bubbling over as children cheered with joy. Sugarcane was distributed, and their laughter echoed as they discovered the sweetness of this cherished tradition. For many of our children, experiencing these cultural moments is not just an activity but a step towards understanding and feeling included in the world around them.
                    </p>
                    <p class="p_body">As the founder, my heart swelled with emotion watching them immerse themselves in the festivities. These children teach us every day that joy can be found in the simplest things—a smile, a shared moment, or the warmth of togetherness.</p>
                    <div class="d-flex justify-content-center px-2 px-md-5 py-2">
                        <img class="responsive-img" src="../images/vedio/pongal2.avif" alt="Image">
                    </div>
                    <p class="p_body">Our mission at AKSA has always been to create a space where every child feels valued and empowered, and events like these are a testament to that. Pongal reminded us that traditions are not just about the past; they are bridges that connect us, inspire us, and light the path toward a brighter, inclusive future.

                        To every child who lit up our day with their laughter and every parent who trusts us with their dreams, thank you for being part of this beautiful journey. Together, we celebrated not just Pongal but life itself. ❤️</p>
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