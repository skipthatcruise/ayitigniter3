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
                <a href="<?= base_url('active_students')?>" ><i class="fas fa-user-check"></i> Active Students</a>
                <a href="<?= base_url('pending_students')?>" class="active"><i class="fas fa-user-clock"></i> Pending Students</a>
                <a href="#" class="text-danger"><i class="fas fa-sign-out-alt"></i> Log out</a>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 content">
                <div class="dashboard-header mb-4">PENDING STUDENTS</div>

                <!-- Search and Export CSV Section -->
                <div class="stat-box">
                    <input type="search" placeholder="Search Students by Name">
                    <div class="export-csv">
                        <a href="">Export CSV
                            <img src="<?=base_url('public/images/search.png')?>" alt="Export Icon">
                        </a>
                    </div>
                </div>

                <!-- Student List Section -->
                <div class="card mt-4">
                    <div class="card-body">
                        <!-- Column Titles -->
                        <div class="st-header row student-list-header">
                            <div class="col-md-3"><strong>Name</strong></div>
                            <div class="col-md-3"><strong>Email</strong></div>
                            <div class="col-md-2"><strong>Status</strong></div>
                            <div class="col-md-2"><strong>Registered Date</strong></div>
                            <div class="col-md-2 ">Action</div>
                        </div>

                        <!-- Student Card 1 -->
                        <div class="st-card">
                                    <?php if (!empty($students) && is_array($students)): ?>
                    <?php foreach ($students as $student): ?>
                        <div class="row student-card mb-3 p-2 border rounded align-items-center">
                            <!-- Full Name -->
                            <div class="col-md-3">
                                <a href="#" class="text-decoration-none">
                                    <?= esc($student['fullname']) ?>
                                </a>
                            </div>
                            
                            <!-- Email -->
                            <div class="col-md-3">
                                <?= esc($student['email']) ?>
                            </div>
                            
                            <!-- Status -->
                            <div class="col-md-2">
                                <span class=""><?= $student['status'] ?? 'Pending' ?></span>
                            </div>
                            
                            <!-- Registered Date -->
                            <div class="col-md-2">
                                <?= esc(date('d/m/Y', strtotime($student['registered_date']))) ?>
                            </div>
                            
                            <!-- Action Button -->
                            <div class="col-md-2">
                                <?php if ($student['status'] == 'Approved'): ?>
                                    <button class="btn btn-danger btn-sm w-100">Unapprove</button>
                                <?php else: ?>
                                    <button class="btn btn-success btn-sm w-100">Approve</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="text-muted">No pending students found.</p>
                        </div>
                    </div>
                <?php endif; ?>
                                    </div>

                        

                        

                        
                    </div>
                </div>
                <div class="pagin text-center mt-3">
                    <span>1-10 of 120 &nbsp &nbsp</span>
                    <a href="">Next Page ></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
