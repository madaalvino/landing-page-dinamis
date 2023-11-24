<?php

include '../config.php';

$id=$_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$button_name = $_POST['button_name'];

// Ambil Data file 
$nama_file = $_FILES['logo']['name'];
$nama_sementara = $_FILES['logo']['tmp_name'];
// Letak file
$directory = '../assets/img/';

move_uploaded_file($nama_sementara, $directory.$nama_file);

mysqli_query($koneksi, "UPDATE settings SET title='$title', description='$description', button_name='$button_name', logo='$nama_file' WHERE id='$id'");

header('location:index.php');