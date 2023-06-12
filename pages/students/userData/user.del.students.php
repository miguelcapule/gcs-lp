<?php require '../../../includes/conn.php';


$get_user = $_GET['stud_id'];

mysqli_query($conn, "DELETE FROM tbl_students WHERE stud_id = '$get_user'") or die(mysqli_error($conn));
$_SESSION['success-del'] = true;
header('location: ../list.students.php');
