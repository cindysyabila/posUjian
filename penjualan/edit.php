<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Edit Penjualan</h1>
        </div>
        <div class="col-4">
            <a href="?m=penjualan&s=tampil" class="btn btn-large btn-info" style="float: right"> Kembali</a>
        </div>
        <?php
        include_once('koneksi.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM penjualan WHERE id='$id'";
        $query = mysqli_query($koneksi, $sql);
        $r = mysqli_fetch_array($query);
        ?>
        <div class="col">
            <form action="?m=penjualan&s=update" method="post">
                <div class="mb-2">
                    <label for="">Supplier Id</label>
                    <input type="number" name="supplier_id" value="<?=$r['supplier_id'];?>" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Total</label>
                    <input type="number" name="total" value="<?=$r['total'];?>" class="form-control">
                </div>
                <div class="mb-2">
                    <input type="hidden" name="id" value="<?=$r['id'];?>">
                    <input type="reset" class="btn btn-info">&nbsp;
                    <input type="submit" name="update" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>        
    </div>
</section>