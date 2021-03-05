<h3>INPUT DATA LOG ORDER</h3>
<hr>
<form action="" method="POST">
    <table>
        <tr>
            <td>IDOrder</td>
            <td><input type="text" name="idorder"></td>
        </tr>
        <tr>
            <td>IDDriver</td>
            <td><input type="text" name="iddriver"></td>
        </tr>
        <tr>
            <td>Status Pengiriman</td>
            <td>
                <select name="statuspengiriman">
                    <option value="">- Pilih Status Pengiriman -</option>
                    <option value="Delivered">Delivered</option>
                    <option value="Shipping">Shipping</option>
                    <option value="Pending">Pending</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Status Terkirim?</td>
            <td>
                <select name="statusterkirim">
                    <option value="">- Apakah Status Sudah Terkirim? -</option>
                    <option value="Sudah">Sudah</option>
                    <option value="Belum">Belum</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal Update</td>
            <td><input type="date" name="tanggalupdate"></td>
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
    $simpan = mysqli_query($konek, "INSERT INTO logorder
        VALUES('$_POST[idorder]','$_POST[iddriver]','$_POST[statuspengiriman]','$_POST[statusterkirim]','$_POST[tanggalupdate]')");

    if($simpan){
        header('location:../logorder.php');
    } else {
        echo "Gagal menyimpan data log order...".mysqli_error($konek);
    }
}
?>
