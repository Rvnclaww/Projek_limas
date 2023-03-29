<?php 
    @$alas = $_REQUEST['alas'];
    @$tinggi = $_REQUEST['tinggi'];
    @$sisi = $_REQUEST['sisi'];
    @$tinggi_limas = $_REQUEST['tinggi_limas'];
    @$luas_alas_segitiga = 1/2 * $alas * $tinggi;
    @$volume_limas_segitiga = 1/3 * $luas_alas_segitiga * $tinggi_limas;
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>LIMAS</title>
    </head>
    <body>
        <form method="REQUEST">
            <table>
                <tr>
                    <td>alas</td>
                    <td>=</td>
                    <td><input type="text" name="alas" value="<?php echo $alas; ?>"/>cm<br/></td>
                </tr>
                <tr>
                    <td>tinggi</td>
                    <td>=</td>
                    <td><input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/>cm<br/></td>
                </tr>
                <tr>
                    <td>tinggi limas</td>
                    <td>=</td>
                    <td><input type="text" name="tinggi_limas" value="<?php echo $tinggi_limas; ?>"/>cm<br/></td>
                </tr>
                <tr>
                    <td>sisi</td>
                    <td>=</td>
                    <td><input type="text" name="sisi" value="<?php echo $sisi; ?>"/>cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Luas Alas Limas Segitiga= ".$luas_alas_segitiga." cm^2<br/>";
                echo "Volume Limas Segitiga = ".$volume_limas_segitiga." cm^3<br/><br/>";
            ?>
        </form>
    </body>
</hmtl>