<?php
include 'dbcon.php';
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

$sql = "INSERT INTO `transporteur` (`tva_transporteur`, `nom_transporteur`,`siret_transporteur`, `rs_transporteur`,
`ville_transporteur`, `pay_transporteur`, `tel_transporteur`, `fax_transporteur`,
`email_transporteur`, `sw_transporteur` ) VALUES ('$tva_transporteur', '$nom_transporteur','$siret_transporteur',
'$rs_transporteur', '$ville_transporteur', '$pay_transporteur', '$tel_transporteur',
'$fax_transporteur', '$email_transporteur', '$sw_transporteur')";
$result=mysqli_query($con,$sql);
if ($result) {
//echo"Data inserted successfully";
header('location:trans.php');
} else {
die(mysqli_error($con));
}

}
?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>
<?php include('includes/footer.php');?>


<!doctype html>


<html lang="en">

<head>
	<title>Title</title>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
</head>

<body>
	<br /><br /> t
	<div class="container">
		<h3 align="center">Transporteurs</h3>
		<br />


		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop">

			Créer
			Transporteur </button>

		<table class="table" id="employee_data+">
			<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">TVA</th>
					<th scope="col">Nom</th>
					<th scope="col">Siret</th>
					<th scope="col">Raison social</th>
					<th scope="col">Ville</th>
					<th scope="col">Pay</th>
					<th scope="col">Telephone</th>
					<th scope="col">Fax</th>
					<th scope="col">Email</th>
					<th scope="col">Site Web</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
$sql="Select * from `transporteur`";
$result=mysqli_query($con,$sql);
if ($result) {
  while ($row=mysqli_fetch_assoc($result)) {
    $id = $row['id'];
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

echo '
<tr>
<th scope="row">'.$id.'</th>
<td>'.$tva_transporteur.'</td>                                       
<td>'.$nom_transporteur.'</td>
<td>'.$siret_transporteur.'</td>
<td>'.$rs_transporteur.'</td>
<td>'.$ville_transporteur.'</td>
<td>'.$pay_transporteur.'</td>
<td>'.$tel_transporteur.'</td>
<td>'.$fax_transporteur.'</td>
<td>'.$email_transporteur.'</td>
<td>'.$sw_transporteur.'</td>
<td>

<a  href="updatee_transporteur.php? updateid='.$id.'"><i class="fas fa-marker"></i></a>  
<a  href="delete_transporteur.php? deleteid='.$id.'"><i class="fas fa-trash"></i></a>
            </tr> ' ;

            }
            }
            ?>
			</tbody>
		</table>
		<script>
		$(document).ready(function() {
			$('#employee_data').DataTable();
		});
		</script>


		<!-- Modal -->
		<div class="modal fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1"
			aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog ">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Création Transporteur</h5>
						<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
					</div>
					<form method="post">
						<div class="modal-body">
							<div class="form-group">
								<label>TVA:</label>
								<input type="text" class="form-control" name="tva_transporteur">
							</div>
							<div class="form-group">
								<label>Nom du Transporteur:</label>
								<input type="text" class="form-control" name="nom_transporteur" autocomplete="off">
							</div>
							<div class="form-group">
								<label>Numero Siret:</label>
								<input type="text" class="form-control" name="siret_transporteur" autocomplete="off">
							</div>
							<div class="form-group">
								<label>Raison Social:</label>
								<input type="text" class="form-control" name="rs_transporteur" autocomplete="off">
							</div>


							<div class="form-group">
								<label>Ville:</label>
								<input type="text" class="form-control" name="ville_transporteur">
							</div>

							<div class="form-group">
								<label>Pay:</label>
								<input type="text" class="form-control" name="pay_transporteur">
							</div>
							<div class="form-group">
								<label>Téléphone:</label>
								<input type="text" class="form-control" name="tel_transporteur">
							</div>
							<div class="form-group">
								<label>Fax:</label>
								<input type="text" class="form-control" name="fax_transporteur">
							</div>


							<div class="form-group">
								<label>Email:</label>
								<input type="text" class="form-control" name="email_transporteur">
							</div>


							<div class="form-group">
								<label>Site Web:</label>
								<input type="text" class="form-control" name="sw_transporteur">
							</div>



						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
							<button type="submit" name="submit" class=" btn btn-primary">Enregistrer</button>
						</div>
					</form>
				</div>
			</div>
		</div>
</body>

</html>