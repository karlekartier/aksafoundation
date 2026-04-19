<?php
$menu_name = "Our story";
include('../layout/header.php') ?>
<?php include('../layout/top-nav.php') ?>

<style>
      .responsive-image1 {
        width: 100%;
        height: auto;
        max-height: 650px;
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
                <img class="img-fluid w-100 aboutusimg responsive-image1"  src="../images/home/c1.JPG" alt="">
            </div>
            <div class="col-lg-6 col-12">
                <h3 class="text-dark text-lg-start text-center mb-3 font_5">Our Story</h3>
                <p class="text-dark text-lg-start  mb-3 fs-5 pe-lg-4 px-lg-0 px-4 cn" style="text-align: justify !important;">
                     Our journey began with a simple yet powerful belief: 
                </p>
                
                <p class=" text-dark text-lg-start fst-italic text-center mb-3 fs-5 pe-lg-4 px-lg-0 px-2" style=" text-align: justify !important;font-family: baskervillemtw01-smbdit, serif !important; font-size: 15px !important; font-weight:bold !important ; color:black    !important">"Every Child deserves an opportunity to ignite their inner strength."</p>
                
                <p class="text-dark text-lg-start text-center fs-5 pe-lg-4 px-lg-0 px-4 cn" style="text-align: justify !important;">In 2013, we started training children with special needs and various disabilities, using swimming as a therapeutic tool. Gradually, we were able to witness significant improvements in their overall development which drew parental interest and a surge in enrollment. This surge raised awareness about it's effectiveness and benefits of swimming, particularly enhancing motor coordination, managing hyperactivity, focus, sleep, speech, social and emotional regulation.</p>
                <p class="text-dark text-lg-start text-center fs-5 pe-lg-4 px-lg-0 px-4 cn" style="text-align: justify !important;">Our specialized training program produced athletes who not only excelled in National and International competitions but also performed World Records in Sea Swimming Expeditions. Building on this success, we envisioned a comprehensive facility that would integrate all services under one roof.</p>
                <p class="text-dark text-lg-start text-center fs-5 pe-lg-4 px-lg-0 px-4 cn" style="text-align: justify !important;">As the years progressed, we broadened our services by introducing a learning center, addressing the specific requirements of children with learning difficulties. This expansion enabled us to create a nurturing environment that supports not only academic challenges but also the behavioural, social and emotional needs of our students.</p>
                <p class="text-dark text-lg-start text-center fs-5 pe-lg-4 px-lg-0 px-4 cn" style="text-align: justify !important;">To solidify our identity, we registered '<b>AKSA FOUNDATION</b>' as the official name for our services and programs.</p>
            </div>
        </div>
    </div>
</section>


<?php include('../layout/footer.php'); ?>