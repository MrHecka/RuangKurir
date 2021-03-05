<h3>EDIT DATA Driver</h3>
<hr>
<?php
include "koneksi.php";
$sqlEdit = mysqli_query($konek, "SELECT * FROM kurir WHERE IDDriver='$_GET[IDDriver]'");
$e=mysqli_fetch_array($sqlEdit);
?>
<form action="" method="POST">
    <table>
        <tr>
            <td>IDDriver</td>
            <td><input type="text" name="iddriver" value="<?php echo $e['IDDriver']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Driver</td>
            <td><input type="text" name="namadriver" value="<?php echo $e['nama_driver']; ?>"></td>
        </tr>
        <tr>
            <td>Telepon Driver</td>
            <td><input type="number" name="telepondriver" value="<?php echo $e['telepon_kurir']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat Driver</td>
            <td><input type="text" size="50%" name="alamatdriver" value="<?php echo $e['alamat_driver']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
    </table>
</form>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $update = mysqli_query($konek, "UPDATE kurir SET nama_driver='$_POST[namadriver]',
                                        telepon_kurir='$_POST[telepondriver]',
                                        alamat_driver='$_POST[alamatdriver]',
                                        IDDriver='$_POST[iddriver]'");

    if($update){
        header('location:../driver.php');
    } else {
        echo "Gagal mengupdate data driver...".mysqli_error($konek);
    }
}
?>
