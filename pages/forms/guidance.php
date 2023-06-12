<?php

require('../fpdf/fpdf.php');
require '../../includes/conn.php';

class PDF extends FPDF
{

    // Page header

}

$pdf = new PDF('P', 'mm', 'Legal');
//left top right
$pdf->SetMargins(10, 10, 10);
$pdf->AddPage();

// Logo(x axis, y axis, height, width)
$pdf->Image('../../assets/img/icons/logo2.jpg', 45, 8, 15, 15);
// text color
$pdf->SetTextColor(255, 0, 0);
// font(font type,style,font size)
$pdf->SetFont('Arial', 'B', 18);
// Dummy cell
$pdf->Cell(50);
// //cell(width,height,text,border,end line,[align])
$pdf->Cell(110, 9, 'Saint Francis of Assisi College', 0, 1, 'C');

$pdf->Ln(3);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(200, 8, 'GUIDANCE OFFICE', 0, 1, 'C');

$pdf->Ln(1);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(4, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 3, 'LRN NO.', 0, 0);
$pdf->Cell(40, 3, '', 'B', 0); // FOR DATA 

$pdf->Cell(85, 2, '', 0, 0); // SPACE for data
$pdf->Cell(13, 3, '', 'B', 0); // FOR DATA 
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 3, 'Incoming Year Level', 0, 1);

$pdf->Ln(2);
$pdf->Cell(4, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, 'Date of Enrollment: ', 0, 0);
$pdf->Cell(35, 3, '', 'B', 1); // FOR DATA 

$pdf->Ln(2);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(81, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, 'STUDENT\'S PROFILE: ', 0, 1);

$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, '1.   Personal Information ', 0, 1);


$pdf->Ln(1);
$pdf->Rect(16, 49, 182, 10); // box
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 4, '', 0, 0);
$pdf->Cell(28, 4, 'Last Name', 0, 0);
$pdf->Cell(40, 4, '', 0, 0);
$pdf->Cell(45, 4, 'First Name', 0, 0);
$pdf->Cell(20, 4, '', 0, 0);
$pdf->Cell(45, 4, 'Middle Name', 0, 1);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(8, 4, '', 0, 0); // space
$pdf->Cell(20, 4, '', 0, 0); //data
$pdf->Cell(48, 4, '', 0, 0); // space
$pdf->Cell(45, 4, '', 0, 0); // data
$pdf->Cell(20, 4, '', 0, 0); // space
$pdf->Cell(45, 4, '', 0, 1); // data

$pdf->Ln(3);
$pdf->Rect(16, 59, 182, 10); // box
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 4, '', 0, 0);
$pdf->Cell(28, 5, 'Residential Address', 0, 1);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(8, 4, '', 0, 0); // space
$pdf->Cell(28, 5, '', 0, 1); // data sige

$pdf->Ln(1);
$pdf->Rect(16, 69, 182, 10); // box
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, 'Permanent Address', 0, 1);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(8, 4, '', 0, 0); // space
$pdf->Cell(28, 4, '', 0, 1); // data sige lang

$pdf->Ln(1);
$pdf->Rect(16, 79, 37.5, 10); // box
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, 'Date of Birth', 0, 0);

$pdf->Rect(53.5, 79, 37.5, 10); // box
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, 'Place of Birth', 0, 0);

$pdf->Rect(91, 79, 37.5, 10); // box
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(9, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, 'Sex', 0, 0);

$pdf->Rect(128.5, 79, 34, 10); // box
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(10, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, 'Civil Status', 0, 0);

$pdf->Rect(162.5, 79, 35.5, 10); // box
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(7, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, 'Height/Weight', 0, 1);

// data
$pdf->Ln(1);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(8, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, 'December 21, 2024', 0, 0); // date of birth
$pdf->Cell(8, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, 'Caloocan Hospital', 0, 0); // place birth
$pdf->Cell(9, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, 'Female', 0, 0); //  sex
$pdf->Cell(10, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, 'Windows', 0, 0); //  civil
$pdf->Cell(7, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, 'Ikaw na bahala', 0, 1); //  height

