<?php 
$con = mysqli_connect("localhost","root","","logistic");
$data  = $_POST;

echo "<pre>";
var_dump($data);

$count =count($_POST['name']);
$count =count($_POST['namee']);


for($i=0; $i <$count ; $i++){
 $sql ="INSERT INTO `chargement` (`name`, `ref`, `tip`, `spec`, `date`, `time1`, `time2`, `noms`, `pay`, `ville`, `adresse`, `code`, `inter`, `tel`, `email`) VALUES ('{$_POST['name'][$i]}', '{$_POST['ref'][$i]}', '{$_POST['tip'][$i]}', '{$_POST['spec'][$i]}', '{$_POST['date'][$i]}', '{$_POST['time1'][$i]}', '{$_POST['time2'][$i]}', '{$_POST['noms'][$i]}', '{$_POST['pay'][$i]}', '{$_POST['ville'][$i]}', '{$_POST['adresse'][$i]}', '{$_POST['code'][$i]}', '{$_POST['inter'][$i]}', '{$_POST['tel'][$i]}', '{$_POST['email'][$i]}')";
 //$con->query($sql);
 $sql2 ="INSERT INTO `livraison` (`namee`, `reff`, `tipp`, `specc`, `payy`, `datee`, `timee1`, `timee2`, `nomss`,  `villee`, `adressee`, `codee`, `interr`, `tell`, `emaill`, `prix`) VALUES ('{$_POST['namee'][$i]}', '{$_POST['reff'][$i]}', '{$_POST['tipp'][$i]}', '{$_POST['specc'][$i]}', '{$_POST['payy'][$i]}', '{$_POST['datee'][$i]}', '{$_POST['timee1'][$i]}', '{$_POST['timee2'][$i]}', '{$_POST['nomss'][$i]}',  '{$_POST['villee'][$i]}', '{$_POST['adressee'][$i]}', '{$_POST['codee'][$i]}', '{$_POST['interr'][$i]}', '{$_POST['tell'][$i]}', '{$_POST['emaill'][$i]}','{$_POST['prix'][$i]}')";
// $con->query($sql2);
//$sql ="INSERT INTO `demo` ( `name`, `phone`, `adress`) VALUES ( '{$_POST['name'][$i]}', '{$_POST['phone'][$i]}', '{$_POST['adress'][$i]}')";
  // $con->query($sql);

if($result && $result2)
    {
        $_SESSION['status'] = "Multiple Data Inserted Successfully";
        header("Location: sample.php");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: sample.php");
        exit(0);
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