<?php
require_once('../TCPDF-main/tcpdf.php');
require_once('get_customers.php');

// create a new TCPDF object
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document properties
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Customer Details');
$pdf->SetSubject('Customer Details');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// add a new page to the PDF
$pdf->AddPage();

$html = '<h1>Customer Details</h1>';
$html .= '<table>';
$html .= '<thead>';
$html .= '<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th></tr>';
$html .= '</thead>';
$html .= '<tbody>';
// Loop through the customers and add them to the PDF
foreach ($customers as $customer) {
    $html .= '<tr><td>'.$customer['id'].'</td><td>'.$customer['name'].'</td><td>'.$customer['email'].'</td><td>'.$customer['phone'].'</td></tr>';
}
$html .= '</tbody>';
$html .= '</table>';

// Output the HTML to the PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Output the PDF
$pdf->Output('customer_details.pdf', 'D');




