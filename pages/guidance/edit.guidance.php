<!DOCTYPE html>
<html lang="en">

<?php include '../../includes/header.php'; ?>

<body>
    <div class="container-scroller">

        <?php include '../../includes/sidebar.php'; ?>

        <div class="container-fluid page-body-wrapper">
            <?php include '../../includes/navbar.php'; ?>
            <div class="main-panel">
                <div class="content-wrapper">
                <div class="container-fluid py-4">
                <div class="row">

        <div class="col-md-12">
            <?php
            if (!empty($_SESSION['errors'])) {
                echo ' <div class="alert alert-danger alert-dismissible text-white fade show" role="alert">
                                                    ';
                foreach ($_SESSION['errors'] as $error) {
                    echo $error;
                }
                echo '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>';
                unset($_SESSION['errors']);
            } elseif (!empty($_SESSION['success-edit'])) {
                echo ' <div class="alert alert-success alert-dismissible text-white fade show" role="alert">
                <span class="alert-text"><strong>Successully Edited!</strong></span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
                unset($_SESSION['success-edit']);
            }
            ?>
            <div class="card mt-4">
                <div class="card-header p-3">
                    <h5 class="mb-0">Add Guidance</h5>
                </div>
                <form action="userData/user.edit.guidance.php" method="POST" enctype="multipart/form-data">
                    <?php
                    $get_guidance = $conn->query("SELECT * FROM tbl_guidance WHERE guidance_id = '$_GET[guidance_id]'");
                    $res_count = $get_guidance->num_rows;
                    if ($res_count == 0) {
                        // error code
                    }
                    $row = $get_guidance->fetch_array();

                    ?>
                    <input class="form-control" type="text" name="guidance_id" value="<?php echo $row['guidance_id']; ?>" hidden>
                    <div class="row">
                        <div class="form-group my-4">
                            <div class="custom-file">
                                <div class="text-center mb-3">
                                    <img class="img-fluid img-circle" src="../../assets/img/icons/user.png " alt="User profile picture" style="width: 120px; height: 120px;">
                                </div>
                                <div class="row">
                                    <div class="form-group m-auto col-md-2">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="form-control" name="prof_img" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto">
                        <div class="col-md-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label"></label>
                                <input type="text" name="firstname" class="form-control" autocomplete="off" required value="<?php echo $row['firstname']; ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label"></label>
                                <input type="text" name="lastname" class="form-control" autocomplete="off" required value="<?php echo $row['lastname']; ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label"></label>
                                <input type="email" name="email" class="form-control" autocomplete="off" required value="<?php echo $row['email']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto">
                        <div class="col-md-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label"></label>
                                <input type="text" name="username" class="form-control" autocomplete="off" required value="<?php echo $row['username']; ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="password2" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-secondary mx-3 mt-3" href="list.guidance.php"><i class="fa fa-arrow-alt-circle-left"> </i>
                        Back
                    </a>

                    <div class="form-group float-end mx-3 mt-3">

                        <button class="btn btn-primary" type="submit" name="submit">
                            Submit
                        </button>

                    </div>

                </form>


            </div>


        </div>
        </div>
            
        </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            bootstrapdash.com 2021</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap
                                admin template</a> from Bootstrapdash.com</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <?php include '../../includes/script.php'; ?>
</body>

</html>