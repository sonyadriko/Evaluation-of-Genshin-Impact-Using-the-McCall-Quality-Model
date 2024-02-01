<?php
include 'model/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted realisasi values and corresponding id_peta_strategi values
    $averageValues = $_POST['inputAverage'];
    $idPertanyaan = $_POST['idPertanyaan'];

    // Initialize response array
    $response = array();

    // Loop through the values and update the database
    for ($i = 0; $i < count($averageValues); $i++) {
        $average = mysqli_real_escape_string($koneksi, $averageValues[$i]);
        $idPetaStrategi = mysqli_real_escape_string($koneksi, $idPertanyaan[$i]);

        // Update the realisasi in the database
        $updateQuery = "UPDATE pertanyaan SET input = '$average' WHERE id = $idPetaStrategi";
        $result = mysqli_query($koneksi, $updateQuery);

        // Check for errors
        if (!$result) {
            $response['error'] = "Error updating data for ID $idPetaStrategi: " . mysqli_error($koneksi);
            echo json_encode($response);
            exit();
        }
    }

    // Respond with a JSON object indicating success
    $response['sukses'] = 'Data successfully updated';
    echo json_encode($response);
    exit();
}
?>
