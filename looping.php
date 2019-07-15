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
$line = '\n';
if($b==1){
	?>
	<div style="margin-top:10px;border: 1px solid black; width: 20%; padding-left: 10px;">
		<?php
		for ($i=0; $i < $u; $i++) { 
			for ($j=0; $j < $u; $j++) { 
				echo "* ";
			}
			echo "<br>";
		}
		?>
	</div>
	The Code in C++
	<div style="border: 1px solid black; width: 30%; padding-left: 10px;">
		for (i=0; i < <?php echo $u; ?>; i++) {<br>
		&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j < <?php echo $u; ?>; j++) {<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(" *");<br>
		&nbsp;&nbsp;&nbsp;&nbsp;}<br>
		&nbsp;&nbsp;&nbsp;&nbsp;printf("\n");<br>
	}<br>
</div>
<?php
}
else if($b==2){
	?>
	<div style="margin-top:10px;border: 1px solid black; width: 20%; padding-left: 10px;">
		<?php
		for ($i=0; $i < $u; $i++) { 
			for ($j=0; $j <= $i; $j++) { 
				echo "* ";
			}
			echo "<br>";
		}
		?>
	</div>
	The Code in C++
	<div style="border: 1px solid black; width: 30%; padding-left: 10px;">
		for (i=0; i <= <?php echo $u; ?>; i++) {<br>
		&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j <= i; j++) {<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(" *");<br>
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
		$k = 2 * $u - 2;
		for ($i = 0; $i < $u; $i++){ 
			for ($j = 0; $j < $k; $j++){
				echo "&nbsp"; 
			}
			$k = $k - 1;
			for ($j = 0; $j <= $i; $j++){
				echo " *"; 
			}
			echo "<br>";
		} 
		?>
	</div>
	The Code in C++
	<div style="border: 1px solid black; width: 30%; padding-left: 10px;">
		k = 2 * ukuran - 2 = <?php echo 2*$u-2; ?><br>
		for (i=0; i <= <?php echo $u; ?>; i++) {<br>
		&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j <= k; j++) {<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(" ");<br>
		&nbsp;&nbsp;&nbsp;&nbsp;}<br>
		&nbsp;&nbsp;&nbsp;&nbsp;k-=1;<br>
		&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j <= i; j++) {<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(" *");<br>
		&nbsp;&nbsp;&nbsp;&nbsp;}<br>
		&nbsp;&nbsp;&nbsp;&nbsp;printf("\n");<br>
	}<br>
</div>
<?php
}
else if($b==4){
	?>
	<div style="margin-top:10px;border: 1px solid black; width: 20%; padding-left: 10px;">
		<?php  
		for($i=0;$i<=5;$i++){  
			for($k=5;$k>=$i;$k--){  
				echo "&nbsp";  
			}  
			for($j=1;$j<=$i;$j++){  
				echo "*  ";  
			}  
			echo "<br>";  
		}  
		for($i=4;$i>=1;$i--){  
			for($k=5;$k>=$i;$k--){  
				echo "&nbsp";  
			}  
			for($j=1;$j<=$i;$j++){  
				echo "*  ";  
			}  
			echo "<br>";  
		}  
		?>  
	</div>
	The Code in C++
	<div style="border: 1px solid black; width: 30%; padding-left: 10px;">
		k = 2 * ukuran - 2 = <?php echo 2*$u-2; ?><br>
		for (i=0; i <= <?php echo $u; ?>; i++) {<br>
		&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j <= k; j++) {<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(" ");<br>
		&nbsp;&nbsp;&nbsp;&nbsp;}<br>
		&nbsp;&nbsp;&nbsp;&nbsp;k-=1;<br>
		&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j <= i; j++) {<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(" *");<br>
		&nbsp;&nbsp;&nbsp;&nbsp;}<br>
		&nbsp;&nbsp;&nbsp;&nbsp;printf("\n");<br>
	}<br>
</div>
<?php
}
else{
	?>
	<div style="margin-top:10px;border: 1px solid black; width: 20%; padding-left: 10px;">
		<?php  
		for($i=1; $i<=5; $i++){   
			for($j=1; $j<=$i; $j++){   
				echo ' * ';   
			}  
			echo '<br>';   
		}  
		for($i=5; $i>=1; $i--){   
			for($j=1; $j<=$i; $j++){  
				echo ' * ';   
			}   
			echo '<br>';   
		}   
		?>  
	</div>
	The Code in C++
	<div style="border: 1px solid black; width: 30%; padding-left: 10px;">
		k = 2 * ukuran - 2 = <?php echo 2*$u-2; ?><br>
		for (i=0; i <= <?php echo $u; ?>; i++) {<br>
		&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j <= k; j++) {<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(" ");<br>
		&nbsp;&nbsp;&nbsp;&nbsp;}<br>
		&nbsp;&nbsp;&nbsp;&nbsp;k-=1;<br>
		&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j <= i; j++) {<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(" *");<br>
		&nbsp;&nbsp;&nbsp;&nbsp;}<br>
		&nbsp;&nbsp;&nbsp;&nbsp;printf("\n");<br>
	}<br>
</div>
<?php
}
include "footer.php";
?>