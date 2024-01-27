<?php
include 'model/koneksi.php';
// session_start();

// if (!isset($_SESSION['id_admin'])) {
//     header("Location: login.php");
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted realisasi values and corresponding id_peta_strategi values
    $averageValues = $_POST['inputAverage'];
    $idPertanyaan = $_POST['idPertanyaan'];

    // Loop through the values and update the database
    for ($i = 0; $i < count($averageValues); $i++) {
        $average = mysqli_real_escape_string($koneksi, $averageValues[$i]);
        $idPetaStrategi = mysqli_real_escape_string($koneksi, $idPertanyaan[$i]);

        // Update the realisasi in the database
        $updateQuery = "UPDATE pertanyaan SET input = '$average' WHERE id = $idPetaStrategi";
        mysqli_query($koneksi, $updateQuery);
    }

    // Redirect or display a success message
    header("Location: dashboard.php");
    exit();
}
?>