$pdf->Ln(1);
$pdf->Rect(16, 89, 37.5, 10); // box
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, 'Blood Type', 0, 0);

$pdf->Rect(53.5, 89, 37.5, 10); // box
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, 'Mobile Number', 0, 0);

$pdf->Rect(91, 89, 37.5, 10); // box
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(9, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, 'Telephone Number', 0, 0);

$pdf->Rect(128.5, 89, 34, 10); // box
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(10, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, 'Email Address', 0, 1);
$pdf->Rect(162.5, 89, 35.5, 10); // box

// data
$pdf->Ln(1);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(8, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, '', 0, 0); // blood
$pdf->Cell(8, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, '', 0, 0); // number
$pdf->Cell(9, 4, '', 0, 0); // space 
$pdf->Cell(28, 4, '', 0, 0); //  Telephone
$pdf->Cell(10, 4, '', 0, 0); // space lang
$pdf->Cell(28, 4, '', 0, 1); //  Email

$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, 'II.   Family Background ', 0, 1);

$pdf->Rect(16, 104, 61, 8); // box
$pdf->Rect(77, 104, 60.5, 8); // box
$pdf->Rect(137.5, 104, 60.5, 8); // box

$pdf->Ln(1);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 4, 'Father\'s Name ', 0, 0);
$pdf->Cell(30, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 4, 'Occupation ', 0, 0);
$pdf->Cell(30, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 4, 'Contact Number ', 0, 1);

// father data
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 4, '', 0, 0); // name
$pdf->Cell(30, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 4, '', 0, 0); // occu
$pdf->Cell(30, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 4, '', 0, 1); // num

$pdf->Rect(16, 112, 61, 8); // box
$pdf->Rect(77, 112, 60.5, 8); // box
$pdf->Rect(137.5, 112, 60.5, 8); // box

$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, 'Mother\'s Name ', 0, 0);
$pdf->Cell(30, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, 'Occupation ', 0, 0);
$pdf->Cell(30, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, 'Contact Number ', 0, 1);

// mother data
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, '', 0, 0); // name
$pdf->Cell(30, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, '', 0, 0); // occu
$pdf->Cell(30, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, '', 0, 1); // num

$pdf->Ln(3);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(85, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, 'Siblings/Children ', 0, 1);
$pdf->Cell(81, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 4, '(From first to last child) ', 0, 1);
$pdf->Ln(2);
$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(45, 5, 'asdasdasd', 0, 0); // data
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(45, 5, 'asdasdasd', 0, 0); // data
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, 'asdasdasdasd', 0, 1); // data
//////////////////////////   data boi sige lang
$pdf->SetFont('Arial', '', 9);
$pdf->Ln(1);
$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(45, 5, 'asdasdasd', 0, 0); // data
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(45, 5, 'asdasdasd', 0, 0); // data
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, 'asdasdasdasd', 0, 1); // data
$pdf->Ln(1);
$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(45, 5, 'asdasdasd', 0, 0); // data
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(45, 5, 'asdasdasd', 0, 0); // data
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, 'asdasdasdasd', 0, 1); // data
$pdf->Ln(1);
$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(45, 5, 'asdasdasd', 0, 0); // data
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(45, 5, 'asdasdasd', 0, 0); // data
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, 'asdasdasdasd', 0, 1); // data
$pdf->Ln(1);
$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(45, 5, 'asdasdasd', 0, 0); // data
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(45, 5, 'asdasdasd', 0, 0); // data
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, 'asdasdasdasd', 0, 1); // data

// box for siblings 
$pdf->Rect(16, 130, 61, 6); // box
$pdf->Rect(77, 130, 60.5, 6); // box
$pdf->Rect(137.5, 130, 60.5, 6); // box

$pdf->Rect(16, 136, 61, 6); // box
$pdf->Rect(77, 136, 60.5, 6); // box
$pdf->Rect(137.5, 136, 60.5, 6); // box

