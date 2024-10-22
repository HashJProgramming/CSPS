<?php
require_once 'assets/php/functions/auth/authentication.php';
include_once 'assets/php/functions/data/get-data.php';
?>
<!DOCTYPE html>
<html data-bs-theme="light" id="vanta-bg" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - CSPS</title>
    <link rel="icon" type="image/png" sizes="480x480" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Nunito.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Articles-Cards-images.css">
    <link rel="stylesheet" href="assets/css/Change-Password-floating-Label.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean-icons.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper" style="background: rgba(255,255,255,0);">
            <div id="content">
                <nav class="navbar navbar-expand-lg shadow navbar-light mb-4">
                    <div class="container-fluid"><img class="mx-2" src="assets/img/icon.png" width="60em"><a class="navbar-brand d-flex align-items-center" href="/"><span class="d-none d-md-block"><strong>Class Schedule Plotting System</strong></span><span class="d-block d-md-none"><strong>CSPS</strong></span></a><button data-bs-toggle="collapse" data-bs-target="#navcol-1" class="navbar-toggler"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item"><a class="nav-link link-primary" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can see your Dashboard." href="dashboard.php" style="color:#393939;"><i class="fas fa-home"></i> Home</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can manage your block." href="block.php" style="color:#393939;"><i class="fas fa-th-list"></i> Block</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can manage your course." href="course.php" style="color:#393939;"><i class="fas fa-book"></i>&nbsp;Course</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can manage your subjects." href="subjects.php" style="color:#393939;"><i class="fas fa-book"></i>&nbsp;Subject</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can manage your room." href="room.php" style="color:#393939;"><i class="fas fa-chalkboard"></i>&nbsp;Room</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can manage your teachers." href="teacher.php" style="color:#393939;"><i class="fas fa-chalkboard-teacher"></i> Teacher</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can manage your users." href="users.php" style="color:#393939;"><i class="fas fa-user"></i> User</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can manage your schedules." href="schedule.php" style="color:#393939;"><i class="fas fa-clock"></i>&nbsp;Schedule</a></li>
                            </ul><a class="btn btn-light shadow" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="left" data-bs-original-title="Here you can logout your acccount." href="assets/php/functions/auth/sign-out.php">Logout</a>
                        </div>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Quick View</h3>
                    </div>
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>TEACHERS</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?= count_teacher() ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-user-friends fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>BLOCK</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?= count_block() ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-book fa-2x text-gray-300" style="font-size: 33px;"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>COURSE</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?= count_course() ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-book fa-2x text-gray-300" style="font-size: 33px;"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Subjects</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?= count_subject() ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-book fa-2x text-gray-300" style="font-size: 33px;"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>rooms</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?= count_room() ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-book fa-2x text-gray-300" style="font-size: 33px;"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Schedules</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Today Schedule List</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                <table class="table table-hover table-bordered my-0" id="dataTable">
                                    <thead>
                                        
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                    <tfoot>
                                        
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/three.min.js"></script>
    <script src="assets/js/vanta.waves.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/vanta-background.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/functions/dashboard-main.js"></script>
</body>

</html>