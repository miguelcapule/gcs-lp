<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login | GCS</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../template/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../template/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../template/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/img/logos/logo.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                    <div class="loginstyle">
                            <img src="../../landing/assets/img/SFAC-Logo.png" height="100px" width="100">
                        </div>
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3 loginstyle1">SFAC LP | GCS Login</h3>
                            <form action="userData/user.login.php" method="POST">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control text-white">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control text-white">
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input"> Remember me </label>
                                    </div>
                                    <a href="#" class="forgot-pass">Forgot password</a>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="submit"
                                        class="btn btn-primary btn-block enter-btn">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../template/assets/js/off-canvas.js"></script>
    <script src="../../template/assets/js/hoverable-collapse.js"></script>
    <script src="../../template/assets/js/misc.js"></script>
    <script src="../../template/assets/js/settings.js"></script>
    <script src="../../template/assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>