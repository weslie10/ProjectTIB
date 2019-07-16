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
if (isset($_POST['bentuk'])) {
	$b = $_POST['bentuk'];
	$u = $_POST['ukuran'];
	$line = '\n';
	if($b==1){
		?>
		<div style="margin-top:10px;border: 1px solid black; width: 20%; padding-left: 10px;">
			<?php
			for ($i=0; $i < $u; $i++) { 
				for ($j=0; $j < $u; $j++) { 
					echo "*&nbsp";
				}
				echo "<br>";
			}
<<<<<<< HEAD
		}
		?>
		echo "<br>";
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
if (isset($_POST['bentuk'])) {

	$b = $_POST['bentuk'];
	$u = $_POST['ukuran'];
	$line = '\n';
	if($b==1){
=======
			?>
		</div>
		The Code in C++
		<div style="border: 1px solid black; width: 30%; padding-left: 10px;">
			for (i=0; i < <?php echo $u; ?>; i++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j < <?php echo $u; ?>; j++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("* ");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
			&nbsp;&nbsp;&nbsp;&nbsp;printf("\n");<br>
			}<br>
		</div>
		<?php
	}
	else if($b==2){
>>>>>>> cc91a7fa405ccec7576d839e481f696ea1df8818
		?>
		<div style="margin-top:10px;border: 1px solid black; width: 20%; padding-left: 10px;">
			<?php
			for ($i=0; $i < $u; $i++) { 
<<<<<<< HEAD
				for ($j=0; $j < $u; $j++) { 
					echo "* ";
=======
				for ($j=0; $j <= $i; $j++) { 
					echo "*&nbsp";
>>>>>>> cc91a7fa405ccec7576d839e481f696ea1df8818
				}
				echo "<br>";
			}
			?>
		</div>
		The Code in C++
		<div style="border: 1px solid black; width: 30%; padding-left: 10px;">
<<<<<<< HEAD
			for (i=0; i < <?php echo $u; ?>; i++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j < <?php echo $u; ?>; j++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(" *");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
			&nbsp;&nbsp;&nbsp;&nbsp;printf("\n");<br>
		}<br>
	</div>
	<?php
}
}}
else if($b==2){
	?>
	<div style="margin-top:10px;border: 1px solid black; width: 20%; padding-left: 10px;">
=======
			for (i=0; i <= <?php echo $u; ?>; i++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j <= i; j++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("* ");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
			&nbsp;&nbsp;&nbsp;&nbsp;printf("\n");<br>
			}<br>
		</div>
		<?php
	}
	else if($b==3){
		?>
		<div style="margin-top:10px;border: 1px solid black; width: 20%; padding-left: 10px;">
			<?php
			for ($i=1; $i<=$u; $i++){
					for ($k=$u; $k>$i; $k--){
						echo "&nbsp&nbsp";
					}
					for($j=1;$j<=$i;$j++){
						echo "*&nbsp&nbsp";
					}
					echo "<br/>";	
				}
			?>
		</div>
		The Code in C++
		<div style="border: 1px solid black; width: 30%; padding-left: 10px;">
			for (i=1; i <= <?php echo $u; ?>; i++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j <= i; j++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(" ");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
			&nbsp;&nbsp;&nbsp;&nbsp;for (j=1; j <= i; j++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(" *");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
			&nbsp;&nbsp;&nbsp;&nbsp;printf("\n");<br>
			}<br>
		</div>
>>>>>>> cc91a7fa405ccec7576d839e481f696ea1df8818
		<?php
	}
	else if($b==4){
		?>
		<div style="margin-top:10px;border: 1px solid black; width: 20%; padding-left: 10px;">
			<?php
			for($i=1;$i<=$u; $i++){
				for($j=$u;$j>=$i; $j--){
					echo "&nbsp;&nbsp;";
				}
				for($j=0; $j<$i; $j++){
					echo "*&nbsp;&nbsp;";
				}
				echo "<br>";
			}
			for($i=$u-1;$i>0; $i--){
				for($j=$u;$j>=$i; $j--){
					echo "&nbsp;&nbsp;";
				}
				for($j=0;$j < $i; $j++){
					echo "*&nbsp;&nbsp;";
				}
				echo "<br>";
			}
			?>
		</div>
		The Code in C++
		<div style="border: 1px solid black; width: 30%; padding-left: 10px;">
			for (i=1; i <= <?php echo $u; ?>; i++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;for (j= <?php echo $u; ?>; j >= i; j--) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("  ");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
			&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j < i; j++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("*  ");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
			&nbsp;&nbsp;&nbsp;&nbsp;printf("\n");<br>
			}<br>
			for (i=<?php echo $u-1; ?>; i > 0; i--) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;for (j=<?php echo $u; ?>; j >= i; j--) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("  ");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
			&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j < i; j++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("*  ");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
			&nbsp;&nbsp;&nbsp;&nbsp;printf("\n");<br>
			}<br>
		</div>
		<?php
	}
	else if($b==5){
		?>
		<div style="margin-top:10px;border: 1px solid black; width: 20%; padding-left: 10px;">
			<?php  
			for ($i = $u-1; $i >= 0; $i--) {
				for ($j = 0; $j < $i; $j++) { 
					echo "&nbsp;&nbsp;"; 
				} 
				for ($j = $u-1; $j >= $i; $j--) {
					echo "&nbsp*";
				}
				echo "</br>";
			}
			for ($i = $u-1; $i > 0; $i--) {
				for ($j = $u; $j > $i; $j--) {
					echo "&nbsp;&nbsp;";
				}
				for ($j = 0; $j < $i; $j++) {
					echo "&nbsp*";
				}
				echo "</br>";
			}
			?>
		</div>
		The Code in C++
		<div style="border: 1px solid black; width: 30%; padding-left: 10px;">
			for (i= <?php echo $u-1; ?>; i >= 0; i--) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;for (j= 0; j < i; j++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("  ");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
			&nbsp;&nbsp;&nbsp;&nbsp;for (j=<?php echo $u; ?>; j >= i; j--) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(" *");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
			&nbsp;&nbsp;&nbsp;&nbsp;printf("\n");<br>
			}<br>
			for (i=<?php echo $u-1; ?>; i > 0; i--) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;for (j=<?php echo $u; ?>; j > i; j--) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("  ");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
			&nbsp;&nbsp;&nbsp;&nbsp;printf("\n");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;for (j= 0; j < i; j++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(" *");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
			}<br>
		</div>
		<?php
	}
	else if($b==6){
		?>
		<div style="margin-top:10px;border: 1px solid black; width: 20%; padding-left: 10px;">
			<?php  
			for($i=0; $i < $u; $i++){   
				for($j=0; $j <= $i; $j++){   
					echo '*&nbsp';   
				}  
				echo '<br>';   
			}  
			for($i=$u-1; $i >= 1; $i--){   
				for($j=0; $j < $i; $j++){  
					echo '*&nbsp';   
				}   
				echo '<br>';   
			}
			?>  
		</div>
		The Code in C++
		<div style="border: 1px solid black; width: 30%; padding-left: 10px;">
			for (i=0; i < <?php echo $u; ?>; i++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j <= i; j++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("* ");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
			&nbsp;&nbsp;&nbsp;&nbsp;printf("\n");<br>
			}<br>
			for (i=<?php echo $u-1; ?>; i >= 1 ?>; i--) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j <= i; j++) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("* ");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
			&nbsp;&nbsp;&nbsp;&nbsp;printf("\n");<br>
			}<br>
		</div>
<?php
	}
}
?>
</div>
<?php
include "footer.php";
?>