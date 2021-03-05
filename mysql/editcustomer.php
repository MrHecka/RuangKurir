<h3>EDIT DATA CUSTOMER</h3>
<hr>
<?php
include "koneksi.php";
$sqlEdit = mysqli_query($konek, "SELECT * FROM customer WHERE IDCustomer='$_GET[IDCustomer]'");
$e=mysqli_fetch_array($sqlEdit);
?>
<form action="" method="POST">
    <table>
        <tr>
            <td>IDCustomer</td>
            <td><input type="text" name="idcustomer" value="<?php echo $e['IDCustomer']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Pengirim</td>
            <td><input type="text" name="namapengirim" value="<?php echo $e['nama_pengirim']; ?>"></td>
        </tr>
        <tr>
            <td>Telepon Customer</td>
            <td><input type="number" name="teleponcustomer" value="<?php echo $e['telepon_customer']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat Penerima</td>
            <td><input type="text" size="50%" name="alamatpenerima" value="<?php echo $e['alamat_penerima']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat Pengirim</td>
            <td><input type="text" size="50%" name="alamatpengirim" value="<?php echo $e['alamat_pengirim']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
    </table>
</form>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $update = mysqli_query($konek, "UPDATE customer SET nama_pengirim='$_POST[namapengirim]',
                                        telepon_customer='$_POST[teleponcustomer]',
                                        alamat_penerima='$_POST[alamatpenerima]',
                                        alamat_pengirim='$_POST[alamatpengirim]',
                                        IDCustomer='$_POST[idcustomer]'");

    if($update){
        header('location:../customer.php');
    } else {
        echo "Gagal mengupdate data customer...".mysqli_error($konek);
    }
}
?>
