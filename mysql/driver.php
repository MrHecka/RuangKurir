<h3>INPUT DATA Driver</h3>
<hr>
<form action="" method="POST">
    <table>
        <tr>
            <td>IDDriver</td>
            <td><input type="text" name="iddriver"></td>
        </tr>
        <tr>
            <td>Nama Driver</td>
            <td><input type="text" name="namadriver"></td>
        </tr>
        <tr>
            <td>Telepon Driver</td>
            <td><input type="number" name="telepondriver"></td>
        </tr>
        <tr>
            <td>Alamat Driver</td>
            <td><input type="text" size="50%" name="alamatdriver"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
    </table>
</form>

<?php
include "koneksi.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $simpan = mysqli_query($konek, "INSERT INTO kurir
        VALUES('$_POST[iddriver]','$_POST[namadriver]','$_POST[telepondriver]','$_POST[alamatdriver]')");

    if($simpan){
        header('location:../driver.php');
    } else {
        echo "Gagal menyimpan data log order...".mysqli_error($konek);
    }
}
?>
