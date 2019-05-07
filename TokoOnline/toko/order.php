<?php

  require 'fungsi/koneksi.php';

  $id_order = $_POST['id_order'];
  $id_barang = $_POST['id'];

  $send = mysqli_query($kon, "INSERT INTO keranjang VALUES('',$id_order,$id_barang)");
  if ($send) : ?>

  <script type="text/javascript">
    alert("pesanan dikonfirmasi");
    window.location.href="index.php";
  </script>
<?php endif  ?>
