<?php
$con = mysqli_connect("localhost","root","","logistic");





if (isset($_GET['deleteid'])) {
	$id=$_GET['deleteid'];
	$sql="INSERT INTO `exploitation` (`id`, `name`, `ref`, `tip`, `spec`, `pay`, `date`, `time1`, `time2`, `noms`, `adresse`, `inter`, `email`, `tel`, `ville`, `code`) 
	SELECT `id`, `name`, `ref`, `tip`, `spec`, `pay`, `date`, `time1`, `time2`, `noms`, `adresse`, `inter`, `email`, `tel`, `ville`, `code` FROM `chargement` WHERE id=$id";
	$con->query($sql);
	$sql2="INSERT INTO `exploitation2` (`id`, `namee`, `reff`, `tipp`, `specc`, `payy`, `datee`, `timee1`, `timee2`, `nomss`, `adressee`, `interr`, `emaill`, `tell`, `villee`, `codee`,`prix`) 
	SELECT `id`, `namee`, `reff`, `tipp`, `specc`, `payy`, `datee`, `timee1`, `timee2`, `nomss`, `adressee`, `interr`, `emaill`, `tell`, `villee`, `codee`, `prix` FROM `livraison` WHERE id=$id";
	$con->query($sql2);        

	if ($con)  {
		//echo"Data inserted successfully";
		header('location:commande.php');
	} else {
		die(mysqli_error($conn));
	}

}
?>