$pdf->Rect(16, 142, 61, 6); // box
$pdf->Rect(77, 142, 60.5, 6); // box
$pdf->Rect(137.5, 142, 60.5, 6); // box

$pdf->Rect(16, 148, 61, 6); // box
$pdf->Rect(77, 148, 60.5, 6); // box
$pdf->Rect(137.5, 148, 60.5, 6); // box

$pdf->Rect(16, 154, 61, 6); // box
$pdf->Rect(77, 154, 60.5, 6); // box
$pdf->Rect(137.5, 154, 60.5, 6); // box

$pdf->Ln(2);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, 'III. Education Background', 0, 1);

$pdf->Ln(3);
// box in education
$pdf->Rect(16, 166, 61, 6); // box
$pdf->Rect(77, 166, 60.5, 6); // box
$pdf->Rect(137.5, 166, 60.5, 6); // box

$pdf->Rect(16, 172, 61, 6); // box
$pdf->Rect(77, 172, 60.5, 6); // box
$pdf->Rect(137.5, 172, 60.5, 6); // box

$pdf->Rect(16, 178, 61, 6); // box
$pdf->Rect(77, 178, 60.5, 6); // box
$pdf->Rect(137.5, 178, 60.5, 6); // box

$pdf->Rect(16, 184, 61, 6); // box
$pdf->Rect(77, 184, 60.5, 6); // box
$pdf->Rect(137.5, 184, 60.5, 6); // box

$pdf->Rect(16, 190, 61, 6); // box
$pdf->Rect(77, 190, 60.5, 6); // box
$pdf->Rect(137.5, 190, 60.5, 6); // box

$pdf->Rect(16, 196, 61, 6); // box
$pdf->Rect(77, 196, 60.5, 6); // box
$pdf->Rect(137.5, 196, 60.5, 6); // box

$pdf->Cell(80, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 3, 'Name of School', 0, 0);

$pdf->Cell(50, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 3, 'Year Graduated', 0, 1);

$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 7, '', 0, 0); // SPACE
$pdf->Cell(15, 8, 'Grade School', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(45, 7, '', 0, 0); // SPACE for data
$pdf->Cell(15, 8, '', 0, 0); // data grade school
$pdf->Cell(65, 7, '', 0, 0); // SPACE graduated
$pdf->Cell(15, 8, '', 0, 1); // data ggraduated

$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 7, '', 0, 0); // SPACE
$pdf->Cell(15, 6, 'Junior High School', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(45, 7, '', 0, 0); // SPACE for data
$pdf->Cell(15, 6, '', 0, 0); // data grade school
$pdf->Cell(65, 7, '', 0, 0); // SPACE graduated
$pdf->Cell(15, 6, '', 0, 1); // data ggraduated

$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 7, '', 0, 0); // SPACE
$pdf->Cell(15, 6, 'Senior High School', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(45, 7, '', 0, 0); // SPACE for data
$pdf->Cell(15, 6, '', 0, 0); // data grade school
$pdf->Cell(65, 7, '', 0, 0); // SPACE graduated
$pdf->Cell(15, 6, '', 0, 1); // data ggraduated

$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 7, '', 0, 0); // SPACE
$pdf->Cell(15, 6, 'Vocational', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(45, 7, '', 0, 0); // SPACE for data
$pdf->Cell(15, 6, '', 0, 0); // data grade school
$pdf->Cell(65, 7, '', 0, 0); // SPACE graduated
$pdf->Cell(15, 6, '', 0, 1); // data ggraduated

$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 7, '', 0, 0); // SPACE
$pdf->Cell(15, 6, 'College', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(45, 7, '', 0, 0); // SPACE for data
$pdf->Cell(15, 6, '', 0, 0); // data grade school
$pdf->Cell(65, 7, '', 0, 0); // SPACE graduated
$pdf->Cell(15, 6, '', 0, 1); // data ggraduated

$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, 'IV. Voluntary Work/Athletic Affiliation', 0, 1);

