<?php

session_start();

include 'config.php';

// var_dump($_POST);
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password' ");
$check = mysqli_num_rows($query);

if($check > 0) {
    $_SESSION['username'] =$username;
    $_SESSION['status'] = "login";
    header('location:dasbor/dasbor.php');
}else{
    header('location:login.php?pesan=gagal');
}