<?php
if (isset($_POST['simpan'])) {
    include_once "koneksi.php";
    $supplier_id  = $_POST['supplier_id'];
    $total = $_POST['total'];

    $sql = "INSERT INTO penjualan SET supplier_id='$supplier_id', total='$total'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location:index.php?m=penjualan&s=tampil');
        //echo "berhasil";
    } else {
        include "index.php?m=penjualan&s=tampil";
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
