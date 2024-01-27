<?php
// Koneksi ke database
$koneksi  = mysqli_connect('localhost', 'root', '', 'mccallgenshin');

// Terima data dari permintaan Ajax
$totalHasil1 = $_POST['totalHasil1'];
$totalHasil2 = $_POST['totalHasil2'];
$totalEfficiency = $_POST['totalEfficiency'];
$roundedHasilnya = $_POST['roundedHasilnya'];
$k_corec = $_POST['k_corec'];

// Validasi data sebelum digunakan
if (empty($totalHasil1) || empty($totalHasil2) || empty($totalEfficiency) || empty($roundedHasilnya) || empty($k_corec)) {
    echo "Error: Data tidak lengkap.";
    exit;
}

// TODO: Lakukan langkah-langkah untuk menyimpan data ke dalam database
$stmt = $koneksi->prepare("INSERT INTO efficiency (nilai_excution, nilai_conciseness, nilai_efficiency, persentase, kategori) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("dddss", $totalHasil1, $totalHasil2, $totalEfficiency, $roundedHasilnya, $k_corec);

if ($stmt->execute()) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $stmt->error;
}

// Tutup koneksi
$stmt->close();
$koneksi->close();
?>
