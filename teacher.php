<?php
require_once 'assets/php/functions/auth/authentication.php';
include_once 'assets/php/functions/data/get-data.php';
?>
<!DOCTYPE html>
<html data-bs-theme="light" id="vanta-bg" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Teacher - CSPS</title>
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
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can see your Dashboard." href="dashboard.php" style="color:#393939;"><i class="fas fa-home"></i> Home</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can manage your block." href="block.php" style="color:#393939;"><i class="fas fa-th-list"></i> Block</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can manage your course." href="course.php" style="color:#393939;"><i class="fas fa-book"></i>&nbsp;Course</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can manage your subjects." href="subjects.php" style="color:#393939;"><i class="fas fa-book"></i>&nbsp;Subject</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can manage your room." href="room.php" style="color:#393939;"><i class="fas fa-chalkboard"></i>&nbsp;Room</a></li>
                                <li class="nav-item"><a class="nav-link link-primary" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can manage your teachers." href="teacher.php" style="color:#393939;"><i class="fas fa-chalkboard-teacher"></i> Teacher</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can manage your users." href="users.php" style="color:#393939;"><i class="fas fa-user"></i> User</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can manage your schedules." href="schedule.php" style="color:#393939;"><i class="fas fa-clock"></i>&nbsp;Schedule</a></li>
                            </ul><a class="btn btn-light shadow" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="left" data-bs-original-title="Here you can logout your acccount." href="assets/php/functions/auth/sign-out.php">Logout</a>
                        </div>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Quick View</h3><a class="btn btn-primary btn-sm " role="button" href="#" data-bs-target="#add" data-bs-toggle="modal"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;ADD TEACHER</a>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 mb-4">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Teacher</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?= count_teacher() ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-book fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Teacher Management</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Teacher List</p>
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

    <div class="modal fade" role="dialog" tabindex="-1" id="add">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Teacher</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="container text-center"><img src="assets/img/icon.jpg" width="90px">
                        <p>Here you can add teacher info.</p>
                    </div>
                    <form action="assets/php/functions/teacher/add.php" id="add-form">
                        <div class="row g-3">
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" type="text" name="firstname" placeholder="Firstname" required=""><label class="form-label form-label form-label mx-1">Firstname</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" type="text" name="middlename" placeholder="Middlename" required=""><label class="form-label form-label form-label mx-1">Middlename</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" type="text" name="lastname" placeholder="Lastname" required=""><label class="form-label form-label form-label mx-1">Lastname</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" type="text" name="suffix" placeholder="Suffix"><label class="form-label form-label form-label mx-1">Suffix (Optional)</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" name="birthdate" placeholder="Birthdate" required="" type="date"><label class="form-label form-label form-label mx-1">Birthdate</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><select class="form-select form-select form-select form-select" name="sex">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select><label class="form-label form-label form-label mx-1">Sex</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><select class="form-select form-select form-select form-select" name="region" required="">
                                    <optgroup label="Select Region">
                                        <?php
                                        regions();
                                        ?>
                                    </optgroup>
                                </select><label class="form-label form-label form-label mx-1">Region</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><select class="form-select form-select form-select form-select" name="province" required="">
                                    <optgroup label="Select Province">
                                        <?php
                                        province();
                                        ?>
                                    </optgroup>
                                </select><label class="form-label form-label form-label mx-1">Province</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3">
                                <select class="form-select form-select form-select" name="municipality" required="">
                                    <optgroup label="Select Municipality">
                                        <?php
                                        municipality();
                                        ?>
                                    </optgroup>
                                </select><label class="form-label form-label form-label mx-1">Municipality / City</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3">
                                <select class="form-select form-select form-select" name="barangay" required="">
                                    <optgroup label="Select Barangay">
                                        <?php
                                        barangay();
                                        ?>
                                    </optgroup>
                                </select><label class="form-label form-label form-label mx-1">Barangay</label>
                            </div>
                            <div class="col-md-12 form-floating mb-3"><input class="form-control form-control" type="text" name="address" placeholder="address" required=""><label class="form-label form-label form-label mx-1">House No. / Street / Purok /</label>
                            </div>
                            <div class="col form-floating mb-3"><input class="form-control form-control" type="text" name="phone" placeholder="phone"><label class="form-label form-label form-label mx-1">Contact # No.</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="submit" data-bs-dismiss="modal">Save</button></div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" tabindex="-1" id="update">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Teacher</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="container text-center"><img src="assets/img/icon.jpg" width="90px">
                        <p>Here you can update teacher info.</p>
                    </div>
                    <form action="assets/php/functions/teacher/update.php" id="update-form">
                        <input type="hidden" name="id">
                        <div class="row g-3">
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" type="text" name="firstname" placeholder="Firstname" required=""><label class="form-label form-label form-label mx-1">Firstname</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" type="text" name="middlename" placeholder="Middlename" required=""><label class="form-label form-label form-label mx-1">Middlename</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" type="text" name="lastname" placeholder="Lastname" required=""><label class="form-label form-label form-label mx-1">Lastname</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" type="text" name="suffix" placeholder="Suffix"><label class="form-label form-label form-label mx-1">Suffix (Optional)</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" name="birthdate" placeholder="Birthdate" required="" type="date"><label class="form-label form-label form-label mx-1">Birthdate</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><select class="form-select form-select form-select form-select" name="sex">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select><label class="form-label form-label form-label mx-1">Sex</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><select class="form-select form-select form-select form-select" name="region" required="">
                                    <optgroup label="Select Region">
                                        <?php
                                        regions();
                                        ?>
                                    </optgroup>
                                </select><label class="form-label form-label form-label mx-1">Region</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><select class="form-select form-select form-select form-select" name="province" required="">
                                    <optgroup label="Select Province">
                                        <?php
                                        province();
                                        ?>
                                    </optgroup>
                                </select><label class="form-label form-label form-label mx-1">Province</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3">
                                <select class="form-select form-select form-select" name="municipality" required="">
                                    <optgroup label="Select Municipality">
                                        <?php
                                        municipality();
                                        ?>
                                    </optgroup>
                                </select><label class="form-label form-label form-label mx-1">Municipality / City</label>
                            </div>
                            <div class="col-md-3 form-floating mb-3">
                                <select class="form-select form-select form-select" name="barangay" required="">
                                    <optgroup label="Select Barangay">
                                        <?php
                                        barangay();
                                        ?>
                                    </optgroup>
                                </select><label class="form-label form-label form-label mx-1">Barangay</label>
                            </div>
                            <div class="col-md-12 form-floating mb-3"><input class="form-control form-control" type="text" name="address" placeholder="address" required=""><label class="form-label form-label form-label mx-1">House No. / Street / Purok /</label>
                            </div>
                            <div class="col form-floating mb-3"><input class="form-control form-control" type="text" name="phone" placeholder="phone"><label class="form-label form-label form-label mx-1">Contact # No.</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="submit" data-bs-dismiss="modal">Save</button></div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" tabindex="-1" id="remove">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Course</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="assets/php/functions/teacher/delete.php" id="remove-form">
                        <input type="hidden" name="id">
                        <div class="container text-center"><img src="assets/img/icon.jpg" width="90px">
                        <p>Are you sure want to remove this teacher?</p>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-primary" type="button" data-bs-dismiss="modal">No</button><button class="btn btn-danger" type="submit" data-bs-dismiss="modal">Yes</button></div>
            </form>
            </div>
        </div>
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
    <script src="assets/js/functions/get-data.js"></script>
    <script src="assets/js/functions/teacher-main.js"></script>
</body>

</html>