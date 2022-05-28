<?php
require('../koneksi.php');

// mendapatkan data dari form
$username = $_POST["username"];
$full_name = $_POST["full_name"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
$encryped_password = sha1($password);


// pastikan data tidak kosong
if(empty($full_name) || empty($username) || empty($password) || empty($confirm_password)) {
    $msg = "Semua Input Harus Diisi";
header("Location: ../login.php?msg=" . $msg);
return;
}

// cek password sama
if($password != $confirm_password) {
    $msg = "Password Tidak Sama";
header("Location: ../login.php?msg=" . $msg);
return;
}

// menyimpan data ke database
$sql = "INSERT INTO user (username, full_name, password) VALUES ('$username', '$full_name   ', '$encryped_password')";

if ($conn->query($sql)){
    $sukses = "Register Berhasil Silahkan Login Cuyy";
} else {
    $gagal ="Username Sudah Terdaftar, Silahkan Ganti Username";
}
// header("Location: ../login.php?msg=" . $msg);
?>
<script>
alert('<?php echo $sukses;?>');
location='../login.php';
</script>
<script>
alert('<?php echo $gagal;?>');
location='../register.php';
</script>