<?php
$koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');

$bobot = $_POST['bobot'];

$query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `id` = '$bobot'");

$data = mysqli_fetch_array($query);

echo json_encode($data);

?>