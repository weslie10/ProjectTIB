<?php
include "header.php";
?>
<div class="hero">
<?php
@$bilangan = $_POST['bilangan'];
@$pangkat = $_POST['pangkat'];
@$hasil = pow($bilangan, $pangkat);
?>

		<h3 align="center">Menghitung Pangkat Suatu Bilangan</h3>
        <form method="POST">
            <table align="center" >
                <tr>
                    <td>Input Bilangan</td>
                    <td>=</td>
                    <td><input name="bilangan" type="text" value="<?php echo $bilangan; ?>"/></td>
                </tr>
                <tr>
                    <td>Pangkat</td>
                    <td>=</td>
                    <td><input name="pangkat" type="text" value="<?php echo $pangkat; ?>"/></td>
                </tr>
                <tr>
                    <td><input name="submit" type="submit" value="SUBMIT"/></td>
                </tr>
                <tr>
                    <td>
                        <?php
                        if(isset ($bilangan))
                            echo $hasil;
                        ?>
                    </td>
                </tr>
            </table>
        
<hr>	

<?php
@$angka = $_POST['angka'];
@$hasil = sqrt($angka);
?>

		<h3 align="center">Menghitung Akar Suatu Bilangan</h3>
        <form method="POST">
            <table align="center">
                <tr>
                    <td>Input Bilangan</td>
                    <td>=</td>
                    <td><input name="angka" type="text" value="<?php echo $angka; ?>"/></td>
                </tr>
               
                <tr>
                    <td><input name="submit" type="submit" value="SUBMIT"/></td>
                </tr>
                <tr>
                    <td>
                        <?php
                        if(isset ($angka))
                            echo $hasil;
                        ?>
                    </td>
                </tr>
            </table>
        </form>
</div>
<?php
include "footer.php";
?>