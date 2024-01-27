<?php
// Koneksi ke database
$koneksi  = mysqli_connect('localhost', 'root', '', 'mccallgenshin');

// Terima data dari permintaan Ajax
$totalHasil1 = $_POST['totalHasil1'];
$totalIntegrity = $_POST['totalIntegrity'];
$roundedHasilnya = $_POST['roundedHasilnya'];
$k_corec = $_POST['k_corec'];

// Validasi data sebelum digunakan
if (empty($totalHasil1) || empty($totalIntegrity) || empty($roundedHasilnya) || empty($k_corec)) {
    echo "Error: Data tidak lengkap.";
    exit;
}

// TODO: Lakukan langkah-langkah untuk menyimpan data ke dalam database
$stmt = $koneksi->prepare("INSERT INTO integrity (nilai_security, nilai_integrity, persentase, kategori) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ddss", $totalHasil1, $totalIntegrity, $roundedHasilnya, $k_corec);

if ($stmt->execute()) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $stmt->error;
}

// Tutup koneksi
$stmt->close();
$koneksi->close();
?>
