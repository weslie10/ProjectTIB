<?php
include "header.php";
?>
<div class="hero">
	<form method="post">
		<table>
			<tr>
				<td>Pilih Bentuk</td>
				<td>:</td>
				<td colspan="2"><select name="bentuk">
						<option value="1">Persegi</option>
						<option value="2">Segitiga siku-siku</option>
						<option value="3">Piramida</option>
						<option value="4">Berlian</option>
						<option value="5">Panah ke kiri</option>
						<option value="6">Panah ke kanan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Ukuran</td>
				<td>:</td>
				<td><input type="number" name="ukuran" min="3" max="5" value="3"></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
	
	<?php
		$b = $_POST['bentuk'];
		$u = $_POST['ukuran'];
		if($b==1){
			?>
			<div style="border: 1px solid black; width: 30%;">
				<?php
				for ($i=0; $i < $u; $i++) { 
					for ($j=0; $j < $u; $j++) { 
						echo "* ";
					}
					echo "<br>";
				}
				?>
			</div>
			<?php
		}
	?>
</div>
<?php
include "footer.php";
?>