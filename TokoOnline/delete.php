<?php
include 'koneksi.php';

$id = $_GET['id'];
$hapus = mysql_query("DELETE FROM data_barang WHERE id = $id");
if ($hapus) {
  echo "<script>alert('Data Sudah Berhasil Di Hapus');document.location.href='Admin.php';</script>";
}
 ?>
