<?php 
$con = mysqli_connect("localhost","root","","logistic");
$data  = $_POST;

echo "<pre>";
var_dump($data);

$count =count($_POST['name']);
$count =count($_POST['namee']);



for($i=0; $i <$count ; $i++){
 //$sql="INSERT INTO `ot` (`id`, `name`, `ref`, `tip`, `spec`, `pay`, `date`, `time1`, `time2`, `noms`, `adresse`, `inter`, `email`, `tel`, `ville`, `code`, `namee`, `reff`, `tipp`, `specc`, `payy`, `datee`, `timee1`, `timee2`, `nomss`, `adressee`, `interr`, `emaill`, `tell`, `villee`, `codee`, `prix`) VALUES ('{$_POST['name'][$i]}', '{$_POST['ref'][$i]}', '{$_POST['tip'][$i]}', '{$_POST['spec'][$i]}', '{$_POST['date'][$i]}', '{$_POST['time1'][$i]}', '{$_POST['time2'][$i]}', '{$_POST['noms'][$i]}', '{$_POST['pay'][$i]}', '{$_POST['ville'][$i]}', '{$_POST['adresse'][$i]}', '{$_POST['code'][$i]}', '{$_POST['inter'][$i]}', '{$_POST['tel'][$i]}', '{$_POST['email'][$i]}','{$_POST['namee'][$i]}', '{$_POST['reff'][$i]}', '{$_POST['tipp'][$i]}', '{$_POST['specc'][$i]}', '{$_POST['payy'][$i]}', '{$_POST['datee'][$i]}', '{$_POST['timee1'][$i]}', '{$_POST['timee2'][$i]}', '{$_POST['nomss'][$i]}',  '{$_POST['villee'][$i]}', '{$_POST['adressee'][$i]}', '{$_POST['codee'][$i]}', '{$_POST['interr'][$i]}', '{$_POST['tell'][$i]}', '{$_POST['emaill'][$i]}','{$_POST['prix'][$i]}')";
 
 
 
 
 $sql ="INSERT INTO `chargement` (`name`, `ref`, `tip`, `spec`, `date`, `time1`, `time2`, `noms`, `pay`, `ville`, `adresse`, `code`, `inter`, `tel`, `email`) VALUES ('{$_POST['name'][$i]}', '{$_POST['ref'][$i]}', '{$_POST['tip'][$i]}', '{$_POST['spec'][$i]}', '{$_POST['date'][$i]}', '{$_POST['time1'][$i]}', '{$_POST['time2'][$i]}', '{$_POST['noms'][$i]}', '{$_POST['pay'][$i]}', '{$_POST['ville'][$i]}', '{$_POST['adresse'][$i]}', '{$_POST['code'][$i]}', '{$_POST['inter'][$i]}', '{$_POST['tel'][$i]}', '{$_POST['email'][$i]}')";
 $con->query($sql);
 
 $chargement_id=$con->insert_id;
 if (!$chargement_id) {
   continue;
   # code...
 }
 $sql2 ="INSERT INTO `livraison` (`namee`, `reff`, `tipp`, `specc`, `payy`, `datee`, `timee1`, `timee2`, `nomss`,  `villee`, `adressee`, `codee`, `interr`, `tell`, `emaill`, `prix`) VALUES ('{$_POST['namee'][$i]}', '{$_POST['reff'][$i]}', '{$_POST['tipp'][$i]}', '{$_POST['specc'][$i]}', '{$_POST['payy'][$i]}', '{$_POST['datee'][$i]}', '{$_POST['timee1'][$i]}', '{$_POST['timee2'][$i]}', '{$_POST['nomss'][$i]}',  '{$_POST['villee'][$i]}', '{$_POST['adressee'][$i]}', '{$_POST['codee'][$i]}', '{$_POST['interr'][$i]}', '{$_POST['tell'][$i]}', '{$_POST['emaill'][$i]}','{$_POST['prix'][$i]}')";
 $con->query($sql2);
 $livraison_id=$con->insert_id;
//$sql ="INSERT INTO `demo` ( `name`, `phone`, `adress`) VALUES ( '{$_POST['name'][$i]}', '{$_POST['phone'][$i]}', '{$_POST['adress'][$i]}')";
//$con->query($sql);
if ($livraison_id) {
   $sql3="INSERT INTO `chargement_livraison` (`chargement_id`, `livraison_id`) VALUES ('$chargement_id', '$livraison_id')";
    $con->query($sql3);
    
$chargement_liraison_id=$con->insert_id;
$sql4="INSERT INTO `chargement,livraison` (`chargement_liraison_id`) VALUES ('$chargement_livraison_id')";
   $con->query($sql4);
   # code...
   # code...
}
else{
   $sql4="SELECT id from chargement where id=$id";
   $result=$mysqli->query($sql4) or die($mysqli->error);
   $row=$result-> fetch_assoc();
   $chargement_id=$row['id'];
   $sql3="INSERT INTO `commande` (`chargement_id`, `livraison_id`) VALUES ('$chargement_id', '$livraison_id')";
   $con->query($sql3);
   
$sql4="INSERT INTO `chargement,livraison` (`chargement_liraison_id`) VALUES ('$chargement_livraison_id')";
   $con->query($sql4);
}

if ($chargement_livraison_id) {
   
}



}


//foreach ($_POST['name'] as $i => $value ) {
 //  $sql ="INSERT INTO `chargement` (`name`, `ref`, `tip`, `spec`, `pay`, `date`, `time1`, `time2`, `noms`,  `ville`, `adresse`, `code`, `inter`, `tel`, `email`) VALUES ('{$_POST['name'][$i]}', '{$_POST['ref'][$i]}', '{$_POST['tip'][$i]}', '{$_POST['spec'][$i]}', '{$_POST['pay'][$i]}', '{$_POST['date'][$i]}', '{$_POST['time1'][$i]}', '{$_POST['time2'][$i]}', '{$_POST['noms'][$i]}',  '{$_POST['ville'][$i]}', '{$_POST['adresse'][$i]}', '{$_POST['code'][$i]}', '{$_POST['inter'][$i]}', '{$_POST['tel'][$i]}', '{$_POST['email'][$i]}')";
   
  // $con->query($sql);
   
   //}
   
 //  foreach ($_POST['namee'] as $i => $value) {
    //$sql2 ="INSERT INTO `livraison` (`namee`, `reff`, `tipp`, `specc`, `payy`, `datee`, `timee1`, `timee2`, `nomss`,  `villee`, `adressee`, `codee`, `interr`, `tell`, `emaill`, `prix`) VALUES ('{$_POST['namee'][$i]}', '{$_POST['reff'][$i]}', '{$_POST['tipp'][$i]}', '{$_POST['specc'][$i]}', '{$_POST['payy'][$i]}', '{$_POST['datee'][$i]}', '{$_POST['timee1'][$i]}', '{$_POST['timee2'][$i]}', '{$_POST['nomss'][$i]}',  '{$_POST['villee'][$i]}', '{$_POST['adressee'][$i]}', '{$_POST['codee'][$i]}', '{$_POST['interr'][$i]}', '{$_POST['tell'][$i]}', '{$_POST['emaill'][$i]}', '{$_POST['prix'][$i]}'))";
    //$con->query($sql2);
   //}
  

?>