<?php
session_start();
require('../koneksi.php');
    // mendapatkan input data
$username = $_POST["username"];
$password = $_POST["password"];
$encryped_password = sha1($password);

// pengecekan inputan data
if(empty($username) || empty($password)){
    $msg = "Username dan Password Tidak Boleh Kosong";
    header("Location: ../login.php?msg=".$msg);
    return;
}
$sql = "SELECT username, password FROM user WHERE username = '$username' AND password = '$encryped_password'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    // login berhasil
    $_SESSION["username"] = $username;
    $msg = "Login Berhasil";
    header("Location: ../index.php");
}else{
    $msg = "Login Gagal";
    header("Location: ../login.php?msg=".$msg);
}