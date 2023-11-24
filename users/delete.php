<?php

// Memanggil file koneksi ke db
include '../config.php';

// menerima inputan dari user di halaman tambah data
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM users WHERE id='$id'");

header('location:index.php');