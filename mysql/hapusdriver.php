<?php
include "koneksi.php";
$hapus = mysqli_query($konek, "DELETE FROM kurir WHERE IDDriver='$_GET[IDDriver]'");

if($hapus) {
    header('location:../driver.php');
} else {
    echo "Gagal menghapus data driver...".mysqli_error($konek);
}
?>