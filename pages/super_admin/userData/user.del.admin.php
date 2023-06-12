<?php require '../../../includes/conn.php';


$get_user = $_GET['admin_id'];

mysqli_query($conn, "DELETE FROM tbl_admins WHERE admin_id = '$get_user'") or die(mysqli_error($conn));
$_SESSION['success-del'] = true;
header('location: ../list.admin.php');
