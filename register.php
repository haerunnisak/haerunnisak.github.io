<?php
require 'koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tabel_user (email, password)
              VALUES ('$email', '$password')";

if (mysqli_query($conn, $query_sql)){
    header("Location: login.html");
} else {
    echo "Pendaftaran Gagal :" . mysqli_error($conn);
}