<?php
session_start();
require('../koneksi.php');

// mendapatkan data dari form
$content = $_POST["content"];

$username = $_SESSION['username'];
$sqlUser = "SELECT id FROM `user` WHERE username = '$username'" ;
$resultUser = $conn->query($sqlUser);
$user_id = $resultUser->fetch_assoc()['id'];


// pastikan data tidak kosong
if(empty($content)) {
    $msg = "Status tidak boleh kosong";
header("Location: ../index.php?msg=" . $msg);
return;
}

// menyimpan data ke database
$sql = "INSERT INTO status (user_id, content) VALUES ('$user_id', '$content')";

if ($conn->query($sql)){
    $msg = "Status Berhasil Diupdate";
} else {
    $msg ="Status Gagal Diupdate";
}
header("Location: ../index.php?msg=" . $msg);