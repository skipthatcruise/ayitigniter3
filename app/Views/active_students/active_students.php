<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public/css/active_students.css')?>">
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
                <a href="<?= base_url('active_students')?>" class="active"><i class="fas fa-user-check"></i> Active Students</a>
                <a href="<?= base_url('pending_students')?>"><i class="fas fa-user-clock"></i> Pending Students</a>
                <a href="#" class="text-danger"><i class="fas fa-sign-out-alt"></i> Log out</a>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 content">
                <div class="dashboard-header mb-4">ACTIVE STUDENTS</div>

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
                        <div class="st-card row student-card">
                            <div class="col-md-3"><a href="">Favour Okoh</a></div>
                            <div class="col-md-3">favour@gmail.com</div>
                            <div class="col-md-2">
                                <span class="">Approved</span>
                            </div>
                            <div class="col-md-2">01/01/2023</div>
                            <div class="col-md-2">
                                <button class="btn btn-danger btn-sm w-100">Unapprove</button>
                            </div>
                        </div>

                        <!-- Student Card 2 -->
                        <div class="st-card row student-card">
                            <div class="col-md-3"><a href="">John Doe</a></div>
                            <div class="col-md-3">john@gmail.com</div>
                            <div class="col-md-2">
                                <span class="">Unapproved</span>
                            </div>
                            <div class="col-md-2">05/02/2023</div>
                            <div class="col-md-2">
                                <button class="btn btn-success btn-sm w-100">Approve</button>
                            </div>
                        </div>

                        <!-- Student Card 3 -->
                        <div class="st-card row student-card">
                            <div class="col-md-3"><a href="">Jane Smith</a></div>
                            <div class="col-md-3">jane@gmail.com</div>
                            <div class="col-md-2">
                                <span class="">Unapproved</span>
                            </div>
                            <div class="col-md-2">15/03/2023</div>
                            <div class="col-md-2">
                                <button class="btn btn-success btn-sm w-100">Approve</button>
                            </div>
                        </div>

                         <!-- Student Card 4 -->
                         <div class="st-card row student-card">
                            <div class="col-md-3"><a href="">Jane Smith</a></div>
                            <div class="col-md-3">jane@gmail.com</div>
                            <div class="col-md-2">
                                <span class="">Approved</span>
                            </div>
                            <div class="col-md-2">15/03/2023</div>
                            <div class="col-md-2">
                                <button class="btn btn-danger btn-sm w-100">Unapprove</button>
                            </div>
                        </div>
                        
                          <!-- Student Card 5 -->
                        <div class="st-card row student-card">
                            <div class="col-md-3"><a href="">Favour Okoh</a></div>
                            <div class="col-md-3">favour@gmail.com</div>
                            <div class="col-md-2">
                                <span class="">Approved</span>
                            </div>
                            <div class="col-md-2">01/01/2023</div>
                            <div class="col-md-2">
                                <button class="btn btn-danger btn-sm w-100">Unapprove</button>
                            </div>
                        </div>

                        <!-- Student Card 6 -->
                        <div class="st-card row student-card">
                            <div class="col-md-3"><a href="">John Doe</a></div>
                            <div class="col-md-3">john@gmail.com</div>
                            <div class="col-md-2">
                                <span class="">Unapproved</span>
                            </div>
                            <div class="col-md-2">05/02/2023</div>
                            <div class="col-md-2">
                                <button class="btn btn-success btn-sm w-100">Approve</button>
                            </div>
                        </div>

                        <!-- Student Card 7 -->
                        <div class="st-card row student-card">
                            <div class="col-md-3"><a href="">Jane Smith</a></div>
                            <div class="col-md-3">jane@gmail.com</div>
                            <div class="col-md-2">
                                <span class="">Unapproved</span>
                            </div>
                            <div class="col-md-2">15/03/2023</div>
                            <div class="col-md-2">
                                <button class="btn btn-success btn-sm w-100">Approve</button>
                            </div>
                        </div>

                         <!-- Student Card 8 -->
                         <div class="st-card row student-card">
                            <div class="col-md-3"><a href="">Jane Smith</a></div>
                            <div class="col-md-3">jane@gmail.com</div>
                            <div class="col-md-2">
                                <span class="">Approved</span>
                            </div>
                            <div class="col-md-2">15/03/2023</div>
                            <div class="col-md-2">
                                <button class="btn btn-danger btn-sm w-100">Unapprove</button>
                            </div>
                        </div>

                        
                        <!-- Student Card 9 -->
                        <div class="st-card row student-card">
                            <div class="col-md-3"><a href="">Jane Smith</a></div>
                            <div class="col-md-3">jane@gmail.com</div>
                            <div class="col-md-2">
                                <span class="">Unapproved</span>
                            </div>
                            <div class="col-md-2">15/03/2023</div>
                            <div class="col-md-2">
                                <button class="btn btn-success btn-sm w-100">Approve</button>
                            </div>
                        </div>

                         <!-- Student Card 10 -->
                         <div class="st-card row student-card">
                            <div class="col-md-3"><a href="">Jane Smith</a></div>
                            <div class="col-md-3">jane@gmail.com</div>
                            <div class="col-md-2">
                                <span class="">Approved</span>
                            </div>
                            <div class="col-md-2">15/03/2023</div>
                            <div class="col-md-2">
                                <button class="btn btn-danger btn-sm w-100">Unapprove</button>
                            </div>
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
