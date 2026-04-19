<?php
$menu_name = "home";
include('../layout/header.php') ?>
<?php include('../layout/top-nav.php') ?>

<style>
    .responsive-image {
        width: 100%;
        height: auto;
        max-height: 500px;
        object-fit: contain;
        border-radius: 10px;
        display: block;
    }

    /* Mobile View */
    @media (max-width: 768px) {
        .responsive-image {
            max-height: 100%;
        }
    }

    .responsive-image1 {
        width: 100%;
        height: auto;
        max-height: 600px;
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

    .responsive-image2 {
        width: 100%;
        height: auto;
        max-height: 800px;
        object-fit: contain;
        border-radius: 10px;
        display: block;
    }

    /* Mobile View */
    @media (max-width: 768px) {
        .responsive-image2 {
            max-height: 100%;
        }
    }
</style>

<main>
    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../images/home/home1.jpg"
                                    class="carousel-image img-fluid" alt="...">
                            </div>

                            <div class="carousel-item">
                                <img src="../images/home/home2.jpg"
                                    class="carousel-image img-fluid" alt="...">
                            </div>

                            <div class="carousel-item">
                                <img src="../images/home/home3.jpg"
                                    class="carousel-image img-fluid" alt="...">
                            </div>

                            <div class="carousel-item">
                                <img src="../images/home/home4.avif"
                                    class="carousel-image img-fluid" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/home/home5.jpeg"
                                    class="carousel-image img-fluid" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/home/home6.avif"
                                    class="carousel-image img-fluid" alt="...">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon rounded-start rounded-pill" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon rounded-end rounded-pill" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row  pt-4 pb-3">
                <div class="col-12 d-flex flex-column justify-content-center ">
                    <h3 class="text-dark text-center mb-3 px-5 px-md-0 mx-2 mx-md-0 fs-md-4" style="line-height: 1.4; font-size: 26px; font-family: madefor-display-bold">
  Empowering <br> Young Minds
</h3>

                    <div class="d-flex justify-content-center mb-3 pb-3">
                        <a href="../contact/index.php" class="btn btn-primary px-4 fs-4 "><i class="bi bi-arrow-right-circle"></i> Join us</a>
                    </div>
                    <p class="text-dark fst-italic text-center mb-3 fs-4 pb-3 " style=" font-family: 'Suratha', serif; font-weight:bold !important;font-size: 17px !important;">"Your Child is at the right place!"</p>
                    <h4 class=" mb-3 fs-5 pe-lg-4 px-lg-0 px-5" style=" text-align: center; font-style: normal !important; font-size:20px !important; font-weight:400 !important;">— A place where they feel safe, valued and empowered to reach their fullest potential.</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex flex-column justify-content-center">
                   <style>
  .aksa-text {
    font-family: 'Poppins', sans-serif;
    font-weight: 600 !important;
    font-size: 17px;
    font-style: normal;
    text-decoration: none;
    text-align: center;
    letter-spacing: 0em;
    line-height: 1.4;
    color: #000;
  }

  /* Mobile-specific styling */
  @media (max-width: 768px) {
    .aksa-text {
      font-weight: 400 !important;
      color: #000; /* Lighter text color for mobile */
    }
  }
</style>

<p class="mb-5 fs-5 pe-lg-4 px-lg-0 px-5 aksa-text ">
  <span class="foundation-name">AKSA FOUNDATION</span> believes every child deserves a bright and promising future.
  With utmost dedication, we embrace a vibrant community where Children with special needs and various disabilities can:
</p>

 <div class="row">
    <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
        <div class="d-flex justify-content-center py-9">
            <img class="img-fluid" src="../images/home/inspiration.png" alt="" style="height: 140px;">
        </div>
        <div class="d-flex justify-content-center mb-3">
            <a class="btn btn-primary rounded-pill px-4 py-8 w-75" 
               style="font-family: Poppins, sans-serif; font-size: large; font-weight: bold;">
                Flourish with Creativity
            </a>
        </div>
    </div>

    <div class="col-lg-4 col-12 d-flex flex-column justify-content-center py-4">
        <div class="d-flex justify-content-center py-9">
            <img class="img-fluid" src="../images/home/confidence.png" alt="" style="height: 140px;">
        </div>
        <div class="d-flex justify-content-center mb-3">
            <a class="btn btn-primary rounded-pill px-4 py-8 w-75" 
               style="font-family: Poppins, sans-serif; font-size: large; font-weight: bold;">
                Grow With Confidence
            </a>
        </div>
    </div>

    <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
        <div class="d-flex justify-content-center overflow-hidden py-9">
            <img class="img-fluid" src="../images/home/joy.png" alt="" style="height: 140px;">
        </div>
        <div class="d-flex justify-content-center mb-3">
            <a class="btn btn-primary rounded-pill px-4 py-8 w-75" 
               style="font-family: Poppins, sans-serif; font-size: large; font-weight: bold;">
                Thrive With Joy
            </a>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </section>

<section class="py-1">
  <div class="container">
    <div class="row">
      <!-- Image Column -->
      <div class="col-lg-6 col-12 order-lg-2 order-1 pb-5">
        <img class="img-fluid responsive-image1" src="../images/home/h1.jpg" alt="">
      </div>

      <!-- Text Content Column -->
      <div class="col-lg-6 col-12 order-lg-1 order-2 d-flex align-items-center">
        <div class="w-100 px-4 px-lg-0 pe-lg-4">
          <h3 class="text-center text-lg-start mb-3" 
              style="font-size: 30px; font-family: 'Fahkwang', sans-serif;">
              Our Story
          </h3>

          <p class="text-lg-start mb-3" 
             style="color: #000; font-family: 'DM Sans', sans-serif; font-size:17px; line-height:30px;">
              Our journey started with a simple yet powerful belief:
          </p>

          <p class="text-dark fst-italic text-lg-start mb-3" 
             style="font-family: baskervillemtw01-smbdit, serif; font-size: 15px; font-weight: bold;">
              "Every Child deserves an Opportunity to Ignite their Inner Strength."
          </p>

          <p class="text-lg-start" 
             style="color: #000; font-family: 'DM Sans', sans-serif; font-size:17px; line-height:30px; font-weight:400;">
              In 2013, we started training children with special needs and various disabilities, 
              using swimming as a therapeutic tool. Gradually, we were able to witness significant 
              improvements in their overall development which drew parental interest and a surge in 
              enrollment. This surge raised awareness about its effectiveness and benefits of swimming, 
              particularly enhancing motor coordination, managing hyperactivity, focus, sleep, speech, 
              social and emotional regulation.
              <a href="../our-story/" class="fw-bold">
                <span style="color: #000; transition: 0.3s;">read more</span>
              </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  @media (max-width: 768px) {
    .responsive-image1 {
      width: 100%;
      height: 100vh;
      object-fit: cover;
    }
  }

  .responsive-image1 {
    width: 100%;
    height: auto;
    object-fit: cover;
  }
</style>



 <section class="pt-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 pb-5">
                <img class="img-fluid w-100 aboutusimg" style="height:350px; border-radius: 10px;" src="../images/home/h2.jpg" alt="">
            </div>
            <div class="col-lg-6 col-12">
                <h3 class="text-dark text-lg-start text-center mb-3"  style="font-size: 30px; font-family: 'Fahkwang', sans-serif;">About us</h3>

              <p class="text-lg-start mb-3 pe-lg-4 px-lg-0 px-4" style="color: #000; font-family: 'DM Sans', sans-serif;font-size:17px;line-height:30px;">
  <span style="color: #000; font-weight: 500; font-size: 17px; letter-spacing: 2px;">AKSA FOUNDATION</span> is a non-profit organization committed to creating a world-class integrated center for children with special needs and diverse disabilities.
</p>

<p class="text-lg-start  pe-lg-4 px-lg-0 px-4 pb-5" style="color: #000; font-family: 'DM Sans', sans-serif;font-size:17px;line-height:30px;">
  Our objective is to empower young minds to unlock their fullest potential and live independently with dignity, honor, and self-respect.
  <a href="../about/index.php" class="fw-bold text-decoration-none" style="position: relative; display: inline-block;">
    <span style="color: #000; transition: 0.3s;">read more</span>
  </a>
</p>

                <div class="d-flex justify-content-lg-start justify-content-center mb-3">
                    <a href="../donate" class="btn btn-primary rounded-pill px-4 py-8 " style="letter-spacing: 2px;">
                        DONATE NOW <i class="bi bi-arrow-right-circle-fill fs-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center text-dark mb-4 " style="font-size: 23px; font-weight: 700;">
                    AKSA's comprehensive platform offers:
                </h3>
            </div>

           <div class="col-lg-4 col-12 d-flex flex-column align-items-center mb-4">
    <a href="../learning-centre">
        <div class="d-flex justify-content-center mb-3 pb-7" >
            <img class="img-fluid img-radius" src="../images/home/h3.JPG" alt="">
        </div>
        <h5 class="text-center fw-bold mt-2  pb-7" 
            style="font-family: 'Fahkwang', sans-serif; color: #000; text-decoration: underline;">
            AKSA Learning Centre
        </h5>
    </a>
</div>

<div class="col-lg-4 col-12 d-flex flex-column align-items-center mb-4 ">
    <a href="../vocational-centre">
        <div class="d-flex justify-content-center mb-3 pb-7">
            <img class="img-fluid img-radius" src="../images/home/h4.JPG" alt="">
        </div>
        <h5 class="text-center fw-bold mt-2 pb-7" 
            style="font-family: 'Fahkwang', sans-serif; color: #000; text-decoration: underline;">
            AKSA Vocational Centre
        </h5>
    </a>
</div>

<div class="col-lg-4 col-12 d-flex flex-column align-items-center mb-4">
    <a href="../sport-academy">
        <div class="d-flex justify-content-center mb-3 pb-7">
            <img class="img-fluid img-radius" src="../images/home/h5.avif" alt="">
        </div>
        <h5 class="text-center fw-bold mt-2" 
            style="font-family: 'Fahkwang', sans-serif; color: #000; text-decoration: underline;">
            AKSA Sports Academy
        </h5>
    </a>
</div>

        </div>
    </div>
</section>



<section class="pt-2">
   <!-- Carousel Section: Visible only on medium and larger screens -->
<!-- Desktop & Tablet: Carousel visible only on md and larger -->
<div class="d-none d-md-block">
  <div class="container-fluid py-2" style="background-color: #80808026;">
    <div class="row">
      <!-- Centered Heading and Subheading -->
      <div class="col-12 text-center mb-3">
        <h5 class="text-dark fw-bold fs-3">EXPERIENCE <span style="color: brown;">AKSA</span></h5>
        <p class="text-dark fst-italic fs-5">beyond Classrooms...</p>
      </div>

      <!-- Owl Carousel Section -->
      <div class="owl-carousel col-12">
        <div class="item">
          <img class="img-fluid carousel_img rounded-4 position-relative" src="../images/home/c5.jpg" alt="Image 1" />
          <div class="carosel-over">
            <p class="position-absolute top-50 start-50 translate-middle text-white fw-bold fs-4">Adventure & Camping</p>
          </div>
        </div>

        <div class="item">
          <img class="img-fluid carousel_img rounded-4 position-relative" src="../images/home/c7.jpg" alt="Image 2" />
          <div class="carosel-over">
            <p class="position-absolute top-50 start-50 translate-middle text-white fw-bold fs-4">Field Trip</p>
          </div>
        </div>

        <div class="item">
          <img class="img-fluid carousel_img rounded-4 position-relative" src="../images/home/c3.jpg" alt="Image 3" />
          <div class="carosel-over">
            <p class="position-absolute top-50 start-50 translate-middle text-white fw-bold fs-4">Domestic Trip</p>
          </div>
        </div>

        <div class="item">
          <img class="img-fluid carousel_img rounded-4 position-relative" src="../images/home/h10.avif" alt="Image 4" />
          <div class="carosel-over">
            <p class="position-absolute top-50 start-50 translate-middle text-white fw-bold fs-4">International Trip</p>
          </div>
        </div>

        <div class="item">
          <img class="img-fluid carousel_img rounded-4 position-relative carosel-over" src="../images/home/c9.jpg" alt="Image 5" />
        </div>

        <div class="item">
          <img class="img-fluid carousel_img rounded-4 position-relative carosel-over" src="../images/home/c2.jpg" alt="Image 6" />
        </div>

        <div class="item">
          <img class="img-fluid carousel_img rounded-4 position-relative carosel-over" src="../images/home/c6.jpg" alt="Image 7" />
        </div>

        <div class="item">
          <img class="img-fluid carousel_img rounded-4 position-relative carosel-over" src="../images/home/c4.jpg" alt="Image 8" />
        </div>

        <div class="item">
          <video class="carousel_img rounded-4 img-fluid position-relative carosel-over" autoplay muted loop>
            <source src="../images/home/cv1.mp4" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </div>

        <div class="item">
          <video class="carousel_img rounded-4 img-fluid position-relative carosel-over" autoplay muted loop>
            <source src="../images/home/cv2.mp4" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </div>

        <div class="item">
          <video class="carousel_img rounded-4 img-fluid position-relative carosel-over" autoplay muted loop>
            <source src="../images/home/cv3.mp4" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Mobile: Heading + horizontal scroll container -->
<div class="d-block d-md-none">
  <div class="container-fluid py-2" style="background-color: #80808026;">
    <div class="row">
      <!-- Centered Heading and Subheading -->
      <div class="col-12 text-center mb-3">
        <h5 class="text-dark fw-bold fs-3">EXPERIENCE <span style="color: brown;">AKSA</span></h5>
        <p class="text-dark fst-italic fs-5">beyond Classrooms...</p>
      </div>

    <!-- Mobile View Auto-Scrolling Image/Video Strip -->
<div class="horizontal-scroll-container px-3 d-block d-md-none">
  <div class="scroll-wrapper">
    <!-- Original items -->
    <div class="scroll-item">
      <img src="../images/home/c5.jpg" alt="Adventure & Camping" />
    </div>
    <div class="scroll-item">
      <img src="../images/home/c7.jpg" alt="Field Trip" />
    </div>
    <div class="scroll-item">
      <img src="../images/home/c3.jpg" alt="Domestic Trip" />
    </div>
    <div class="scroll-item">
      <img src="../images/home/h10.avif" alt="International Trip" />
    </div>
    <div class="scroll-item">
      <video autoplay muted loop>
        <source src="../images/home/cv1.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="scroll-item">
      <video autoplay muted loop style="height: 300px;">
        <source src="../images/home/cv2.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="scroll-item">
      <video autoplay muted loop>
        <source src="../images/home/cv3.mp4" type="video/mp4" />
      </video>
    </div>

    <!-- Duplicated items for seamless loop -->
    <div class="scroll-item">
      <img src="../images/home/c5.jpg" alt="Adventure & Camping" />
    </div>
    <div class="scroll-item">
      <img src="../images/home/c7.jpg" alt="Field Trip" />
    </div>
    <div class="scroll-item">
      <img src="../images/home/c3.jpg" alt="Domestic Trip" />
    </div>
    <div class="scroll-item">
      <img src="../images/home/h10.avif" alt="International Trip" />
    </div>
    <div class="scroll-item">
      <video autoplay muted loop>
        <source src="../images/home/cv1.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="scroll-item">
      <video autoplay muted loop style="height: 300px;">
        <source src="../images/home/cv2.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="scroll-item">
      <video autoplay muted loop>
        <source src="../images/home/cv3.mp4" type="video/mp4" />
      </video>
    </div>
  </div>
</div>
    </div>
  </div>
</div>

</section>
<style>
  @keyframes autoScroll {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-50%);
    }
  }

  .horizontal-scroll-container {
    overflow: hidden;
    position: relative;
  }

  .scroll-wrapper {
    display: flex;
    gap: 1rem;
    flex-wrap: nowrap;
    width: max-content;
    animation: autoScroll 30s linear infinite;
  }

  .scroll-item {
    flex-shrink: 0;
    width: 200px;
  }

  .scroll-item img,
  .scroll-item video {
    width: 100%;
    border-radius: 1rem;
  }
