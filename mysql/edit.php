<h3>EDIT DATA LOG ORDER</h3>
<hr>
<?php
include "koneksi.php";
$sqlEdit = mysqli_query($konek, "SELECT * FROM logorder WHERE IDOrder='$_GET[IDOrder]'");
$e=mysqli_fetch_array($sqlEdit);
?>
<form action="" method="POST">
    <table>
        <tr>
            <td>IDOrder</td>
            <td><input type="text" name="idorder" value="<?php echo $e['IDOrder']; ?>"></td>
        </tr>
        <tr>
            <td>IDDriver</td>
            <td><input type="text" name="iddriver" value="<?php echo $e['IDDriver']; ?>"></td>
        </tr>
        <tr>
            <td>Status Pengiriman</td>
            <td>
                <select name="statuspengiriman">
                    <option value="<?php echo $e['status_pengiriman']; ?>"><?php echo $e['status_pengiriman']; ?></option>
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
                    <option value="<?php echo $e['status_terkirim']; ?>"><?php echo $e['status_terkirim']; ?></option>
                    <option value="Sudah">Sudah</option>
                    <option value="Belum">Belum</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal Update</td>
            <td><input type="date" name="tanggalupdate" value="<?php echo $e['tanggal_update']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $update = mysqli_query($konek, "UPDATE logorder SET IDDriver='$_POST[iddriver]',
                                        status_pengiriman='$_POST[statuspengiriman]',
                                        status_terkirim='$_POST[statusterkirim]',
                                        tanggal_update='$_POST[tanggalupdate]',
                                        IDOrder='$_POST[idorder]'");

    if($update){
        header('location:../logorder.php');
    } else {
        echo "Gagal mengupdate data...".mysqli_error($konek);
    }
}
?>

