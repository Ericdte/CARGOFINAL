<?php
include 'dbcon.php';
if (isset($_GET['deleteid'])) {
	$id=$_GET['deleteid'];
	$sql= "delete from `infogenclient` where id=$id";
	$result=mysqli_query($con,$sql);

	if ($result) {

		echo "Supprimer avec success";
	      //header('location :client.php');
	}else{
        die(mysqli_error($con));
    }

}
?>