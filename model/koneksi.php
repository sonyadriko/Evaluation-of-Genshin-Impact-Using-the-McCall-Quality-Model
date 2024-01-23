<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "mccallgenshin";

$koneksi    = mysqli_connect('localhost', 'root', '', 'mccallgenshin');
if (!$koneksi) { //cek koneksi
	die("Tidak bisa terkoneksi ke database");
}
?>