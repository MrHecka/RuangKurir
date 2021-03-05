<?php
include "koneksi.php";
$hapus = mysqli_query($konek, "DELETE FROM customer WHERE IDCustomer='$_GET[IDCustomer]'");

if($hapus) {
    header('location:../customer.php');
} else {
    echo "Gagal menghapus data customer...".mysqli_error($konek);
}
?>