<?php

// Memanggil file koneksi ke db
include '../config.php';

// menerima inputan dari user di halaman tambah data
$name = $_POST['name'];
$username = $_POST['username'];
$password = md5($_POST['password']);

if ($username =='' && $password =='' || $username =='' || $password =='') {
    header('location:create.php?username=&password=');

}else{
    // var_dump($nama);

// INput data ke database
mysqli_query($koneksi, "INSERT INTO users VALUES('','$name','$username', '$password')");

header('location:index.php');
}



