<?= view('templates/header', ['title' => 'Registration']) ?>


    <!-- Form Title Centered and Upload Image Aligned Left -->
    <div class="d-flex align-items-center justify-content-between mb-4">
        <!-- Image Upload Section Aligned Left -->
         <!-- Form Section -->
    <form action="<?= site_url('registration/save') ?>" method="post" enctype = "multipart/form-data">
        <div class="upload-image">

            <span>Upload image</span>
            <input type="file" name = "image" accept="image/*" required>
        </div>

        <!-- Registration Form Title Centered with the new style -->
        <h2 class="form-title flex-grow-1 text-center">Registration Form</h2>
    </div>

    <!-- Form Section -->
    <!-- <form action="" method="post"> -->
 
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="fullName" class="form-label">Full Name *</label>
                <input name="fullname" type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
            </div>
            <div class="col-md-6">
                <label for="phoneNumber" class="form-label">Phone Number *</label>
                <input name="phonenumber" type="tel" class="form-control" id="phoneNumber" placeholder="Enter your phone number" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="address" class="form-label">Home Address *</label>
                <input name="address" type="text" class="form-control" id="address" placeholder="Enter your address" required>
            </div>
            

            <div class="col-md-6">
                <label for="email" class="form-label">Email *</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter guardian's address">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Gender *</label>
                <div class="d-flex">
                    <div class="form-check me-4">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female"  required>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label">Can you read and write?</label>
                <div class="d-flex">
                    <div class="form-check me-4">
                        <input class="form-check-input" type="radio" name="literacy" value="yes"  id="yes" required>
                        <label class="form-check-label" for="yes">Yes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="literacy" value="no"  id="no" required>
                        <label class="form-check-label" for="no">No</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="guardianPhone" class="form-label">Guardian Phone Number *</label>
                <input type="tel" name="guardian_phone" class="form-control" id="guardianPhone" placeholder="Enter guardian's phone number" required>
            </div>
            <div class="col-md-6">
                <label for="guardianAddress" class="form-label">Guardian Address</label>
                <input type="text" name="guardian_address" class="form-control" id="guardianAddress" placeholder="Enter guardian's address">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <label for="story" class="form-label">Beneficiary Story *</label>
                <textarea name="story" class="form-control" id="story" rows="5" placeholder="Enter your story" required></textarea>
            </div>
        </div>

        <!-- Centering the submit button -->
        <div class="submit-button-container">
            <button name="submit" value="submit" type="submit" class="btn">Submit</button>
        </div>
    
    </form>

    <!-- Bootstrap JS -->elivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsd


    <?= view('templates/footer') ?>