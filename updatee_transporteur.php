<?php 
include 'dbcon.php';
$id=$_GET['updateid'];
$sql="Select * from `transporteur` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$tva_transporteur = $row['tva_transporteur'];
$nom_transporteur= $row['nom_transporteur'];
$siret_transporteur= $row['siret_transporteur'];
$rs_transporteur= $row['rs_transporteur'];
$ville_transporteur = $row['ville_transporteur'];

$pay_transporteur= $row['pay_transporteur'];
$tel_transporteur = $row['tel_transporteur'];
$fax_transporteur = $row['fax_transporteur'];
$email_transporteur = $row['email_transporteur'];
$sw_transporteur = $row['sw_transporteur'];


if(isset($_POST['submit'])){ 
    $tva_transporteur = $_POST['tva_transporteur'];
    $nom_transporteur= $_POST['nom_transporteur'];
    $siret_transporteur= $_POST['siret_transporteur'];
    $rs_transporteur= $_POST['rs_transporteur'];
    $ville_transporteur = $_POST['ville_transporteur'];
   
    $pay_transporteur= $_POST['pay_transporteur'];
    $tel_transporteur = $_POST['tel_transporteur'];
    $fax_transporteur = $_POST['fax_transporteur'];
    $email_transporteur = $_POST['email_transporteur'];
    $sw_transporteur = $_POST['sw_transporteur'];

$sql = "update `transporteur` set  id='$id', tva_transporteur='$tva_transporteur', nom_transporteur='$nom_transporteur',siret_transporteur='$siret_transporteur', rs_transporteur='$rs_transporteur',pay_transporteur='$pay_transporteur',tel_transporteur='$tel_transporteur', fax_transporteur='$fax_transporteur', email_transporteur='$email_transporteur', sw_transporteur='$sw_transporteur' where id=$id";
$result=mysqli_query($con,$sql);
if ($result) {
    //echo"updated successfully";
   header('location:trans.php');
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

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="update_transporteur.css">

	<title>Information Générale!</title>
</head>

<body>
	<div id="book">
		<div class="container my-5">
			<form method="post">
				<div class="form-group">
					<label>TVA:</label>
					<input type="text" class="form-control" name="tva_transporteur"
						value=<?php echo $tva_transporteur;?> </div>
					<div class="form-group">
						<label>Nom du Transporteur:</label>
						<input type="text" class="form-control" name="nom_transporteur" autocomplete="off"
							value=<?php echo $nom_transporteur;?> </div>
						<div class="form-group">
							<label>Numero Siret:</label>
							<input type="text" class="form-control" name="siret_transporteur" autocomplete="off"
								value=<?php echo $siret_transporteur;?> </div>
							<div class="form-group">
								<label>Raison Social:</label>
								<input type="text" class="form-control" name="rs_transporteur" autocomplete="off"
									value=<?php echo $rs_transporteur;?> </div>
							</div>
							<div class="form-group">
								<label>Ville:</label>
								<input type="text" class="form-control" name="ville_transporteur"
									value=<?php echo $ville_transporteur;?> </div>




								<div class="form-group">
									<label>Pay:</label>
									<input type="text" class="form-control" name="pay_transporteur"
										value=<?php echo $pay_transporteur;?> </div>
									<div class="form-group">
										<label>Téléphone:</label>
										<input type="text" class="form-control" name="tel_transporteur"
											value=<?php echo $tel_transporteur;?> </div>
										<div class="form-group">
											<label>Fax:</label>
											<input type="text" class="form-control" name="fax_transporteur"
												value=<?php echo $fax_transporteur;?> </div>
										</div>


										<div class="form-group">
											<label>Email:</label>
											<input type="text" class="form-control" name="email_transporteur"
												value=<?php echo $email_transporteur;?> </div>


											<div class="form-group">
												<label>Site Web:</label>
												<input type="text" class="form-control" name="sw_transporteur"
													value=<?php echo $sw_transporteur;?> </div>
												</br> <button type="submit" name="submit"
													class="btn btn-primary btn-small">Modifier
												</button>
			</form>
		</div>
	</div>
</body>

</html>