</style>
<style>
/* Horizontal Scroll Styles */
.horizontal-scroll-container {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

.scroll-wrapper {
  display: flex;
  flex-wrap: nowrap;
  gap: 1rem;
  scrollbar-width: none;
}
.scroll-wrapper::-webkit-scrollbar {
  display: none;
}

.scroll-item {
  flex-shrink: 0;
  width: 250px;
  height: 280px;
  position: relative;
  overflow: hidden;
  border-radius: 1rem;
}

.scroll-item img,
.scroll-item video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 1rem;
}
</style>

<section class="py-5">
  <div class="container">
    <div class="text-center mb-4">
      <h4 class="text-dark head-2">Children We Serve</h4>
    </div>
    <div class="d-flex justify-content-center">
      <img src="../images/home/children we serve.avif" 
           alt="Children We Serve" 
           class="img-fluid" 
           style="max-width: 100%; height: auto;">
    </div>
  </div>
</section>


    <section class="py-2">
        <div class="container">
            <div class="row align-items-center">

              <div class="col-lg-6 col-12 text-center pb-4">
  <div class="d-flex justify-content-center">
    <img src="../images/home/h12.jpg" 
         alt="Smiling boy with hat" 
         class="rounded-circle img-fluid" 
         style="width: 280px; height: 280px; object-fit: cover;">
  </div>
