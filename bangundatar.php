<?php
include "header.php";
?>
		<div class="hero">
			<h3>Hitung Keliling Dan Luas Persegi Panjang</h3>
 
<form action="persegi-panjang.php" method="post">
	Panjang : <input type="text" name="panjang"><br>
	Lebar : <input type="text" name="lebar"><br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
	if(isset($_POST['submit'])){
		$panjang = $_POST['panjang'];
		$lebar = $_POST['lebar'];
		
		$keliling = ($panjang * 2) + ($lebar * 2); // Menghitung keliling
		$luas = $panjang * $lebar; // Menghitung luas
		
		echo "Persegi panjang yang memiliki lebar: $lebar, dan panjang : $panjang, maka : <br>";
		echo "Keliling: $keliling <br>";
		echo "Luas: $luas <br>";
	}
	?>
	</div>
<?php
include "footer.php";
?>