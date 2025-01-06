<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Added Pending</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public/css/student_profile.css')?>">

</head>


<body>
    <!-- <div id="longbar"></div> -->
    <div class="container-fluid">

        <div class="">
            <!-- Sidebar -->

            <div class="col-md-3 sidebar">
                <div class="text-center mb-5">
                    <img src="<?= base_url('public/images/ayitilogo2.png'); ?>" alt="Logo" class="img-fluid" style="max-width: 100px;">
                </div>
                <a href="<?= base_url('dashboard')?>" ><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                <a href="<?= base_url('active_students')?>"><i class="fas fa-user-check"></i> Active Students</a>
                <a href="<?= base_url('inactive_students')?>" class="inactive"><i class="fas fa-user-check"></i> Inactive Students</a>
                <a href="<?= base_url('pending_students')?>"><i class="fas fa-user-clock"></i> Pending Students</a>
                <a href="<?= base_url('admin/logout')?>" class="text-danger"><i class="fas fa-sign-out-alt"></i> Log out</a>

            </div>
        </div>

        <!-- Header Section -->
        <section class="display">
            <div class="header">
                <div class="profile-picture">
                    <img src="<?=base_url('public/images/student.jpg')?>" alt="Profile Picture" style="width: 100%; height: 100%;">
                </div>
                <div class="profile-info">
                    <div class="student-name"><?= esc($student['fullname']) ?></div>
                    <div class="status-badge"><?= esc($student['status']) . " Student" ?></div>
                </div>
            </div>
            <div class="info">
                <!-- Profile Details -->
                <div class="info-1">
                    <div class="card profile">
                        <div class="card-header">Profile Details</div>
                        <div class="detail-item">Phone Number: <span><?= esc($student['phonenumber']) ?></span></div>
                        <div class="detail-item">Gender: <span><?= esc($student['gender']) ?></span></div>
                        <div class="detail-item">
                            <p>Address: </p><span class="address" id="profile-address">
                                <p><?= esc($student['address']) ?></p>
                            </span>
                        </div>
                    </div>

                    <!-- Guardian Details -->
                    <div class="card guardian">
                        <div class="card-header">Guardian Details</div>
                        <div class="detail-item guard-line">
                            Phone Number:
                            <span><?= esc($student['guardian_phone']) ?></span>
                        </div>
                        <div class="detail-item">
                            <p>Address: </p><span class="address" id="guardian-address">
                                <p><?= esc($student['guardian_address']) ?></p>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Question Section -->
                <div class="info-2">
                    <div class="question-section">
                        <div class="question-answer">
                            <span id="question">Can you read or write?</span>
                            <span id="answer"><?= esc($student['literacy']) ?></span>
                        </div>
                    </div>

                    <!-- Beneficiary Story Section -->
                    <div class="story-section">
                        <div class="story-header">Beneficiary Story</div>
                        <span id="story">
                            <div><?= esc($student['story']) ?>
                            </div>
                        </span>
                    </div>

                    <!-- Action Buttons -->
                    <div class="actions">
                        <a href="<?= base_url('approve/' . $student['id']) ?>"><button id="approve-btn">Approve</button></a>
                        <a href="<?= base_url('decline/' . $student['id']) ?>"><button id="decline-btn">Decline</button></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
</body>

</html>