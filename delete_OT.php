<?php
include 'dbcon.php';
if (isset($_GET['deleteid'])) {
	$id=$_GET['deleteid'];
	$sql= "delete from `chargement` where id=$id";
	$sql2= "delete from `livraison` where id=$id";
	$result=mysqli_query($con,$sql);
	$result2=mysqli_query($con,$sql2);

	if ($result && $result2) {

		echo "Supprimer avec success";
	      //header('location :client.php');
	}else{
        die(mysqli_error($con));
    }

}
?>