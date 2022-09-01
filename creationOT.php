<?php include('dbcon.php');?>

<?php  
$query ="SELECT chargement.id, chargement.name, chargement.ville, chargement.date, livraison.id, livraison.villee, livraison.prix  FROM chargement , livraison WHERE chargement.id = livraison.id  ORDER BY chargement.id DESC";  
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
        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop">Créer
            Transporteur</button> <br /><br />

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
                            $ref = $row['prix'];
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