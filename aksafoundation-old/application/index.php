<?php
$menu_name = "Application Form";
include('../layout/header.php') ?>
<?php include('../layout/top-nav.php') ?>

<main>


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

    <section class="py-6">
        <div class="container">
            <div class="row">
                <p class="text-dark font_5">Application Form</p>
                <form action="submit.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Name of the Child -->
                        <div class="col-md-6 mb-3">
                            <label for="child_name">Name of the Child <span class="required">*</span></label>
                            <input type="text" id="child_name" name="child_name" class="form-control" required>
                        </div>

                        <!-- Date of Birth -->
                        <div class="col-md-6 mb-3">
                            <label for="dob">Date of Birth <span class="required">*</span></label>
                            <input type="date" id="dob" name="dob" class="form-control" required>
                        </div>

                        <!-- Gender -->
                        <div class="col-md-6 mb-3">
                            <label for="gender">Gender <span class="required">*</span></label>
                            <select id="gender" name="gender" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <!-- Category of Disability / Disorder -->
                        <div class="col-md-6 mb-3">
                            <label for="disability">Category of Disability / Disorder <span class="required">*</span></label>
                            <input type="text" id="disability" name="disability" class="form-control" required>
                        </div>

                        <!-- Address -->
                        <div class="col-md-12 mb-3">
                            <label for="address">Address</label>
                            <textarea id="address" name="address" class="form-control"></textarea>
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

                        <!-- Father's Name & Occupation -->
                        <div class="col-md-6 mb-3">
                            <label for="father_details">Father's Name & Occupation <span class="required">*</span></label>
                            <input type="text" id="father_details" name="father_details" class="form-control" required>
                        </div>

                        <!-- Mother's Name & Occupation -->
                        <div class="col-md-6 mb-3">
                            <label for="mother_details">Mother's Name & Occupation <span class="required">*</span></label>
                            <input type="text" id="mother_details" name="mother_details" class="form-control" required>
                        </div>

                        <!-- Mother Tongue -->
                        <div class="col-md-6 mb-3">
                            <label for="mother_tongue">Mother Tongue</label>
                            <input type="text" id="mother_tongue" name="mother_tongue" class="form-control">
                        </div>

                        <!-- Guardian's Name -->
                        <div class="col-md-6 mb-3">
                            <label for="guardian_name">Guardian's Name <span class="required">*</span></label>
                            <input type="text" id="guardian_name" name="guardian_name" class="form-control" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="medical_history">Birth and Medical History –(In brief)</label>
                            <textarea id="medical_history" name="medical_history" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="last_school">Last School Attended</label>
                            <input type="text" id="last_school" name="last_school" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="previous_accademic">Previous Academic Level</label>
                            <input type="text" id="previous_accademic" name="previous_accademic" class="form-control">
                        </div>
                        <!-- File Upload -->
                        <div class="col-md-12 mb-3">
                            <label for="reports">Earlier reports (PLEASE ATTACH SEPARATELY) of assessment and students performance report of the school. Previously attended if any ;</label>
                            <input type="file" id="reports" name="reports" class="form-control">
                        </div>

                        <!-- Reasons & Referred By -->
                        <div class="col-md-12 mb-3">
                            <label for="reasons">Reasons for Approaching Our Center & Referred By</label>
                            <textarea id="reasons" name="reasons" class="form-control"></textarea>
                        </div>

                        <!-- Program to be Enrolled In -->
                        <div class="col-md-12 mb-3">
                            <label for="program">Program to be Enrolled in "AKSA"</label>
                            <select id="program" name="program" class="form-control" required>
                                <option value="">Select Program</option>
                                <option value="Early Intervention">Early Intervention</option>
                                <option value="Academics">Academics</option>
                                <option value="NIOS">NIOS</option>
                                <option value="Vocational">Vocational</option>
                                <option value="Physical Activities">Physical Activities</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <h6 class="text-dark">Note :</h6>
                            <ul>
                                <li class="text-dark">This is not an intake form.</li>
                                <li class="text-dark">Parents will be informed on the admission confirmation only after the child’s observation/evaluation.</li>
                                <li class="text-dark">If admission granted, the parents accept to abide the terms and conditions of ‘AKSA’.</li>
                                <li class="text-dark">Enclose the reports & current therapy services of the child. </li>
                            </ul>
                        </div>
                        <!-- Submit Button -->
                        <!-- <div class="col-12 col-md-6 d-flex justify-content-center">
                            <button type="submit">Submit</button>
                        </div> -->
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






<?php include('../layout/footer.php'); ?>