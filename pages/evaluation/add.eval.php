<!DOCTYPE html>
<html lang="en">
<title>Add Students | SFAC GCS</title>

<head>
    <?php include '../../includes/header.php';

    $stud_id = $_GET['stud_id']

    ?>
</head>

<body class="g-sidenav-show  bg-gray-200">

    <?php include '../../includes/sidebar.php'; ?>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <!-- Navbar -->
        <?php include '../../includes/navbar.php'; ?>
        <!-- End Navbar -->

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
                        echo ' <div class="alert alert-success alert-dismissible text-white fade show" role="alert">
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
                            <h5 class="mb-0">Add Students Evaluation</h5>
                        </div>
                        <form action="userData/user.add.eval.php?stud_id=<?php echo $stud_id ?>" method="POST" enctype="multipart/form-data">
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static mb-3">
                                        <label>Date of Assessment</label>
                                        <input type="date" name="date" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static mb-3">
                                        <label>Nature of Exam</label>
                                        <input type="text" name="exam" class="form-control" autocomplete="off" required placeholder="Nature of Exam">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static mb-3">
                                        <label>Name of Test</label>
                                        <input type="text" name="test" class="form-control" autocomplete="off" required placeholder="Name of Test">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static mb-3">
                                        <label>Key Result</label>
                                        <input type="text" name="result" class="form-control" autocomplete="off" required placeholder="Key Result">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static mb-3">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control" autocomplete="off" required placeholder="Description">
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
        <?php include '../../includes/footer.php' ?>

    </main>

    <!--   Core JS Files   -->
    <?php include '../../includes/script.php'; ?>
</body>

</html>