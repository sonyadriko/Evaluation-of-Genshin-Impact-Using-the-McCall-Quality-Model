
<?php
// Include your database connection here
include 'model/koneksi.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging: Print the entire $_POST array
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    // Generate a unique session ID
    $id_sesi = uniqid();

    // Retrieve the submitted values
    $idPertanyaan = $_POST["idPertanyaan"];
    $inputAverage = $_POST["inputAverage"];

    // Debugging: Print individual values
    echo "idPertanyaan: ";
    print_r($idPertanyaan);
    echo "<br>";

    echo "inputAverage: ";
    print_r($inputAverage);
    echo "<br>";

    // Loop through the submitted values and insert into the database
    foreach ($idPertanyaan as $index => $id) {
        // Debugging: Print the current index and ID
        echo "Index: $index, ID: $id<br>";

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
