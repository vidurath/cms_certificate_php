<?php

// Include the main TCPDF library (search for installation path).
//require_once('TCPDF-main/');
require_once('TCPDF/tcpdf.php');

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {
    //Page header
    public function Header() {

    }
}

$pdf = new MYPDF('p', 'mm', 'A4', true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Vidurath');
$pdf->SetTitle('Calibration Certificate');
$pdf->SetSubject('Certificate');
$pdf->SetKeywords('Calibration, Certificate');

$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(0);
$pdf->SetFooterMargin(0);

$pdf->setPrintFooter(false);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = 'images/new_calibration_certificate_2.png';
$pdf->Image($img_file, 0, 0, 210);

$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$pdf->SetFont('times', 'B', 12);
$pdf->SetXY(160, 50);

$sampledate = 'date';
$pdf->writeHTML($sampledate, true, false, true, false, '');

$pdf->SetXY(63, 68);
$samplemaxspeed = '70';
$pdf->writeHTML($samplemaxspeed, true, false, true, false, '');

$pdf->SetXY(60, 83);
$samplecustomername = 'John Smith';
$pdf->writeHTML($samplecustomername, true, false, true, false, '');

$pdf->SetXY(55, 93);
$samplemake = 'John / Smith';
$pdf->writeHTML($samplemake, true, false, true, false, '');

$pdf->SetXY(130, 93);
$samplevehicleno = 'vehicleNo';
$pdf->writeHTML($samplevehicleno, true, false, true, false, '');

$pdf->SetXY(45, 103);
$samplevehicleno = 'vehicleNo';
$pdf->writeHTML($samplevehicleno, true, false, true, false, '');

$pdf->SetXY(55, 113);
$samplecalibratedAt = 'CalibrateAt';
$pdf->writeHTML($samplecalibratedAt, true, false, true, false, '');

$pdf->SetXY(130, 113);
$samplecalibratedBy = 'CalibrateBy';
$pdf->writeHTML($samplecalibratedBy, true, false, true, false, '');

$pdf->SetXY(70, 123.6);
$samplecalibratedDate = 'CalibrateDate';
$pdf->writeHTML($samplecalibratedDate, true, false, true, false, '');

$pdf->SetXY(20, 180);
$test = "https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=c5a44fd2-6c9b-4e97-b4fc-5df017030d86";
$pdf->Image($test);




//Close and output PDF document
$pdf->Output('calibration-certification.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
 ?>
