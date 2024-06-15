<!DOCTYPE html>
<html data-bs-theme="light" id="vanta-bg" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="icon" type="image/png" sizes="480x480" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Nunito.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Articles-Cards-images.css">
    <link rel="stylesheet" href="assets/css/Change-Password-floating-Label.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean-icons.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper" style="background: rgba(255,255,255,0);">
            <div id="content">
                <nav class="navbar navbar-expand-lg shadow navbar-light mb-4">
                    <div class="container-fluid"><img class="mx-2" src="assets/img/icon.png" width="60em"><a class="navbar-brand d-flex align-items-center" href="/"><span class="d-none d-md-block"><strong>Class Schedule Plotting System</strong></span><span class="d-block d-md-none"><strong>CSPS</strong></span></a><button data-bs-toggle="collapse" data-bs-target="#navcol-1" class="navbar-toggler"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item"><a class="nav-link link-primary" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can see your Dashboard." href="dashboard.html" style="color:#393939;"><i class="fas fa-home"></i> Home</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can see your Sales &amp; Transactions." href="block.html" style="color:#393939;"><i class="fas fa-th-list"></i> Block</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can see your Sales &amp; Transactions." href="course.html" style="color:#393939;"><i class="fas fa-book"></i>&nbsp;Course</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can see your Sales &amp; Transactions." href="subjects.html" style="color:#393939;"><i class="fas fa-book"></i>&nbsp;Subject</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can see your Sales &amp; Transactions." href="room.html" style="color:#393939;"><i class="fas fa-chalkboard"></i>&nbsp;Room</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can see your Sales &amp; Transactions." href="teacher.html" style="color:#393939;"><i class="fas fa-chalkboard-teacher"></i> Teacher</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can see your Sales &amp; Transactions." href="users.html" style="color:#393939;"><i class="fas fa-user"></i> User</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" data-bs-original-title="Here you can see your Sales &amp; Transactions." href="schedule.html" style="color:#393939;"><i class="fas fa-clock"></i>&nbsp;Schedule</a></li>
                            </ul><a class="btn btn-light shadow" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="left" data-bs-original-title="Here you can logout your acccount." href="index.html">Logout</a>
                        </div>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Quick View</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#" data-bs-target="#add" data-bs-toggle="modal"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;ADD TEACHER</a>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 mb-4">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Teacher</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>0</span></div>
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
                            <p class="text-primary m-0 fw-bold">Users Lists</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                <table class="table table-hover table-bordered my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>NAME</th>
                                            <th>ADDRESS</th>
                                            <th>CONTACT#</th>
                                            <th class="text-center">OPTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">Airi Satou</td>
                                            <td>33</td>
                                            <td>$162,700</td>
                                            <td class="text-center">
                                                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">Action</button>
                                                    <div class="dropdown-menu"><a class="dropdown-item" href="#" data-bs-target="#update" data-bs-toggle="modal">Update</a><a class="dropdown-item" href="#" data-bs-target="#remove" data-bs-toggle="modal">Delete</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>NAME</strong></td>
                                            <td><strong>DESCRIPTION</strong></td>
                                            <td><strong>CRATED</strong></td>
                                            <td class="text-center"><strong>OPTION</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
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
                    <form>
                        <div class="row g-3">
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" type="text" name="firstname" placeholder="Firstname" required=""><label class="form-label form-label form-label mx-1">Firstname</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" type="text" name="middlename" placeholder="Middlename" required=""><label class="form-label form-label form-label mx-1">Middlename</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" type="text" name="lastname" placeholder="Lastname" required=""><label class="form-label form-label form-label mx-1">Lastname</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" type="text" name="suffix" placeholder="Suffix"><label class="form-label form-label form-label mx-1">Suffix (Optional)</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" name="birthdate" placeholder="Birthdate" required="" type="date"><label class="form-label form-label form-label mx-1">Birthdate</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><select class="form-select form-select form-select form-select" name="sex">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select><label class="form-label form-label form-label mx-1">Sex</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><select class="form-select form-select form-select form-select" name="region" required="">
                                    <optgroup label="Select Region">
                                        <option value="01">REGION I (ILOCOS REGION)</option>
                                        <option value="02">REGION II (CAGAYAN VALLEY)</option>
                                        <option value="03">REGION III (CENTRAL LUZON)</option>
                                        <option value="04">REGION IV-A (CALABARZON)</option>
                                        <option value="17">REGION IV-B (MIMAROPA)</option>
                                        <option value="05">REGION V (BICOL REGION)</option>
                                        <option value="06">REGION VI (WESTERN VISAYAS)</option>
                                        <option value="07">REGION VII (CENTRAL VISAYAS)</option>
                                        <option value="08">REGION VIII (EASTERN VISAYAS)</option>
                                        <option value="09" selected="">REGION IX (ZAMBOANGA PENINSULA)</option>
                                        <option value="10">REGION X (NORTHERN MINDANAO)</option>
                                        <option value="11">REGION XI (DAVAO REGION)</option>
                                        <option value="12">REGION XII (SOCCSKSARGEN)</option>
                                        <option value="13">NATIONAL CAPITAL REGION (NCR)</option>
                                        <option value="14">CORDILLERA ADMINISTRATIVE REGION (CAR)</option>
                                        <option value="15">AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)</option>
                                        <option value="16">REGION XIII (Caraga)</option>
                                    </optgroup>
                                </select><label class="form-label form-label form-label mx-1">Region</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><select class="form-select form-select form-select form-select" name="province" required="">
                                    <option value="0972">ZAMBOANGA DEL NORTE</option>
                                    <option value="0973">ZAMBOANGA DEL SUR</option>
                                    <option value="0983">ZAMBOANGA SIBUGAY</option>
                                    <option value="0997">CITY OF ISABELA</option>
                                </select><label class="form-label form-label form-label mx-1">Province</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><select class="form-select form-select form-select form-select" name="municipality" required="">
                                    <option value="097302">AURORA</option>
                                    <option value="097303">BAYOG</option>
                                    <option value="097305">DIMATALING</option>
                                    <option value="097306">DINAS</option>
                                    <option value="097307">DUMALINAO</option>
                                    <option value="097308">DUMINGAG</option>
                                    <option value="097311">KUMALARANG</option>
                                    <option value="097312">LABANGAN</option>
                                    <option value="097313">LAPUYAN</option>
                                    <option value="097315">MAHAYAG</option>
                                    <option value="097317">MARGOSATUBIG</option>
                                    <option value="097318">MIDSALIP</option>
                                    <option value="097319">MOLAVE</option>
                                    <option value="097322">PAGADIAN CITY (Capital)</option>
                                    <option value="097323">RAMON MAGSAYSAY (LIARGO)</option>
                                    <option value="097324">SAN MIGUEL</option>
                                    <option value="097325">SAN PABLO</option>
                                    <option value="097327">TABINA</option>
                                    <option value="097328">TAMBULIG</option>
                                    <option value="097330">TUKURAN</option>
                                    <option value="097332">ZAMBOANGA CITY</option>
                                    <option value="097333">LAKEWOOD</option>
                                    <option value="097337">JOSEFINA</option>
                                    <option value="097338">PITOGO</option>
                                    <option value="097340">SOMINOT (DON MARIANO MARCOS)</option>
                                    <option value="097341">VINCENZO A. SAGUN</option>
                                    <option value="097343">GUIPOS</option>
                                    <option value="097344">TIGBAO</option>
                                </select><label class="form-label form-label form-label mx-1">Municipality / City</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><select class="form-select form-select form-select form-select" name="barangay" required="">
                                    <option value="097322001">Alegria</option>
                                    <option value="097322002">Balangasan (Pob.)</option>
                                    <option value="097322003">Balintawak</option>
                                    <option value="097322004">Baloyboan</option>
                                    <option value="097322005">Banale</option>
                                    <option value="097322006">Bogo</option>
                                    <option value="097322007">Bomba</option>
                                    <option value="097322010">Buenavista</option>
                                    <option value="097322011">Bulatok</option>
                                    <option value="097322012">Bulawan</option>
                                    <option value="097322013">Danlugan</option>
                                    <option value="097322014">Dao</option>
                                    <option value="097322015">Datagan</option>
                                    <option value="097322016">Deborok</option>
                                    <option value="097322017">Ditoray</option>
                                    <option value="097322018">Gatas (Pob.)</option>
                                    <option value="097322019">Gubac</option>
                                    <option value="097322020">Gubang</option>
                                    <option value="097322021">Kagawasan</option>
                                    <option value="097322022">Kahayagan</option>
                                    <option value="097322023">Kalasan</option>
                                    <option value="097322024">La Suerte</option>
                                    <option value="097322025">Lala</option>
                                    <option value="097322026">Lapidian</option>
                                    <option value="097322027">Lenienza</option>
                                    <option value="097322028">Lizon Valley</option>
                                    <option value="097322029">Lourdes</option>
                                    <option value="097322030">Lower Sibatang</option>
                                    <option value="097322031">Lumad</option>
                                    <option value="097322032">Macasing</option>
                                    <option value="097322033">Manga</option>
                                    <option value="097322034">Muricay</option>
                                    <option value="097322035">Napolan</option>
                                    <option value="097322036">Palpalan</option>
                                    <option value="097322037">Pedulonan</option>
                                    <option value="097322038">Poloyagan</option>
                                    <option value="097322039">San Francisco (Pob.)</option>
                                    <option value="097322040">San Jose (Pob.)</option>
                                    <option value="097322041">San Pedro (Pob.)</option>
                                    <option value="097322042">Santa Lucia (Pob.)</option>
                                    <option value="097322043">Santiago (Pob.)</option>
                                    <option value="097322044">Tawagan Sur</option>
                                    <option value="097322045">Tiguma</option>
                                    <option value="097322046">Tuburan (Pob.)</option>
                                    <option value="097322047">Tulawas</option>
                                    <option value="097322048">Tulangan</option>
                                    <option value="097322050">Upper Sibatang</option>
                                    <option value="097322051">White Beach</option>
                                    <option value="097322052">Kawit</option>
                                    <option value="097322053">Lumbia</option>
                                    <option value="097322054">Santa Maria</option>
                                    <option value="097322055">Santo Niño</option>
                                    <option value="097322056">Dampalan</option>
                                    <option value="097322057">Dumagoc</option>
                                </select><label class="form-label form-label form-label mx-1">Barangay</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-12 form-floating mb-3"><input class="form-control form-control" type="text" name="purok" placeholder="Religion" required=""><label class="form-label form-label form-label mx-1">House No. / Street / Purok /</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col form-floating mb-3"><input class="form-control form-control" type="text" name="watcher_phone" placeholder="Watcher Phone Number"><label class="form-label form-label form-label mx-1">Contact # No.</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
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
                    <form>
                        <div class="row g-3">
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" type="text" name="firstname" placeholder="Firstname" required=""><label class="form-label form-label form-label mx-1">Firstname</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" type="text" name="middlename" placeholder="Middlename" required=""><label class="form-label form-label form-label mx-1">Middlename</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" type="text" name="lastname" placeholder="Lastname" required=""><label class="form-label form-label form-label mx-1">Lastname</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" type="text" name="suffix" placeholder="Suffix"><label class="form-label form-label form-label mx-1">Suffix (Optional)</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><input class="form-control form-control" name="birthdate" placeholder="Birthdate" required="" type="date"><label class="form-label form-label form-label mx-1">Birthdate</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><select class="form-select form-select form-select form-select" name="sex">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select><label class="form-label form-label form-label mx-1">Sex</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><select class="form-select form-select form-select form-select" name="region" required="">
                                    <optgroup label="Select Region">
                                        <option value="01">REGION I (ILOCOS REGION)</option>
                                        <option value="02">REGION II (CAGAYAN VALLEY)</option>
                                        <option value="03">REGION III (CENTRAL LUZON)</option>
                                        <option value="04">REGION IV-A (CALABARZON)</option>
                                        <option value="17">REGION IV-B (MIMAROPA)</option>
                                        <option value="05">REGION V (BICOL REGION)</option>
                                        <option value="06">REGION VI (WESTERN VISAYAS)</option>
                                        <option value="07">REGION VII (CENTRAL VISAYAS)</option>
                                        <option value="08">REGION VIII (EASTERN VISAYAS)</option>
                                        <option value="09" selected="">REGION IX (ZAMBOANGA PENINSULA)</option>
                                        <option value="10">REGION X (NORTHERN MINDANAO)</option>
                                        <option value="11">REGION XI (DAVAO REGION)</option>
                                        <option value="12">REGION XII (SOCCSKSARGEN)</option>
                                        <option value="13">NATIONAL CAPITAL REGION (NCR)</option>
                                        <option value="14">CORDILLERA ADMINISTRATIVE REGION (CAR)</option>
                                        <option value="15">AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)</option>
                                        <option value="16">REGION XIII (Caraga)</option>
                                    </optgroup>
                                </select><label class="form-label form-label form-label mx-1">Region</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><select class="form-select form-select form-select form-select" name="province" required="">
                                    <option value="0972">ZAMBOANGA DEL NORTE</option>
                                    <option value="0973">ZAMBOANGA DEL SUR</option>
                                    <option value="0983">ZAMBOANGA SIBUGAY</option>
                                    <option value="0997">CITY OF ISABELA</option>
                                </select><label class="form-label form-label form-label mx-1">Province</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><select class="form-select form-select form-select form-select" name="municipality" required="">
                                    <option value="097302">AURORA</option>
                                    <option value="097303">BAYOG</option>
                                    <option value="097305">DIMATALING</option>
                                    <option value="097306">DINAS</option>
                                    <option value="097307">DUMALINAO</option>
                                    <option value="097308">DUMINGAG</option>
                                    <option value="097311">KUMALARANG</option>
                                    <option value="097312">LABANGAN</option>
                                    <option value="097313">LAPUYAN</option>
                                    <option value="097315">MAHAYAG</option>
                                    <option value="097317">MARGOSATUBIG</option>
                                    <option value="097318">MIDSALIP</option>
                                    <option value="097319">MOLAVE</option>
                                    <option value="097322">PAGADIAN CITY (Capital)</option>
                                    <option value="097323">RAMON MAGSAYSAY (LIARGO)</option>
                                    <option value="097324">SAN MIGUEL</option>
                                    <option value="097325">SAN PABLO</option>
                                    <option value="097327">TABINA</option>
                                    <option value="097328">TAMBULIG</option>
                                    <option value="097330">TUKURAN</option>
                                    <option value="097332">ZAMBOANGA CITY</option>
                                    <option value="097333">LAKEWOOD</option>
                                    <option value="097337">JOSEFINA</option>
                                    <option value="097338">PITOGO</option>
                                    <option value="097340">SOMINOT (DON MARIANO MARCOS)</option>
                                    <option value="097341">VINCENZO A. SAGUN</option>
                                    <option value="097343">GUIPOS</option>
                                    <option value="097344">TIGBAO</option>
                                </select><label class="form-label form-label form-label mx-1">Municipality / City</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-3 form-floating mb-3"><select class="form-select form-select form-select form-select" name="barangay" required="">
                                    <option value="097322001">Alegria</option>
                                    <option value="097322002">Balangasan (Pob.)</option>
                                    <option value="097322003">Balintawak</option>
                                    <option value="097322004">Baloyboan</option>
                                    <option value="097322005">Banale</option>
                                    <option value="097322006">Bogo</option>
                                    <option value="097322007">Bomba</option>
                                    <option value="097322010">Buenavista</option>
                                    <option value="097322011">Bulatok</option>
                                    <option value="097322012">Bulawan</option>
                                    <option value="097322013">Danlugan</option>
                                    <option value="097322014">Dao</option>
                                    <option value="097322015">Datagan</option>
                                    <option value="097322016">Deborok</option>
                                    <option value="097322017">Ditoray</option>
                                    <option value="097322018">Gatas (Pob.)</option>
                                    <option value="097322019">Gubac</option>
                                    <option value="097322020">Gubang</option>
                                    <option value="097322021">Kagawasan</option>
                                    <option value="097322022">Kahayagan</option>
                                    <option value="097322023">Kalasan</option>
                                    <option value="097322024">La Suerte</option>
                                    <option value="097322025">Lala</option>
                                    <option value="097322026">Lapidian</option>
                                    <option value="097322027">Lenienza</option>
                                    <option value="097322028">Lizon Valley</option>
                                    <option value="097322029">Lourdes</option>
                                    <option value="097322030">Lower Sibatang</option>
                                    <option value="097322031">Lumad</option>
                                    <option value="097322032">Macasing</option>
                                    <option value="097322033">Manga</option>
                                    <option value="097322034">Muricay</option>
                                    <option value="097322035">Napolan</option>
                                    <option value="097322036">Palpalan</option>
                                    <option value="097322037">Pedulonan</option>
                                    <option value="097322038">Poloyagan</option>
                                    <option value="097322039">San Francisco (Pob.)</option>
                                    <option value="097322040">San Jose (Pob.)</option>
                                    <option value="097322041">San Pedro (Pob.)</option>
                                    <option value="097322042">Santa Lucia (Pob.)</option>
                                    <option value="097322043">Santiago (Pob.)</option>
                                    <option value="097322044">Tawagan Sur</option>
                                    <option value="097322045">Tiguma</option>
                                    <option value="097322046">Tuburan (Pob.)</option>
                                    <option value="097322047">Tulawas</option>
                                    <option value="097322048">Tulangan</option>
                                    <option value="097322050">Upper Sibatang</option>
                                    <option value="097322051">White Beach</option>
                                    <option value="097322052">Kawit</option>
                                    <option value="097322053">Lumbia</option>
                                    <option value="097322054">Santa Maria</option>
                                    <option value="097322055">Santo Niño</option>
                                    <option value="097322056">Dampalan</option>
                                    <option value="097322057">Dumagoc</option>
                                </select><label class="form-label form-label form-label mx-1">Barangay</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col-md-12 form-floating mb-3"><input class="form-control form-control" type="text" name="purok" placeholder="Religion" required=""><label class="form-label form-label form-label mx-1">House No. / Street / Purok /</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                            <div class="col form-floating mb-3"><input class="form-control form-control" type="text" name="watcher_phone" placeholder="Watcher Phone Number"><label class="form-label form-label form-label mx-1">Contact # No.</label>
                                <div class="valid-feedback"><span> Looks good! </span></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
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
                    <div class="container text-center"><img src="assets/img/icon.jpg" width="90px">
                        <p>Are you sure want to remove this teacher?</p>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-primary" type="button" data-bs-dismiss="modal">No</button><button class="btn btn-danger" type="button">Yes</button></div>
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
</body>

</html>