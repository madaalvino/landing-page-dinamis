<?php

include '../config.php';

$id=$_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];






mysqli_query($koneksi, "UPDATE users SET name='$name', username='$username', password='$password' WHERE id='$id'");

header('location:index.php');