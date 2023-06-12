<?php
require '../../../includes/conn.php';


if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $stud_id = $_GET['stud_id'];
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $incident = mysqli_real_escape_string($conn, $_POST['incident']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);

    $failed = 0;

    if ($failed != 0) {
        $_SESSION['prev_data'] = array($date, $incident, $remarks);
        header('location: ../edit.notes.php?stud_id=' . $stud_id);
    } else {
        $updateNotes = mysqli_query($conn, "UPDATE tbl_notes SET date = '$date', incident = '$incident', remarks = '$remarks' WHERE stud_id = '$stud_id'") or die(mysqli_error($conn));
        $_SESSION['success-edit'] = true;
        header('location: ../edit.notes.php?stud_id=' . $stud_id);
    }
}