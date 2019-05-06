<?php
include 'koneksi.php';
 $id = $_POST['id'];
 $namamobil = $_POST['namamobil'];
 $stock = $_POST['stock'];
 $harga = $_POST['harga'];

 $simpan = mysql_query("UPDATE data_barang SET namamobil='$namamobil', stock='$stock', harga='$harga' WHERE id = $id");
 if ($simpan) {
   echo "<script>alert('Data Berhasil Di Update'); document.location.href='Admin.php'</script>";
 }

 ?>
