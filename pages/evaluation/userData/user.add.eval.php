<?php
require '../../../includes/conn.php';


if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $stud_id = $_GET['stud_id'];
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $exam = mysqli_real_escape_string($conn, $_POST['exam']);
    $test = mysqli_real_escape_string($conn, $_POST['test']);
    $result = mysqli_real_escape_string($conn, $_POST['result']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $failed = 0;

    if ($failed != 0) {
        $_SESSION['prev_data'] = array($date, $exam, $test, $result, $description);
        header('location: ../add.eval.php?stud_id=' . $stud_id);
    } else {
        $insertEval = mysqli_query($conn, "INSERT INTO tbl_evaluation (date, stud_id, exam, test, result, description) VALUES ('$date', '$stud_id' , '$exam', '$test', '$result', '$description')") or die(mysqli_error($conn));
        $_SESSION['success'] = true;
        header('location: ../add.eval.php?stud_id=' . $stud_id);
    }
}