$pdf->Ln(1);
$pdf->Rect(16, 208, 61, 6); // box
$pdf->Rect(77, 208, 60.5, 6); // box
$pdf->Rect(137.5, 208, 60.5, 6); // box

$pdf->Rect(16, 214, 61, 6); // box
$pdf->Rect(77, 214, 60.5, 6); // box
$pdf->Rect(137.5, 214, 60.5, 6); // box

$pdf->Rect(16, 220, 61, 6); // box
$pdf->Rect(77, 220, 60.5, 6); // box
$pdf->Rect(137.5, 220, 60.5, 6); // box

$pdf->Rect(16, 226, 61, 6); // box
$pdf->Rect(77, 226, 60.5, 6); // box
$pdf->Rect(137.5, 226, 60.5, 6); // box

$pdf->Rect(16, 232, 61, 6); // box
$pdf->Rect(77, 232, 60.5, 6); // box
$pdf->Rect(137.5, 232, 60.5, 6); // box

$pdf->Rect(16, 238, 61, 6); // box
$pdf->Rect(77, 238, 60.5, 6); // box
$pdf->Rect(137.5, 238, 60.5, 6); // box

$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, 'Organizations/Athletics', 0, 0);
$pdf->Cell(60, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, 'Service Rendered', 0, 0);
$pdf->Cell(37, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, 'Date of Affiliation/Membership', 0, 1);

// data for voluntary ikaw na bahala boi
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, '', 0, 0); // data
$pdf->Cell(60, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, '', 0, 0); //data
$pdf->Cell(37, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, '', 0, 1); // data

$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, '', 0, 0); // data
$pdf->Cell(60, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, '', 0, 0);
$pdf->Cell(37, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, '', 0, 1);

$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, '', 0, 0);
$pdf->Cell(60, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, '', 0, 0);
$pdf->Cell(37, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, '', 0, 1);

$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, '', 0, 0); // data
$pdf->Cell(60, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, '', 0, 0);
$pdf->Cell(37, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, '', 0, 1);

$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, '', 0, 0); // data
$pdf->Cell(60, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, '', 0, 0);
$pdf->Cell(37, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 6, '', 0, 1);

$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, 'V. Student\'s Life Information', 0, 1);

$pdf->Rect(16, 249, 91, 25); // box
$pdf->Rect(107, 249, 91, 25); // box
$pdf->Ln(2);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 4, '1.   Parent\'s Marital Status', 0, 0);

$pdf->Cell(65, 2, '', 0, 0); // SPACE
$pdf->Cell(20, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, 'Married and staying together', 0, 1);

$pdf->Cell(103, 2, '', 0, 0); // SPACE
$pdf->Cell(20, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, 'Not Married but living Together', 0, 1);

$pdf->Cell(103, 2, '', 0, 0); // SPACE
$pdf->Cell(20, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, 'Single Parent', 0, 1);

$pdf->Cell(103, 2, '', 0, 0); // SPACE
$pdf->Cell(20, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, 'Married but Separated', 0, 1);

$pdf->Cell(103, 2, '', 0, 0); // SPACE
$pdf->Cell(20, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, 'Other (Please specify)', 0, 1);
///////////////////////////////////////////////////////////
$pdf->Rect(16, 274, 91, 25); // box
$pdf->Rect(107, 274, 91, 25); // box
$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 4, '2.   Who finances your schooling', 0, 0);

$pdf->Cell(65, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, 'Parents', 0, 0);

$pdf->Cell(20, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, 'Scholarship', 0, 1);

$pdf->Cell(103, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, 'Brother/Sister', 0, 0);

$pdf->Cell(20, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, 'Relatives', 0, 1);

$pdf->Cell(103, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, 'Spouse', 0, 0);

$pdf->Cell(20, 2, '', 0, 0); // SPACE
$pdf->Cell(15, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, 'Self-Supporting', 0, 1);
///////////////////////////////////////////////////////
$pdf->Rect(16, 299, 91, 25); // box
$pdf->Rect(107, 299, 91, 25); // box
$pdf->Ln(13);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 4, '3.   How much is your daily allowance', 0, 0);

