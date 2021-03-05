<h3>Data LogOrder</h3>
<hr>
<a href="logorder.php">Tambah Data LogOrder</a>
<table border="1" cellspacing="0" width="100%">
    <tr>
        <th>No</th>
        <th>IDOrder</th>
        <th>IDDriver</th>
        <th>Status Pengiriman</th>
        <th>Status Terkirim ?</th>
        <th>Tanggal Update</th>
        <th>Aksi</th>
    </tr>

    <?php
    include "koneksi.php";
    $no=1;
    $sqlMhs = mysqli_query($konek, "SELECT * FROM logorder ORDER BY IDOrder ASC");

    while($d = mysqli_fetch_array($sqlMhs)){
        echo "<tr>
            <td align='center'>$no</td>
            <td>$d[IDOrder]</td>
            <td>$d[IDDriver]</td>
            <td>$d[status_pengiriman]</td>
            <td>$d[status_terkirim]</td>
            <td align='center'>$d[tanggal_update]</td>
            <td align='center'>
                <a href='edit.php?IDOrder=$d[IDOrder]'>Edit</a> | <a href='hapus.php?IDOrder=$d[IDOrder]'>Hapus</a>
            </td>
        </tr>";
        $no++;
    }
    ?>

</table>