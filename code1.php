<?php

$con = mysqli_connect("localhost","root","","logistic");

if(isset($_POST['save_multiple_data']))
{
    $name = $_POST['name'];
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

    foreach($name as $index => $names)
    {
        $s_name = $names;
             $s_ref = $ref[$index];
 $s_tip = $tip[$index];
 $s_spec = $spec[$index];
 $s_date = $date[$index];
 $s_time1 = $time1[$index];
 $s_time2 = $time2[$index];
 $s_noms = $noms[$index];
 $s_pay = $pay[$index];
 $s_ville = $ville[$index];
 $s_adresse = $adresse[$index];
 $s_code = $code[$index];
 $s_inter = $inter[$index];
 $s_tel = $tel[$index];
 $s_email = $email[$index];
        // $s_otherfiled = $empid[$index];

        $query = "INSERT INTO chargement (name,ref,tip,spec,date,time1,time2,noms, pay, ville, adresse, code, inter,tel,email) VALUES ('$s_name','$s_ref','$s_tip', '$s_spec', '$s_date' , '$s_time1', '$s_time2', '$s_noms', '$s_pay', '$s_ville', '$s_adresse','$s_code','$s_inter', '$s_tel','$s_email')";
        $query_run = mysqli_query($con, $query);
    }

    if($query_run)
    {
       
        header("Location: chargement.php");
       
    }
    
}
?>