$pdf->Cell(65, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, '50 Php and below', 0, 0);

$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, '200 - 300', 0, 1);

$pdf->Cell(103, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, '100 Php - 150 Php', 0, 0);

$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, '300 - 500', 0, 1);

$pdf->Cell(103, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, '150 - 200 Php', 0, 0);

$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 4, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 4, '500 and above', 0, 1);

$pdf->AddPage();
$pdf->Rect(16, 15, 91, 25); // box
$pdf->Rect(107, 15, 91, 25); // box
$pdf->Ln(8);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, '4.   Family Income (Monthly)', 0, 0);

$pdf->Cell(65, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Below 10,000 Php', 0, 0);

$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '30,000 - 40,000', 0, 1);

$pdf->Cell(103, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '10,000-20,000 Php', 0, 0);

$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '40,000 - 50,000', 0, 1);

$pdf->Cell(103, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '20,000-30,000 Php', 0, 0);

$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '50,000 and above', 0, 1);
/////////////////////////////////////////////////////

$pdf->Rect(16, 40, 91, 25); // box
$pdf->Rect(107, 40, 91, 25); // box
$pdf->Ln(8);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, '5.   Nature of Residence', 0, 0);

$pdf->SetFont('Arial', 'B', 7.5);
$pdf->Cell(65, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Family owned', 0, 0);

$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'House of Marries sibling', 0, 1);

$pdf->Cell(103, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Relative\'s cmpd.', 0, 0);

$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Dorm (Board & Londing)', 0, 1);

$pdf->Cell(103, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Rented apartment', 0, 0);

$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Shared Apartment', 0, 1);
////////////////////////////////////////////////////////
$pdf->Ln(11);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, 'VI. Health', 0, 1);
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 4, 'A. Physical', 0, 1);

$pdf->Rect(16, 75, 91, 30); // box
$pdf->Rect(107, 75, 91, 30); // box
$pdf->Ln(1);
$pdf->Cell(8, 3, '', 0, 0); // SPACE
$pdf->Cell(30, 5, 'Do you have problem with your vision', 0, 0);

$pdf->Cell(85, 3, '', 0, 0); // SPACE
$pdf->Cell(10, 5, 'Yes', 0, 0);

$pdf->Cell(4, 3, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'No', 0, 0);

$pdf->Cell(2, 3, '', 0, 0); // SPACE
$pdf->Cell(2, 5, 'If yes, pls. specify', 0, 1);

