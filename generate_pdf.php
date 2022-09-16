<?php
include('./dbcon.php');
require 'vendor/autoload.php';
include 'dbcon.php';
use Dompdf\Dompdf;
// $id = $_GET['id'];
$sql = mysqli_query($con,"SELECT * FROM transporteur WHERE id=2;");
$user = mysqli_fetch_assoc($sql);


// reference the Dompdf namespace
// $sql = mysqli_query($con, "");
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->getOptions()->setChroot("C:\\laragon\\www\\CARGOFINAL\\public");

ob_start();
require 'pdf_model.php';
$html =  ob_get_contents();
ob_get_clean();
// define("DOMPDF_ENABLE_REMOTE", false);

$dompdf->loadHtml($html);


// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('generate_pdf.php',['Attachment' => false]);