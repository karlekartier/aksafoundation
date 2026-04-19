<?php
$menu_name = "Donate Now";
include('../layout/header.php') ?>
<?php include('../layout/top-nav.php') ?>



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

                    <h4 class="p_head">Emoji Day Celebration at AKSA Foundation 😃🎉</h4>

                    <p class="p_body">AKSA Foundation turned into a world of smiles and giggles as we celebrated<strong> World Emoji Day</strong>
                        with our little stars! 🌟 The day was filled with laughter, fun games, and lots of expressive faces! 😁🥰🤩</p>

                    <p class="p_body">Our amazing kids started the day by picking their favorite emojis and making cute emoji masks! 🎭🎨 They proudly wore them while dancing and playing emoji charades, where they acted out different emojis – from a sleepy 🥱 yawn to a big happy surprise 😲! It was so much fun guessing!</p>
                    <!-- <div class="d-flex justify-content-center">
                        <img class="img-fluid mb-1 w-50" src="https://static.wixstatic.com/media/dd705e_a061c84c1d504851a2b200f6433daecbf000.jpg" alt="">
                    </div> -->


                    <div class="d-flex justify-content-center px-2 px-md-5 py-2">
                        <img class="responsive-img" src="../images/vedio/emoge.jpg" alt="Image">
                    </div>
                    <p class="p_body">
                        The classrooms were decorated with colorful emoji balloons 🎈 and posters, making everything look super cheerful! Teachers shared fun stories about how emojis help us express feelings, just like we do with words! 📝💛
                    </p>

                    <p class="p_body">To wrap up the day, our little artists created their own unique emojis on paper, and oh boy, they were full of creativity! 🎉✨ The best part? Lots of <strong>big happy smiles</strong> all around! 😍</p>

                    <p class="p_body">
                        At AKSA Foundation, every day is about joy, love, and learning in the most playful way! 🥳💖 Happy Emoji Day to everyone! Keep spreading smiles! 😊🎊
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


<?php include('../layout/footer.php'); ?>