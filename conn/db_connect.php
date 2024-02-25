<?php
	$host = "localhost:3307";
	$user = "root";
	$pass = "";
	$db = "db_kasir";
	$koneksi = mysqli_connect($host,$user,$pass,$db);
	mysqli_select_db ($koneksi, $db);
	
	if (!$koneksi) {
   		die('Maaf koneksi gagal: '. $connect->connect_error);
	}
	else{
		//echo 'Tahu';
		//echo $_SESSION['viewnya'];
	}	
?>