<?php include('dbcon.php');?>


<body>
	<h2 style=" text-align:center;">RAPPORTS</h2>
	<!--Chiffre D' affaire -->
	<div style="margin:5px; display:inline; height:400px; ">
		<div
			style="width:200px; height: 100px;  background-color: blue; text-align: center; margin-left:30px; color: white;">
			<h4>Chiffre D'affaire</h4>
			<?php $results=mysqli_query($con, "SELECT sum(prix) FROM livraison");

while($rows=mysqli_fetch_array($results)) {
	?><?php echo $rows['sum(prix)'];
}

?>€
		</div>
		<!--Transporteurs -->
		<div style="width:200px; height: 100px;   background-color: blue; text-align: center; margin-left:500px; margin-top:-100px; float:left; color: 	white;
">
			<h4>Sous Traitance</h4><?php $sql2="SELECT sum(prix) FROM tarrif_transporteur";
$q=mysqli_query($con, $sql2);
$row=mysqli_fetch_array($q);
echo 'Sum: '. $row[0];
?>€
		</div>
		<!--Marge brute -->
		<div style="width:200px; height: 100px;  background-color: blue; text-align: center; margin-right:500px ; margin-top:-100px; float:right; color: white;
">
			<h4>Marge Brute</h4><?php $results=mysqli_query($con, "SELECT sum(prix) FROM livraison");

while($rows=mysqli_fetch_array($results)) {
	?><?php echo $row['sum(prix)']-$rows['sum(prix)'];
}

?>€
		</div <!--Marge brute -->
		<div
			style="width:200px; height: 100px;  background-color: blue; text-align: center; margin-right:30px; margin-top:-100px; float:right; color:white;">
			<h4 style="font-color:white;">% Marge Brute</h4><?php $results=mysqli_query($con, "SELECT sum(prix) FROM livraison");

while($rows=mysqli_fetch_array($results)) {
	?><?php echo $rows['sum(prix)'] / $row['sum(prix)'] * 100;
}

?>€
		</div>
	</div>
</body>