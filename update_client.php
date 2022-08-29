<?php 
include 'dbcon.php';
$id=$_GET['updateid'];
$sql="Select * from `infogenclient` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$tva = $row['tva'];
$nomc= $row['nomc'];
$tel1 = $row['tel1'];
$pay= $row['pay'];
$ville = $row['ville'];
$adresse = $row['adresse'];
$adref= $row['adref'];
$mail1 = $row['mail1'];
$adrec = $row['adrec'];
$ges = $row['ges'];


if(isset($_POST['submit'])){ 
$tva = $_POST['tva'];
$nomc= $_POST['nomc'];
$tel1 = $_POST['tel1'];
$pay= $_POST['pay'];
$ville = $_POST['ville'];
$adresse = $_POST['adresse'];
$adref= $_POST['adref'];
$mail1 = $_POST['mail1'];
$adrec = $_POST['adrec'];
$ges = $_POST['ges'];

$sql = "update `infogenclient` set  id='$id', tva='$tva',nomc='$nomc',mail1='$mail1', tel1='$tel1',pay='$pay', ville='$ville', adresse='$adresse', adrec='$adrec', ges='$ges' where id=$id";
$result=mysqli_query($con,$sql);
if ($result) {
    //echo"updated successfully";
   header('location:table1.php');
} else {
    die(mysqli_error($con));
}

}
?>
