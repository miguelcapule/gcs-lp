<?php
include "../../../includes/conn.php";


if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    $super_admin = mysqli_query($conn, "SELECT * FROM tbl_super_admins WHERE username = '$username'");
    $numrow_sa = mysqli_num_rows($super_admin);

    $admin = mysqli_query($conn, "SELECT * FROM tbl_admins WHERE username = '$username'");
    $numrow_admin = mysqli_num_rows($admin);

    $guidance = mysqli_query($conn, "SELECT * FROM tbl_guidance WHERE username = '$username'");
    $numrow_guidance = mysqli_num_rows($guidance);

    $student = mysqli_query($conn, "SELECT * FROM tbl_students WHERE username = '$username'");
    $numrow_student = mysqli_num_rows($student);

    if ($numrow_sa > 0) {
        while ($row = mysqli_fetch_array($super_admin)) {
            $checkPWDhash = password_verify($password, $row['password']);
            if ($checkPWDhash == false) {
                $_SESSION['pwd-error'] = true;
                header("location: ../login.php");
            } elseif ($checkPWDhash == true) {
                $_SESSION['role'] = "Super Admin";
                $_SESSION['sa_id'] = $row['sa_id'];
                header("location: ../../dashboard/index.php");
            }
        }
    } elseif ($numrow_admin > 0) {
        while ($row = mysqli_fetch_array($admin)) {
            $checkPWDhash = password_verify($password, $row['password']);
            if ($checkPWDhash == false) {
                $_SESSION['pwd-error'] = true;
                header('location: ../login.php');
            } elseif ($checkPWDhash == true) {
                $_SESSION['role'] = "Administrator";
                $_SESSION['admin_id'] = $row['admin_id'];
                header('location: ../../dashboard/index.php');
            }
        }
    } elseif ($numrow_guidance > 0) {
        while ($row = mysqli_fetch_array($guidance)) {
            $checkPWDhash = password_verify($password, $row['password']);
            if ($checkPWDhash == false) {
                $_SESSION['pwd-error'] = true;
                header('location: ../login.php');
            } elseif ($checkPWDhash == true) {
                $_SESSION['role'] = "Guidance";
                $_SESSION['guidance_id'] = $row['guidance_id'];
                header('location: ../../dashboard/index.php');
            }
        }
    } elseif ($numrow_student > 0) {
        while ($row = mysqli_fetch_array($student)) {
            $checkPWDhash = password_verify($password, $row['password']);
            if ($checkPWDhash == false) {
                $_SESSION['pwd-error'] = true;
                header('location: ../login.php');
            } elseif ($checkPWDhash == true) {
                $_SESSION['role'] = "Student";
                $_SESSION['stud_id'] = $row['stud_id'];
                header('location: ../../dashboard/index.php');
            }
        }
    } else {
        $_SESSION['no-input'] = true;
        header("location: ../login.php");
    }
}