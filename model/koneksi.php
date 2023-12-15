<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "dbmansyah_mccall";

$koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');
if (!$koneksi) { //cek koneksi
	die("Tidak bisa terkoneksi ke database");
}
?>