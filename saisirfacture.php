<?php include('dbcon.php');?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>
<?php include('includes/footer.php');?>





<?php 
 $query2 = "select * FROM facturation order by id desc limit 1";
 $res= mysqli_query($con,$query2 );
 $row= mysqli_fetch_array($res);
 $lastid = $row['id'];
 if ($lastid == " ")
 {
	$facid= "FAC1";
	
 }
 else
 {
	$facid=substr($lastid,3);
	$facid=intval($facid);
	$facid="FAC" . ($facid + 1);
 }
 

?>




<form action="<?php echo ($_SERVER["PHP_SElF"]); ?>" method="post">

	<select name="nomc">
		<option value="">Clients</option>
		<?php 
    $query ="SELECT distinct nomc FROM infogenclient";
    $result = $con->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['nomc'];
    ?>
		<?php
    //selected option
    if(!empty($nomc) && $nomc== $option){
    // selected option
    ?>
		<option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
		<?php 
continue;
   }?>
		<option value="<?php echo $option; ?>"><?php echo $option; ?> </option>
		<?php
    }}
    ?>
	</select>
	<br>

	<div class="form-group">
		<label>Numero de Facture:</label>
		<input type="text" class="form-control" name="id" id="id" value="<?php echo $facid;?>" readonly>
	</div>
	<div class="form-group">
		<label>Date de facture:</label>
		<input type="date" class="form-control" name="date1">
	</div>
	<div class="form-group">
		<label>Date D'echeance:</label>
		<input type="date" class="form-control" name="date2">
	</div>
	<div class="form-group">
		<label>Description:</label>
		<input type="text" class="form-control" name="des">
	</div>
	<div class="form-group">
		<label>Mode de Facturation:</label>
		<input type="text" class="form-control" name="modef">
	</div>
	<div class="form-group">
		<input type="submit" name="submit">
	</div>

</form>
<?php 
if($_SERVER["REQUEST_METHOD"]== "POST")
{
	$nomc= $_POST['nomc'];
	$id= $_POST['id'];
	$date1= $_POST['date1'];
	$date2= $_POST['date2'];
	$des= $_POST['des'];
	$modef= $_POST['modef'];
	if(!$con){
		die("connection failed" . mysqli_connect_error() );
		}
		else
		{
			
		

    $sql= "INSERT INTO `facturation` (`nomc`, `id`, `date1`, `date2`, `des`, `modef`) VALUES ('$nomc', '$id', '$date1', '$date2', '$des', '$modef')"; 
	if(mysqli_query($con,$sql))
	{
		echo"Record Added";
	}
	else
	{
		echo "Record Failed";
	}
}
}


?>