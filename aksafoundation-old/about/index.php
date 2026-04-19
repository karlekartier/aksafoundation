<?php
$menu_name = "About";
include('../layout/header.php') ?>
<?php include('../layout/top-nav.php') ?>
<style>
      .responsive-image1 {
        width: 100%;
        height: auto;
        max-height: 700px;
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
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 pb-5">
                <img class="img-fluid w-100 aboutusimg responsive-image1 "  src="../images/about/about-1.jpg" alt="">
            </div>
            <div class="col-lg-6 col-12">
                <h3 class="text-dark text-lg-start text-center mb-3 font_5">About AKSA</h3>
                <p class="text-dark text-lg-start  mb-3 fs-5 pe-lg-4 px-lg-0 px-4 cn" style="text-align: justify !important;">
                    <strong>AKSA FOUNDATION</strong> is a non-profit organization committed to creating a world-class integrated center for children with special needs and diverse disabilities.<br> Our objective is to empower young minds to unlock their fullest potential and live independently with dignity, honor and self-respect.
                </p>
                <p class="text-dark text-lg-start text-center fs-5 pe-lg-4 px-lg-0 px-4 cn" style="text-align: justify !important;">AKSA's comprehensive platform includes:</p>
                <ul>
                    <li class="text-dark">AKSA Learning Centre</li>
                    <li class="text-dark">AKSA Vocational Centre</li>
                    <li class="text-dark">AKSA Sports Academy</li>                    
                </ul>
                <p class="text-dark text-lg-start text-center fs-5 pe-lg-4 px-lg-0 px-4 cn" style="text-align: justify !important;">Our institutions provide an inclusive and supportive environment, specifically designed to cater to the unique needs and aspirations of learners, ensuring their holistic development and empowerment.</p>
                <p class="text-dark text-lg-start text-center fs-5 pe-lg-4 px-lg-0 px-4 cn" style="text-align: justify !important;">AKSA's vision is to establish a world-class integrated center, providing specialized facilities for children with special needs and disabilities. This inclusive network aims to build a society where every child is respected, valued, supported and empowered with the skills to lead a fulfilling and independent life.</p>
                <p class="text-dark text-lg-start text-center fs-5 pe-lg-4 px-lg-0 px-4 cn" style="text-align: justify !important;">Our mission is to provide innovative resources and opportunities through a multifaceted approach that nurtures the abilities of children with diverse needs, ensuring their full participation in society with a special focus on inclusivity and excellence.</p>
            </div>
        </div>
    </div>
</section>


<?php include('../layout/footer.php'); ?>