</div>

                <!-- Right Content Column -->
                <div class="col-lg-6 col-12 text-center">
                    <p class="pb-4 pb-lg-4 pe-lg-4 px-lg-0 px-5 head-3">
                        We are dedicated to empowering individuals to realize their full potential and lead meaningful, fulfilling lives.
                    </p>
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid img-radius" src="../images/home/h13.jpg" alt="" style="max-width: 80%; height: auto;">
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Add this inside <head> or before the section if not already included -->
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">

<style>
  .testimonial-text {
    color: #ffffff !important;
    font-family: 'DM Sans', sans-serif;
    font-weight: 900;
    font-size: 28px;
    line-height: 1.2;
    white-space: normal;
    word-wrap: break-word;
    overflow-wrap: break-word;
    padding: 0 1rem;
  }

  .testimonial-name {
    font-family: 'DM Sans', sans-serif;
    font-size: 1rem;
    font-weight: 500;
  }

  .carousel_img {
     width: 100%;
    height: 400px;
    object-fit: cover;
    aspect-ratio: 4 / 3;
  }

  .testimonial-heading {
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
  }
</style>

<section class="py-2">
<div class="container-fluid py-2" style="
  background-image: url('../images/home/Wood.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
">
    <div class="row">
      <h5 class="text-white text-center mb-4 px-3 testimonial-heading">WHAT PARENTS SAY ABOUT US...</h5>
      <div class="owl-carousel col-12">

        <div class="item">
          <div class="carousel-over carousel_img rounded-4 position-relative">
            <p class="position-absolute top-50 start-50 translate-middle testimonial-text text-center w-75">
              "The trip was well-organized and very enjoyable. We had a great experience exploring new things."
            </p>
            <p class="position-absolute bottom-0 start-50 translate-middle-x text-white text-center testimonial-name w-100">Jamnie</p>
          </div>
        </div>

        <div class="item">
          <div class="carousel-over carousel_img rounded-4 position-relative">
            <p class="position-absolute top-50 start-50 translate-middle testimonial-text text-center w-75">
              "A well-planned trip to Yercaud. Thank you AKSA for making it memorable!"
            </p>
            <p class="position-absolute bottom-0 start-50 translate-middle-x text-white text-center testimonial-name w-100">Priya</p>
          </div>
        </div>

        <div class="item">
          <div class="carousel-over carousel_img rounded-4 position-relative">
            <p class="position-absolute top-50 start-50 translate-middle testimonial-text text-center w-75">
              "The staff’s support and tailored learning approach helped my son grow academically and socially."
            </p>
            <p class="position-absolute bottom-0 start-50 translate-middle-x text-white text-center testimonial-name w-100">Kannika Nagarajan</p>
          </div>
        </div>
        
          <div class="item">
          <div class="carousel-over carousel_img rounded-4 position-relative">
            <p class="position-absolute top-50 start-50 translate-middle testimonial-text text-center w-75">
              "AKSA changed my son's life. A truly trusted team creating miracles every day."
            </p>
            <p class="position-absolute bottom-0 start-50 translate-middle-x text-white text-center testimonial-name w-100">Jamnie</p>
          </div>
        </div>

        <div class="item">
          <div class="carousel-over carousel_img rounded-4 position-relative">
            <p class="position-absolute top-50 start-50 translate-middle testimonial-text text-center w-75">
              "My son shows great improvement. The team is caring and professional. Truly grateful."
            </p>
            <p class="position-absolute bottom-0 start-50 translate-middle-x text-white text-center testimonial-name w-100">Santha Ramesh</p>
          </div>
        </div>

        <div class="item">
          <div class="carousel-over carousel_img rounded-4 position-relative">
            <p class="position-absolute top-50 start-50 translate-middle testimonial-text text-center w-75">
              "Wonderful school! Teachers are kind and supportive. Highly recommend for special needs education."
            </p>
            <p class="position-absolute bottom-0 start-50 translate-middle-x text-white text-center testimonial-name w-100">Jessy Vicky</p>
          </div>
        </div>

        <div class="item">
          <div class="carousel-over carousel_img rounded-4 position-relative">
            <p class="position-absolute top-50 start-50 translate-middle testimonial-text text-center w-75">
              "AKSA helps children grow beyond expectations. Their outdoor activities and coaching are excellent."
            </p>
            <p class="position-absolute bottom-0 start-50 translate-middle-x text-white text-center testimonial-name w-100">Murali Krishna</p>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>

<style>
.certificate-section {
  background-color: #f9f9f9;
  padding: 20px 0;
  text-align: center;
}

.certificate-section .container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 15px;
}

.certificate-image {
  width: 100%;
  height: auto;
  max-width: 100%;
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}
</style>

<section class="certificate-section">
  <div class="container">
    <img src="../images/home/Crtf.png" alt="Award Certificates" class="certificate-image" />
  </div>
</section>

</main>

<?php include('../layout/footer.php'); ?>