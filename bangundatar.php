<?php
include "header.php";
?>
<div class="hero">
	<form method="post">
		<p>Bangun datar</p>
		<p>1. Persegi<br>2.Segitiga<br>3. Lingkaran</p>
		<input type="number" name="bangun" 
		<?php 
		echo "value=";
		if($_POST['bangun']!=0){
			echo $_POST['bangun'];
		}
		else{
			echo "0";
		}
		?> 
		min="0" max="3" >
		<input type="submit" name="submit">
		<br>
		<?php
		$bangun = $_POST['bangun'];
		if($bangun == 1){
			?>
			<div>
				<table>
					<tr>
						<td>Masukkan Sisi</td>
						<td>:</td>
						<td><input type="text" name="sisi"></td>
					</tr>
					<tr>
						<td><input type="submit" name="cek"></td>
					</tr>
				</table>
			</div>
			<?php
			$sisi = $_POST['sisi'];
			if($sisi!=null){
				echo "Keliling persegi ini adalah ".$sisi*4;
				echo "<br>";
				echo "Luas persegi ini adalah ".$sisi*$sisi;
			}
		}

		else if($bangun == 2) {
			?>
			<div>
				<table>
					<tr>
						<td>Masukkan Alas segitiga</td>
						<td>:</td>
						<td><input type="text" name="alas"></td>
					</tr>
					<tr>
						<td>Masukkan Tinggi segitiga</td>
						<td>:</td>
						<td><input type="text" name="tinggi"></td>
					</tr>
					<tr>
						<td><input type="submit" name="cek"></td>
					</tr>
				</table>
			</div>
			<?php
			$a = $_POST['alas'];
			$t = $_POST['tinggi'];
			if($a!=null and $t!=null){
				$ac = $a/2;
				$s = sqrt(pow($ac, 2) + pow($t, 2));
				echo "Keliling segitiga ini adalah ". $s * 2 + $a."<br>";
				echo "Luas segitiga ini adalah ".$a*$t;
			}
		}

		else if($bangun == 3){
			?>
			<div>
				<table>
					<tr>
						<td>Masukkan jari-jari</td>
						<td>:</td>
						<td><input type="text" name="r"></td>
					</tr>
					<tr>
						<td><input type="submit" name="cek"></td>
					</tr>
				</table>
			</div>
			<?php
			$r = $_POST['r'];
			$pi = 3.14;
			if($pi%7==0){
				$pi=22/7;
			}
			if($r!=null){
				echo "Keliling lingkaran ini adalah ".$pi*$r*2.;
				echo "<br>";
				echo "Luas lingkaran ini adalah ".$pi*$r*$r;
			}
		}
		else{
			echo "<br>Input bangun datar terlebih dahulu";
		}
		?>
	</form>
</div>

<?php
include "footer.php";
?>