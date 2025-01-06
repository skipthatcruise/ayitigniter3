<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public/css/pending_students.css')?>">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar">
                <div class="text-center mb-5">
                    <img src="<?= base_url('public/images/ayitilogo2.png'); ?>" alt="Logo" class="img-fluid" style="max-width: 100px;">
                </div>
                <a href="<?= base_url('dashboard')?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                <a href="<?= base_url('active_students')?>"><i class="fas fa-user-check"></i> Active Students</a>
                <a href="<?= base_url('inactive_students')?>" class="inactive"><i class="fas fa-user-check"></i> Inactive Students</a>
                <a href="<?= base_url('pending_students')?>" class="active"><i class="fas fa-user-clock"></i> Pending Students</a>
                <a href="<?= base_url('admin/logout')?>" class="text-danger"><i class="fas fa-sign-out-alt"></i> Log out</a>
            </div>
        </div>
        <!-- Main Content -->
        <div class="col-md-9 content">
            <div class="dashboard-header mb-4">PENDING STUDENTS</div>

            <!-- Search and Export CSV Section -->
            <div class="stat-box">
                <div class="search-box">
                    <input type="search" placeholder="Search Students by Name">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="export-csv">
                    <a href="">Export CSV</a>
                    <img src="<?=base_url('public/images/export.png')?>" alt="Export Icon">
                </div>
            </div>

           <!-- Student List Section -->
           <div class="card mt-4">
                <div class="card-body">
                    <!-- Column Titles -->
                    <div class="st-header row page-1 student-list-header">
                        <div class="col-md-3"><strong>Name</strong></div>
                        <div class="col-md-3"><strong>Email</strong></div>
                        <!-- <div class="col-md-2"><strong>Status</strong></div> -->
                        <div class="col-md-2"><strong>Registered Date</strong></div>
                        <div class="col-md-2 ">Action</div>
                    </div>


                      <!-- Dynamic Student List -->
                      <?php if (!empty($students)): ?>
                        <?php foreach ($students as $student): ?>
                            <div class="st-card row student-card">
                                <div class="col-md-3">
                                    <a href="<?= base_url('student_profile/' . $student['id']) ?>"><?= $student['fullname'] ?></a>
                                </div>
                                <div class="col-md-3"><?= $student['email'] ?></div>
                                <div class="col-md-2"><?= date('d/m/Y', strtotime($student['registered_date'])) ?></div>
                                <div class="col-md-2">
                                    <div class="pending-badge"><?= $student['status'] ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="text-center mt-3">No pending students found.</div>
                    <?php endif; ?>

                    </div>
                </div>
                <div class="pagin text-center mt-3">
                    <button id="prevPage" disabled>Prev Page ></button>
                    <span>&nbsp 1-2 of 2 &nbsp &nbsp</span>
                    <button id="nextPage">Next Page ></button>
            </div>
            </div>
        </div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="./js/script.js"></script>

</body>

</html>