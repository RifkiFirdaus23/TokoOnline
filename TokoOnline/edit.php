<?php
include 'koneksi.php';
$id = $_GET['id'];
$edit = mysql_query("SELECT * FROM data_barang");
$upd = mysql_fetch_array($edit);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Input Nama/Merk Mobil</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <script type="text/javascript" href="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
    <h2>Input Barang</h2>
    <form class="form-horizontal" action="prosesupdate.php" method="post"  enctype="multipart/form-data">
      <div class="form-group">
        <div class="col-sm-10">
          <input type="hidden" class="form-control" id="namamobil" name="id" value="<?php echo "$id";?>" required>
        </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="namamobil">Nama Mobil</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="namamobil" name="namamobil" value="<?= $upd['namamobil'];?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="stock">Stock</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="stock" name="stock" value="<?= $upd['stock'];?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="harga">Harga</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="harga" name="harga" value="<?= $upd['harga'];?>" required>
        </div>
      </div>
      <button type="submit" class="btn btn-danger" name="update">Update</button>
    </form>
    </div>
  </body>
</html>
