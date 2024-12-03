<?php
session_start();
include ('../mysql/koneksi.php');
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";

$result = $koneksi->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    if($row['role'] == 'admin'){
        header("Location: ../dashboard/admin.php");
    }else{
        header("Location: ../dashboard/dashboard.php");
    }
}else{
    setcookie("salah", "Email atau Password salah", time() + 1);
    header("Location: ../login/login.php");
    exit();
}
?>