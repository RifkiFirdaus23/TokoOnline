<?php
include 'koneksi.php';
$no = 1;
$tampil = mysql_query("SELECT * FROM data_barang");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dasboard Admin</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <script type="text/javascript" href="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" href="#">Dashboard Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="InputBarang.php">Input Barang</a>
        </li>
      </ul>
      <button type="submit" name="button" class="btn-danger" ><a href="InputBarang.php">Tambah Data</a></button>
      <table class="table  table-sm table-reponsive">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Mobil</th>
            <th scope="col">Stok</th>
            <th scope="col">Gambar</th>
            <th scope="col">Harga</th>
            <th scope="col">Pilihan</th>
          </tr>
            <?php
            while ($data= mysql_fetch_array($tampil)) {
              $namamobil = $data['namamobil'];
              $stock = $data['stock'];
              $harga = $data['harga'];
              $gambar = $data['gambar'];
             ?>
          <tr>
             <td scope="col"><?php echo "$no"; ?></td>
             <td scope="col"><?php echo "$namamobil"; ?></td>
             <td scope="col"><?php echo "$stock"; ?></td>
             <td scope="col"><img src=img/<?php echo "$gambar"; ?> width='100' height='100'></td>
             <td scope="col"><?php echo "$harga"; ?></td>
             <td><button class="btn-danger" style="width:100px; height:40px; padding:0; margin:0;" type="submit"><a href="">Buy</a></button>
             </td>
          </tr>
        <?php $no ++;} ?>
        </thead>
      </table>
  </body>
</html>
