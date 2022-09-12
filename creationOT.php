<?php include('dbcon.php');?>

<?php  
$query ="SELECT chargement.id, chargement.name, chargement.ref, chargement.ville, chargement.date,  livraison.id, livraison.villee, livraison.prix  FROM chargement , livraison WHERE chargement.id = livraison.id  ORDER BY chargement.id DESC";  
$result = mysqli_query($con, $query);  
?>


<!DOCTYPE html>
<html>

<head>
	<title>Ordres de Transport non Affecté</title>




	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
</head>

<body>
	<br /><br /> t
	<div class="container">
		<h3 align="center">Ordres de Transport non Affecté</h3>
		<br />
		<button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
			Créer un OT
		</button> <br /><br />

		<table id="employee_data" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th scope="col">Numero Ot</th>
					<th scope="col">Client</th>
					<th scope="col">Départ</th>
					<th scope="col">Date Départ</th>
					<th scope="col">Arrive</th>
					<th scope="col">Référence de chargement</th>
					<th scope="col">Prix</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                            $id = $row['id'];
                            $name = $row['name'];
                            $ville= $row['ville'];
                            $date= $row['date'];
                            $villee= $row['villee'];
                            $ref = $row['ref'];
                            $prix = $row['prix'];
                               echo '  
                               <tr>  
                               <th scope="row">'.$id.'</th>
                               <td>'.$name.'</td>                                       
                               <td>'.$ville.'</td>
                               <td>'.$date.'</td>
                               <td>'.$villee.'</td>
                               <td>'.$ref.'</td>
                               <td>'.$prix.'</td>
                              <td>
                               <a  data-mdb-toggle="modal" data-mdb-target="#exampleModal1" href="update_OT.php? updateid='.$id.'"><i class="fas fa-marker"></i></a>  
                               <a  href="action3.php? deleteid='.$id.'"><i class="fas fa-trash"></i></a>
							   <a  data-mdb-toggle="modal" data-mdb-target="#exampleModal2"  href="code1.php?  deleteid='.$id.'"><i class="fas fa-truck"></i></i></a>
							    <a   href="action3.php? deleteid='.$id.'"><i class="fas fa-truck-moving"></i></i></i></a>    
							 
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












	<script>
	// Remove Chargement
	$(document).ready(function() {
		$(document).on('click', '.remove-btn-chargement', function() {

			$(this).closest('.card-body').remove();
		});
		// Remove Livraison
		$(document).on('click', '.remove-btn-livraison', function() {

			$(this).closest('.card-body1').remove();
		});

		// ADD CHARGEMENT

		$(document).on('click',
			'.add-more-form-chargement',
			function() {
				$('.paste-new-form-chargement').append('<div class="card-body" style=" border: 1px s black; border-style:groove; width:75%; height:210px;background-color:blue; margin-top:30px; ">\
             <div class="main-form mt-3 d-inline  border-bottom">\
                <div class=" row">\
                    <div class="col-md-4"style="border: 1px s black; border-style:groove; width:305px; height:210px; margin-top:-18px;background-color:white; ">\
                        <div class="form-group">\
                            <input type="text" class="form-control" name="name[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px ; margin-top:20px;" required placeholder="Nom du client">\<br>\
                            <input type="text" class="form-control" name="ref[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; margin-top:-10px;" required placeholder="Référence">\
                            <input type="text" class="form-control" name="tip[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="type marchandise">\
                            <input type="text" class="form-control" name="spec[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="Spécificités">\
                            <input type="text" class="form-control" name="pay[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="Pay">\
                             </div>\
                    </div>\
                    <div class="col-md-4">\
                        <div class="form-group mb-2" style=" width:90px; margin-top:-18px; margin-left:-10px; background-color:white;">\
                            <input type="date" name="date[]" class="form-control"style="margin:1px ; width:90px; background-color:white;">\
                            <input type="time" name="time1[]" class="form-control" required placeholder="Enter Name" style="margin:1px ;width:90px;">\
                            <input type="time" name="time2[]" class="form-control" required placeholder="Enter Name"style="margin:1px ; width:90px;">\
                        </div>\
                    </div>\
                    <div class="col-md-4"style="border: 1px s black;  border-style:groove; width:305px; height:210px; margin-top:-18px; margin-left:-322px; background-color:white;">\
                        <div class="form-group mb-2">\
                           <input type="text" name="noms[]" class="form-control" required placeholder="Nom du site" style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="adresse[]" class="form-control" required placeholder="Adresse" style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="inter[]" class="form-control" required placeholder="interlocuteur"style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="email[]" class="form-control" required placeholder="email"style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="tel[]" class="form-control" required placeholder="Tel" style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="ville[]" class="form-control" required placeholder="ville"style="width:150px; height:30px;margin-left:-11px;">\
                            <input type="text" name="code[]" class="form-control" required placeholder="Code Postal" style="width:147px; height:30px;margin-left:140px; position:relative; top:-30px;">\
                         </div>\
                    </div>\
                </div>\
            </div>\
<a href="javascript:void(0)" class="remove-btn-chargement float-end " style="margin-top: -210px; margin-left:20px;"><i class="fas fa-minus" style="color:white;"></i></a>\
     </div><br><br>');


			});

		//LIVRAISON
		$(document).on('click',
			'.add-more-form-livraison',
			function() {
				$('.paste-new-form-livraison').append('<div class="card-body1" style=" border: 1px s black; border-style:groove; width:75%; height:200px;background-color:red; margin-top:30px; ">\
             <div class="main-form mt-3 d-inline  border-bottom">\
                <div class=" row">\
                    <div class="col-md-4"style="border: 1px s black; border-style:groove; width:305px; height:200px; margin-top:-3px;background-color:white; ">\
                        <div class="form-group">\
                            <input type="text" class="form-control" name="namee[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; margin-top:10px;" required placeholder="Nom du client">\<br>\
                            <input type="text" class="form-control" name="reff[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="Référence">\
                            <input type="text" class="form-control" name="tipp[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="type marchandise">\
                            <input type="text" class="form-control" name="specc[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="Spécificités">\
                            <input type="text" class="form-control" name="payy[]" autocomplete="off" style="width:298px; height:30px; margin-left:-11px; " required placeholder="Pay">\
                             </div>\
                    </div>\
                    <div class="col-md-4">\
                        <div class="form-group mb-2" style=" width:90px; margin-top:-4px; margin-left:-10px; background-color:white;">\
                            <input type="date" name="datee[]" class="form-control"style="margin:1px ; width:90px; background-color:white;">\
                            <input type="time" name="timee1[]" class="form-control" required placeholder="Enter Name" style="margin:1px ;width:90px;">\
                            <input type="time" name="timee2[]" class="form-control" required placeholder="Enter Name"style="margin:1px ; width:90px;">\
                        </div>\
                    </div>\
                    <div class="col-md-4"style="border: 1px s black;  border-style:groove; width:305px; height:200px; margin-top:-3px; margin-left:-330px; background-color:white;">\
                        <div class="form-group mb-2">\
                           <input type="text" name="nomss[]" class="form-control" required placeholder="Nom du site" style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="adressee[]" class="form-control" required placeholder="Adresse" style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="interr[]" class="form-control" required placeholder="interlocuteur"style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="emaill[]" class="form-control" required placeholder="email"style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="tell[]" class="form-control" required placeholder="Tel" style="width:297px; height:30px;margin-left:-11px;">\
                            <input type="text" name="villee[]" class="form-control" required placeholder="ville"style="width:150px; height:30px;margin-left:-11px;">\
                            <input type="text" name="codee[]" class="form-control" required placeholder="Code Postal" style="width:147px; height:30px;margin-left:140px; position:relative; top:-30px;">\
                         </div>\
                    </div>\
                </div>\
            </div>\
            <div class="col-md-4">\
            <div class="form-group mb-2">\
          <input type="text" name="prix[]" class="form-control" required placeholder="PRIX"  style="width:90px; height:30px; margin-left:1150px; position:relative; top:-105px; ">\
        </div>\
        </div>\
        <a href="javascript:void(0)" class="remove-btn-livraison float-end " style="margin-top: -230px; margin-left:-400px;"><i class="fas fa-minus" style="color:white;"></i></a>\
    </div>\
</div><br><br>');


			});
	});
	</script>











	<!-- Modal -->
	<!-- Button trigger modal -->


	<!-- Modal -->
	<div class="modal top fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
		data-mdb-backdrop="true" data-mdb-keyboard="true">
		<div class="modal-dialog modal-fullscreen">
			<form action="action2.php" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<div style="height: 30px;">
							<h5>Saisir Un OT</h5>

						</div>


					</div>
					<div class="modal-body">


						<!-- Chargement -->
						<div class="card-body" style=" border: 1px s black; border-style:groove; width:75%; height:210px;
    background-color:blue; margin-top:30px; ">
							<div>
								<ahref=" javascript:void(0) class="add-more-form-chargement  float-end "
									style="margin-left: 100px; margin-top:-20px;"><i class="fas fa-plus"
										style="color:white;"></i></a><br><br>
							</div>

							<div class="main-form mt-3 d-inline  border-bottom">
								<div class=" row">
									<div class="col-md-4"
										style="border: 1px s black; border-style:groove; width:305px; height:210px; margin-top:-18px;background-color:white; ">
										<div class="form-group">
											<input type="text" class="form-control" name="name[]"
												style="width:298px; height:30px; margin-left:-11px; margin-top:20px;"
												required placeholder="Nom du client"><br>
											<input type="text" class="form-control" name="ref[]"
												style="width:298px; height:30px; margin-left:-11px; margin-top: -10px; "
												required placeholder="Référence">
											<input type="text" class="form-control" name="tip[]"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="type marchandise">
											<input type="text" class="form-control" name="spec[]"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Spécificités">
											<input type="text" class="form-control" name="pay[]"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Pay">


										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group mb-2"
											style=" width:90px; margin-top:-18px; margin-left:-10px; background-color:white;">

											<input type="date" name="date[]" class="form-control"
												style="margin:1px ; width:90px; background-color:white;">
											<input type="time" name="time1[]" class="form-control" required
												placeholder="Enter Name" style="margin:1px ;width:90px;">
											<input type="time" name="time2[]" class="form-control" required
												placeholder="Enter Name" style="margin:1px ; width:90px;">

										</div>
									</div>
									<div class="col-md-4"
										style="border: 1px s black;  border-style:groove; width:305px; height:210px; margin-top:-18px; margin-left:-275px; background-color:white;">
										<div class="form-group mb-2">



											<input type="text" name="noms[]" class="form-control" required
												placeholder="Nom du site"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="adresse[]" class="form-control" required
												placeholder="Adresse"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="inter[]" class="form-control" required
												placeholder="interlocuteur"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="email[]" class="form-control" required
												placeholder="email" style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="tel[]" class="form-control" required
												placeholder="Tel" style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="ville[]" class="form-control" required
												placeholder="ville" style="width:150px; height:30px;margin-left:-11px;">
											<input type="text" name="code[]" class="form-control" required
												placeholder="Code Postal"
												style="width:147px; height:30px;margin-left:140px; position:relative; top:-30px;">

										</div>
									</div>



								</div>
							</div>

						</div><br><br>

						<div class="paste-new-form-chargement"></div>
						<!-- End Chargement -->

						<!-- livraison -->
						<div class="card-body1"
							style="border: 1px s  black;  border-style:groove; width:75%; height:210px; background-color:red; ">
							<div>
								<ahref=" javascript:void(0)
									class="add-more-form-livraison  float-end margin-top:-20px; "><i class="fas fa-plus"
										style="color:blue;"></i></a>
							</div>

							<div class="main-form mt-3 d-inline  border-bottom">
								<div class=" row">
									<div class=" col-md-4"
										style="border: 1px s black; border-style:groove; width:305px; height:210px; margin-top:-3px;background-color:white; margin-left:18px;">
										<div class="form-group">
											<input type="text" class="form-control" name="namee[]" autocomplete="off"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Nom du client"><br>
											<input type="text" class="form-control" name="reff[]" autocomplete="off"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Référence">
											<input type="text" class="form-control" name="tipp[]" autocomplete="off"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="type marchandise">
											<input type="text" class="form-control" name="specc[]" autocomplete="off"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Spécificités">
											<input type="text" class="form-control" name="payy[]"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Pay">

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group mb-2"
											style=" width:90px; margin-top:-4px; margin-left:-10px; background-color:white;">

											<input type="date" name="datee[]" class="form-control"
												style="margin:1px ; width:90px; background-color:white;">
											<input type="time" name="timee1[]" class="form-control" required
												placeholder="Enter Name" style="margin:1px ;width:90px;">
											<input type="time" name="timee2[]" class="form-control" required
												placeholder="Enter Name" style="margin:1px ; width:90px;">

										</div>
									</div>
									<div class="col-md-4"
										style="border: 1px s black;  border-style:groove; width:305px; height:210px; margin-top:-3px; margin-left:-320px; background-color:white;">
										<div class="form-group mb-2">



											<input type="text" name="nomss[]" class="form-control" required
												placeholder="Nom du site"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="adressee[]" class="form-control" required
												placeholder="Adresse"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="interr[]" class="form-control" required
												placeholder="interlocuteur"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="emaill[]" class="form-control" required
												placeholder="email" style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="tell[]" class="form-control" required
												placeholder="Tel" style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="villee[]" class="form-control" required
												placeholder="ville" style="width:150px; height:30px;margin-left:-11px;">
											<input type="text" name="codee[]" class="form-control" required
												placeholder="Code Postal"
												style="width:147px; height:30px;margin-left:140px; position:relative; top:-30px;">

										</div>
									</div>




								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group mb-2">



									<input type="text" name="prix[]" class="form-control" required placeholder="PRIX"
										style="width:90px; height:30px; margin-left:1150px; position:relative; top:-105px; ">

								</div>
							</div>
						</div>



						<div class="paste-new-form-livraison"></div>




						<!-- Fin livraison -->






					</div>
					<div class="modal-footer">



						<button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
							Retour
						</button>
						<button type="submit" name="save_multiple_data" class="btn btn-primary">Enregistrer</button>
					</div>
			</form>
		</div>
	</div>
	</div>







	<!-- Modal Modification OT-->
	<!-- Button trigger modal -->


	<!-- Modal -->
	<div class="modal top fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
		data-mdb-backdrop="true" data-mdb-keyboard="true">
		<div class="modal-dialog modal-fullscreen">
			<form action="action2.php" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<div style="height: 30px;">
							<h5>Saisir Un OT</h5>
							<input type="text" class="form-control" name="nom_transporteur" autocomplete="off"
								placeholder="Catégorie OT"
								style="width:200px; position: relative; left: 200px; top: -40px;">
							<label style="position: relative; left: 400px; top: -75px;">Nom OT:</label>
							<input type="text" class="form-control" name="nom_transporteur" autocomplete="off"
								style="width:200px; position: relative; left: 480px; top: -110px;">
						</div>


					</div>
					<div class="modal-body">


						<!-- Chargement -->
						<div class="card-body" style=" border: 1px s black; border-style:groove; width:75%; height:210px;
    background-color:blue; margin-top:30px; ">
							<div>
								<ahref=" javascript:void(0) class="add-more-form-chargement  float-end "
									style="margin-left: 100px; margin-top:-20px;"><i class="fas fa-plus"
										style="color:white;"></i></a><br><br>
							</div>

							<div class="main-form mt-3 d-inline  border-bottom">
								<div class=" row">
									<div class="col-md-4"
										style="border: 1px s black; border-style:groove; width:305px; height:210px; margin-top:-18px;background-color:white; ">
										<div class="form-group">
											<input type="text" class="form-control" name="name[]"
												style="width:298px; height:30px; margin-left:-11px; margin-top:20px;"
												required placeholder="Nom du client"><br>
											<input type="text" class="form-control" name="ref[]"
												style="width:298px; height:30px; margin-left:-11px; margin-top: -10px; "
												required placeholder="Référence">
											<input type="text" class="form-control" name="tip[]"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="type marchandise">
											<input type="text" class="form-control" name="spec[]"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Spécificités">
											<input type="text" class="form-control" name="pay[]"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Pay">


										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group mb-2"
											style=" width:90px; margin-top:-18px; margin-left:-10px; background-color:white;">

											<input type="date" name="date[]" class="form-control"
												style="margin:1px ; width:90px; background-color:white;">
											<input type="time" name="time1[]" class="form-control" required
												placeholder="Enter Name" style="margin:1px ;width:90px;">
											<input type="time" name="time2[]" class="form-control" required
												placeholder="Enter Name" style="margin:1px ; width:90px;">

										</div>
									</div>
									<div class="col-md-4"
										style="border: 1px s black;  border-style:groove; width:305px; height:210px; margin-top:-18px; margin-left:-275px; background-color:white;">
										<div class="form-group mb-2">



											<input type="text" name="noms[]" class="form-control" required
												placeholder="Nom du site"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="adresse[]" class="form-control" required
												placeholder="Adresse"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="inter[]" class="form-control" required
												placeholder="interlocuteur"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="email[]" class="form-control" required
												placeholder="email" style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="tel[]" class="form-control" required
												placeholder="Tel" style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="ville[]" class="form-control" required
												placeholder="ville" style="width:150px; height:30px;margin-left:-11px;">
											<input type="text" name="code[]" class="form-control" required
												placeholder="Code Postal"
												style="width:147px; height:30px;margin-left:140px; position:relative; top:-30px;">

										</div>
									</div>



								</div>
							</div>

						</div><br><br>

						<div class="paste-new-form-chargement"></div>
						<!-- End Chargement -->

						<!-- livraison -->
						<div class="card-body1"
							style="border: 1px s  black;  border-style:groove; width:75%; height:210px; background-color:red; ">
							<div>
								<ahref=" javascript:void(0)
									class="add-more-form-livraison  float-end margin-top:-20px; "><i class="fas fa-plus"
										style="color:blue;"></i></a>
							</div>

							<div class="main-form mt-3 d-inline  border-bottom">
								<div class=" row">
									<div class=" col-md-4"
										style="border: 1px s black; border-style:groove; width:305px; height:210px; margin-top:-3px;background-color:white; margin-left:18px;">
										<div class="form-group">
											<input type="text" class="form-control" name="namee[]" autocomplete="off"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Nom du client"><br>
											<input type="text" class="form-control" name="reff[]" autocomplete="off"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Référence">
											<input type="text" class="form-control" name="tipp[]" autocomplete="off"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="type marchandise">
											<input type="text" class="form-control" name="specc[]" autocomplete="off"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Spécificités">
											<input type="text" class="form-control" name="payy[]"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Pay">

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group mb-2"
											style=" width:90px; margin-top:-4px; margin-left:-10px; background-color:white;">

											<input type="date" name="datee[]" class="form-control"
												style="margin:1px ; width:90px; background-color:white;">
											<input type="time" name="timee1[]" class="form-control" required
												placeholder="Enter Name" style="margin:1px ;width:90px;">
											<input type="time" name="timee2[]" class="form-control" required
												placeholder="Enter Name" style="margin:1px ; width:90px;">

										</div>
									</div>
									<div class="col-md-4"
										style="border: 1px s black;  border-style:groove; width:305px; height:210px; margin-top:-3px; margin-left:-320px; background-color:white;">
										<div class="form-group mb-2">



											<input type="text" name="nomss[]" class="form-control" required
												placeholder="Nom du site"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="adressee[]" class="form-control" required
												placeholder="Adresse"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="interr[]" class="form-control" required
												placeholder="interlocuteur"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="emaill[]" class="form-control" required
												placeholder="email" style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="tell[]" class="form-control" required
												placeholder="Tel" style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="villee[]" class="form-control" required
												placeholder="ville" style="width:150px; height:30px;margin-left:-11px;">
											<input type="text" name="codee[]" class="form-control" required
												placeholder="Code Postal"
												style="width:147px; height:30px;margin-left:140px; position:relative; top:-30px;">

										</div>
									</div>




								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group mb-2">



									<input type="text" name="prix[]" class="form-control" required placeholder="PRIX"
										style="width:90px; height:30px; margin-left:1150px; position:relative; top:-105px; ">

								</div>
							</div>
						</div>



						<div class="paste-new-form-livraison"></div>




						<!-- Fin livraison -->






					</div>
					<div class="modal-footer">


						<input type="text" class="form-contol" style="position:relative; left: -1000px;">
						<input type="text" class="form-contol" style="position:relative; left: -1000px;">
						<button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
							Retour
						</button>
						<button type="submit" name="save_multiple_data" class="btn btn-primary">Enregistrer</button>
					</div>
			</form>
		</div>
	</div>
	</div>








	<!-- Modal Creation OT-->
	<!-- Button trigger modal -->


	<!-- Modal -->
	<div class="modal top fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
		data-mdb-backdrop="true" data-mdb-keyboard="true">
		<div class="modal-dialog modal-fullscreen">
			<form action="action2.php" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<div style="height: 30px;">
							<h5>Saisir Un OT</h5>
							<input type="text" class="form-control" name="nom_transporteur" autocomplete="off"
								placeholder="Catégorie OT"
								style="width:200px; position: relative; left: 200px; top: -40px;">
							<label style="position: relative; left: 400px; top: -75px;">Nom OT:</label>
							<input type="text" class="form-control" name="nom_transporteur" autocomplete="off"
								style="width:200px; position: relative; left: 480px; top: -110px;">
						</div>


					</div>
					<div class="modal-body">


						<!-- Chargement -->
						<div class="card-body" style=" border: 1px s black; border-style:groove; width:75%; height:210px;
    background-color:blue; margin-top:30px; ">
							<div>
								<ahref=" javascript:void(0) class="add-more-form-chargement  float-end "
									style="margin-left: 100px; margin-top:-20px;"><i class="fas fa-plus"
										style="color:white;"></i></a><br><br>
							</div>

							<div class="main-form mt-3 d-inline  border-bottom">
								<div class=" row">
									<div class="col-md-4"
										style="border: 1px s black; border-style:groove; width:305px; height:210px; margin-top:-18px;background-color:white; ">
										<div class="form-group">
											<input type="text" class="form-control" name="name[]"
												style="width:298px; height:30px; margin-left:-11px; margin-top:20px;"
												required placeholder="Nom du client"><br>
											<input type="text" class="form-control" name="ref[]"
												style="width:298px; height:30px; margin-left:-11px; margin-top: -10px; "
												required placeholder="Référence">
											<input type="text" class="form-control" name="tip[]"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="type marchandise">
											<input type="text" class="form-control" name="spec[]"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Spécificités">
											<input type="text" class="form-control" name="pay[]"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Pay">


										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group mb-2"
											style=" width:90px; margin-top:-18px; margin-left:-10px; background-color:white;">

											<input type="date" name="date[]" class="form-control"
												style="margin:1px ; width:90px; background-color:white;">
											<input type="time" name="time1[]" class="form-control" required
												placeholder="Enter Name" style="margin:1px ;width:90px;">
											<input type="time" name="time2[]" class="form-control" required
												placeholder="Enter Name" style="margin:1px ; width:90px;">

										</div>
									</div>
									<div class="col-md-4"
										style="border: 1px s black;  border-style:groove; width:305px; height:210px; margin-top:-18px; margin-left:-275px; background-color:white;">
										<div class="form-group mb-2">



											<input type="text" name="noms[]" class="form-control" required
												placeholder="Nom du site"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="adresse[]" class="form-control" required
												placeholder="Adresse"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="inter[]" class="form-control" required
												placeholder="interlocuteur"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="email[]" class="form-control" required
												placeholder="email" style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="tel[]" class="form-control" required
												placeholder="Tel" style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="ville[]" class="form-control" required
												placeholder="ville" style="width:150px; height:30px;margin-left:-11px;">
											<input type="text" name="code[]" class="form-control" required
												placeholder="Code Postal"
												style="width:147px; height:30px;margin-left:140px; position:relative; top:-30px;">

										</div>
									</div>



								</div>
							</div>

						</div><br><br>

						<div class="paste-new-form-chargement"></div>
						<!-- End Chargement -->

						<!-- livraison -->
						<div class="card-body1"
							style="border: 1px s  black;  border-style:groove; width:75%; height:210px; background-color:red; ">
							<div>
								<ahref=" javascript:void(0)
									class="add-more-form-livraison  float-end margin-top:-20px; "><i class="fas fa-plus"
										style="color:blue;"></i></a>
							</div>

							<div class="main-form mt-3 d-inline  border-bottom">
								<div class=" row">
									<div class=" col-md-4"
										style="border: 1px s black; border-style:groove; width:305px; height:210px; margin-top:-3px;background-color:white; margin-left:18px;">
										<div class="form-group">
											<input type="text" class="form-control" name="namee[]" autocomplete="off"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Nom du client"><br>
											<input type="text" class="form-control" name="reff[]" autocomplete="off"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Référence">
											<input type="text" class="form-control" name="tipp[]" autocomplete="off"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="type marchandise">
											<input type="text" class="form-control" name="specc[]" autocomplete="off"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Spécificités">
											<input type="text" class="form-control" name="payy[]"
												style="width:298px; height:30px; margin-left:-11px; " required
												placeholder="Pay">

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group mb-2"
											style=" width:90px; margin-top:-4px; margin-left:-10px; background-color:white;">

											<input type="date" name="datee[]" class="form-control"
												style="margin:1px ; width:90px; background-color:white;">
											<input type="time" name="timee1[]" class="form-control" required
												placeholder="Enter Name" style="margin:1px ;width:90px;">
											<input type="time" name="timee2[]" class="form-control" required
												placeholder="Enter Name" style="margin:1px ; width:90px;">

										</div>
									</div>
									<div class="col-md-4"
										style="border: 1px s black;  border-style:groove; width:305px; height:210px; margin-top:-3px; margin-left:-320px; background-color:white;">
										<div class="form-group mb-2">



											<input type="text" name="nomss[]" class="form-control" required
												placeholder="Nom du site"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="adressee[]" class="form-control" required
												placeholder="Adresse"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="interr[]" class="form-control" required
												placeholder="interlocuteur"
												style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="emaill[]" class="form-control" required
												placeholder="email" style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="tell[]" class="form-control" required
												placeholder="Tel" style="width:297px; height:30px;margin-left:-11px;">
											<input type="text" name="villee[]" class="form-control" required
												placeholder="ville" style="width:150px; height:30px;margin-left:-11px;">
											<input type="text" name="codee[]" class="form-control" required
												placeholder="Code Postal"
												style="width:147px; height:30px;margin-left:140px; position:relative; top:-30px;">

										</div>
									</div>




								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group mb-2">



									<input type="text" name="prix[]" class="form-control" required placeholder="PRIX"
										style="width:90px; height:30px; margin-left:1150px; position:relative; top:-105px; ">

								</div>
							</div>
						</div>



						<div class="paste-new-form-livraison"></div>




						<!-- Fin livraison -->






					</div>
					<div class="modal-footer">


						<input type="text" class="form-contol" style="position:relative; left: -1000px;">
						<input type="text" class="form-contol" style="position:relative; left: -1000px;">
						<button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
							Retour
						</button>
						<button type="submit" name="save_multiple_data" class="btn btn-primary">Enregistrer</button>
					</div>
			</form>
		</div>
	</div>
	</div>








	<!-- Modal Tarrifs_Transport -->
	<div class="modal top fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
		data-mdb-backdrop="true" data-mdb-keyboard="true">
		<form action="code1.php" method="post">
			<div class="modal-dialog  ">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Affecter</h5>
						<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">

						<br>
						<div class="currency-wrap" style="position:relative; margin-left: 110px;">
							<label style="margin-left:-50px;">Tarrif:</label>
							<span class=" currency-code" style="position:absolute;left:8px;top:10px;">€</span>
							<input type="number" class="text-currency form-control" name="prix" style="padding:10px 20px;
		border:solid 1px #ccc;
		border-radius:5px;" />
						</div>
						<br>
						<div class="form-group">
							<label style="margin-left:25px;">Référence:</label>
							<input type="text" class="form-control" name="ref" value=<?php echo $ref;?>>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
							Retour
						</button>
						<button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>

</html>