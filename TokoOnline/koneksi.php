<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "data";

mysql_connect($host, $user, $pass) or die("Koneksi Gagal");
mysql_select_db($db) or die("Database Salah");
?>