$pdf->Cell(100, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Your Vision', 0, 0);
$pdf->Cell(18, 2, '', 0, 0); // SPACE
$pdf->Cell(8, 5, '', 'B', 0); // line
$pdf->Cell(5, 2, '', 0, 0); // SPACE
$pdf->Cell(8, 5, '', 'B', 1); // line

$pdf->Cell(100, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Your Hearing', 0, 0);
$pdf->Cell(18, 2, '', 0, 0); // SPACE
$pdf->Cell(8, 5, '', 'B', 0); // line
$pdf->Cell(5, 2, '', 0, 0); // SPACE
$pdf->Cell(8, 5, '', 'B', 1); // line

$pdf->Cell(100, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Your Speech', 0, 0);
$pdf->Cell(18, 2, '', 0, 0); // SPACE
$pdf->Cell(8, 5, '', 'B', 0); // line
$pdf->Cell(5, 2, '', 0, 0); // SPACE
$pdf->Cell(8, 5, '', 'B', 1); // line

$pdf->Cell(100, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Your General', 0, 0);
$pdf->Cell(18, 2, '', 0, 0); // SPACE
$pdf->Cell(8, 5, '', 'B', 0); // line
$pdf->Cell(5, 2, '', 0, 0); // SPACE
$pdf->Cell(8, 5, '', 'B', 1); // line

$pdf->Cell(100, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Health', 0, 0);

$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, 'B. Socio-psychological', 0, 1);
$pdf->Cell(19, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, 'Previous Consultation', 0, 1);

$pdf->Rect(16, 114, 38, 6); // box
$pdf->Rect(54, 114, 36, 6); // box
$pdf->Rect(90, 114, 36, 6); // box
$pdf->Rect(126, 114, 36, 6); // box
$pdf->Rect(162, 114, 36, 6); // box

$pdf->Ln(2);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, 'Psychiatrist', 0, 0);
$pdf->Cell(13, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, 'Yes', 0, 0);
$pdf->Cell(6, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'No', 0, 0);
$pdf->Cell(30, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'When', 0, 0);
$pdf->Cell(28, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'For What', 0, 1);

$pdf->Rect(16, 120, 38, 6); // box
$pdf->Rect(54, 120, 36, 6); // box
$pdf->Rect(90, 120, 36, 6); // box
$pdf->Rect(126, 120, 36, 6); // box
$pdf->Rect(162, 120, 36, 6); // box

$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, 'Psychologist', 0, 0);
$pdf->Cell(13, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, '', 0, 0);
$pdf->Cell(6, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '', 0, 0);
$pdf->Cell(30, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '', 0, 0);
$pdf->Cell(28, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '', 0, 1);

$pdf->Rect(16, 126, 38, 6); // box
$pdf->Rect(54, 126, 36, 6); // box
$pdf->Rect(90, 126, 36, 6); // box
$pdf->Rect(126, 126, 36, 6); // box
$pdf->Rect(162, 126, 36, 6); // box

$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, 'Counselor', 0, 0);
$pdf->Cell(13, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, '', 0, 0);
$pdf->Cell(6, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '', 0, 0);
$pdf->Cell(30, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '', 0, 0);
$pdf->Cell(28, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '', 0, 1);

$pdf->Ln(2);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, 'VII. Interest and Hobbies', 0, 1);

$pdf->Rect(16, 138, 91, 12); // box
$pdf->Rect(107, 138, 91, 12); // box

$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, '1.   Favorite Academic Subjects', 0, 0);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(65, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Math', 0, 0);

$pdf->Cell(10, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Science', 0, 0);

$pdf->Cell(10, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'English', 0, 1);

$pdf->Cell(115, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Filipino', 0, 0);

$pdf->Cell(10, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Araling Panlipunan', 0, 0);
///////////////////////////////////////////////////////

$pdf->Rect(16, 150, 91, 12); // box
$pdf->Rect(107, 150, 91, 12); // box

$pdf->Ln(8);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, '2.   Extra-Curricular and Organizations', 0, 0);

$pdf->SetFont('Arial', 'B', 7.5);
$pdf->Cell(65, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 3, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 3, 'Athletics', 0, 0);

$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 3, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 3, 'Performing Arts', 0, 1);

$pdf->Cell(103, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 3, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 3, 'Religious Organization', 0, 0);

$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 3, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 3, 'School Paper', 0, 1);

$pdf->Cell(103, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 3, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 3, 'Scouting', 0, 0);

$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 3, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 3, 'Other (Specify)', 0, 1);
////////////////////////////////////////////////////////////////
$pdf->Rect(16, 162, 91, 9); // box
$pdf->Rect(107, 162, 91, 9); // box

$pdf->Ln(3);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, '3.   Position in Organization', 0, 0);

