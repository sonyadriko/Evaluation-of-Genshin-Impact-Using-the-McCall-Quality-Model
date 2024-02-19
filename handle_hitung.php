<?php
// Include your database connection here
include 'model/koneksi.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging: Print the entire $_POST array
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';

    // Retrieve the submitted values
    $idPertanyaan = $_POST["idPertanyaan"];
    $inputAverage = $_POST["inputAverage"];

    // Get the latest session ID from the database and increment it by 1
    $queryLatestId = "SELECT MAX(id_sesi) AS max_id FROM hasil_form";
    $resultLatestId = mysqli_query($koneksi, $queryLatestId);
    $rowLatestId = mysqli_fetch_assoc($resultLatestId);
    $id_sesi = $rowLatestId['max_id'] + 1;

    // Debugging: Print individual values
    // echo "id_sesi: ";
    // // print_r($id_sesi);
    // echo "<br>";

    // Loop through the submitted values and insert into the database
    foreach ($idPertanyaan as $index => $id) {
        // Debugging: Print the current index and ID
        // echo "Index: $index, ID: $id<br>";

        // Check if the index exists in inputAverage array
        if (isset($inputAverage[$index])) {
            $hasilJawaban = mysqli_real_escape_string($koneksi, $inputAverage[$index]);

            // Assuming your table is named 'hasil_form'
            $sqlInsert = "INSERT INTO hasil_form (id_sesi, id_pertanyaan, hasil_jawaban) VALUES ('$id_sesi', '$id', '$hasilJawaban')";

            // Execute the query
            mysqli_query($koneksi, $sqlInsert);


        } else {
            // Debugging: Print a message if inputAverage is not set for the current index
            echo "Warning: inputAverage[$index] is not set<br>";
        }
    }

    for ($id_pertanyaan = 0; $id_pertanyaan <= 69; $id_pertanyaan++) {
        // Query untuk menghitung nilai kriteria untuk setiap pertanyaan
        $sql1 = "SELECT AVG(hasil_jawaban) as nilai_rata FROM hasil_form WHERE id_pertanyaan = $id_pertanyaan";
        $result1 = mysqli_query($koneksi, $sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $nilai_rata = $row1['nilai_rata'];
    
        // Query untuk memperbarui kolom average di tabel pertanyaan
        $sql2 = "UPDATE pertanyaan SET average = $nilai_rata WHERE id = $id_pertanyaan";
        mysqli_query($koneksi, $sql2);
    }
    

    // Close the database connection
    mysqli_close($koneksi);

    // Redirect or perform any other actions after successful insertion
    header("Location: dashboard.php");
    exit();
} else {
    // Handle the case when the form is not submitted
    echo "Form not submitted.";
}
?>
