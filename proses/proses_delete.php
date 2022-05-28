<?php 
	include "../koneksi.php";
	$ids = $_GET["del"];
	$i = mysqli_query($conn, "SELECT * FROM status WHERE ids ='$ids' ");
	$u =mysqli_fetch_array($i);
	
	// if(is_file("../berkas".$u['file'])) unlink("berkas/masuk/".$u['file']); 
	mysqli_query($conn, "DELETE FROM status WHERE ids='$ids' ");
	header("location:../index.php?=sukses");
 ?>