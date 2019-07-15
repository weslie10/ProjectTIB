<?php
include "header.php";
$b = $_POST['bilangan'];
$h = $_POST['hitung'];
$exp = $_POST['exp'];
$hasil = "";
if(isset($_POST['submit'])){
    if($h=='1'){
        $hasil = $b." ^ ".$exp." = ".pow($b,$exp);
    }
    else if($h=='2'){
        $hasil = $exp." √ ".$b." = ".pow($b,1/$exp);
    }
}
?>

<div class="hero">
    <div class="">
        <form method="POST">
            <table align="center" >
                <tr>
                    <td>Input Bilangan</td>
                    <td>:</td>
                    <td><input name="bilangan" type="text" value="<?php echo $b; ?>"></td>
                </tr>
                <tr>
                    <td>Hitung</td>
                    <td>:</td>
                    <td><input type="radio" name="hitung" value="1" checked>Pangkat<br>
                        <input type="radio" name="hitung" value="2">Akar</td>
                </tr>
                <tr>
                    <td>Pangkat/Akar</td>
                    <td>:</td>
                    <td><input name="exp" type="text" value="<?php echo $exp; ?>"></td>
                </tr>
                <tr>
                    <td><input name="submit" type="submit"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="text" name="result" value="<?php echo $hasil; ?>" disabled>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    
</div>
<?php
include "footer.php";
?>