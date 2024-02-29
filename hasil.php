<style>

    .cetak-link {
        text-decoration: none; /* Menghilangkan garis bawah tautan */
        color: #007bff; /* Warna tautan (biru) */
        font-weight: bold; /* Membuat teks cetak lebih tebal */
        padding: 5px 10px; /* Memberikan padding agar tautan lebih mudah diakses */
        border: 1px solid #007bff; /* Menambahkan border untuk memberikan tampilan yang jelas */
        border-radius: 5px; /* Memberikan sudut yang melengkung pada border */
        background-color: #fff; /* Warna latar belakang tautan */
        transition: background-color 0.3s ease-in-out; /* Animasi perubahan warna latar belakang saat dihover */
    }

    .cetak-link:hover {
        background-color: #007bff; /* Warna latar belakang saat dihover */
        color: #fff; /* Warna teks saat dihover */
    }
</style>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Hasil</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<?php
$koneksi    = mysqli_connect('localhost', 'root', '', 'mccallgenshin');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk mengeluarkan data -->
        <div class="card border-success">
            <div class="card-header text-white bg-success">
                Hasil Hitung
            </div>
            <div class="card-body">
                <h3>Correctness</h3>
                <h5>Sub Indikator Completeness</h5>
                  <table class="table">
                  <thead>
                    <tr>
                        <th scope="col" style="width: 5%">No.</th>
                        <th scope="col" style="width: 10%">Sub Indikator</th>
                        <th scope="col" style="width: 65%">Pertanyaan</th>
                        <th scope="col" style="width: 10%">Hasil</th>
                    </tr>
                </thead>

                        <tbody>
                        <?php
                            $sql2 = "SELECT * FROM pertanyaan 
                            WHERE id BETWEEN 0 AND 11";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil1 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $indikator = $r2['sub_indikator'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $pertanyaan = $r2['pertanyaan'];
                                $hasiljawaban = $r2['average'];
                                $hasilbaru1 = $hasiljawaban*$bobot_pertanyaan;
                                $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                                $totalHasil1 += $hasilbaru1_rounded;

                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $indikator ?></td>
                                <td scope="row"><?php echo $pertanyaan ?></td>
                                <td scope="row"><?php echo $hasilbaru1_rounded ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <p style="font-weight:bold;" class="mt-4"> Hasil Completeness: <?php echo $totalHasil1 ?> </p>
                    <hr>
                    <h5>Sub Indikator Consistency</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">No.</th>
                                <th scope="col" style="width: 10%">Sub Indikator</th>
                                <th scope="col" style="width: 65%">Pertanyaan</th>
                                <th scope="col" style="width: 10%">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql2 = "SELECT * FROM pertanyaan 
                            WHERE id BETWEEN 12 AND 17";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil2 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $indikator = $r2['sub_indikator'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $pertanyaan = $r2['pertanyaan'];
                                $hasiljawaban = $r2['average'];
                                $hasilbaru1 = $hasiljawaban*$bobot_pertanyaan;
                                $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                                $totalHasil2 += $hasilbaru1_rounded;

                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $indikator ?></td>
                                <td scope="row"><?php echo $pertanyaan ?></td>
                                <td scope="row"><?php echo $hasilbaru1_rounded ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <p style="font-weight:bold;" class="mt-4"> Hasil Consistency: <?php echo $totalHasil2 ?> </p>
                    <hr>

                    <h5>Sub Indikator Tracebility</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">No.</th>
                                <th scope="col" style="width: 10%">Sub Indikator</th>
                                <th scope="col" style="width: 65%">Pertanyaan</th>
                                <th scope="col" style="width: 10%">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql2 = "SELECT * FROM pertanyaan 
                            WHERE id BETWEEN 18 AND 22";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil3 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $indikator = $r2['sub_indikator'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $pertanyaan = $r2['pertanyaan'];
                                $hasiljawaban = $r2['average'];
                                $hasilbaru1 = $hasiljawaban*$bobot_pertanyaan;
                                $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                                $totalHasil3 += $hasilbaru1_rounded;

                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $indikator ?></td>
                                <td scope="row"><?php echo $pertanyaan ?></td>
                                <td scope="row"><?php echo $hasilbaru1_rounded ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <p style="font-weight:bold;" class="mt-4"> Hasil Tracebility: <?php echo $totalHasil3 ?> </p>
                    <hr>

                    <?php
                    $ketemu = ($totalHasil1 + $totalHasil2 + $totalHasil3) / 3;
                    $hasilketemu = min($ketemu, 5);
                    $hasilketemu = number_format($hasilketemu, 2);
                    $nilaidapat = ($hasilketemu / 5) * 100;
                    $roundedHasilnya = round($nilaidapat);

                    if ($roundedHasilnya >= 81 && $roundedHasilnya <= 100) {
                        $k_corec = "Sangat Baik";
                        $progressColor = "#5bc0de"; // Blue
                    } elseif ($roundedHasilnya >= 61 && $roundedHasilnya <= 80) {
                        $k_corec = "Baik";
                        $progressColor = "#28a745"; // Green
                    } elseif ($roundedHasilnya >= 41 && $roundedHasilnya <= 60) {
                        $k_corec = "Cukup Baik";
                        $progressColor = "#ffc107"; // Yellow
                    } elseif ($roundedHasilnya >= 21 && $roundedHasilnya <= 40) {
                        $k_corec = "Tidak Baik";
                        $progressColor = "#fd7e14"; // Orange
                    } elseif ($roundedHasilnya >= 0 && $roundedHasilnya <= 20) {
                        $k_corec = "Sangat Tidak Baik";
                        $progressColor = "#dc3545"; // Red
                    } else {
                        $k_corec = "";
                        $progressColor = "";
                    }
                    ?>

                    <!-- Correctness Value -->
                    <div class="text-center mt-4">
                        <p style="font-weight:bold;">Nilai Correctness: <?php echo $hasilketemu ?></p>
                    </div>

                    <!-- Correctness Information -->
                    <div class="text-center mt-4">
                        <p style="font-weight:bold;"><?php echo $k_corec ?></p>
                    </div>

                    <!-- Enhanced Progress bar -->
                    <div class="progress" style="height: 25px; border-radius: 50px; overflow: hidden; box-shadow: 0 0 10px rgba(209, 219, 231, 0.7);">
                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: <?php echo $roundedHasilnya; ?>%; border-radius: 50px; position: relative; background-color: <?php echo $progressColor; ?>;">
                            <div class="progress-value" style="position: absolute; right: 5%; top: 12px; font-size: 14px; font-weight: bold; color: #fff; letter-spacing: 2px; white-space: nowrap;">
                                <?php echo $roundedHasilnya; ?>%
                            </div>
                        </div>
                    </div>

                    <hr>


                <h3>Reliability</h3>
                <h5>Sub Indikator Error tolerance</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">No.</th>
                                <th scope="col" style="width: 10%">Sub Indikator</th>
                                <th scope="col" style="width: 65%">Pertanyaan</th>
                                <th scope="col" style="width: 10%">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql2 = "SELECT * FROM pertanyaan 
                            WHERE id BETWEEN 23 AND 27";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil4 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $indikator = $r2['sub_indikator'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $pertanyaan = $r2['pertanyaan'];
                                $hasiljawaban = $r2['average'];
                                $hasilbaru1 = $hasiljawaban*$bobot_pertanyaan;
                                $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                                $totalHasil4 += $hasilbaru1_rounded;

                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $indikator ?></td>
                                <td scope="row"><?php echo $pertanyaan ?></td>
                                <td scope="row"><?php echo $hasilbaru1_rounded ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <p style="font-weight:bold;" class="mt-4"> Hasil Error tolerance: <?php echo $totalHasil4 ?> </p>
                    <hr>
                    
                    <h5>Sub Indikator Accuracy</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">No.</th>
                                <th scope="col" style="width: 10%">Sub Indikator</th>
                                <th scope="col" style="width: 65%">Pertanyaan</th>
                                <th scope="col" style="width: 10%">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql2 = "SELECT * FROM pertanyaan 
                            WHERE id BETWEEN 28 AND 32";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil5 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $indikator = $r2['sub_indikator'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $pertanyaan = $r2['pertanyaan'];
                                $hasiljawaban = $r2['average'];
                                $hasilbaru1 = $hasiljawaban*$bobot_pertanyaan;
                                $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                                $totalHasil5 += $hasilbaru1_rounded;

                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $indikator ?></td>
                                <td scope="row"><?php echo $pertanyaan ?></td>
                                <td scope="row"><?php echo $hasilbaru1_rounded ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <p style="font-weight:bold;" class="mt-4"> Hasil Accuracy: <?php echo $totalHasil5 ?> </p>
                    <hr>
                    
                    <h5>Sub Indikator Simplicity</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">No.</th>
                                <th scope="col" style="width: 10%">Sub Indikator</th>
                                <th scope="col" style="width: 65%">Pertanyaan</th>
                                <th scope="col" style="width: 10%">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql2 = "SELECT * FROM pertanyaan 
                            WHERE id BETWEEN 33 AND 36";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil6 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $indikator = $r2['sub_indikator'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $pertanyaan = $r2['pertanyaan'];
                                $hasiljawaban = $r2['average'];
                                $hasilbaru1 = $hasiljawaban*$bobot_pertanyaan;
                                $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                                $totalHasil6 += $hasilbaru1_rounded;

                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $indikator ?></td>
                                <td scope="row"><?php echo $pertanyaan ?></td>
                                <td scope="row"><?php echo $hasilbaru1_rounded ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <p style="font-weight:bold;" class="mt-4"> Hasil Simplicity: <?php echo $totalHasil6 ?> </p>
                    <hr>

                    <?php
                        $ketemu = ($totalHasil4 + $totalHasil5 + $totalHasil6) / 3;
                        $hasilketemu2 = min($ketemu, 5);
                        $hasilketemu2 = number_format($hasilketemu2, 2);
                        $nilaidapat = ($hasilketemu2 / 5) * 100;
                        $roundedHasilnya = round($nilaidapat);

                        if ($roundedHasilnya >= 81 && $roundedHasilnya <= 100) {
                            $k_corec = "Sangat Baik";
                            $progressColor = "#5bc0de"; // Blue
                        } elseif ($roundedHasilnya >= 61 && $roundedHasilnya <= 80) {
                            $k_corec = "Baik";
                            $progressColor = "#28a745"; // Green
                        } elseif ($roundedHasilnya >= 41 && $roundedHasilnya <= 60) {
                            $k_corec = "Cukup Baik";
                            $progressColor = "#ffc107"; // Yellow
                        } elseif ($roundedHasilnya >= 21 && $roundedHasilnya <= 40) {
                            $k_corec = "Tidak Baik";
                            $progressColor = "#fd7e14"; // Orange
                        } elseif ($roundedHasilnya >= 0 && $roundedHasilnya <= 20) {
                            $k_corec = "Sangat Tidak Baik";
                            $progressColor = "#dc3545"; // Red
                        } else {
                            $k_corec = "";
                            $progressColor = "";
                        }

                        // echo "Presentase Correctness: $roundedHasilnya\n";
                        // echo "\n"; 
                        // echo "Kategori Kelayakan: $k_corec\n";
                        
                    ?>
                    <!-- Correctness Value -->
                    <div class="text-center mt-4">
                        <p style="font-weight:bold;">Nilai Reliability: <?php echo $hasilketemu2 ?> </p>
                    </div>

                    <!-- Correctness Information -->
                    <div class="text-center mt-4">
                        <p style="font-weight:bold;"><?php echo $k_corec ?></p>
                    </div>

                    <!-- Enhanced Progress bar -->
                    <div class="progress" style="height: 25px; border-radius: 50px; overflow: hidden; box-shadow: 0 0 10px rgba(209, 219, 231, 0.7);">
                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: <?php echo $roundedHasilnya; ?>%; border-radius: 50px; position: relative; background-color: <?php echo $progressColor; ?>;">
                            <div class="progress-value" style="position: absolute; right: 5%; top: 12px; font-size: 14px; font-weight: bold; color: #fff; letter-spacing: 2px; white-space: nowrap;">
                                <?php echo $roundedHasilnya; ?>%
                            </div>
                        </div>
                    </div>
                    <hr>

                <h3>Efficiency</h3>
                <h5>Sub Indikator Conciseness</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">No.</th>
                                <th scope="col" style="width: 10%">Sub Indikator</th>
                                <th scope="col" style="width: 65%">Pertanyaan</th>
                                <th scope="col" style="width: 10%">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql2 = "SELECT * FROM pertanyaan 
                            WHERE id BETWEEN 37 AND 41";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil7 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $indikator = $r2['sub_indikator'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $pertanyaan = $r2['pertanyaan'];
                                $hasiljawaban = $r2['average'];
                                $hasilbaru1 = $hasiljawaban*$bobot_pertanyaan;
                                $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                                $totalHasil7 += $hasilbaru1_rounded;
                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $indikator ?></td>
                                <td scope="row"><?php echo $pertanyaan ?></td>
                                <td scope="row"><?php echo $hasilbaru1_rounded ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <p style="font-weight:bold;" class="mt-4"> Hasil Conciseness: <?php echo $totalHasil7 ?> </p>
                    <hr>
                    
                    <h5>Sub Indikator Exection Efficiency</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">No.</th>
                                <th scope="col" style="width: 10%">Sub Indikator</th>
                                <th scope="col" style="width: 65%">Pertanyaan</th>
                                <th scope="col" style="width: 10%">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql2 = "SELECT * FROM pertanyaan 
                            WHERE id BETWEEN 42 AND 46";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil8 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $indikator = $r2['sub_indikator'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $pertanyaan = $r2['pertanyaan'];
                                $hasiljawaban = $r2['average'];
                                $hasilbaru1 = $hasiljawaban*$bobot_pertanyaan;
                                $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                                $totalHasil8 += $hasilbaru1_rounded;
                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $indikator ?></td>
                                <td scope="row"><?php echo $pertanyaan ?></td>
                                <td scope="row"><?php echo $hasilbaru1_rounded ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <p style="font-weight:bold;" class="mt-4"> Hasil Exection Efficiency: <?php echo $totalHasil8 ?> </p>
                    <hr>

                    <?php
                    $ketemu = ($totalHasil7 + $totalHasil8) / 2;
                    $hasilketemu3 = min($ketemu, 5);
                    $hasilketemu3 = number_format($hasilketemu3, 2);
                    $nilaidapat = ($hasilketemu3 / 5) * 100;
                    $roundedHasilnya = round($nilaidapat);

                    if ($roundedHasilnya >= 81 && $roundedHasilnya <= 100) {
                        $k_corec = "Sangat Baik";
                        $progressColor = "#5bc0de"; // Blue
                    } elseif ($roundedHasilnya >= 61 && $roundedHasilnya <= 80) {
                        $k_corec = "Baik";
                        $progressColor = "#28a745"; // Green
                    } elseif ($roundedHasilnya >= 41 && $roundedHasilnya <= 60) {
                        $k_corec = "Cukup Baik";
                        $progressColor = "#ffc107"; // Yellow
                    } elseif ($roundedHasilnya >= 21 && $roundedHasilnya <= 40) {
                        $k_corec = "Tidak Baik";
                        $progressColor = "#fd7e14"; // Orange
                    } elseif ($roundedHasilnya >= 0 && $roundedHasilnya <= 20) {
                        $k_corec = "Sangat Tidak Baik";
                        $progressColor = "#dc3545"; // Red
                    } else {
                        $k_corec = "";
                        $progressColor = "";
                    }
                    ?>

                    <!-- Correctness Value -->
                    <div class="text-center mt-4">
                        <p style="font-weight:bold;">Nilai Efficiency: <?php echo $hasilketemu3 ?> </p>
                    </div>

                    <!-- Correctness Information -->
                    <div class="text-center mt-4">
                        <p style="font-weight:bold;"><?php echo $k_corec ?></p>
                    </div>

                    <!-- Enhanced Progress bar -->
                    <div class="progress" style="height: 25px; border-radius: 50px; overflow: hidden; box-shadow: 0 0 10px rgba(209, 219, 231, 0.7);">
                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: <?php echo $roundedHasilnya; ?>%; border-radius: 50px; position: relative; background-color: <?php echo $progressColor; ?>;">
                            <div class="progress-value" style="position: absolute; right: 5%; top: 12px; font-size: 14px; font-weight: bold; color: #fff; letter-spacing: 2px; white-space: nowrap;">
                                <?php echo $roundedHasilnya; ?>%
                            </div>
                        </div>
                    </div>
                    <hr>

                    <h3>Integrity</h3>
                    <h5>Sub Indikator Security</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">No.</th>
                                <th scope="col" style="width: 10%">Sub Indikator</th>
                                <th scope="col" style="width: 65%">Pertanyaan</th>
                                <th scope="col" style="width: 10%">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql2 = "SELECT * FROM pertanyaan 
                            WHERE id BETWEEN 47 AND 50";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil9 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $indikator = $r2['sub_indikator'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $pertanyaan = $r2['pertanyaan'];
                                $hasiljawaban = $r2['average'];
                                $hasilbaru1 = $hasiljawaban*$bobot_pertanyaan;
                                $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                                $totalHasil9 += $hasilbaru1_rounded;
                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $indikator ?></td>
                                <td scope="row"><?php echo $pertanyaan ?></td>
                                <td scope="row"><?php echo $hasilbaru1_rounded ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <p style="font-weight:bold;" class="mt-4"> Hasil Security: <?php echo $totalHasil9 ?> </p>
                    <hr>

                    <?php
                        $ketemu = ($totalHasil9) / 1;
                        $hasilketemu4 = min($ketemu, 5);
                        $hasilketemu4 = number_format($hasilketemu4, 2);
                        $nilaidapat = ($hasilketemu4 / 5) * 100;
                        $roundedHasilnya = round($nilaidapat);

                        if ($roundedHasilnya >= 81 && $roundedHasilnya <= 100) {
                            $k_corec = "Sangat Baik";
                            $progressColor = "#5bc0de"; // Blue
                        } elseif ($roundedHasilnya >= 61 && $roundedHasilnya <= 80) {
                            $k_corec = "Baik";
                            $progressColor = "#28a745"; // Green
                        } elseif ($roundedHasilnya >= 41 && $roundedHasilnya <= 60) {
                            $k_corec = "Cukup Baik";
                            $progressColor = "#ffc107"; // Yellow
                        } elseif ($roundedHasilnya >= 21 && $roundedHasilnya <= 40) {
                            $k_corec = "Tidak Baik";
                            $progressColor = "#fd7e14"; // Orange
                        } elseif ($roundedHasilnya >= 0 && $roundedHasilnya <= 20) {
                            $k_corec = "Sangat Tidak Baik";
                            $progressColor = "#dc3545"; // Red
                        } else {
                            $k_corec = "";
                            $progressColor = "";
                        }

                        // echo "Presentase Correctness: $roundedHasilnya\n";
                        // echo "\n"; 
                        // echo "Kategori Kelayakan: $k_corec\n";
                        
                    ?>
                    <!-- Correctness Value -->
                    <div class="text-center mt-4">
                        <p style="font-weight:bold;">Nilai Integrity: <?php echo $hasilketemu4 ?> </p>
                    </div>

                    <!-- Correctness Information -->
                    <div class="text-center mt-4">
                        <p style="font-weight:bold;"><?php echo $k_corec ?></p>
                    </div>

                    <!-- Enhanced Progress bar -->
                    <div class="progress" style="height: 25px; border-radius: 50px; overflow: hidden; box-shadow: 0 0 10px rgba(209, 219, 231, 0.7);">
                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: <?php echo $roundedHasilnya; ?>%; border-radius: 50px; position: relative; background-color: <?php echo $progressColor; ?>;">
                            <div class="progress-value" style="position: absolute; right: 5%; top: 12px; font-size: 14px; font-weight: bold; color: #fff; letter-spacing: 2px; white-space: nowrap;">
                                <?php echo $roundedHasilnya; ?>%
                            </div>
                        </div>
                    </div>
                    <hr>

                    <h3>Usability</h3>
                    <h5>Sub Indikator Operability</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">No.</th>
                                <th scope="col" style="width: 10%">Sub Indikator</th>
                                <th scope="col" style="width: 65%">Pertanyaan</th>
                                <th scope="col" style="width: 10%">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql2 = "SELECT * FROM pertanyaan 
                            WHERE id BETWEEN 51 AND 54";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil10 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $indikator = $r2['sub_indikator'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $pertanyaan = $r2['pertanyaan'];
                                $hasiljawaban = $r2['average'];
                                $hasilbaru1 = $hasiljawaban*$bobot_pertanyaan;
                                $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                                $totalHasil10 += $hasilbaru1_rounded;
                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $indikator ?></td>
                                <td scope="row"><?php echo $pertanyaan ?></td>
                                <td scope="row"><?php echo $hasilbaru1_rounded ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <p style="font-weight:bold;" class="mt-4"> Hasil Operability: <?php echo $totalHasil10 ?> </p>
                    <hr>

                    <h5>Sub Indikator Training</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">No.</th>
                                <th scope="col" style="width: 10%">Sub Indikator</th>
                                <th scope="col" style="width: 65%">Pertanyaan</th>
                                <th scope="col" style="width: 10%">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql2 = "SELECT * FROM pertanyaan 
                            WHERE id BETWEEN 55 AND 62";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil11 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $indikator = $r2['sub_indikator'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $pertanyaan = $r2['pertanyaan'];
                                $hasiljawaban = $r2['average'];
                                $hasilbaru1 = $hasiljawaban*$bobot_pertanyaan;
                                $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                                $totalHasil11 += $hasilbaru1_rounded;
                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $indikator ?></td>
                                <td scope="row"><?php echo $pertanyaan ?></td>
                                <td scope="row"><?php echo $hasilbaru1_rounded ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <p style="font-weight:bold;" class="mt-4"> Hasil Training: <?php echo $totalHasil11 ?> </p>
                    <hr>

                    <h5>Sub Indikator Communicativeness</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">No.</th>
                                <th scope="col" style="width: 10%">Sub Indikator</th>
                                <th scope="col" style="width: 65%">Pertanyaan</th>
                                <th scope="col" style="width: 10%">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql2 = "SELECT * FROM pertanyaan 
                            WHERE id BETWEEN 63 AND 69";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil12 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $indikator = $r2['sub_indikator'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $pertanyaan = $r2['pertanyaan'];
                                $hasiljawaban = $r2['average'];
                                $hasilbaru1 = $hasiljawaban*$bobot_pertanyaan;
                                $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                                $totalHasil12 += $hasilbaru1_rounded;
                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $indikator ?></td>
                                <td scope="row"><?php echo $pertanyaan ?></td>
                                <td scope="row"><?php echo $hasilbaru1_rounded ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <p style="font-weight:bold;" class="mt-4"> Hasil Communicativeness: <?php echo $totalHasil12 ?> </p>
                    <hr>

                    <?php
                        $ketemu = ($totalHasil10 + $totalHasil11 + $totalHasil12) / 3;
                        $hasilketemu5 = min($ketemu, 5);
                        $hasilketemu5 = number_format($hasilketemu5, 2);
                        $nilaidapat = ($hasilketemu5 / 5) * 100;
                        $roundedHasilnya = round($nilaidapat);

                        if ($roundedHasilnya >= 81 && $roundedHasilnya <= 100) {
                            $k_corec = "Sangat Baik";
                            $progressColor = "#5bc0de"; // Blue
                        } elseif ($roundedHasilnya >= 61 && $roundedHasilnya <= 80) {
                            $k_corec = "Baik";
                            $progressColor = "#28a745"; // Green
                        } elseif ($roundedHasilnya >= 41 && $roundedHasilnya <= 60) {
                            $k_corec = "Cukup Baik";
                            $progressColor = "#ffc107"; // Yellow
                        } elseif ($roundedHasilnya >= 21 && $roundedHasilnya <= 40) {
                            $k_corec = "Tidak Baik";
                            $progressColor = "#fd7e14"; // Orange
                        } elseif ($roundedHasilnya >= 0 && $roundedHasilnya <= 20) {
                            $k_corec = "Sangat Tidak Baik";
                            $progressColor = "#dc3545"; // Red
                        } else {
                            $k_corec = "";
                            $progressColor = "";
                        }
                        
                    ?>
                    <!-- Correctness Value -->
                    <div class="text-center mt-4">
                        <p style="font-weight:bold;">Nilai Usability: <?php echo $hasilketemu5 ?> </p>
                    </div>

                    <!-- Correctness Information -->
                    <div class="text-center mt-4">
                        <p style="font-weight:bold;"><?php echo $k_corec ?></p>
                    </div>

                    <!-- Enhanced Progress bar -->
                    <div class="progress" style="height: 25px; border-radius: 50px; overflow: hidden; box-shadow: 0 0 10px rgba(209, 219, 231, 0.7);">
                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: <?php echo $roundedHasilnya; ?>%; border-radius: 50px; position: relative; background-color: <?php echo $progressColor; ?>;">
                            <div class="progress-value" style="position: absolute; right: 5%; top: 12px; font-size: 14px; font-weight: bold; color: #fff; letter-spacing: 2px; white-space: nowrap;">
                                <?php echo $roundedHasilnya; ?>%
                            </div>
                        </div>
                    </div>
                    <hr>


                    <?php 
                    
                        $hasilakhir = ((($hasilketemu) * 0.4) + (($hasilketemu2) * 0.3) + (($hasilketemu3) * 0.2) + (($hasilketemu4) * 0.1) + (($hasilketemu5) * 0.3) );
                        $hasilakhir = round($hasilakhir,2);
                        $hasilakhir2 = ($hasilakhir/5) * 100;
                        $hasilakhir2 = round($hasilakhir2);
                    ?>

                    <?php
                    $hasilstatus = "";
                    if ($hasilakhir2 >= 81 && $hasilakhir2 <= 100) {
                        $hasilstatus = "Sangat Baik";
                        $progressColor = "#5bc0de"; // Blue
                    } elseif ($hasilakhir2 >= 61 && $hasilakhir2 <= 80) {
                        $hasilstatus = "Baik";
                        $progressColor = "#28a745"; // Green
                    } elseif ($hasilakhir2 >= 41 && $hasilakhir2 <= 60) {
                        $hasilstatus = "Cukup Baik";
                        $progressColor = "#ffc107"; // Yellow
                    } elseif ($hasilakhir2 >= 21 && $hasilakhir2 <= 40) {
                        $hasilstatus = "Tidak Baik";
                        $progressColor = "#fd7e14"; // Orange
                    } elseif ($hasilakhir2 >= 0 && $hasilakhir2 <= 20) {
                        $hasilstatus = "Sangat Tidak Baik";
                        $progressColor = "#dc3545"; // Red
                    } else {
                        $hasilstatus = "";
                        $progressColor = "";
                    }
                    
                ?>
                
                    <!-- Value -->
                    <div class="text-center mt-4">
                        <p style="font-weight:bold;">Hasil Akhir: <?php echo $hasilakhir; ?> </p>
                    </div>

                    <!-- Information -->
                    <div class="text-center mt-4">
                        <p style="font-weight:bold;"><?php echo $hasilstatus; ?></p>
                    </div>

                    <!-- Enhanced Progress bar -->
                    <div class="progress" style="height: 25px; border-radius: 50px; overflow: hidden; box-shadow: 0 0 10px rgba(209, 219, 231, 0.7);">
                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: <?php echo $hasilakhir2; ?>%; border-radius: 50px; position: relative; background-color: <?php echo $progressColor; ?>;">
                            <div class="progress-value" style="position: absolute; right: 5%; top: 12px; font-size: 14px; font-weight: bold; color: #fff; letter-spacing: 2px; white-space: nowrap;">
                                <?php echo $hasilakhir2; ?>%
                            </div>
                        </div>
                    </div>
                    <br>
                    <p>Dari perhitungan diatas didapatkan nilai <?php echo $hasilakhir; ?>, dengan presentase <?php echo $hasilakhir2; ?>% yang artinya Genshin Impact kategori yang <?php echo $hasilstatus; ?> </p>
                    <hr>
                    <a href="printhalaman.php" target="_blank" class="cetak-link">Cetak</a>
                            </div>
                        </div>
                    </div>
                </body>