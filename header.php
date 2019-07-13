<!DOCTYPE html>
<html>
<head>
	<title>Warung Serbaguna</title>
	<!-- <link rel="icon" type="image/png" href="background/favicon.ico"> -->
	<link rel="stylesheet" href="style.css">
</head>
<body>
  	<div class="container">
    	<div class="header">
			<center>
				<h1>Web Everything</h1>
			</center>
		  	<div class="navbar">
			    <a href="home.php">Home</a>
			    <a href="bangundatar.php">Bangun Datar</a>
			    <a href="kalkulator.php">Calculator</a>
			    <a href="bangunruang.php">Geometry</a>
			    <a href="table.php">Operator Table</a>
			    <a href="looping.php">Shape Looping</a>
			    <a href="physics.php">Physics Formula</a>
		  	</div>
		  	<?php
	if(isset($_POST['submit'])){
		$panjang = $_POST['panjang'];
		$lebar = $_POST['lebar'];
		
		$keliling = ($panjang * 2) + ($lebar * 2);
		$luas = $panjang * $lebar; 
		
		echo "Persegi panjang yang memiliki lebar: $lebar, dan panjang : $panjang, maka : <br>";
		echo "Keliling: $keliling <br>";
		echo "Luas: $luas <br>";
	}
	?>
		</div>