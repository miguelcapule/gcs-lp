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
        header('location: ../add.notes.php?stud_id=' . $stud_id);
    } else {
        $insertNotes = mysqli_query($conn, "INSERT INTO tbl_notes (date, stud_id, incident, remarks) VALUES ('$date', '$stud_id' , '$incident', '$remarks')") or die(mysqli_error($conn));
        $_SESSION['success'] = true;
        header('location: ../add.notes.php?stud_id=' . $stud_id);
    }
}
