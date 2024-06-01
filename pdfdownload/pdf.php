<?php
// Start output buffering
ob_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "student");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Include the FPDF library
require('fpdf186/fpdf.php');

// Create instance of FPDF class
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

// Set font for the document
$pdf->SetFont('Arial', 'B', 16);

// Add images to the PDF
$pdf->Image('C:/xampp/htdocs/studentApplication/pdfdownload/periyar.jpg', 0, 0, 30, 30, 'jpg');

// Add title
$pdf->SetTextColor(78, 58, 159);
$pdf->Cell(180, 10, 'PERIYAR UNIVERSITY', 0, 1, 'C');

// Add another image
$pdf->Image('C:/xampp/htdocs/studentApplication/pdfdownload/download 2.jpg', 175, 0, 30, 30, 'jpg');

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

// Output the PDF to the browser
$pdf->Output('D','sample.pdf','');

// End output buffering and flush the buffer
ob_end_flush();
?>
