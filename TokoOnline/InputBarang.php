<?php
include 'koneksi.php';

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Input Barang</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <script type="text/javascript" href="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
    <h2>Input Nama/Merk Mobil</h2>
    <form class="form-horizontal" action="" method="post"  enctype="multipart/form-data">
      <div class="form-group">
        <label class="control-label col-sm-2" for="namamobil">Nama Mobil</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="namamobil" name="namamobil" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="stock">Stock</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="stock" name="stock" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-10">
          <input type="file" name="gambar" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="harga">Harga</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="harga" name="harga" required>
        </div>
      </div>
      <button type="submit" class="btn btn-danger" name="simpan">Simpan</button>
    </form>
    </div>
    <?php
    if (isset($_POST['simpan'])) {
      $namamobil = $_POST['namamobil'];
      $stock = $_POST['stock'];
      $nama_file = $_FILES['gambar']['name'];
      $source = $_FILES['gambar']['tmp_name'];
      $folder = "img/";
      $harga = $_POST['harga'];

      move_uploaded_file($source, $folder.$nama_file);
      $insert = mysql_query("INSERT INTO data_barang VALUES(NULL, '".$namamobil."', '".$stock."', '".$nama_file."', '".$harga."')");

      if ($insert) {
      echo "Data Berhasil";
      }else {
        echo "Data Tidak Berhasil Di Inputkan";
      }
    }
     ?>
  </body>
</html>
