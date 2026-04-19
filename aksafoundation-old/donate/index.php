<?php
$menu_name = "Donate Now";
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
                    <h4 class="text-dark text-lg-start text-left mb-3" style="font-weight: bold;">Donate Now</h4>
                    <p class="text-dark text-lg-start mb-3  dp" style="">
                        Your support helps us create a brighter future for our children. Every contribution makes a difference!
                    </p>
                    <h1 class="text-dark text-lg-start text-left mb-3">UPI</h1>
                    <img class="img-fluid pb-lg-0 pb-5" src="../images/donate/upi.jpg" alt="">
                </div>
                <div class="col-lg-6 col-12">
                    <h2 class="text-dark text-lg-start text-left mb-3">Bank Transfer</h2>
                    <p class=" dp text-lg-start text-center mb-3 fs-6" style="text-align: justify !important;">
                        <span><b class="text-dark">Account Holder:</b> AKSA FOUNDATION</span><br>
                        <span><b class="text-dark">Account Number:</b> 50200096885691</span><br>
                        <span><b class="text-dark">IFSC Code:</b> HDFC0001587</span><br>
                        <span><b class="text-dark">Branch:</b> Shenoy Nagar</span><br>
                        <span><b class="text-dark">Account Type:</b> Current</span><br>
                    </p>

                    <h2 class="text-dark text-lg-start text-left mb-3 dph">Please fill this form with your payment screenshot to receive receipt</h2>
                    <form action="submit.php" method="POST" enctype="multipart/form-data">
                        <label for="first_name">First Name <span class="text-danger">*</span></label>
                        <input type="text" id="first_name" name="first_name" class="form-control" required>

                        <label for="last_name">Last Name <span class="text-danger">*</span></label>
                        <input type="text" id="last_name" name="last_name" class="form-control" required>

                        <label for="email">Email <span class="text-danger">*</span></label>
                        <input type="email" id="email" name="email" class="form-control" required>

                        <label for="phone">Phone <span class="text-danger">*</span></label>
                        <input type="tel" id="phone" name="phone" class="form-control" maxlength="10" minlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>

                        <label for="screenshot">Pay & upload screenshot here <span class="text-danger">*</span></label>
                        <input type="file" id="screenshot" name="screenshot" class="form-control" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" required>

                        <button type="submit">Submit</button>
                    </form>
                    <p class="text-dark text-lg-start mb-3  dp" style="">
                         All donations made to AKSA Foundation are exempt from income tax under 80G.
                    </p>
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
</style>




<?php include('../layout/footer.php'); ?>