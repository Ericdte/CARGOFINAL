<?php 

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
$sql = "INSERT INTO `infogenclient` (`tva`, `nomc`,`mail1`, `tel1`, `pay`, `ville`, `adresse`, `adref`, `adrec`, `ges` ) VALUES ('$tva', '$nomc', '$mail1', '$tel1', '$pay', '$ville', '$adresse','$adref', '$adrec', '$ges')";
$result=mysqli_query($con,$sql);
if ($result) {
    //echo"Data inserted successfully";
    header('location:clients.php');
} else {
    die(mysqli_error($con));
}

}
?>






<?php  
$query ="SELECT * FROM infogenclient ORDER BY ID DESC";  
 $result = mysqli_query($con, $query);  
 ?>

<!DOCTYPE html>
<html>

<head>
	<title>Webslesson Tutorial | Datatables Jquery Plugin with Php MySql and Bootstrap</title>




	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
</head>

<body>

	<br /><br /> t
	<div class="container">
		<h3 align="center">Clients</h3>
		<br />
		<button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop">Créer
			Clients</button> <br /><br />

		<table id="employee_data" class="table table-striped table-bordered ">
			<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">TVA</th>
					<th scope="col">Nom</th>
					<th scope="col">Téléphone</th>
					<th scope="col">Mail 1</th>
					<th scope="col">Pay</th>
					<th scope="col">Ville</th>
					<th scope="col">Adresse</th>
					<th scope="col">Facturation</th>
					<th scope="col">Comptabilite</th>
					<th scope="col">Gestionaire</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                            $id = $row['id'];
                            $tva = $row['tva'];
                        $nomc= $row['nomc'];
                        $tel1 = $row['tel1'];
                        $mail1 = $row['mail1'];
                        $pay= $row['pay'];
                        $ville = $row['ville'];
                        $adresse = $row['adresse'];
                        $adref= $row['adref'];
                        $adrec = $row['adrec'];
                        $ges = $row['ges'];
                               echo '  
                               <tr>  
                               <th scope="row">'.$id.'</th>
                               <td>'.$tva.'</td>
                               <td>'.$nomc.'</td>
                               <td>'.$mail1.'</td>
                               <td>'.$tel1.'</td>
                               <td>'.$pay.'</td>
                               <td>'.$ville.'</td>
                               <td>'.$adresse.'</td>
                               <td>'.$adref.'</td>
                               <td>'.$adrec.'</td>
                               <td>'.$ges.'</td> 
                               <td>
                               <a href="update_client.php? updateid='.$id.'"><i class="fas fa-marker"></i></a>  
                             <a  href="delete_client.php? deleteid='.$id.'"><i class="fas fa-trash"></i></a>
                             

</td>
                               </tr>  
                               ';  
                          }  
                          ?>
		</table>
	</div>
	</div>
	<script>
	$(document).ready(function() {
		$('#employee_data').DataTable();
	});
	</script>
	<!-- Button trigger modal -->


	<!-- Modal Create -->
	<div class="modal fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1"
		aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Création Clients</h5>
					<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form id="collect" method="post">
						<div class="form-group">
							<label>TVA:</label>
							<input type="text" class="form-control" name="tva">
						</div>
						<div class="form-group">
							<label>Nom du Client:</label>
							<input type="text" class="form-control" name="nomc" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Email:</label>
							<input type="text" class="form-control" name="mail1">
						</div>
						<div class="form-group">
							<label>Téléphone:</label>
							<input type="text" class="form-control" name="tel1">
						</div>
						<div class="form-group">
							<label>Pay:</label>
							<input type="text" class="form-control" name="pay">
						</div>
						<div class="form-group">
							<label>Ville:</label>
							<input type="text" class="form-control" name="ville">
						</div>
						<div class="form-group">
							<label>Adresse:</label>
							<input type="text" class="form-control" name="adresse">
						</div>
						<div class="form-group">
							<label>Facturation:</label>
							<input type="text" class="form-control" name="adref">
						</div>
						<div class="form-group">
							<label>Contabilité:</label>
							<input type="text" class="form-control" name="adrec">
						</div>
						<div class="form-group">
							<label>Gestionaire Client:</label>
							<input type="text" class="form-control" name="ges">
						</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Retour</button>
					<button id="collect" type="submit" name="submit" class="btn btn-primary">Enregistre</button>
				</div>
				</form>
			</div>
		</div>
	</div>








</body>

</html>