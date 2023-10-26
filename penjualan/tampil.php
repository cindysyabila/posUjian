<section class="content">
    <div class="row">
        <a href="?m=penjualan&s=tambah" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Tambah Mata Diklat</a>
        <h1>Recape Penjualan</h1>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>ID</th>
                <th>Supplier Id</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
            <?php
            include_once('koneksi.php');
            $sql = 'SELECT * FROM penjualan';
            $query = mysqli_query($koneksi, $sql);
            if (mysqli_num_rows($query) == 0) {
                echo "<tr><td colspan='5'>Data Kosong</td></tr>";
            } else {
                $no = 1;
                while ($r = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>" . $r['supplier_id'] . "</td>";
                    echo "<td>" . $r['total'] . "</td>";
                    echo '<td><a href="?m=penjualan&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a> 
                    <a href="?m=penjualan&s=hapus&id='.$r['id'].'" onclick="return confirm(\'Menghapus Mata Diklat akan menghilangkan SEMUA data siswa yang ada pada Mata Diklat tersebut,\nYakin Akan dihapus?\')" class="btn btn-danger btn-sm">Hapus</a></td>';
                    echo "</tr>";
                    $no++;
                }
            }
            ?>
        </table>
    </div>
</section>