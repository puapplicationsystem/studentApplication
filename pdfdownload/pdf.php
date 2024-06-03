<?php
// Start output buffering
ob_start();
/*
// Database connection
$conn = new mysqli("localhost", "root", "", "student");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
*/
// Include the FPDF library
require('fpdf186/fpdf.php');


$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();


$pdf->SetFont('Arial', 'B', 16);


$pdf->Image('C:/xampp/htdocs/studentApplication/pdfdownload/download 2.jpg', 10, 10, 30, 25, 'jpg');

// Header 
$pdf->SetTextColor(0,0,100);
$pdf->Cell(180, 10, 'PERIYAR UNIVERSITY', 0, 1, 'C');
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(180,4,'Salem-636 011, Tamil Nadu, India',0,1,'C' ) ;
$pdf->Cell(180,4,"NAAC with 'A++' Grade - State University NIRF Rank 59",0,1,"C") ;
$pdf->Cell(180,4,"NIRF Innovation Band of 11-50",0,1,"C") ;
$pdf->ln(4);


// Add another image
$pdf->Image('C:/xampp/htdocs/studentApplication/pdfdownload/periyar.jpg', 175, 9, 25, 25, 'jpg');

$pdf->SetLineWidth(0.3);
// Line 
$pdf->Line(10,38,200,38);

//Menu
$pdf->SetFont('Arial', 'UB', 10);
$pdf->Cell(180,15,"Admission for the year 2024-25",0,1,"C") ;
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 3, "Application No. :", 0, 0);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(50, 3, 'PU/PA/23/1471', 0, 0);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(80, 3, "Enrollment No. :", 0, 0,'R');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(30, 3, "", 1, 1);
$pdf->Ln(5);

/*
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(5,15,'1.',1,0);
$pdf->Cell(40,15,'Programme Applied',1,0);
$pdf->Cell(40,15,':',1,0,'R');
$pdf->Cell(70,15,'Master of Computer Application - Computer Application',1,1,'L'); 
$pdf->Image('C:\Users\Vigneshwaran K\Downloads\black.jpg', 173, 55, 27, 30, 'jpg');   
 */

//Applicant Program
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(5, 8, '1.', 0, 0);
$pdf->Cell(40, 8, 'Programme Applied', 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->SetX(95); // Adjust the X position
$pdf->MultiCell(80, 5, 'Master of Computer Application - Computer Application', 0, 'L');

//Applicant Image 
$pdf->Image("D:\Vicky\Photo\photo.jpg", 173, 60, 27, 30, 'jpg'); 

//Applicant Name
$pdf->Cell(5, 8, '2.', 0, 0);
$pdf->Cell(40, 8, 'Name of the Applicant', 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'VIGNESHWARAN K',0,1, 'L');

//Applicant DOB
$pdf->Cell(5, 8, '3.', 0, 0);
$pdf->Cell(40, 8, 'Date of Birth ', 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, '19/11/2002',0,1, 'L');

//Applicant Father & Mother Name
$pdf->Cell(5, 8, '4.', 0, 0);
$pdf->Cell(40, 8, 'Name of the Father & Mother ', 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'KRISHNAMOORTHY R & VALLIAMMAL',0,1, 'L');

//Applicant Guardian Name
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Name of the Guardian  ', 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'Guardian Name',0,1, 'L');

//Applicant Father Occupation
$pdf->Cell(5, 8, '5.', 0, 0);
$pdf->Cell(40, 8, "Father's & Mother's Occupation  ", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'FARMER & HOUSE WIFE',0,1, 'L');

//Applicant Gender
$pdf->Cell(5, 8, '6.', 0, 0);
$pdf->Cell(40, 8, "Gender   ", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'Male',0,1, 'L');

//Applicant Mother Tongue
$pdf->Cell(5, 8, '7.', 0, 0);
$pdf->Cell(40, 8, "Mother Tongue  ", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'Tamil',0,1, 'L');

//Applicant Nationality
$pdf->Cell(5, 8, '8.', 0, 0);
$pdf->Cell(40, 8, "Nationality   ", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'INDIA',0,1, 'L');

//Applicant Religion 
$pdf->Cell(5, 8, '9.', 0, 0);
$pdf->Cell(40, 8, "Religion    ", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'HINDU',0,1, 'L');

//Applicant Community 
$pdf->Cell(5, 8, '10.', 0, 0);
$pdf->Cell(40, 8, "Community", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'MBC',0,1, 'L');

//Applicant Address Communication
$pdf->Cell(5, 8, '11.', 0, 0);
$pdf->Cell(40, 8, " Address for Communication  ", 0, 1);

//Address Com Line 1
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "Line 1", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'S/O: KRISHNAMOORHTY, 219/1',0,1, 'L');

//Address Com Line 2
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "Line 2 ", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'INDIRA NAGAR, THIMMAPURAM, PANDIYANKUPPAM POST',0,1, 'L');

//Address Com Line 3
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "Line 3 ", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'CHINNASELAM TALUK',0,1, 'L');

