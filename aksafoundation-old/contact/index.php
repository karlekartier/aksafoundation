<?php
$menu_name = "Contact Form";
include('../layout/header.php') ?>
<?php include('../layout/top-nav.php') ?>

<main>




    <div id="toastContainer" style="position: fixed; top: 20px; right: 20px; z-index: 1050;">
        <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
            <div class="toast show bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-body">
                    ✅ Form submitted successfully!
                </div>
            </div>
        <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
            <div class="toast show bg-danger text-white" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-body">
                    ❌ Error submitting the form!
                </div>
            </div>
        <?php endif; ?>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">

                    <p id="content" class="text-dark text-lg-start text-center mb-3 fs-5 pe-lg-4 px-lg-0 px-4 cn" style="text-align: justify !important;">
                        We’re here to support you! Whether you have questions about our programs, nee<span id="dots">..</span><span id="moreText" style="display: none;">d guidance on enrollment, or want to learn more about our initiatives, feel free to reach out. At AKSA Foundation, we’re committed to creating a positive impact and fostering growth for every child. Let’s connect!</span> <a onclick="toggleContent()" id="toggleBtn">Show More</a>
                    </p>


                    <form action="send-mail.php" method="POST">
                        <label for="name">Name <span class="text-danger">*</span></label>
                        <input type="text" id="name" name="name" class="form-control" required>

                        <label for="email">Email <span class="text-danger">*</span></label>
                        <input type="email" id="email" name="email" class="form-control" required>

                        <label for="phone">Phone <span class="text-danger">*</span></label>
                        <input type="tel" id="phone" name="phone" class="form-control" maxlength="10" minlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>

                        <label for="message">Message <span class="text-danger">*</span></label>
                        <textarea id="message" name="message" rows="3" class="form-control" required></textarea><br>

                        <button type="submit">Submit</button>
                    </form>

                </div>
                <div class="col-lg-6 col-12">

                    <p class="text-dark text-lg-start text-center mb-3 fs-5 pe-lg-4 px-lg-0 px-4 cni" style="text-align: justify !important; ">
                        <i>For <b> admissions, volunteering or internship opportunities, and donations,</b>click the links below to get started.</i>
                    </p>

                    <div class="row">

                        <div class="d-flex justify-content-center">
                            <img class="img-fluid" src="https://static.wixstatic.com/media/dd705e_36ad502e01b547f7932948892b00bd55~mv2.png/v1/fill/w_178,h_110,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/1_edited.png" alt="" style="height: 150px;">
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <a href="../application/index.php" class="btn btn-primary rounded-pill px-4 py-3 w-75">Admission Enquiry</a>
                        </div>

                    </div>
                    <div class="row">

                        <div class="d-flex justify-content-center">
                            <img class="img-fluid" src="https://static.wixstatic.com/media/dd705e_b2b7bbf32e764c23b99d0af12d3970ed~mv2.png/v1/fill/w_296,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Untitled%20design.png" alt="" style="height: 150px;">
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <a href="../volunter/index.php" class="btn btn-primary rounded-pill px-4 py-3 w-75">Volunteer/Internship</a>
                        </div>

                    </div>
                    <div class="row">

                        <div class="d-flex justify-content-center overflow-none">
                            <img class="img-fluid" src="https://static.wixstatic.com/media/dd705e_4909059013654dfbbb14e2e992b0f41b~mv2.png/v1/crop/x_150,y_0,w_1620,h_1080/fill/w_638,h_426,fp_0.50_0.50,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/3_edited.png" alt="" style="height: 150px;">
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <a href="../donate/" class="btn btn-primary rounded-pill px-4 py-3 w-75">Donate Us</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>


    


</main>

<style>   

    form {
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="file"],
    button {
        width: 100%;
        padding: 10px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 13px;
    }

    button {
        background-color: rgb(26, 106, 255);
        color: white;
        cursor: pointer;
        border: none;
        transition: background 0.3s ease;
    }

    button:hover {
        background-color: rgb(26, 106, 255);
    }

    @media (max-width: 480px) {
        form {
            padding: 12px;
        }

        input,
        button {
            font-size: 14px;
        }
    }

    #content {
        font-size: 16px;
        line-height: 1.6;
        color: #333;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 10;
        /* Show only 2 lines initially */
        -webkit-box-orient: vertical;
    }

    #toggleBtn {
        background-color: transparent;
        color: #1a6aff;
        border: none;
        padding: 0;
        font-size: 16px;
        cursor: pointer;
        text-decoration: underline;
        transition: color 0.3s ease;
        margin-left: 5px;
    }

    #toggleBtn:hover {
        color: #155acb;
    }
</style>

<script>
    function toggleContent() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("moreText");
        var btnText = document.getElementById("toggleBtn");

        if (moreText.style.display === "none") {
            dots.style.display = "none";
            moreText.style.display = "inline";
            btnText.textContent = "Show Less";
        } else {
            dots.style.display = "inline";
            moreText.style.display = "none";
            btnText.textContent = "Show More";
        }
    }
</script>




<?php include('../layout/footer.php'); ?>