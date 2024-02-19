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
$id_sesi = $_GET['GetID'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Hasil</title>
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
                Detail Hasil Hitung
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
                            $sql2 = "SELECT * FROM hasil_form 
                            JOIN pertanyaan ON hasil_form.id_pertanyaan = pertanyaan.id 
                            WHERE hasil_form.id_pertanyaan BETWEEN 0 AND 11 AND hasil_form.id_sesi = $id_sesi";                   
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil1 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $id = $r2['id_sesi'];
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

            </div>
        </div>
    </div>
</body>