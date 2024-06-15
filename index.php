<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
    header('Location: dashboard.php');
}
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - CSPS</title>
    <meta name="description" content="Class Schedule Plotting System">
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
                <nav class="navbar navbar-expand-lg shadow navbar-light">
                    <div class="container-fluid"><img class="mx-2" src="assets/img/icon.png" width="60em"><a class="navbar-brand d-flex align-items-center" href="/"><span class="d-none d-md-block"><strong>Class Schedule Plotting System</strong></span><span class="d-block d-md-none"><strong>CSPS</strong></span></a><button data-bs-toggle="collapse" data-bs-target="#navcol-1" class="navbar-toggler"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1"></div>
                    </div>
                </nav>
                <section class="=">
                    <div class="text-center text-lg-start px-4 py-5 px-md-5" style="background: linear-gradient(-165deg, rgb(162,176,248) 0%, rgb(72,87,211) 15%, rgb(71,85,210) 21%, rgb(117,146,230) 39%, var(--bs-secondary-color) 52%, var(--bs-secondary-color) 76%, rgb(79,97,214) 92%), url(&quot;assets/img/bg.jpg&quot;) center / cover no-repeat;">
                        <div class="container">
                            <div class="row gx-lg-5 align-items-center">
                                <div class="col-lg-6 col-xxl-6 mb-5 mb-lg-0">
                                    <h1 class="display-3 fw-bold text-dark my-5 ls-tight" style="text-shadow: 0px 0px;"><span style="color: rgb(255, 255, 255);">Basta West Prime</span><br><span class="text-primary"><span style="color: rgb(161, 255, 232);">Nindot!</span></span></h1>
                                    <p class="text-light" style="color: hsl(217, 10%, 50.8%);text-shadow: 0px 0px;">West Prime Horizon Institute, Inc. is an institution accredited by TESDA that offers Technical and Vocational Education and Training Courses (TVET) under the Technical Education and Skills Development Authority (TESDA) and the Commission on Higher Education (CHED). West Prime Horizon Institute, Inc. Address: Lapu-Lapu St., San Francisco Dist., Pagadian City, Philippines Telephone Number: 09778047489 / 09207983228 TESDA Approved.</p>
                                </div>
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <div class="card mx-4">
                                        <div class="card-body py-5 px-md-5">
                                            <div class="row mb-5">
                                                <div class="col text-center mx-auto"><img class="mx-2" src="assets/img/icon.png" width="60em">
                                                    <h2 class="text-primary" style="border-color: rgb(78, 115, 223);"><strong>West Prime Horizon Institute, Inc</strong></h2>
                                                    <p class="w-lg-50"><span style="color: rgb(78, 115, 223);">V. Sagun cor. M. Roxas St. San Francisco Dist. Pagadian City</span><br><span style="color: rgb(78, 115, 223);">Call No. :&nbsp;</span><strong><span style="color: rgb(78, 115, 223);">0920-798-3228(</span></strong><span style="color: rgb(78, 115, 223);">Smart)/</span><strong><span style="color: rgb(78, 115, 223);">0977-804-7489</span></strong><span style="color: rgb(78, 115, 223);">(Globe)</span></p>
                                                </div>
                                            </div>
                                            <form id="sign-in-form">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="text" placeholder="username" name="username" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ''; ?>">
                                                    <label class="form-label" for="floatingInput">Username</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="password" placeholder="password" name="password" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''; ?>">
                                                    <label class="form-label" for="floatingInput">Password</label>
                                                </div>
                                                <div class="d-flex justify-content-center form-check mb-4">
                                                    <input type="checkbox" class="form-check-input me-2" id="form2Example33" name="remember" <?php echo isset($_COOKIE['username']) ? 'checked' : ''; ?>>
                                                    <label class="form-check-label" for="form2Example33">Remember Me</label>
                                                </div>
                                                <button class="btn btn-primary btn-block mb-4 w-100" type="submit">Sign In</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="py-4 py-xl-5"></section>
                    </div>
                </section>
                <footer class="text-center py-4 bg-dark">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-lg-3">
                            <div class="col">
                                <p class="my-2 text-white-50">West Prime Horizon Institutes, Inc. © 2024 Class Schedule Plotting System</p>
                            </div>
                            <div class="col">
                                <ul class="list-inline my-2">
                                    <li class="list-inline-item me-4">
                                        <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"></path>
                                            </svg></div>
                                    </li>
                                    <li class="list-inline-item me-4">
                                        <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15"></path>
                                            </svg></div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"></path>
                                            </svg></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            submitLoginForm('sign-in-form');
        });
    </script>
</body>

</html>