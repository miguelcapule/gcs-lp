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
                    } elseif (!empty($_SESSION['success'])) {
                        echo ' <div class="alert alert-success alert-dismissible text-green fade show" role="alert">
                        <span class="alert-text"><strong>Successully Added!</strong></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                        unset($_SESSION['success']);
                    }
                    ?>
                    <div class="card mt-4">
                        <div class="card-header p-3">
                            <h5 class="mb-0">Add Students</h5>
                        </div>
                        <form action="userData/user.add.students.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group my-4">
                                    <div class="custom-file">
                                        <div class="text-center mb-3">
                                            <img class="img-fluid img-circle" src="../../assets/img/icons/user.png " alt="User profile picture" style="width: 120px; height: 120px;">
                                        </div>
                                        <div class="row">
                                            <div class="form-group m-auto col-md-3">
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
                                        <label class="form-label">First name</label>
                                        <input type="text" name="firstname" class="form-control text-white" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Middle name</label>
                                        <input type="text" name="middlename" class="form-control text-white" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Last name</label>
                                        <input type="text" name="lastname" class="form-control text-white" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" name="email" class="form-control text-white" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Student No.</label>
                                        <input type="text" name="stud_no" class="form-control text-white" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static mb-4">
                                        <label for="exampleFormControlSelect1" class="ms-0">Year Level/Grade
                                            Level</label>
                                        <select class="btn btn-secondary btn-fw" id="level" name="level" placeholder="Year/Grade Level">
                                            <option selected disabled>Select Year/Grade Level</option>
                                            <?php
                                            $query = mysqli_query($conn, "SELECT * FROM tbl_grade_levels");
                                            while ($row = mysqli_fetch_array($query)) {
                                                echo '<option value="' . $row['grade_level'] . '">' . $row['grade_level'] . '</option>';
                                            }
                                            ?>
                                            <?php
                                            $query = mysqli_query($conn, "SELECT * FROM tbl_year_levels");
                                            while ($row = mysqli_fetch_array($query)) {
                                                echo '
                                                <option value="' . $row['year_level'] . '">' . $row['year_level'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control text-white" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control text-white" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" name="password2" class="form-control text-white" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
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