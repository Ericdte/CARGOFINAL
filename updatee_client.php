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
   header('location:clients.php');
} else {
    die(mysqli_error($con));
}

}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="update_client.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Information Générale!</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>TVA</label>
                <input type="text" class="form-control" name="tva" value=<?php echo $tva;?> </div>
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" class="form-control" name="nomc" autocomplete="off" value=<?php echo $nomc;?>
                        </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="mail1" value=<?php echo $mail1;?> </div>
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="text" class="form-control" name="tel1" value=<?php echo $tel1;?> </div>
                            <div class="form-group">
                                <label>Pay</label>
                                <input type="text" class="form-control" name="pay" value=<?php echo $pay;?> </div>
                                <div class="form-group">
                                    <label>Ville</label>
                                    <input type="text" class="form-control" name="ville" value=<?php echo $ville;?>
                                        </div>
                                    <div class="form-group">
                                        <label>Adresse</label>
                                        <input type="text" class="form-control" name="adresse"
                                            value=<?php echo $adresse;?> </div>
                                        <div class="form-group">
                                            <label>Facturation</label>
                                            <input type="text" class="form-control" name="adref"
                                                value=<?php echo $adref;?> </div>
                                            <div class="form-group">
                                                <label>Conta</label>
                                                <input type="text" class="form-control" name="adrec"
                                                    value=<?php echo $adrec;?> </div>
                                                <div class="form-group">
                                                    <label>Gestion</label>
                                                    <input type="text" class="form-control" name="ges"
                                                        value=<?php echo $ges;?> </div>
                                                    </br> <button type="submit" name="submit"
                                                        class="btn btn-primary btn-small">Modifier
                                                    </button>
        </form>

</body>

</html>