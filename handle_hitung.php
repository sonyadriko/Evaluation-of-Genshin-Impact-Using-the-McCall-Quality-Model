<?php
// Include your database connection here
include 'model/koneksi.php';


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Generate a unique session ID
    $id_sesi = uniqid();

    // Retrieve the submitted values
    $idPertanyaan = $_POST["idPertanyaan"];
    $inputAverage = $_POST["inputAverage"];

    // Loop through the submitted values and insert into the database
    foreach ($idPertanyaan as $index => $id) {
        $hasilJawaban = mysqli_real_escape_string($koneksi, $inputAverage[$index]);
        // $hasilJawaban = isset($inputAverage[$index]) ? mysqli_real_escape_string($koneksi, $inputAverage[$index]) : '';

        // Assuming your table is named 'hasil_form'
        $sqlInsert = "INSERT INTO hasil_form (id_sesi, id_pertanyaan, hasil_jawaban) VALUES ('$id_sesi', '$id', '$hasilJawaban')";

        // Execute the query
        mysqli_query($koneksi, $sqlInsert);
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
