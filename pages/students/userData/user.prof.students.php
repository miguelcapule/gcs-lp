<?php
require '../../../includes/conn.php';


if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == "POST") {

    $stud_no = mysqli_real_escape_string($conn, $_POST['stud_no']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
    $birthplace = mysqli_real_escape_string($conn, $_POST['birthplace']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $civilstatus = mysqli_real_escape_string($conn, $_POST['civilstatus']);
    $citizenship = mysqli_real_escape_string($conn, $_POST['citizenship']);
    $religion = mysqli_real_escape_string($conn, $_POST['religion']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $landline = mysqli_real_escape_string($conn, $_POST['landline']);
    $flastname = mysqli_real_escape_string($conn, $_POST['flastname']);
    $ffirstname = mysqli_real_escape_string($conn, $_POST['ffirstname']);
    $fmiddlename = mysqli_real_escape_string($conn, $_POST['fmiddlename']);
    $fage = mysqli_real_escape_string($conn, $_POST['fage']);
    $fbirthdate = mysqli_real_escape_string($conn, $_POST['fbirthdate']);
    $fcitizenship = mysqli_real_escape_string($conn, $_POST['fcitizenship']);
    $faddress = mysqli_real_escape_string($conn, $_POST['faddress']);
    $ftel_no = mysqli_real_escape_string($conn, $_POST['ftel_no']);
    $fcell_no = mysqli_real_escape_string($conn, $_POST['fcell_no']);
    $feducation = mysqli_real_escape_string($conn, $_POST['feducation']);
    $foccupation = mysqli_real_escape_string($conn, $_POST['foccupation']);
    $mlastname = mysqli_real_escape_string($conn, $_POST['mlastname']);
    $mfirstname = mysqli_real_escape_string($conn, $_POST['mfirstname']);
    $mmiddlename = mysqli_real_escape_string($conn, $_POST['mmiddlename']);
    $mage = mysqli_real_escape_string($conn, $_POST['mage']);
    $mbirthdate = mysqli_real_escape_string($conn, $_POST['mbirthdate']);
    $mcitizenship = mysqli_real_escape_string($conn, $_POST['mcitizenship']);
    $maddress = mysqli_real_escape_string($conn, $_POST['maddress']);
    $mtel_no = mysqli_real_escape_string($conn, $_POST['mtel_no']);
    $mcell_no = mysqli_real_escape_string($conn, $_POST['mcell_no']);
    $meducation = mysqli_real_escape_string($conn, $_POST['meducation']);
    $moccupation = mysqli_real_escape_string($conn, $_POST['moccupation']);
    $glastname = mysqli_real_escape_string($conn, $_POST['glastname']);
    $gfirstname = mysqli_real_escape_string($conn, $_POST['gfirstname']);
    $gmiddlename = mysqli_real_escape_string($conn, $_POST['gmiddlename']);
    $gage = mysqli_real_escape_string($conn, $_POST['gage']);
    $gbirthdate = mysqli_real_escape_string($conn, $_POST['gbirthdate']);
    $relationship = mysqli_real_escape_string($conn, $_POST['relationship']);
    $gcitizenship = mysqli_real_escape_string($conn, $_POST['gcitizenship']);
    $gaddress = mysqli_real_escape_string($conn, $_POST['gaddress']);
    $geducation = mysqli_real_escape_string($conn, $_POST['geducation']);
    $gcell_no = mysqli_real_escape_string($conn, $_POST['gcell_no']);
    $gtel_no = mysqli_real_escape_string($conn, $_POST['gtel_no']);
    $goccupation = mysqli_real_escape_string($conn, $_POST['goccupation']);
    $sib1_name = mysqli_real_escape_string($conn, $_POST['sib1_name']);
    $sib1_occ = mysqli_real_escape_string($conn, $_POST['sib1_occ']);
    $sib1_contact = mysqli_real_escape_string($conn, $_POST['sib1_contact']);
    $sib2_name = mysqli_real_escape_string($conn, $_POST['sib2_name']);
    $sib2_occ = mysqli_real_escape_string($conn, $_POST['sib2_occ']);
    $sib2_contact = mysqli_real_escape_string($conn, $_POST['sib2_contact']);
    $sib3_name = mysqli_real_escape_string($conn, $_POST['sib3_name']);
    $sib3_occ = mysqli_real_escape_string($conn, $_POST['sib3_occ']);
    $sib3_contact = mysqli_real_escape_string($conn, $_POST['sib3_contact']);
    $sib4_name = mysqli_real_escape_string($conn, $_POST['sib4_name']);
    $sib4_occ = mysqli_real_escape_string($conn, $_POST['sib4_occ']);
    $sib4_contact = mysqli_real_escape_string($conn, $_POST['sib4_contact']);
    $sib5_name = mysqli_real_escape_string($conn, $_POST['sib5_name']);
    $sib5_occ = mysqli_real_escape_string($conn, $_POST['sib5_occ']);
    $sib5_contact = mysqli_real_escape_string($conn, $_POST['sib5_contact']);
    $elem = mysqli_real_escape_string($conn, $_POST['elem']);
    $elemSY = mysqli_real_escape_string($conn, $_POST['elemSY']);
    $jhs = mysqli_real_escape_string($conn, $_POST['jhs']);
    $jhsSY = mysqli_real_escape_string($conn, $_POST['elemSY']);
    $shs = mysqli_real_escape_string($conn, $_POST['shs']);
    $shsSY = mysqli_real_escape_string($conn, $_POST['shsSY']);
    $voc = mysqli_real_escape_string($conn, $_POST['voc']);
    $vocSY = mysqli_real_escape_string($conn, $_POST['vocSY']);
    $college = mysqli_real_escape_string($conn, $_POST['college']);
    $collegeSY = mysqli_real_escape_string($conn, $_POST['collegeSY']);
    $org1 = mysqli_real_escape_string($conn, $_POST['org1']);
    $org1_serv = mysqli_real_escape_string($conn, $_POST['org1_serv']);
    $org1_date = mysqli_real_escape_string($conn, $_POST['org1_date']);
    $org2 = mysqli_real_escape_string($conn, $_POST['org2']);
    $org2_serv = mysqli_real_escape_string($conn, $_POST['org2_serv']);
    $org2_date = mysqli_real_escape_string($conn, $_POST['org2_date']);
    $org3 = mysqli_real_escape_string($conn, $_POST['org3']);
    $org3_serv = mysqli_real_escape_string($conn, $_POST['org3_serv']);
    $org3_date = mysqli_real_escape_string($conn, $_POST['org3_date']);
    $org4 = mysqli_real_escape_string($conn, $_POST['org4']);
    $org4_serv = mysqli_real_escape_string($conn, $_POST['org4_serv']);
    $org4_date = mysqli_real_escape_string($conn, $_POST['org4_date']);
    $org5 = mysqli_real_escape_string($conn, $_POST['org5']);
    $org5_serv = mysqli_real_escape_string($conn, $_POST['org5_serv']);
    $org5_date = mysqli_real_escape_string($conn, $_POST['org5_date']);





    $failed = 0;

    if ($failed != 0) {
        $_SESSION['prev_data'] = array($firstname, $middlename, $lastname, $email, $stud_no, $username);
        header('location: ../add.students.php');
    } else {
        $image = (!empty($_FILES['prof_img']['tmp_name'])) ? addslashes(file_get_contents($_FILES['prof_img']['tmp_name'])) : null;
        $hashpwd = password_hash($password, PASSWORD_BCRYPT);
        $insertUser = mysqli_query($conn, "INSERT INTO tbl_students (img, firstname, middlename, lastname, activation_code, email, stud_no, yearlevel, username, password) VALUES ('$image', '$firstname', '$middlename', '$lastname','', '$email', '$stud_no' , '$level' ,'$username', '$hashpwd')") or die(mysqli_error($conn));
        $_SESSION['success'] = true;
        header('location: ../add.students.php');
    }
}
