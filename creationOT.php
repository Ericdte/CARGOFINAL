<?php

if(isset($_POST['submit'])){
    $nomc=$_POST['nomc'];
    $ref = $_POST['ref'];
    $tip = $_POST['tip'];
    $spec = $_POST['spec'];
    $date = $_POST['date'];
    $time1 = $_POST['time1'];
    $time2 = $_POST['time2'];
    $noms= $_POST['noms'];
    $pay= $_POST['pay'];
    $ville = $_POST['ville'];
    $adresse = $_POST['adresse'];
    $code = $_POST['code'];
    $inter = $_POST['inter'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

$sql = "INSERT INTO `chargement` ( `nomc`,`ref`,`tip`,`spec`,`date`, `time1`,`time2`,`noms`, `pay`, `ville`, `adresse`, `code`, `inter`,`tel`,`email`) VALUES ( '$nomc', '$ref','$tip', '$spec', '$date' , '$time1', '$time2', '$noms', '$pay', '$ville', '$adresse','$code','$inter', '$tel','$email')";
$result=mysqli_query($con,$sql);
if ($result) {
//echo"Data inserted successfully";
header('location:transporteur.php');
} else {
die(mysqli_error($con));
}

}
?>

<?php  
$query ="SELECT * FROM chargement ORDER BY ID DESC";  
$result = mysqli_query($con, $query);  
 ?>


<!DOCTYPE html>
<html>

<head>
    <title>Transporteurs</title>




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
        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop">Créer
            Transporteur</button> <br /><br />

        <table id="employee_data" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">TVA</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Siret</th>
                    <th scope="col">Raison social</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Code postal</th>
                    <th scope="col">Pay</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Fax</th>
                    <th scope="col">Email</th>
                    <th scope="col">Site Web</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                            $id = $row['id'];
                            $tva_transporteur = $row['tva_transporteur'];
                            $nom_transporteur= $row['nom_transporteur'];
                        $siret_transporteur= $row['siret_transporteur'];
                        $rs_transporteur= $row['rs_transporteur'];
                        $ville_transporteur = $row['ville_transporteur'];
                        $codep_transporteur = $row['codep_transporteur'];
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
                               <td>'.$codep_transporteur.'</td>
                               <td>'.$pay_transporteur.'</td>
                               <td>'.$tel_transporteur.'</td>
                               <td>'.$fax_transporteur.'</td>
                               <td>'.$email_transporteur.'</td>
                               <td>'.$sw_transporteur.'</td>
                               <td>
                               <a  data-mdb-toggle="modal" data-mdb-target="#staticBackdrop1" href="update_transporteur.php? updateid='.$id.'"><i class="fas fa-marker"></i></a>  
                               <a  href="delete_transporteur.php? deleteid='.$id.'"><i class="fas fa-trash"></i></a>
                               
                             

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

</body>

</html>