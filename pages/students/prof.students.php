<!DOCTYPE html>
<html lang="en">

<?php include '../../includes/header.php'; ?>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

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
                            <h5 class="mb-0">Edit Student's Profile</h5>
                        </div>
                        <form action="userData/user.edit.prof.students.php" method="POST" enctype="multipart/form-data">
                            <?php
                            $get_student = $conn->query("SELECT * FROM tbl_students WHERE stud_id = '$_GET[stud_id]'");
                            $res_count = $get_student->num_rows;
                            if ($res_count == 0) {
                                // error code
                            }
                            $row = $get_student->fetch_array();

                            ?>
                            <input class="form-control" type="text" name="stud_id"
                                value="<?php echo $row['stud_id']; ?>" hidden>
                            <div class="row">
                                <div class="form-group my-4">
                                    <div class="custom-file">
                                        <?php
                                        if (!empty($row['img'])) {
                                            echo '<div class="text-center mb-3">
                                            <img class="img-fluid img-circle" src="data:image/jpeg;base64,' . base64_encode($row['img']) . '" alt="User profile picture" style="width: 120px; height: 120px;">
                                        </div>';
                                        } else {
                                            echo '<div class="text-center mb-3">
                                            <img class="img-fluid img-circle" src="../../assets/img/icons/user.png " alt="User profile picture" style="width: 120px; height: 120px;">
                                        </div>';
                                        }
                                        ?>
                                        <div class="row">
                                            <div class="form-group m-auto col-md-2">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="form-control" name="prof_img"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-center">Personal Data</h3>
                            <div class="row mx-auto">
                                <div class="col-md-4 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <label>Student No.</label>
                                        <input type="text" name="stud_no" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['stud_no']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <label>Gender</label>
                                        <select class="form-control" id="gender" name="gender"
                                            placeholder="Year/Grade Level">
                                            <option selected disabled>Select Gender</option>
                                            <?php
                                            $query = mysqli_query($conn, "SELECT * FROM tbl_genders");
                                            while ($row1 = mysqli_fetch_array($query)) {
                                                echo '
                                                <option value="' . $row1['gender'] . '">' . $row1['gender'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Last name</label>
                                        <input type="text" name="lastname" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['lastname']; ?>" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>First name</label>
                                        <input type="text" name="firstname" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['firstname']; ?>" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Middle Name</label>
                                        <input type="text" name="middlename" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['middlename']; ?>"
                                            placeholder="Middle name">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-12">
                                    <div class="input-group input-group-static my-3">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['address']; ?>"
                                            placeholder="Enter your Address">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Date of birth</label>
                                        <input type="date" name="birthdate" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['birthdate']; ?>"
                                            placeholder="Enter your birthdate">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Place of Birth</label>
                                        <input type="text" name="birthplace" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['birthplace']; ?>"
                                            placeholder="Enter your Place of Birth">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Age</label>
                                        <input type="text" name="age" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['age']; ?>" placeholder="Enter your Age">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Civil Status</label>
                                        <input type="text" name="civilstatus" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['civilstatus']; ?>"
                                            placeholder="Ex. Single/Married">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Citizenship</label>
                                        <input type="text" name="citizenship" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['citizenship']; ?>"
                                            placeholder="Ex. Filipino">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Religion</label>
                                        <input type="text" name="religion" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['religion']; ?>" placeholder="Ex. Catholic">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['email']; ?>"
                                            placeholder="example@gmail.com">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Contact Number</label>
                                        <input type="text" name="contact" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['contact']; ?>"
                                            placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Landline</label>
                                        <input type="text" name="landline" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['landline']; ?>"
                                            placeholder="Landline Number">
                                    </div>
                                </div>
                            </div>





                            <h3 class="text-center my-3">Family Background</h3>
                            <div class="row mx-auto">
                                <h5>Father</h5>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Last Name</label>
                                        <input type="text" name="flastname" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['flastname']; ?>" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>First name</label>
                                        <input type="text" name="ffirstname" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['ffirstname']; ?>" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Middle name</label>
                                        <input type="text" name="fmiddlename" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['fmiddlename']; ?>"
                                            placeholder="Middle name">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Age</label>
                                        <input type="text" name="fage" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['fage']; ?>" placeholder="00 yrs old">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Birthdate</label>
                                        <input type="date" name="fbirthdate" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['fbirthdate']; ?>" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Citizenship</label>
                                        <input type="text" name="fcitizenship" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['fcitizenship']; ?>"
                                            placeholder="Ex. Filipino">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Home Address</label>
                                        <input type="text" name="faddress" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['faddress']; ?>" placeholder="Home Address">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Tel No.</label>
                                        <input type="text" name="ftel_no" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['ftel_no']; ?>" placeholder="0123-4567">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Cell No.</label>
                                        <input type="text" name="fcell_no" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['fcell_no']; ?>" placeholder="09123456789">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-5 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <label>Education Attained</label>
                                        <input type="text" name="feducation" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['feducation']; ?>"
                                            placeholder="Education Attained">
                                    </div>
                                </div>
                                <div class="col-md-5 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <label>Occupation</label>
                                        <input type="text" name="foccupation" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['foccupation']; ?>"
                                            placeholder="Occupation">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <h5>Mother</h5>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Last Name</label>
                                        <input type="text" name="mlastname" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['mlastname']; ?>" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>First name</label>
                                        <input type="text" name="mfirstname" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['mfirstname']; ?>" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Middle name</label>
                                        <input type="text" name="mmiddlename" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['mmiddlename']; ?>"
                                            placeholder="Middle name">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Age</label>
                                        <input type="text" name="mage" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['mage']; ?>" placeholder="00 yrs old">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Birthdate</label>
                                        <input type="date" name="mbirthdate" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['mbirthdate']; ?>" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Citizenship</label>
                                        <input type="text" name="mcitizenship" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['mcitizenship']; ?>"
                                            placeholder="Ex. Filipino">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Home Address</label>
                                        <input type="text" name="maddress" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['maddress']; ?>" placeholder="Home Address">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Tel No.</label>
                                        <input type="text" name="mtel_no" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['mtel_no']; ?>" placeholder="0123-4567">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Cell No.</label>
                                        <input type="text" name="mcell_no" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['mcell_no']; ?>" placeholder="09123456789">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-5 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <label>Education Attained</label>
                                        <input type="text" name="meducation" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['meducation']; ?>"
                                            placeholder="Education Attained">
                                    </div>
                                </div>
                                <div class="col-md-5 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <label>Occupation</label>
                                        <input type="text" name="moccupation" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['moccupation']; ?>"
                                            placeholder="Occupation">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <h5>Guardian</h5>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Last Name</label>
                                        <input type="text" name="glastname" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['glastname']; ?>" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>First name</label>
                                        <input type="text" name="gfirstname" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['gfirstname']; ?>" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Middle name</label>
                                        <input type="text" name="gmiddlename" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['gmiddlename']; ?>"
                                            placeholder="Middle name">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Age</label>
                                        <input type="text" name="gage" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['gage']; ?>" placeholder="00 yrs old">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Birthdate</label>
                                        <input type="date" name="gbirthdate" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['gbirthdate']; ?>" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Relationship</label>
                                        <input type="text" name="relationship" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['relationship']; ?>"
                                            placeholder="Ex. Mother/Father">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Citizenship</label>
                                        <input type="text" name="gcitizenship" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['gcitizenship']; ?>"
                                            placeholder="Ex. Filipino">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Home Address</label>
                                        <input type="text" name="gaddress" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['gaddress']; ?>" placeholder="Home Address">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Education Attained</label>
                                        <input type="text" name="geducation" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['geducation']; ?>"
                                            placeholder="Education Attained">
                                    </div>
                                </div>


                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Cell No.</label>
                                        <input type="text" name="gcell_no" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['gcell_no']; ?>" placeholder="09123456789">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Tel No.</label>
                                        <input type="text" name="gtel_no" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['gtel_no']; ?>" placeholder="0123-4567">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-3">
                                        <label>Occupation</label>
                                        <input type="text" name="goccupation" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['goccupation']; ?>"
                                            placeholder="Occupation">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <h5 class="text-center">No. of Siblings</h5>
                                <h6 class="text-center">(from first to last child)</h6>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <label>Full name</label>
                                        <input type="text" name="sib1_name" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['sib1_name']; ?>" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <label>Occupation</label>
                                        <input type="text" name="sib1_occ" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['sib1_occ']; ?>" placeholder="Occupation">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <label>Contact Number</label>
                                        <input type="text" name="sib1_contact" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['sib1_contact']; ?>"
                                            placeholder="09123456789">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="sib2_name" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['sib2_name']; ?>" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="sib2_occ" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['sib2_occ']; ?>" placeholder="Occupation">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="sib2_contact" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['sib2_contact']; ?>"
                                            placeholder="09123456789">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="sib3_name" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['sib3_name']; ?>" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="sib3_occ" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['sib3_occ']; ?>" placeholder="Occupation">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="sib3_contact" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['sib3_contact']; ?>"
                                            placeholder="09123456789">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="sib4_name" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['sib4_name']; ?>" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="sib4_occ" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['sib4_occ']; ?>" placeholder="Occupation">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="sib4_contact" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['sib4_contact']; ?>"
                                            placeholder="09123456789">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="sib5_name" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['sib5_name']; ?>" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="sib5_occ" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['sib5_occ']; ?>" placeholder="Occupation">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="sib5_contact" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['sib5_contact']; ?>"
                                            placeholder="09123456789">
                                    </div>
                                </div>
                            </div>

                            <h3 class="text-center my-3">Educational Background</h3>
                            <div class="row mx-auto">
                                <div class="col-md-2 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-3">Grade School</span>

                                    </div>
                                </div>
                                <div class="col-md-5 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <label>School name</label>
                                        <input type="text" name="elem" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['elem']; ?>" placeholder="School name">
                                    </div>
                                </div>
                                <div class="col-md-5 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <label>Year Graduated</label>
                                        <input type="text" name="elemSY" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['elemSY']; ?>" placeholder="Year Graduated">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-2 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-3">Junior High School</span>

                                    </div>
                                </div>
                                <div class="col-md-5 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <label>School name</label>
                                        <input type="text" name="jhs" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['jhs']; ?>" placeholder="School name">
                                    </div>
                                </div>
                                <div class="col-md-5 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <label>Year Graduated</label>
                                        <input type="text" name="jhsSY" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['jhsSY']; ?>" placeholder="Year Graduated">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-2 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-3">Senior High School</span>

                                    </div>
                                </div>
                                <div class="col-md-5 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <label>School name</label>
                                        <input type="text" name="shs" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['shs']; ?>" placeholder="School name">
                                    </div>
                                </div>
                                <div class="col-md-5 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <label>Year Graduated</label>
                                        <input type="text" name="shsSY" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['shsSY']; ?>" placeholder="Year Graduated">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-2 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-3">Vocational</span>

                                    </div>
                                </div>
                                <div class="col-md-5 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <label>School name</label>
                                        <input type="text" name="voc" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['voc']; ?>" placeholder="School name">
                                    </div>
                                </div>
                                <div class="col-md-5 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <label>Year Graduated</label>
                                        <input type="text" name="vocSY" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['vocSY']; ?>" placeholder="Year Graduated">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-2 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-3">College</span>

                                    </div>
                                </div>
                                <div class="col-md-5 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <label>School name</label>
                                        <input type="text" name="college" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['college']; ?>" placeholder="School name">
                                    </div>
                                </div>
                                <div class="col-md-5 mx-auto">
                                    <div class="input-group input-group-static my-3">
                                        <label>Year Graduated</label>
                                        <input type="text" name="collegeSY" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['collegeSY']; ?>"
                                            placeholder="Year Graduated">
                                    </div>
                                </div>
                            </div>

                            <h3 class="text-center my-3">Voluntary Work/Athletic Affiliation</h3>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <label>Organizations/Athletics</label>
                                        <input type="text" name="org1" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['org1']; ?>" placeholder="Enter Org. name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <label>Service Rendered</label>
                                        <input type="text" name="org1_serv" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['org1_serv']; ?>"
                                            placeholder="Services Rendered">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <label>Date of Affiliation/Membership</label>
                                        <input type="text" name="org1_date" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['org1_date']; ?>"
                                            placeholder="Date of Affiliation">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="org2" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['org2']; ?>" placeholder="Enter Org. name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="org2_serv" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['org2_serv']; ?>"
                                            placeholder="Services Rendered">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="org2_date" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['org2_date']; ?>"
                                            placeholder="Date of Affiliation">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="org3" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['org3']; ?>" placeholder="Enter Org. name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="org3_serv" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['org3_serv']; ?>"
                                            placeholder="Services Rendered">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="org3_date" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['org3_date']; ?>"
                                            placeholder="Date of Affiliation">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="org4" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['org4']; ?>" placeholder="Enter Org. name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="org4_serv" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['org4_serv']; ?>"
                                            placeholder="Services Rendered">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="org4_date" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['org4_date']; ?>"
                                            placeholder="Date of Affiliation">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="org5" class="form-control" autocomplete="off" required
                                            value="<?php echo $row['org5']; ?>" placeholder="Enter Org. name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="org5_serv" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['org5_serv']; ?>"
                                            placeholder="Services Rendered">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-static my-1">
                                        <input type="text" name="org5_date" class="form-control" autocomplete="off"
                                            required value="<?php echo $row['org5_date']; ?>"
                                            placeholder="Date of Affiliation">
                                    </div>
                                </div>
                            </div>

                            <h3 class="text-center my-3">Student's Life Information</h3>
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-1">1. Parent's Marital Status</span>

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group input-group-static my-3">
                                        <select class="form-control" id="marital" name="marital"
                                            placeholder="Select your answer">
                                            <option selected disabled>Select your Answer</option>
                                            <?php
                                            $query = mysqli_query($conn, "SELECT * FROM tbl_marital");
                                            while ($row1 = mysqli_fetch_array($query)) {
                                                echo '
                                                <option value="' . $row1['marital_name'] . '">' . $row1['marital_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-1">2. Who finances your schooling</span>

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group input-group-static my-3">
                                        <select class="form-control" id="finances" name="finances"
                                            placeholder="Select your answer">
                                            <option selected disabled>Select your answer</option>
                                            <?php
                                            $query = mysqli_query($conn, "SELECT * FROM tbl_finances");
                                            while ($row1 = mysqli_fetch_array($query)) {
                                                echo '
                                                <option value="' . $row1['fin_name'] . '">' . $row1['fin_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-1">3. How much is your daily allowance</span>

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group input-group-static my-3">
                                        <select class="form-control" id="allowance" name="allowance"
                                            placeholder="Select your answer">
                                            <option selected disabled>Select your answer</option>
                                            <?php
                                            $query = mysqli_query($conn, "SELECT * FROM tbl_allowance");
                                            while ($row1 = mysqli_fetch_array($query)) {
                                                echo '
                                                <option value="' . $row1['allowance_name'] . '">' . $row1['allowance_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-1">4. Family Income (Monthly)</span>

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group input-group-static my-3">
                                        <select class="form-control" id="income" name="income"
                                            placeholder="Select your answer">
                                            <option selected disabled>Select your answer</option>
                                            <?php
                                            $query = mysqli_query($conn, "SELECT * FROM tbl_income");
                                            while ($row1 = mysqli_fetch_array($query)) {
                                                echo '
                                                <option value="' . $row1['income_name'] . '">' . $row1['income_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-1">5. Nature of Residence</span>

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group input-group-static my-3">
                                        <select class="form-control" id="residence" name="residence"
                                            placeholder="Select your answer">
                                            <option selected disabled>Select your answer</option>
                                            <?php
                                            $query = mysqli_query($conn, "SELECT * FROM tbl_residence");
                                            while ($row1 = mysqli_fetch_array($query)) {
                                                echo '
                                                <option value="' . $row1['residence_name'] . '">' . $row1['residence_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <h3 class="text-center my-3">Health</h3>
                            <div class="row mx-auto justify-content-center">
                                <h5 class="text-center">A. Physical</h5>
                                <h6>Do you have problems with your physical body?</h6>
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-3">Your vision</span>

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <select class="form-control" id="vision" name="vision"
                                            placeholder="Select your answer">
                                            <option selected disabled>Select your Answer</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-static mt-3">
                                        <input type="text" name="vision_spec" class="form-control" autocomplete="off"
                                            required placeholder="If yes, please specify:">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-1">Your hearing</span>

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <select class="form-control" id="hearing" name="hearing"
                                            placeholder="Select your answer">
                                            <option selected disabled>Select your Answer</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-static mt-3">
                                        <input type="text" name="hearing_spec" class="form-control" autocomplete="off"
                                            required placeholder="If yes, please specify:">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-1">Your speech</span>

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <select class="form-control" id="speech" name="speech"
                                            placeholder="Select your answer">
                                            <option selected disabled>Select your Answer</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-static mt-3">
                                        <input type="text" name="speech_spec" class="form-control" autocomplete="off"
                                            required placeholder="If yes, please specify:">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-1">Your general health</span>

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <select class="form-control" id="gen_health" name="gen_health"
                                            placeholder="Select your answer">
                                            <option selected disabled>Select your Answer</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-static mt-3">
                                        <input type="text" name="gen_health_spec" class="form-control"
                                            autocomplete="off" required placeholder="If yes, please specify:">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto justify-content-center">
                                <h5 class="text-center">B. Socio-psychological</h5>
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-5">Psychiatrist</span>

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <label class="mb-3">Yes / No</label>
                                        <select class="form-control" id="psychiatrist" name="psychiatrist"
                                            placeholder="Select your answer">
                                            <option selected disabled>Select your Answer</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <label class="mb-3">When</label>
                                        <input type="text" name="psychiatrist_when" class="form-control"
                                            autocomplete="off" required placeholder="If yes, please specify:">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <label class="mb-3">For what</label>
                                        <input type="text" name="psychiatrist_what" class="form-control"
                                            autocomplete="off" required placeholder="If yes, please specify:">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-3">Psychologist</span>

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <select class="form-control" id="psychologist" name="psychologist"
                                            placeholder="Select your answer">
                                            <option selected disabled>Select your Answer</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <input type="text" name="psychologist_when" class="form-control"
                                            autocomplete="off" required placeholder="If yes, please specify:">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <input type="text" name="psychologist_what" class="form-control"
                                            autocomplete="off" required placeholder="If yes, please specify:">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-3">Counselor</span>

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <select class="form-control" id="counselor" name="counselor"
                                            placeholder="Select your answer">
                                            <option selected disabled>Select your Answer</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <input type="text" name="counselor_when" class="form-control" autocomplete="off"
                                            required placeholder="If yes, please specify:">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <input type="text" name="counselor_what" class="form-control" autocomplete="off"
                                            required placeholder="If yes, please specify:">
                                    </div>
                                </div>
                            </div>

                            <h3 class="text-center my-3">Interest and Hobbies</h3>
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-3">1. Favorite Academic Subjects</span>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-static my-3">
                                        <select class="form-control" id="acad_sub" name="acad_sub"
                                            placeholder="Select your answer">
                                            <option selected disabled>Select your Answer</option>
                                            <?php
                                            $query = mysqli_query($conn, "SELECT * FROM tbl_acad_subjects");
                                            while ($row1 = mysqli_fetch_array($query)) {
                                                echo '
                                                <option value="' . $row1['acad_sub_name'] . '">' . $row1['acad_sub_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-static mt-3">

                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-3">2. Extra - Curricular and Organizations</span>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-static my-3">
                                        <select class="form-control" id="curri_org" name="curri_org"
                                            placeholder="Select your answer">
                                            <option selected disabled>Select your Answer</option>
                                            <?php
                                            $query = mysqli_query($conn, "SELECT * FROM tbl_curri_org");
                                            while ($row1 = mysqli_fetch_array($query)) {
                                                echo '
                                                <option value="' . $row1['curri_org_name'] . '">' . $row1['curri_org_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-static mt-3">
                                        <input type="text" name="vision_spec" class="form-control" autocomplete="off"
                                            required placeholder="If others, please specify:">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-2">
                                    <div class="input-group input-group-static my-3">
                                        <span class="mt-3">3. Position in Organization</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-static my-3">
                                        <select class="form-control" id="pos_org" name="pos_org"
                                            placeholder="Select your answer">
                                            <option selected disabled>Select your Answer</option>
                                            <option value="Officer">Officer</option>
                                            <option value="Member">Member</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-static mt-3">
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-center my-3">Testing and Student Evaluation</h3>
                            <h5 class="text-center my-3">(to be filled up by a psychometrician)</h5>
                            <div class="table-responsive p-0 mx-3">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr class="light">
                                            <th>Date of Assessment</th>
                                            <th>Nature of Exam</th>
                                            <th>Name of Test</th>
                                            <th>Key Result</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $get_eval = mysqli_query($conn, "SELECT * FROM tbl_evaluation WHERE stud_id = '$_GET[stud_id]' ");
                                        while ($row = mysqli_fetch_array($get_eval)) {
                                            $id = $row['stud_id'];
                                        ?>
                                        <tr>

                                            <td><?php echo $row['date'] ?></td>
                                            <td><?php echo $row['exam'] ?></td>
                                            <td><?php echo $row['test'] ?></td>
                                            <td><?php echo $row['result'] ?></td>
                                            <td><?php echo $row['description'] ?></td>

                                        </tr>
                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="text-center my-3">Significant Notes</h3>
                            <h5 class="text-center my-3">(to be filled up by the school counselor)</h5>
                            <div class="table-responsive p-0 mx-3">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr class="light">
                                            <th>Date</th>
                                            <th>Incident</th>
                                            <th>Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $get_notes = mysqli_query($conn, "SELECT * FROM tbl_notes WHERE stud_id = '$_GET[stud_id]' ");
                                        while ($row = mysqli_fetch_array($get_notes)) {
                                            $id = $row['stud_id'];
                                        ?>
                                        <tr>

                                            <td><?php echo $row['date'] ?></td>
                                            <td><?php echo $row['incident'] ?></td>
                                            <td><?php echo $row['remarks'] ?></td>

                                        </tr>
                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>










                            <a class="btn btn-secondary mx-3 mt-3" href="list.students.php"><i
                                    class="fa fa-arrow-alt-circle-left"> </i>
                                Back
                            </a>
                            <div class="form-group float-end mx-3 mt-3">
                                <button class="btn btn-primary" type="submit" name="submit">
                                    Submit
                                </button>
                            </div>
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