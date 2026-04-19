<?php
$menu_name = "Internship / Volunteer";
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
                <h2 class="text-dark">Join us!</h2>
                <form action="submit.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Name of the Child -->
                        <div class="col-md-6 mb-3">
                            <label for="name">Name <span class="required">*</span></label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6 mb-3">
                            <label for="phone">Phone <span class="required">*</span></label>
                            <input type="tel" id="phone" name="phone" class="form-control" maxlength="10" minlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                        </div>

                        <!-- Gender -->
                        <div class="col-md-6 mb-3">
                            <label for="internship">Internship or Volunteering? <span class="required">*</span></label>
                            <select id="internship" name="internship" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Internship">Internship</option>
                                <option value="Volunteering">Volunteering</option>                              
                            </select>
                        </div>
                        <!-- File Upload -->
                        <div class="col-md-12 mb-3">
                            <label for="reports">Resume or CV <span class="required">*</span></label>
                            <input type="file" id="reports" name="reports" class="form-control" accept="application/pdf" required>
                        </div>
                        <!-- Submit Button -->
                        <div class="col-12 d-flex justify-content-center">
                        <div class="col-6">
                            <button type="submit">Submit</button>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>



</main>



<style>
        form {
            width: 100%;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        input,
        textarea,
        button {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #1a6aff;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #155acb;
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