<?php
include_once("conn/db_connect.php");
$id = $_GET['id'];
$sql = $koneksi->query("DELETE FROM detail WHERE idPenjualan=$id");
echo "<script>
        alert('Data Berhasil Dihapus');
        window.location.href = 'daftarTransaksi.php';
    </script>";
?>