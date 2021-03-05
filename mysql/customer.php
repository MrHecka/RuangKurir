<h3>INPUT DATA CUSTOMER</h3>
<hr>
<form action="" method="POST">
    <table>
        <tr>
            <td>IDCustomer</td>
            <td><input type="text" name="idcustomer"></td>
        </tr>
        <tr>
            <td>Nama Pengirim</td>
            <td><input type="text" name="namapengirim"></td>
        </tr>
        <tr>
            <td>Telepon Customer</td>
            <td><input type="tel" name="teleponcustomer"></td>
        </tr>
        <tr>
            <td>Alamat Penerima</td>
            <td><input type="text" size="50%" name="alamatpenerima"></td>
        </tr>
        <tr>
            <td>Alamat Pengirim</td>
            <td><input type="text" size="50%" name="alamatpengirim"></td>
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
    $simpan = mysqli_query($konek, "INSERT INTO customer
        VALUES('$_POST[idcustomer]','$_POST[namapengirim]','$_POST[teleponcustomer]','$_POST[alamatpenerima]','$_POST[alamatpengirim]')");

    if($simpan){
        header('location:../customer.php');
    } else {
        echo "Gagal menyimpan data customer...".mysqli_error($konek);
    }
}
?>
