<?php
// include('./dbcon.php');
require 'vendor/autoload.php';
//TODO: repaire the connection var issue
$con=new mysqli('localhost','root','','logistic');

// include 'dbcon.php';
use Dompdf\Dompdf;
// $id = $_GET['id'];
$transporteurSql = mysqli_query($con,"SELECT transporteur.nom_transporteur,transporteur.ville_transporteur,transporteur.tva_transporteur, transporteur.tel_transporteur,transporteur.email_transporteur FROM transporteur WHERE id=2;");
$transporteur = mysqli_fetch_assoc($transporteurSql);

$chargementSql = mysqli_query($con, "SELECT chargement.date,chargement.time1,chargement.time2,chargement.name,chargement.noms,livraison.datee,livraison.timee1,livraison.timee2,livraison.namee,livraison.nomss FROM chargement, livraison WHERE chargement.ref=livraison.reff;");
$chargement = mysqli_fetch_assoc($chargementSql);
// reference the Dompdf namespace
// $sql = mysqli_query($con, $sql);
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