$pdf->Cell(65, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Officer', 0, 0);

$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(10, 5, '', 'B', 0); // line
$pdf->Cell(1, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Member', 0, 1);

$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, 'VIII. Testing and Student Evaluation (To be filled up ny the school counselor)', 0, 1);

$pdf->Rect(16, 178, 38, 6); // box
$pdf->Rect(54, 178, 36, 6); // box
$pdf->Rect(90, 178, 36, 6); // box
$pdf->Rect(126, 178, 36, 6); // box
$pdf->Rect(162, 178, 36, 6); // box

$pdf->Ln(3);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(10, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, 'Date if Assessment', 0, 0);
$pdf->Cell(10, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, 'Nature of Exam', 0, 0);
$pdf->Cell(6, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Name of Test', 0, 0);
$pdf->Cell(34, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Key Result', 0, 0);
$pdf->Cell(30, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Description', 0, 1);

$pdf->Rect(16, 184, 38, 6); // box
$pdf->Rect(54, 184, 36, 6); // box
$pdf->Rect(90, 184, 36, 6); // box
$pdf->Rect(126, 184, 36, 6); // box
$pdf->Rect(162, 184, 36, 6); // box

// for data kung meron
$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, '', 0, 0);
$pdf->Cell(13, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, '', 0, 0);
$pdf->Cell(6, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '', 0, 0);
$pdf->Cell(30, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '', 0, 0);
$pdf->Cell(28, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '', 0, 1);

$pdf->Rect(16, 190, 38, 6); // box
$pdf->Rect(54, 190, 36, 6); // box
$pdf->Rect(90, 190, 36, 6); // box
$pdf->Rect(126, 190, 36, 6); // box
$pdf->Rect(162, 190, 36, 6); // box

// for data kung meron pag wala edi dont
$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, '', 0, 0);
$pdf->Cell(13, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, '', 0, 0);
$pdf->Cell(6, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '', 0, 0);
$pdf->Cell(30, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '', 0, 0);
$pdf->Cell(28, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '', 0, 1);

$pdf->Rect(16, 196, 38, 6); // box
$pdf->Rect(54, 196, 36, 6); // box
$pdf->Rect(90, 196, 36, 6); // box
$pdf->Rect(126, 196, 36, 6); // box
$pdf->Rect(162, 196, 36, 6); // box

// for data kung meron
$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, '', 0, 0);
$pdf->Cell(13, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, '', 0, 0);
$pdf->Cell(6, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '', 0, 0);
$pdf->Cell(30, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '', 0, 0);
$pdf->Cell(28, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, '', 0, 1);


$pdf->Ln(2);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, 'IX. Significant Notes (To be filled by the school counselor)', 0, 1);

$pdf->Rect(16, 208, 55, 6); // box
$pdf->Rect(71, 208, 57, 6); // box
$pdf->Rect(128, 208, 70, 6); // box


$pdf->Ln(2);
$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 4, 'Date', 0, 0);
$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 4, 'Incident', 0, 0);
$pdf->Cell(25, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 4, 'Remarks', 0, 0);


$pdf->Rect(16, 214, 55, 6); // box
$pdf->Rect(71, 214, 57, 6); // box
$pdf->Rect(128, 214, 70, 6); // box

$pdf->Rect(16, 220, 55, 6); // box
$pdf->Rect(71, 220, 57, 6); // box
$pdf->Rect(128, 220, 70, 6); // box

$pdf->Rect(16, 226, 55, 6); // box
$pdf->Rect(71, 226, 57, 6); // box
$pdf->Rect(128, 226, 70, 6); // box

$pdf->Ln(25);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(8, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 3, 'X. Certification', 0, 1);

$pdf->Ln(5);
$pdf->Cell(20, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 5, 'I DECLARE THAT ALL INFORMATION PROVIDED HERE IN ARE TRUE AND CORRECT', 0, 1);

$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 8, '( Giving false information will make me ineligible foe enrollment of be suvject to dismissal. All information', 0, 1);
$pdf->Cell(10, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 8, 'remain confidential and are bounded by the rules and regulations of Saint Francis of Assisi College.', 0, 1);

$pdf->Ln(15);
$pdf->Cell(10, 2, '', 0, 0); // SPACE
$pdf->Cell(70, 3, '', 'B', 1); // line
$pdf->Cell(15, 2, '', 0, 0); // SPACE
$pdf->Cell(30, 8, 'Signature Over Printed Name', 0, 1);

$pdf->Ln(5);
$pdf->Cell(10, 2, '', 0, 0); // SPACE
$pdf->Cell(5, 5, 'Date: ', 0, 0);
$pdf->Cell(7, 2, '', 0, 0); // SPACE
$pdf->Cell(55, 5, '', 'B', 0); // line

// tapos na boi
$pdf->Output();
