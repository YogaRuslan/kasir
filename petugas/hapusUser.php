<?php
include_once("../conn/db_connect.php");
 
$id = $_GET['id'];
 
$result = mysqli_query($koneksi, "DELETE FROM user WHERE id=$id");


header("Location:index.php?page=user");
?>