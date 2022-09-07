<?php

$con = mysqli_connect("localhost","root","","logistic");

if(isset($_POST['submit']))
{
    $chargement_id = $_POST['chargement_id'];
    $prix = $_POST['prix'];
 
  

    

        $query = "INSERT INTO `tarrif_transporteur` ( `chargement_id`,`prix`) VALUES ('$chargement_id','$prix')";
        $result= mysqli_query($con, $query);
    

        if ($result) {
            //echo"Data inserted successfully";
            header('location:commande.php');
        } else {
            die(mysqli_error($con));
        }
        
    
}
?>