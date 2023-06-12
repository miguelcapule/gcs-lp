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
        header('location: ../edit.eval.php?stud_id=' . $stud_id);
    } else {
        $updateEval = mysqli_query($conn, "UPDATE tbl_evaluation SET date = '$date', exam = '$exam', test = '$test', result = '$result', description = '$description' WHERE stud_id = '$stud_id'") or die(mysqli_error($conn));
        $_SESSION['success-edit'] = true;
        header('location: ../edit.eval.php?stud_id=' . $stud_id);
    }
}
