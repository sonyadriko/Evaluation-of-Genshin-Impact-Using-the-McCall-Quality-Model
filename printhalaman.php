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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
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
                <table class="table">
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
                            $hasilbaru1 = $hasiljawaban * $bobot_pertanyaan;
                            $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                            $totalHasil1 += $hasilbaru1_rounded;
                        }
                        ?>
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
                            $hasilbaru1 = $hasiljawaban * $bobot_pertanyaan;
                            $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                            $totalHasil2 += $hasilbaru1_rounded;
                        }
                        ?>
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
                            $hasilbaru1 = $hasiljawaban * $bobot_pertanyaan;
                            $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                            $totalHasil3 += $hasilbaru1_rounded;
                        }
                        ?>
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
                            $hasilbaru1 = $hasiljawaban * $bobot_pertanyaan;
                            $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                            $totalHasil4 += $hasilbaru1_rounded;
                        }
                        ?>

                        <?php
                        $sql2 = "SELECT * FROM pertanyaan WHERE id BETWEEN 28 AND 32";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        $totalHasil5 = 0;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $indikator = $r2['sub_indikator'];
                            $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                            $pertanyaan = $r2['pertanyaan'];
                            $hasiljawaban = $r2['average'];
                            $hasilbaru1 = $hasiljawaban * $bobot_pertanyaan;
                            $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                            $totalHasil5 += $hasilbaru1_rounded;
                        }
                        ?>

                        <?php
                        $sql2 = "SELECT * FROM pertanyaan WHERE id BETWEEN 33 AND 36";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        $totalHasil6 = 0;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $indikator = $r2['sub_indikator'];
                            $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                            $pertanyaan = $r2['pertanyaan'];
                            $hasiljawaban = $r2['average'];
                            $hasilbaru1 = $hasiljawaban * $bobot_pertanyaan;
                            $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                            $totalHasil6 += $hasilbaru1_rounded;
                        }
                        ?>
                        <?php
                        $ketemu = ($totalHasil4 + $totalHasil5 + $totalHasil6) / 3;
                        $hasilketemu2 = min($ketemu, 5);
                        $hasilketemu2 = number_format($hasilketemu2, 2);
                        $nilaidapat = ($hasilketemu2 / 5) * 100;
                        $roundedHasilnya2 = round($nilaidapat);

                        if ($roundedHasilnya2 >= 81 && $roundedHasilnya2 <= 100) {
                            $k_corec2 = "Sangat Baik";
                            $progressColor = "#5bc0de"; // Blue
                        } elseif ($roundedHasilnya2 >= 61 && $roundedHasilnya2 <= 80) {
                            $k_corec2 = "Baik";
                            $progressColor = "#28a745"; // Green
                        } elseif ($roundedHasilnya2 >= 41 && $roundedHasilnya2 <= 60) {
                            $k_corec2 = "Cukup Baik";
                            $progressColor = "#ffc107"; // Yellow
                        } elseif ($roundedHasilnya2 >= 21 && $roundedHasilnya2 <= 40) {
                            $k_corec2 = "Tidak Baik";
                            $progressColor = "#fd7e14"; // Orange
                        } elseif ($roundedHasilnya2 >= 0 && $roundedHasilnya2 <= 20) {
                            $k_corec = "Sangat Tidak Baik";
                            $progressColor = "#dc3545"; // Red
                        } else {
                            $k_corec2 = "";
                            $progressColor = "";
                        }

                        // echo "Presentase Correctness: $roundedHasilnya\n";
                        // echo "\n"; 
                        // echo "Kategori Kelayakan: $k_corec\n";

                        ?>


                        <?php
                        $sql2 = "SELECT * FROM pertanyaan WHERE id BETWEEN 37 AND 41";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        $totalHasil7 = 0;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $indikator = $r2['sub_indikator'];
                            $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                            $pertanyaan = $r2['pertanyaan'];
                            $hasiljawaban = $r2['average'];
                            $hasilbaru1 = $hasiljawaban * $bobot_pertanyaan;
                            $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                            $totalHasil7 += $hasilbaru1_rounded;
                        }
                        ?>

                        <?php
                        $sql2 = "SELECT * FROM pertanyaan WHERE id BETWEEN 42 AND 46";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        $totalHasil8 = 0;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $indikator = $r2['sub_indikator'];
                            $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                            $pertanyaan = $r2['pertanyaan'];
                            $hasiljawaban = $r2['average'];
                            $hasilbaru1 = $hasiljawaban * $bobot_pertanyaan;
                            $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                            $totalHasil8 += $hasilbaru1_rounded;
                        }
                        ?>


                        <?php
                        $ketemu = ($totalHasil7 + $totalHasil8) / 2;
                        $hasilketemu3 = min($ketemu, 5);
                        $hasilketemu3 = number_format($hasilketemu3, 2);
                        $nilaidapat = ($hasilketemu3 / 5) * 100;
                        $roundedHasilnya3 = round($nilaidapat);

                        if ($roundedHasilnya3 >= 81 && $roundedHasilnya3 <= 100) {
                            $k_corec3 = "Sangat Baik";
                            $progressColor = "#5bc0de"; // Blue
                        } elseif ($roundedHasilnya3 >= 61 && $roundedHasilnya3 <= 80) {
                            $k_corec3 = "Baik";
                            $progressColor = "#28a745"; // Green
                        } elseif ($roundedHasilnya3 >= 41 && $roundedHasilnya3 <= 60) {
                            $k_corec3 = "Cukup Baik";
                            $progressColor = "#ffc107"; // Yellow
                        } elseif ($roundedHasilnya3 >= 21 && $roundedHasilnya3 <= 40) {
                            $k_corec3 = "Tidak Baik";
                            $progressColor = "#fd7e14"; // Orange
                        } elseif ($roundedHasilnya3 >= 0 && $roundedHasilnya3 <= 20) {
                            $k_corec3 = "Sangat Tidak Baik";
                            $progressColor = "#dc3545"; // Red
                        } else {
                            $k_corec3 = "";
                            $progressColor = "";
                        }
                        ?>

                        <?php
                        $sql2 = "SELECT * FROM pertanyaan WHERE id BETWEEN 47 AND 50";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        $totalHasil9 = 0;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $indikator = $r2['sub_indikator'];
                            $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                            $pertanyaan = $r2['pertanyaan'];
                            $hasiljawaban = $r2['average'];
                            $hasilbaru1 = $hasiljawaban * $bobot_pertanyaan;
                            $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                            $totalHasil9 += $hasilbaru1_rounded;
                        }
                        ?>

                        <?php
                        $ketemu = ($totalHasil9) / 1;
                        $hasilketemu4 = min($ketemu, 5);
                        $hasilketemu4 = number_format($hasilketemu4, 2);
                        $nilaidapat = ($hasilketemu4 / 5) * 100;
                        $roundedHasilnya4 = round($nilaidapat);

                        if ($roundedHasilnya4 >= 81 && $roundedHasilnya4 <= 100) {
                            $k_corec4 = "Sangat Baik";
                            $progressColor = "#5bc0de"; // Blue
                        } elseif ($roundedHasilnya4 >= 61 && $roundedHasilnya4 <= 80) {
                            $k_corec4 = "Baik";
                            $progressColor = "#28a745"; // Green
                        } elseif ($roundedHasilnya4 >= 41 && $roundedHasilnya4 <= 60) {
                            $k_corec4 = "Cukup Baik";
                            $progressColor = "#ffc107"; // Yellow
                        } elseif ($roundedHasilnya4 >= 21 && $roundedHasilnya4 <= 40) {
                            $k_corec4 = "Tidak Baik";
                            $progressColor = "#fd7e14"; // Orange
                        } elseif ($roundedHasilnya4 >= 0 && $roundedHasilnya4 <= 20) {
                            $k_corec4 = "Sangat Tidak Baik";
                            $progressColor = "#dc3545"; // Red
                        } else {
                            $k_corec4 = "";
                            $progressColor = "";
                        }

                        // echo "Presentase Correctness: $roundedHasilnya\n";
                        // echo "\n"; 
                        // echo "Kategori Kelayakan: $k_corec\n";

                        ?>

                        <?php
                        $sql2 = "SELECT * FROM pertanyaan WHERE id BETWEEN 51 AND 54";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        $totalHasil10 = 0;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $indikator = $r2['sub_indikator'];
                            $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                            $pertanyaan = $r2['pertanyaan'];
                            $hasiljawaban = $r2['average'];
                            $hasilbaru1 = $hasiljawaban * $bobot_pertanyaan;
                            $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                            $totalHasil10 += $hasilbaru1_rounded;
                        }
                        ?>

                        <?php
                        $sql2 = "SELECT * FROM pertanyaan WHERE id BETWEEN 55 AND 62";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        $totalHasil11 = 0;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $indikator = $r2['sub_indikator'];
                            $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                            $pertanyaan = $r2['pertanyaan'];
                            $hasiljawaban = $r2['average'];
                            $hasilbaru1 = $hasiljawaban * $bobot_pertanyaan;
                            $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                            $totalHasil11 += $hasilbaru1_rounded;
                        }
                        ?>

                        <?php
                        $sql2 = "SELECT * FROM pertanyaan WHERE id BETWEEN 63 AND 69";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        $totalHasil12 = 0;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $indikator = $r2['sub_indikator'];
                            $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                            $pertanyaan = $r2['pertanyaan'];
                            $hasiljawaban = $r2['average'];
                            $hasilbaru1 = $hasiljawaban * $bobot_pertanyaan;
                            $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                            $totalHasil12 += $hasilbaru1_rounded;
                        }
                        ?>

                        <?php
                        $ketemu = ($totalHasil10 + $totalHasil11 + $totalHasil12) / 3;
                        $hasilketemu5 = min($ketemu, 5);
                        $hasilketemu5 = number_format($hasilketemu5, 2);
                        $nilaidapat = ($hasilketemu5 / 5) * 100;
                        $roundedHasilnya5 = round($nilaidapat);

                        if ($roundedHasilnya5 >= 81 && $roundedHasilnya5 <= 100) {
                            $k_corec5 = "Sangat Baik";
                            $progressColor = "#5bc0de"; // Blue
                        } elseif ($roundedHasilnya5 >= 61 && $roundedHasilnya5 <= 80) {
                            $k_corec5 = "Baik";
                            $progressColor = "#28a745"; // Green
                        } elseif ($roundedHasilnya5 >= 41 && $roundedHasilnya5 <= 60) {
                            $k_corec5 = "Cukup Baik";
                            $progressColor = "#ffc107"; // Yellow
                        } elseif ($roundedHasilnya5 >= 21 && $roundedHasilnya5 <= 40) {
                            $k_corec5 = "Tidak Baik";
                            $progressColor = "#fd7e14"; // Orange
                        } elseif ($roundedHasilnya5 >= 0 && $roundedHasilnya5 <= 20) {
                            $k_corec5 = "Sangat Tidak Baik";
                            $progressColor = "#dc3545"; // Red
                        } else {
                            $k_corec5 = "";
                            $progressColor = "";
                        }

                        ?>

                        <?php

                        $hasilakhir = ((($hasilketemu) * 0.4) + (($hasilketemu2) * 0.3) + (($hasilketemu3) * 0.2) + (($hasilketemu4) * 0.1) + (($hasilketemu5) * 0.3));
                        $hasilakhir = round($hasilakhir, 2);
                        $hasilakhir2 = ($hasilakhir / 5) * 100;
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 10%">Indikator</th>
                                    <th scope="col" style="width: 15%">Hasil</th>
                                    <th scope="col" style="width: 20%">Presentase</th>
                                    <th scope="col" style="width: 25%">Kategori Kelayakan</th>
                                </tr>
                            </thead>
                            <tr>
                                <td scope="row">Correctness</td>
                                <td scope="row"><?php echo $hasilketemu ?></td>
                                <td scope="row"><?php echo $roundedHasilnya; ?>%</td>
                                <td scope="row"><?php echo $k_corec ?></td>
                            </tr>
                            <tr>
                                <td scope="row">Reliability</td>
                                <td scope="row"><?php echo $hasilketemu2 ?></td>
                                <td scope="row"><?php echo $roundedHasilnya2; ?>%</td>
                                <td scope="row"><?php echo $k_corec2 ?></td>
                            </tr>
                            <tr>
                                <td scope="row">Efficiency</td>
                                <td scope="row"><?php echo $hasilketemu3 ?></td>
                                <td scope="row"><?php echo $roundedHasilnya3; ?>%</td>
                                <td scope="row"><?php echo $k_corec3 ?></td>
                            </tr>
                            <tr>
                                <td scope="row">Integrity</td>
                                <td scope="row"><?php echo $hasilketemu4 ?></td>
                                <td scope="row"><?php echo $roundedHasilnya4; ?>%</td>
                                <td scope="row"><?php echo $k_corec4 ?></td>
                            </tr>
                            <tr>
                                <td scope="row">Usability</td>
                                <td scope="row"><?php echo $hasilketemu5 ?></td>
                                <td scope="row"><?php echo $roundedHasilnya5; ?>%</td>
                                <td scope="row"><?php echo $k_corec5 ?></td>
                            </tr>
                            <tfoot>
                                <tr>
                                    <td scope="row"><b>Hasil Akhir</b></td>
                                    <td scope="row"><b><?php echo $hasilakhir; ?></b></td>
                                    <td scope="row"><b><?php echo $hasilakhir2; ?>%</b></td>
                                    <td scope="row"><b><?php echo $hasilstatus; ?></b></td>
                                </tr>
                            </tfoot>
                        </table>
                        <br>
                        <p>Dari perhitungan diatas didapatkan nilai <?php echo $hasilakhir; ?>, dengan presentase <?php echo $hasilakhir2; ?>% yang artinya Genshin Impact kategori yang <?php echo $hasilstatus; ?> </p>
                        <hr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
    window.print();
</script>