<?php

$con = mysqli_connect("localhost","root","","logistic");

if(isset($_POST['submit']) )
{
    
    $prix = $_POST['prix'];
    $ref  = $_POST['ref'];

 
  

    

        $query = "INSERT INTO `tarrif_transporteur` (`prix`,`ref`) VALUES ('$prix', '$ref')";
        $result= mysqli_query($con, $query);
    
          
       
    
        if ($result)  {
            //echo"Data inserted successfully";
            header('location:commande.php');
        } else {
            die(mysqli_error($con));
        }
        
        

    }
    

  
        
       
    
    
?>