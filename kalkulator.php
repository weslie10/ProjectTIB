<?php
include "header.php";
?>

<div class="hero">
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<form method="post">
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<select class="opt" name="operasi">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="x">x</option>
				<option value="/">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">
		</form>
		<?php
			if (isset($_POST['hitung'])) {
				$bil1 = $_POST['bil1'];
				$bil2 = $_POST['bil2'];
				$operasi = $_POST['operasi'];
				$output = $bil1.$operasi.$bil2." = ";
				switch ($operasi){
					case '+':
						$hasil = $bil1+$bil2;
						break;
					case '-':
						$hasil = $bil1-$bil2;
						break;
					case 'x':
						$hasil = $bil1*$bil2;
						break;
					case '/':
						$hasil = $bil1/$bil2;
						break;
				}
				?>
				<input type="text" value="<?php echo "$output"; ?>" class="bil" disabled>
				<input type="text" value="<?php echo "$hasil"; ?>" class="bil" disabled>
				<?php
			}
			else{ ?>
				<input type="text" value="0"  class = "bil" disabled>
				<?php
			}	
		?>
	</div>
</div>

<?php
include "footer.php";
?>