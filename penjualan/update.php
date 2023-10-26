<?php
if (isset($_POST['update'])) {
    include "koneksi.php";
    $id        = $_POST['id'];
    $supplier_id   = $_POST['supplier_id'];
    $total = $_POST['total'];

    $sql = "UPDATE penjualan SET supplier_id='$supplier_id', total='$total' WHERE id='$id'";
    $simpan = mysqli_query($koneksi, $sql);
    if ($simpan) {
        header('Location:index.php?m=penjualan&s=tampil');
        //echo "berhasil";
    } else {
        include "index.php?m=penjualan&s=tampil";
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Diupdate.")';
        echo '</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