//Address Com District
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "District", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'KALLAKURICHI - 606201',0,1, 'L');

//Address Com State
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "State", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'Tamil Nadu',0,1, 'L');

//Address Com Country
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "Country  ", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'INDIA',0,1, 'L');

//Applicant Moblie Number
$pdf->Cell(5, 8, '12.', 0, 0);
$pdf->Cell(40, 8, "Mobile No.", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, '8248084792',0,1, 'L');

//Applicant Telephone No.
$pdf->Cell(5, 8, '13.', 0, 0);
$pdf->Cell(40, 8, "Telephone No.(LL)", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, '',0,1, 'L');

//Applicant E-mail ID
$pdf->Cell(5, 8, '14.', 0, 0);
$pdf->Cell(40, 8, "E-Mail ID", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'vigneshwaranrk2@gmail.com',0,1, 'L');

//Applicant Aahaar Card No. 
$pdf->Cell(5, 8, '15.', 0, 0);
$pdf->Cell(40, 8, "Aadhaar Card No.", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, '987654321987',0,1, 'L');

//Applicant Special Quota
$pdf->Cell(5, 8, '16.', 0, 0);
$pdf->Cell(40, 8, "Special Quota", 0, 1);

//Applicant Ex-Servicemen
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "Ex-Servicemen", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, '',0,1, 'L');

//Applicant Differently Abled
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "Differently Abled", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, '',0,1, 'L');

//Applicant Sports Quota
$pdf->Cell(5, 7, '', 0, 0);
$pdf->Cell(40, 7, "Sports Quota", 0, 0);
$pdf->Cell(40, 7, ':', 0, 0, 'R');
$pdf->Cell(75, 7, '',0,1, 'L');

//Applicant Other
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "Other", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, '',0,1, 'L');

//Applicant Native Place
$pdf->Cell(5, 8, '17.', 0, 0);
$pdf->Cell(40, 8, "Native Place", 0, 1);

//Applicant Native Village
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "Native Village / Town", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'THMMAPURAM',0,1, 'L');

//Applicant District
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "District", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'Kallakurichi',0,1, 'L');

//Applicant State

$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "State", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'Tamil Nadu',0,1, 'L');

//Applicant Address Permanent
$pdf->Cell(5, 8, '11.', 0, 0);
$pdf->Cell(40, 8, " Address for Communication  ", 0, 1);

//Address Per Line 1
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "Line 1", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'S/O: KRISHNAMOORHTY, 219/1',0,1, 'L');

//Address Per Line 2
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "Line 2 ", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'INDIRA NAGAR, THIMMAPURAM, PANDIYANKUPPAM POST',0,1, 'L');

//Address Per Line 3
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "Line 3 ", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'CHINNASELAM TALUK',0,1, 'L');

//Address Per District
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "District", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'KALLAKURICHI - 606201',0,1, 'L');

//Address Per State
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "State", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'Tamil Nadu',0,1, 'L');

//Address Per Country
$pdf->Cell(5, 8, '', 0, 0);
$pdf->Cell(40, 8, "Country  ", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'INDIA',0,1, 'L');

//Applicant Education
$pdf->Cell(5, 8, '19.', 0, 0);
$pdf->Cell(40, 8, "Educational Qualification", 0, 1);


$pdf->Cell(15, 25, 'Course', 1, 0,'C');
$pdf->Cell(30, 25, 'Institution', 1, 0,'C');
$pdf->Cell(15, 25, 'Board', 1, 0,'C');
$pdf->Cell(35, 25, 'Subject Studied', 1, 0,'C');
$pdf->Cell(22, 25, 'Register No.', 1, 0,'C');
$pdf->SetY(106);
$pdf->setx(127);
$pdf->MultiCell(25, 12.5, 'Mark obtained in Percentage', 1,'C');
$pdf->SetY(106);
$pdf->setx(152);
$pdf->MultiCell(25, 8.3, 'Month and Year of Passing', 1,'C');
$pdf->SetY(106);
$pdf->setx(177);
$pdf->MultiCell(25, 8.3, 'Regular / Private Other Study ', 1,'C');























/*
// Query the database for specific email
$email = 'mothish2@gmail.com';
$sql = "SELECT photo, sign FROM upload WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();

    // Assign data to specific variables
    $field1 = $row['photo'];
    $field2 = $row['sign'];
    
    // Output the data to the PDF
    $pdf->SetFont('Arial', '', 12);
    $pdf->Ln(20); // Line break

    $pdf->Cell(50, 10, 'Field 1:', 0);
    $pdf->Cell(130, 10, $field1, 0);
    $pdf->Ln();

    $pdf->Cell(50, 10, 'Field 2:', 0);
    $pdf->Cell(130, 10, $field2, 0);
    $pdf->Ln();

    
} else {
    $pdf->SetFont('Arial', 'I', 12);
    $pdf->Cell(0, 10, 'No data found for the provided email.', 0, 1, 'C');
}

// Close the database connection
$conn->close();
*/
// Output the PDF to the browser
$pdf->Output();

// End output buffering and flush the buffer
ob_end_flush();
?>
