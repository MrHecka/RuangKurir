<?php
include "koneksi.php";
$hapus = mysqli_query($konek, "DELETE FROM logorder WHERE IDOrder='$_GET[IDOrder]'");

if($hapus) {
    header('location:../logorder.php');
} else {
    echo "Gagal menghapus data...".mysqli_error($konek);
}
?>