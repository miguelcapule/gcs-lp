<?php
include 'conn.php';


if (!empty($_SESSION['role'])) {
    if ($_SESSION['role'] == "Super Admin") {
        $sa_id = $_SESSION['sa_id'];
        $user = $conn->query("SELECT * FROM tbl_super_admins WHERE sa_id = '$sa_id'");
        $row_user = $user->fetch_array();
        $user_fullname = $row_user['super_admin'];
        $user_email = $row_user['email'];
        if ($sa_id == false) {
            header("location: ../login/login.php");
        }
    } elseif ($_SESSION['role'] == "Administrator") {
        $admin_id = $_SESSION['admin_id'];
        $user = $conn->query("SELECT * FROM tbl_admins WHERE admin_id = '$admin_id'");
        $row_user = $user->fetch_array();
        $user_fullname = $row_user['firstname'] . " " . $row_user['lastname'];
        $user_img = $row_user['admin_image'];
        $user_email = $row_user['email'];
        if ($admin_id == false) {
            header("location: ../login/login.php");
        }
    } elseif ($_SESSION['role'] == "Guidance") {
        $guidance_id = $_SESSION['guidance_id'];
        $user = $conn->query("SELECT * FROM tbl_guidance WHERE guidance_id = '$guidance_id'");
        $row_user = $user->fetch_array();
        $user_fullname = $row_user['firstname'] . " " . $row_user['lastname'];
        $user_img = $row_user['guidance_image'];
        $user_email = $row_user['email'];
        if ($guidance_id == false) {
            header("location: ../login/login.php");
        }
    } elseif ($_SESSION['role'] == "Student") {
        $stud_id = $_SESSION['stud_id'];
        $user = $conn->query("SELECT * FROM tbl_students WHERE stud_id = '$stud_id'");
        $row_user = $user->fetch_array();
        $user_fullname = $row_user['firstname'] . " " . $row_user['lastname'];
        $user_img = $row_user['img'];
        $user_email = $row_user['email'];
        if ($stud_id == false) {
            header("location: ../login/login.php");
        }
    } else {
        session_destroy();
        header("location: ../login/login.php");
    }
} else {
    header("location: ../login/login.php");
}