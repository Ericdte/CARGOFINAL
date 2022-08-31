<?php 
$con = mysqli_connect("localhost","root","","logistic");
$data  = $_POST;

echo "<pre>";
var_dump($data);

$count =count($_POST['name']);


//for($i=0; $i <$count ; $i++){
 //$sql ="INSERT INTO `chargement` (`name`, `ref`, `tip`, `spec`, `date`, `time1`, `time2`, `noms`, `pay`, `ville`, `adresse`, `code`, `inter`, `tel`, `email`) VALUES ('{$_POST['name'][$i]}', '{$_POST['ref'][$i]}', '{$_POST['tip'][$i]}', '{$_POST['spec'][$i]}', '{$_POST['date'][$i]}', '{$_POST['time1'][$i]}', '{$_POST['time2'][$i]}', '{$_POST['noms'][$i]}', '{$_POST['pay'][$i]}', '{$_POST['ville'][$i]}', '{$_POST['adresse'][$i]}', '{$_POST['code'][$i]}', '{$_POST['inter'][$i]}', '{$_POST['tel'][$i]}', '{$_POST['email'][$i]}')";
  // $con->query($sql);
//$sql ="INSERT INTO `demo` ( `name`, `phone`, `adress`) VALUES ( '{$_POST['name'][$i]}', '{$_POST['phone'][$i]}', '{$_POST['adress'][$i]}')";
  // $con->query($sql);
//}

foreach ($_POST['name'] as $i => $value) {
   $sql ="INSERT INTO `chargement` (`name`, `ref`, `tip`, `spec`, `pay`, `date`, `time1`, `time2`, `noms`,  `ville`, `adresse`, `code`, `inter`, `tel`, `email`) VALUES ('{$_POST['name'][$i]}', '{$_POST['ref'][$i]}', '{$_POST['tip'][$i]}', '{$_POST['spec'][$i]}', '{$_POST['pay'][$i]}', '{$_POST['date'][$i]}', '{$_POST['time1'][$i]}', '{$_POST['time2'][$i]}', '{$_POST['noms'][$i]}',  '{$_POST['ville'][$i]}', '{$_POST['adresse'][$i]}', '{$_POST['code'][$i]}', '{$_POST['inter'][$i]}', '{$_POST['tel'][$i]}', '{$_POST['email'][$i]}')";
   $con->query($sql);
   }

?>