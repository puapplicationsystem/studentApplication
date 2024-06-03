//Applicant Program
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(5, 8, '1.', 0, 0);
$pdf->Cell(40, 8, 'Programme Applied', 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->SetX(95); // Adjust the X position
$pdf->MultiCell(80, 5, 'Master of Computer Application - Computer Application', 0, 'L');

//Applicant Image 
$pdf->Image("C:\Users\Vigneshwaran K\Downloads\black.jpg", 173, 60, 27, 30, 'jpg'); 

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
$pdf->Cell(5, 8, '8.', 0, 0);
$pdf->Cell(40, 8, "Community    ", 0, 0);
$pdf->Cell(40, 8, ':', 0, 0, 'R');
$pdf->Cell(75, 8, 'MBC',0,1, 'L');

