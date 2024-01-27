<?php
// Koneksi ke database
$koneksi  = mysqli_connect('localhost', 'root', '', 'mccallgenshin');

// Terima data dari permintaan Ajax
$totalHasil1 = $_POST['totalHasil1'];
$totalHasil2 = $_POST['totalHasil2'];
$totalHasil3 = $_POST['totalHasil3'];
$totalUsability = $_POST['totalUsability'];
$roundedHasilnya = $_POST['roundedHasilnya'];
$k_corec = $_POST['k_corec'];

// Validasi data sebelum digunakan
if (empty($totalHasil1) || empty($totalHasil2) || empty($totalHasil3) || empty($totalUsability) || empty($roundedHasilnya) || empty($k_corec)) {
    echo "Error: Data tidak lengkap.";
    exit;
}

// TODO: Lakukan langkah-langkah untuk menyimpan data ke dalam database
$stmt = $koneksi->prepare("INSERT INTO usability (nilai_communicativeness, nilai_operability, nilai_training, nilai_usability, persentase, kategori) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ddddss", $totalHasil1, $totalHasil2, $totalHasil3, $totalUsability, $roundedHasilnya, $k_corec);

if ($stmt->execute()) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $stmt->error;
}

// Tutup koneksi
$stmt->close();
$koneksi->close();
?>
