<?php
include "header.php";
?>
<div class="hero">
<form method="post">
		<p>Bangun Ruang</p>
		<p>1. Kubus<br>2.Balok<br>3. Bola</p>
		<input type="number" name="ruang" 
		<?php 
		echo "value=";
		if($_POST['ruang']!=0){
			echo $_POST['ruang'];
		}
		else{
			echo "0";
		}
		?> 
		min="0" max="3" >
		<input type="submit" name="submit">
		<br>
		<?php
		$ruang = $_POST['ruang'];
		if($ruang == 1){
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
				echo "Volume Kubus ini adalah ".pow($sisi, 3);
				echo "<br>";
			
			}
		}

		else if($ruang == 2) {
			?>
			<div>
				<table>
					<tr>
						<td>Masukkan Panjang Balok</td>
						<td>:</td>
						<td><input type="text" name="panjang"></td>
					</tr>
					<tr>
						<td>Masukkan Lebar Balok</td>
						<td>:</td>
						<td><input type="text" name="lebar"></td>
					</tr>
					<tr>
						<td>Masukkan Tinggi Balok</td>
						<td>:</td>
						<td><input type="text" name="tinggi"></td>
					</tr>
					<tr>
						<td><input type="submit" name="cek"></td>
					</tr>
				</table>
			</div>
			<?php
			$p = $_POST['panjang'];
			$l = $_POST['lebar'];
			$t = $_POST['tinggi'];
			if($p!=null){
				echo "Volume Balok  ini adalah ";
				echo $p*$l*$t;
				
			}
		}

		else if($ruang == 3){
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
				echo "Volume bola ini adalah ".$pi*pow($r, 3)*4/3;
				
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