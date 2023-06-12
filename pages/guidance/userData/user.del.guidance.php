<?php require '../../../includes/conn.php';


$get_user = $_GET['guidance_id'];

mysqli_query($conn, "DELETE FROM tbl_guidance WHERE guidance_id = '$get_user'") or die(mysqli_error($conn));
$_SESSION['success-del'] = true;
header('location: ../list.guidance.php');
