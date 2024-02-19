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
                  <!-- <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Indikator</th>
                                <th scope="col">Hasil</th>
                            </tr>
                        </thead>
                        <tbody> -->
                        <?php
                            $sql2 = "SELECT * FROM pertanyaan 
                            WHERE id BETWEEN 0 AND 11";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil1 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $indikator = $r2['sub_indikator'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $hasiljawaban = $r2['average'];
                                $hasilbaru1 = $hasiljawaban*$bobot_pertanyaan;
                                $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                                $totalHasil1 += $hasilbaru1_rounded;

                            ?>
                            <!-- <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $indikator ?></td>
                                <td scope="row"><?php echo $hasilbaru1_rounded ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table> -->
                    <p style="font-weight:bold;" class="mt-4"> Hasil Completeness: <?php echo $totalHasil1 ?> </p>


                    <!-- <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Indikator</th>
                                <th scope="col">Hasil</th>
                            </tr>
                        </thead>
                        <tbody> -->
                        <?php
                            $sql2 = "SELECT * FROM pertanyaan 
                            WHERE id BETWEEN 12 AND 17";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil2 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $indikator = $r2['sub_indikator'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $hasiljawaban = $r2['average'];
                                $hasilbaru1 = $hasiljawaban*$bobot_pertanyaan;
                                $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                                $totalHasil2 += $hasilbaru1_rounded;

                            ?>
                            <!-- <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $indikator ?></td>
                                <td scope="row"><?php echo $hasilbaru1_rounded ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table> -->
                    <p style="font-weight:bold;" class="mt-4"> Hasil Consistency: <?php echo $totalHasil2 ?> </p>


                    <!-- <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Indikator</th>
                                <th scope="col">Hasil</th>
                            </tr>
                        </thead>
                        <tbody> -->
                        <?php
                            $sql2 = "SELECT * FROM pertanyaan 
                            WHERE id BETWEEN 18 AND 22";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil3 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $indikator = $r2['sub_indikator'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $hasiljawaban = $r2['average'];
                                $hasilbaru1 = $hasiljawaban*$bobot_pertanyaan;
                                $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                                $totalHasil3 += $hasilbaru1_rounded;

                            ?>
                            <!-- <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $indikator ?></td>
                                <td scope="row"><?php echo $hasilbaru1_rounded ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table> -->
                    <p style="font-weight:bold;" class="mt-4"> Hasil Tracebility: <?php echo $totalHasil3 ?> </p>

                    <?php
                        $ketemu = ($totalHasil1 + $totalHasil2 + $totalHasil3) / 3;
                        $hasilketemu = min($ketemu, 5);
                        $hasilketemu = number_format($hasilketemu, 2);
                        $nilaidapat = ($hasilketemu / 5) * 100;
                        $roundedHasilnya = round($nilaidapat);

                        if ($roundedHasilnya >= 81 && $roundedHasilnya <= 100) {
                            $k_corec = "Sangat Baik";
                        } elseif ($roundedHasilnya >= 61 && $roundedHasilnya <= 80) {
                            $k_corec = "Baik";
                        } elseif ($roundedHasilnya >= 41 && $roundedHasilnya <= 60) {
                            $k_corec = "Cukup Baik";
                        } elseif ($roundedHasilnya >= 21 && $roundedHasilnya <= 40) {
                            $k_corec = "Tidak Baik";
                        } elseif ($roundedHasilnya >= 0 && $roundedHasilnya <= 20) {
                            $k_corec = "Sangat Tidak Baik";
                        } else {
                            $k_corec = "";
                        }
  
                    ?>
                    <p style="font-weight:bold;" class="mt-4"> Nilai Correctness: <?php echo $hasilketemu ?> </p>
                    <p style="font-weight:bold;" class="mt-4"> Presentase Correctness: <?php echo $roundedHasilnya ?>%</p>
                    <p style="font-weight:bold;" class="mt-4"> Kategori Kelayakan: <?php echo $k_corec ?></p>

                    <!-- <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Indikator</th>
                                <th scope="col">Hasil</th>
                            </tr>
                        </thead>
                        <tbody> -->
                        <?php
                            $sql2 = "SELECT * FROM pertanyaan 
                            WHERE id BETWEEN 23 AND 27";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil4 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $indikator = $r2['sub_indikator'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $hasiljawaban = $r2['average'];
                                $hasilbaru1 = $hasiljawaban*$bobot_pertanyaan;
                                $hasilbaru1_rounded = number_format($hasilbaru1, 2);
                                $totalHasil4 += $hasilbaru1_rounded;

                            ?>
                            <!-- <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $indikator ?></td>
                                <td scope="row"><?php echo $hasilbaru1_rounded ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table> -->
                    <p style="font-weight:bold;" class="mt-4"> Hasil Tracebility: <?php echo $totalHasil4 ?> </p>


            </div>
        </div>
    </div>
</body>