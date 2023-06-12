<!DOCTYPE html>
<html lang="en">
<title>Edit Significant Notes | SFAC GCS</title>

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
                            <h5 class="mb-0">Edit Significant Notes</h5>
                        </div>
                        <form action="userData/user.edit.notes.php?stud_id=<?php echo $stud_id ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php
                            $get_notes = $conn->query("SELECT * FROM tbl_notes WHERE stud_id = '$_GET[stud_id]'");
                            $res_count = $get_notes->num_rows;
                            if ($res_count == 0) {
                                // error code
                            }
                            $row = $get_notes->fetch_array();

                            ?>
                            <input class="form-control" type="text" name="stud_id"
                                value="<?php echo $row['stud_id']; ?>" hidden>

                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static mb-3">
                                        <label>Date of Assessment</label>
                                        <input type="date" name="date" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['date']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static mb-3">
                                        <label>Incident</label>
                                        <input type="text" name="incident" class="form-control" autocomplete="off"
                                            required placeholder="Enter Incident"
                                            value="<?php echo $row['incident']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static mb-3">
                                        <label>Remarks</label>
                                        <input type="text" name="remarks" class="form-control" autocomplete="off"
                                            required placeholder="Enter Remarks" value="<?php echo $row['remarks']; ?>">
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

    <?php include '../../includes/footer-setting.php'; ?>

    <!--   Core JS Files   -->
    <?php include '../../includes/script.php'; ?>
</body>

</html>