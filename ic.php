<?php
require_once 'include/db.php';
require_once 'assets/head.php';

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
$pdf->SetAuthor('Startouch');
$pdf->SetTitle('Installation Certificate');
$pdf->SetSubject('Certificate');
$pdf->SetKeywords('Installation, Certificate');

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
$img_file = 'images/installation_certificate.png';
$pdf->Image($img_file, 0, 0, 210);

$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$pdf->SetFont('times', 'B', 12);
$pdf->SetXY(160, 50);

$uuid = $_GET['uuid'];
$sql="SELECT * FROM horsepower_detail WHERE uuid = '$uuid'";
$result=$conn->query($sql);
  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

$date = date('Y-m-d', strtotime($row['createdAt']));
$pdf->writeHTML($date, true, false, true, false, '');

$pdf->SetXY(90, 67);
$maxspeed = $row['mspeed'];
$pdf->writeHTML($maxspeed, true, false, true, false, '');

$pdf->SetXY(70, 83);
$serialnumber = $row['serialnumber'];
$pdf->writeHTML($serialnumber, true, false, true, false, '');

$pdf->SetXY(140, 83);
$vmake = $row['vmake'];
$vmodel = $row['vmodel'];
$pdf->writeHTML($vmake.'/'.$vmodel, true, false, true, false, '');

$pdf->SetXY(60, 88);
$vehicleNo = $row['rmark'];
$pdf->writeHTML($vehicleNo, true, false, true, false, '');

$pdf->SetXY(50, 93);
$cname = $row['cname'];
$pdf->writeHTML($cname, true, false, true, false, '');

$pdf->SetXY(150, 93);
$invoice = $row['invnumber'];
$pdf->writeHTML($invoice, true, false, true, false, '');

$pdf->SetXY(140, 98);
$installedby = $row['installedby'];
$pdf->writeHTML($installedby, true, false, true, false, '');

$pdf->SetXY(65, 103);
$installationdate = date('Y-m-d', strtotime($row['createdAt'])); 
$pdf->writeHTML($installationdate, true, false, true, false, '');

$pdf->SetXY(150, 195);
$url = 'http://localhost/ccs/validation.php?uuid='.$uuid;
$qrcode = "https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=$url";
$pdf->Image($qrcode);

$pdf->SetFont('times', 'B', 5);
$pdf->SetXY(11.2, 15.1);
$ctype = $row['ctype'];
switch ($ctype) {
    case 'Transfer Of Vehicle':
        $pdf->writeHTML('TOV', true, false, true, false, '');
        break;

    case 'Transfer Of Owner':
        $pdf->writeHTML('TOO', true, false, true, false, '');
        break;

    case 'Lost Certificate':
        $pdf->writeHTML('LC', true, false, true, false, '');
        break;        

    default:
        # code...
        break;
}

ob_end_clean();
//Close and output PDF document
$pdf->Output('installation-certification-'.$cname.'.pdf', 'I');

    }
}

//============================================================+
// END OF FILE
//============================================================+
 ?>
