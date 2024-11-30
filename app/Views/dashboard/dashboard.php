<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/css/dashboard.css'); ?>">


</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar">
                <div class="text-center mb-5">
                    <img src="<?= base_url('public/images/ayitilogo2.png'); ?>" alt="Logo" class="img-fluid" style="max-width: 100px;">
                </div>
                <a href="<?= base_url('dashboard')?>" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                <a href="<?= base_url('active_students')?>"><i class="fas fa-user-check"></i> Active Students</a>
                <a href="<?= base_url('pending_students')?>"><i class="fas fa-user-clock"></i> Pending Students</a>
                <a href="#" class="text-danger"><i class="fas fa-sign-out-alt"></i> Log out</a>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 content">
                <div class="dashboard-header mb-4">Admin Dashboard</div>

                <div class="d-flex justify-content-between row mb-4">
                    <div class="col-md-3">
                        <div class="stat-box">
                            Total Active Students (120)
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-box">
                            Total Pending Students (120)
                        </div>
                    </div>
                </div>

                <!-- Pending Students Section -->
                <div class="card">
                    <div class="text-center">
                        <div class="pending-students-header">
                            Pending Students
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- "Name" title below "Pending Students" -->
                        <div class="name-title">Name</div>
                        <?php if (!empty($students)) : ?>
                            <?php foreach ($students as $student) : ?>
                        <div class="student-card d-flex justify-content-between align-items-center">
                            <span><?= $student['fullname'];?></span>
                            <button>View</button>
                        </div>
                        <!-- <div class="student-card d-flex justify-content-between align-items-center">
                            <span>Favour Okoh Blessing</span>
                            <button>View</button>
                        </div>
                        <div class="student-card d-flex justify-content-between align-items-center">
                            <span>Favour Okoh Blessing</span>
                            <button>View</button>
                        </div> -->
                        <?php endforeach; ?>

                        <?php else : ?>
                            <div class="student-card d-flex justify-content-between align-items-center">
                                <span>No students found.</span>
                                
                            </div>
                            <!-- <tr>
                                <td colspan="5" class="text-center">No students found.</td>
                            </tr> -->
                        <?php endif; ?>

                        <div class="text-left mt-3">
                            <a href="<?=base_url('pending_students')?>">
                                <button class="view-all-button">View All</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
