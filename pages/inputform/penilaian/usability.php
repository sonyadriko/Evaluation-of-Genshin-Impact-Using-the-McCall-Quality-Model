<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Penilaian Usability</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Bobot</title> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card border-success">
            <div class="card-header text-white bg-success">
                Hasil Usability
            </div>
            <div class="card-body">

            <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Indikator</th>
                                <th scope="col">Pertanyaan</th>
                                <th scope="col">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql2   = "select * from pertanyaan where sub_indikator = 'Communicativeness' order by id asc";
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil1 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $id                 = $r2['id'];
                                $id_pertanyaan      = $r2['id_pertanyaan'];
                                $sub_indikator      = $r2['sub_indikator'];
                                $pertanyaan         = $r2['pertanyaan'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $input = $r2['input'];

                                $hasilbaru1 = $input*$bobot_pertanyaan;
                                $totalHasil1 += $hasilbaru1;
                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <!-- <td scope="row"><?php echo $id_pertanyaan ?></td> -->
                                <td scope="row"><?php echo $sub_indikator ?></td>
                                <td scope="row"><?php echo $pertanyaan ?></td>
                                <td scope="row"><?php echo $hasilbaru1 ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <p style="font-weight:bold;" class="mt-4"> Hasil Communicativeness: <?php echo $totalHasil1 ?> </p>

                <hr>

                <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Indikator</th>
                                <th scope="col">Pertanyaan</th>
                                <th scope="col">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql2   = "select * from pertanyaan where sub_indikator = 'Operability' order by id asc";
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil2 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $id                 = $r2['id'];
                                $id_pertanyaan      = $r2['id_pertanyaan'];
                                $sub_indikator      = $r2['sub_indikator'];
                                $pertanyaan         = $r2['pertanyaan'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $input = $r2['input'];

                                $hasilbaru2 = $input*$bobot_pertanyaan;
                                $totalHasil2 += $hasilbaru2;
                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <!-- <td scope="row"><?php echo $id_pertanyaan ?></td> -->
                                <td scope="row"><?php echo $sub_indikator ?></td>
                                <td scope="row"><?php echo $pertanyaan ?></td>
                                <td scope="row"><?php echo $hasilbaru2 ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                        
                    <p style="font-weight:bold;" class="mt-4"> Hasil Operability: <?php echo $totalHasil2 ?> </p>

                <hr>

                <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Indikator</th>
                                <th scope="col">Pertanyaan</th>
                                <th scope="col">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql2   = "select * from pertanyaan where sub_indikator = 'Training' order by id asc";
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            $totalHasil3 = 0;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $id                 = $r2['id'];
                                $id_pertanyaan      = $r2['id_pertanyaan'];
                                $sub_indikator      = $r2['sub_indikator'];
                                $pertanyaan         = $r2['pertanyaan'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                                $input = $r2['input'];

                                $hasilbaru3 = $input*$bobot_pertanyaan;
                                $totalHasil3 += $hasilbaru3;
                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <!-- <td scope="row"><?php echo $id_pertanyaan ?></td> -->
                                <td scope="row"><?php echo $sub_indikator ?></td>
                                <td scope="row"><?php echo $pertanyaan ?></td>
                                <td scope="row"><?php echo $hasilbaru3 ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <p style="font-weight:bold;" class="mt-4"> Hasil Training: <?php echo $totalHasil3 ?> </p>

                <hr>

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

                        // echo "Presentase Correctness: $roundedHasilnya\n";
                        // echo "\n"; 
                        // echo "Kategori Kelayakan: $k_corec\n";
                        
                    ?>
                    <p style="font-weight:bold;" class="mt-4"> Nilai Usability: <?php echo $hasilketemu ?> </p>
                    <p style="font-weight:bold;" class="mt-4"> Presentase Usability: <?php echo $roundedHasilnya ?>%</p>
                    <p style="font-weight:bold;" class="mt-4"> Kategori Kelayakan: <?php echo $k_corec ?></p>


                <!-- <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Id_Usability</label>
                        <div class="col order-5">
                            <input type="text" class="form-control col-md-1" id="id_usability" name="id_usability"
                                value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Pilih Nama Uji</label>
                        <div class="col-sm-10">
                            <!-- 
                            <input name="cmd_show" type="text" value="true" />
                            <select class="form-control" name="uji">
                                <option value="">- Pilih -</option>
                                <?php
                                include '/../../../model/koneksi.php';

                                $query = mysqli_query($koneksi, "SELECT * FROM `hasil_akhir`");

                                while($data = mysqli_fetch_array($query)) {
                                    ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['nama_hasil']?></option>
                                <?php  } ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">1. Pertanyaan Communicativeness</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="communicativeness"
                                id="communicativeness" onchange="myfunction()">
                                <option value="">- Pilih -</option>
                                <?php
                                include '/../../../model/koneksi.php';

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Communicativeness'");
                                if (mysqli_num_rows($query)>0) {

                                    while($data = mysqli_fetch_array($query)) {
                                        ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot" name="bobot" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_communicative"
                                        name="avg_communicative" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_communicative()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_communicative"
                                        name="wncn_communicative" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">2. Pertanyaan Communicativeness</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="communicativeness1"
                                id="communicativeness1" onchange="myfunction1()">
                                <option value="">- Pilih -</option>
                                <?php
                                include '/../../../model/koneksi.php';

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Communicativeness'");
                                if (mysqli_num_rows($query)>0) {

                                    while($data = mysqli_fetch_array($query)) {
                                        ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot1" name="bobot1" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_communicative1"
                                        name="avg_communicative1" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_communicative1()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_communicative1"
                                        name="wncn_communicative1" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">3. Pertanyaan Communicativeness</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="communicativeness2"
                                id="communicativeness2" onchange="myfunction2()">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Communicativeness'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot2" name="bobot2" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_communicative2"
                                        name="avg_communicative2" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_communicative2()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_communicative2"
                                        name="wncn_communicative2" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">4. Pertanyaan Communicativeness</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="communicativeness3"
                                id="communicativeness3" onchange="myfunction3()">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Communicativeness'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot3" name="bobot3" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_communicative3"
                                        name="avg_communicative3" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_communicative3()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_communicative3"
                                        name="wncn_communicative3" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">5. Pertanyaan Communicativeness</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="communicativeness4"
                                id="communicativeness4" onchange="myfunction4()">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Communicativeness'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot4" name="bobot4" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_communicative4"
                                        name="avg_communicative4" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_communicative4()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_communicative4"
                                        name="wncn_communicative4" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">6. Pertanyaan Communicativeness</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="communicativeness5"
                                id="communicativeness5" onchange="myfunction5()">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Communicativeness'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot5" name="bobot5" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_communicative5"
                                        name="avg_communicative5" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_communicative5()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_communicative5"
                                        name="wncn_communicative5" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">7. Pertanyaan Communicativeness</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="communicativeness6"
                                id="communicativeness6" onchange="myfunction6()">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Communicativeness'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot6" name="bobot6" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_communicative6"
                                        name="avg_communicative6" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_communicative6()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_communicative6"
                                        name="wncn_communicative6" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 row">
                        <button type="button" class="col-sm-2 col-btn btn-success"
                            onclick="hasil_akhircommunicative()">Hasil Communicativeness</button>
                        <div class="col order-5">
                            <input type="text" class="form-control col-md-1" id="hasilnya" name="hasilnya" value=""
                                readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">1. Pertanyaan Operability</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="operability"
                                id="operability" onchange="myfunction7()">
                                <option value="">- Pilih -</option>
                                <?php
                                        include '/../../../model/koneksi.php';

                                        $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Operability'");
                                        if (mysqli_num_rows($query)>0) {

                                            while($data = mysqli_fetch_array($query)) {
                                                ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot7" name="bobot7" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_operability"
                                        name="avg_operability" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_operability()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_operability"
                                        name="wncn_operability" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">2. Pertanyaan Operability</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="operability1"
                                id="operability1" onchange="myfunction8()">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Operability'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot8" name="bobot8" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_operability1"
                                        name="avg_operability1" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_operability1()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_operability1"
                                        name="wncn_operability1" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">3. Pertanyaan Operability</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="operability2"
                                id="operability2" onchange="myfunction9()">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Operability'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot9" name="bobot9" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_operability2"
                                        name="avg_operability2" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_operability2()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_operability2"
                                        name="wncn_operability2" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">4. Pertanyaan Operability</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="operability3"
                                id="operability3" onchange="myfunction10()">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Operability'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot10" name="bobot10" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_operability3"
                                        name="avg_operability3" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_operability3()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_operability3"
                                        name="wncn_operability3" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 row">
                        <button type="button" class="col-sm-2 col-btn btn-success"
                            onclick="hasil_akhiroperability()">Hasil Operability</button>
                        <div class="col order-5">
                            <input type="text" class="form-control col-md-1" id="hasilakhoperability"
                                name="hasilakhoperability" value="" readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">1. Pertanyaan Training</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="traning" id="traning"
                                onchange="myfunction11()">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Training'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot11" name="bobot11" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_traning" name="avg_traning"
                                        value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_training()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_traning"
                                        name="wncn_traning" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">2. Pertanyaan Training</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="traning1" id="traning1"
                                onchange="myfunction12()">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Training'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot12" name="bobot12" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_traning1" name="avg_traning1"
                                        value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_training1()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_traning1"
                                        name="wncn_traning1" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">3. Pertanyaan Training</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="traning2" id="traning2"
                                onchange="myfunction13()">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Training'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot13" name="bobot13" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_traning2" name="avg_traning2"
                                        value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_training2()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_traning2"
                                        name="wncn_traning2" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">4. Pertanyaan Training</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="traning3" id="traning3"
                                onchange="myfunction14()">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Training'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot14" name="bobot14" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_traning3" name="avg_traning3"
                                        value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_training3()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_traning3"
                                        name="wncn_traning3" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">5. Pertanyaan Training</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="traning4" id="traning4"
                                onchange="myfunction15()">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Training'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot15" name="bobot15" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_traning4" name="avg_traning4"
                                        value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_training4()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_traning4"
                                        name="wncn_traning4" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">6. Pertanyaan Training</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="traning5" id="traning5"
                                onchange="myfunction16()">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Training'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot16" name="bobot16" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_traning5" name="avg_traning5"
                                        value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_training5()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_traning5"
                                        name="wncn_traning5" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">7. Pertanyaan Training</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="traning6" id="traning6"
                                onchange="myfunction17()">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Training'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot17" name="bobot17" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_traning6" name="avg_traning6"
                                        value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_training6()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_traning6"
                                        name="wncn_traning6" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">8. Pertanyaan Training</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="traning7" id="traning7"
                                onchange="myfunction18()">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Training'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot18" name="bobot18" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_traning7" name="avg_traning7"
                                        value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_training7()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_traning7"
                                        name="wncn_traning7" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr>
                    <div class="mb-3 row">
                        <button type="button" class="col-sm-2 col-btn btn-success" onclick="hasil_akhirtraining()">Hasil
                            Training</button>
                        <div class="col order-5">
                            <input type="text" class="form-control col-md-1" id="hasilakhtraning" name="hasilakhtraning"
                                value="" readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 row">
                        <button type="button" class="col-sm-2 col-btn btn-success" onclick="hasil_keseluruhan()">Hasil
                            Akhir</button>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nilai Usability</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control col-md-1" id="n_corec" name="n_corec" value=""
                                readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Persentase Usability</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control col-md-1" id="p_corec" name="p_corec" value="%"
                                readonly>
                        </div>
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="" class="col-sm-2 col-form-label">Kategori Kelayakan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control col-md-4" id="k_corec" name="k_corec" value=""
                                readonly>
                        </div>
                    </div>
                    <hr>
                    <!-- batas 
                    <div class=" col-12">
                        <input type="submit" name="save" value="Save" class="btn btn-outline-success" />
                        <button type="reset" class="btn btn-outline-warning">Reset Form</button>
                    </div>
                </form> -->
            </div>
        </div>
    </div>

    <?php

        if (isset($_POST['save'])) {
            $id_usability = $_POST['id_usability'];
            $nilai_communicativeness = $_POST['hasilnya'];
            $nilai_operability = $_POST['hasilakhoperability'];
            $nilai_training = $_POST['hasilakhtraning'];
            $nilai_usability = $_POST['n_corec'];
            $persentase = $_POST['p_corec'];
            $kategori = $_POST['k_corec'];
            $uji = $_POST['uji'];



             // proses insert and validasi
            $cek_data = mysqli_num_rows($koneksi->query("SELECT * FROM glue WHERE id_sumber = '$id_usability'"));
            if ($cek_data > 0) {
                echo "<script>alert('Pengujian sudah ada!');</script>";
                echo "<meta http-equiv='refresh' content='0;url=?page=pages/inputform/penilaian/correctness'>";
            }else{

             $insert = $koneksi->query("INSERT INTO usability(id_usability, nilai_communicativeness, nilai_operability, nilai_training, nilai_usability, persentase, kategori) VALUES ('$id_usability','$nilai_communicativeness','$nilai_operability','$nilai_training','$nilai_usability','$persentase','$kategori')");
             $insert = $koneksi->query("INSERT INTO glue(id_hasilakhir, id_sumber, tipe_sumber) VALUES ('$uji', '$id_usability','usability')");


             if($insert){
                echo"<script>alert('Penambahan Berhasil');
                window.location='?page=pages/inputform/penilaian/usability';
                </script>";
            }else{
                echo"<script>alert('Penambahan Gagal');</script>";
            }

        }

    }
    ?>


    <script>
    function hasil_communicative() {
        var bobot = $('#bobot').val();
        var avg = $('#avg_communicative').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_communicative").val(hasil);

    }

    function hasil_communicative1() {
        var bobot = $('#bobot1').val();
        var avg = $('#avg_communicative1').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_communicative1").val(hasil);

    }


    function hasil_communicative2() {
        var bobot = $('#bobot2').val();
        var avg = $('#avg_communicative2').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_communicative2").val(hasil);

    }

    function hasil_communicative3() {
        var bobot = $('#bobot3').val();
        var avg = $('#avg_communicative3').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_communicative3").val(hasil);

    }

    function hasil_communicative4() {
        var bobot = $('#bobot4').val();
        var avg = $('#avg_communicative4').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_communicative4").val(hasil);

    }

    function hasil_communicative5() {
        var bobot = $('#bobot5').val();
        var avg = $('#avg_communicative5').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_communicative5").val(hasil);

    }

    function hasil_communicative6() {
        var bobot = $('#bobot6').val();
        var avg = $('#avg_communicative6').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_communicative6").val(hasil);

    }


    function hasil_akhircommunicative() {
        var hasil1 = $('#wncn_communicative').val();
        var hasil2 = $('#wncn_communicative1').val();
        var hasil3 = $('#wncn_communicative2').val();
        var hasil4 = $('#wncn_communicative3').val();
        var hasil5 = $('#wncn_communicative4').val();
        var hasil6 = $('#wncn_communicative5').val();
        var hasil7 = $('#wncn_communicative6').val();
        var ketemu = Number(hasil1) + Number(hasil2) + Number(hasil3) + Number(hasil4) + Number(hasil5) + Number(hasil6) + Number(hasil7);
        $('#hasilnya').val(ketemu.toFixed(2));
    }




    function hasil_operability() {
        var bobot = $('#bobot7').val();
        var avg = $('#avg_operability').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_operability").val(hasil);

    }

    function hasil_operability1() {
        var bobot = $('#bobot8').val();
        var avg = $('#avg_operability1').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_operability1").val(hasil);

    }

    function hasil_operability2() {
        var bobot = $('#bobot9').val();
        var avg = $('#avg_operability2').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_operability2").val(hasil);

    }

    function hasil_operability3() {
        var bobot = $('#bobot10').val();
        var avg = $('#avg_operability3').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_operability3").val(hasil);

    }


    function hasil_akhiroperability() {
        var hasil1 = $('#wncn_operability').val();
        var hasil2 = $('#wncn_operability1').val();
        var hasil3 = $('#wncn_operability2').val();
        var hasil4 = $('#wncn_operability3').val();
        var ketemu = Number(hasil1) + Number(hasil2) + Number(hasil3) + Number(hasil4);
        $('#hasilakhoperability').val(ketemu.toFixed(2));
    }


    function hasil_training() {
        var bobot = $('#bobot11').val();
        var avg = $('#avg_traning').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_traning").val(hasil);
    }

    function hasil_training1() {
        var bobot = $('#bobot12').val();
        var avg = $('#avg_traning1').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_traning1").val(hasil);
    }
    function hasil_training2() {
        var bobot = $('#bobot13').val();
        var avg = $('#avg_traning2').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_traning2").val(hasil);
    }
    function hasil_training3() {
        var bobot = $('#bobot14').val();
        var avg = $('#avg_traning3').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_traning3").val(hasil);
    }
    function hasil_training4() {
        var bobot = $('#bobot15').val();
        var avg = $('#avg_traning4').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_traning4").val(hasil);
    }
    function hasil_training5() {
        var bobot = $('#bobot16').val();
        var avg = $('#avg_traning5').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_traning5").val(hasil);
    }
    function hasil_training6() {
        var bobot = $('#bobot17').val();
        var avg = $('#avg_traning6').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_traning6").val(hasil);
    }
    function hasil_training7() {
        var bobot = $('#bobot18').val();
        var avg = $('#avg_traning7').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_traning7").val(hasil);
    }




    function hasil_akhirtraining() {
        var hasil1 = $('#wncn_traning').val();
        var hasil2 = $('#wncn_traning1').val();
        var hasil3 = $('#wncn_traning2').val();
        var hasil4 = $('#wncn_traning3').val();
        var hasil5 = $('#wncn_traning4').val();
        var hasil6 = $('#wncn_traning5').val();
        var hasil7 = $('#wncn_traning6').val();
        var hasil8 = $('#wncn_traning7').val();
        var ketemu = Number(hasil1) + Number(hasil2) + Number(hasil3) + Number(hasil4) + Number(hasil5) + Number(hasil6) + Number(hasil7) + Number(hasil8);
        $('#hasilakhtraning').val(ketemu.toFixed(2));
    }



    function hasil_keseluruhan() {
        var total1 = $('#hasilnya').val();
        var total2 = $('#hasilakhoperability').val();
        var total3 = $('#hasilakhtraning').val();
        console.log(total1);
        console.log(total2);
        console.log(total3);
        var ketemu = ((Number(total1) + Number(total2) + Number(total3)) / 3);
        console.log(ketemu);
        $("#n_corec").val(ketemu.toFixed(2));


        var nilai_dapat = $('#n_corec').val();
        var hasilnya = ((Number(nilai_dapat) / 5) * 100);
        console.log(hasilnya);
        $('#p_corec').val(Math.round(hasilnya));



        if ((hasilnya >= 81) && (hasilnya <= 100)) {
            $('#k_corec').val("Sangat Baik");
        } else if ((hasilnya >= 61) && (hasilnya <= 80)) {
            $('#k_corec').val("Baik");
        } else if ((hasilnya >= 41) && (hasilnya <= 60)) {
            $('#k_corec').val("Cukup Baik");
        } else if ((hasilnya >= 21) && (hasilnya <= 40)) {
            $('#k_corec').val("Tidak Baik");
        } else if ((hasilnya >= 0) && (hasilnya <= 20)) {
            $('#k_corec').val("Sangat Tidak Baik");
        } else {
            $('#k_corec').val("");
        }

    }



    function myfunction() {
        var x = $('#communicativeness').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot').val(result.bobot_pertanyaan);
            }
        );

    }

    function myfunction1() {
        var x = $('#communicativeness1').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot1').val(result.bobot_pertanyaan);
            }
        );

    }


    function myfunction2() {
        var x = $('#communicativeness2').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot2').val(result.bobot_pertanyaan);
            }
        );

    }

    function myfunction3() {
        var x = $('#communicativeness3').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot3').val(result.bobot_pertanyaan);
            }
        );

    }

    function myfunction4() {
        var x = $('#communicativeness4').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot4').val(result.bobot_pertanyaan);
            }
        );

    }


    function myfunction5() {
        var x = $('#communicativeness5').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot5').val(result.bobot_pertanyaan);
            }
        );

    }


    function myfunction6() {
        var x = $('#communicativeness6').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot6').val(result.bobot_pertanyaan);
            }
        );

    }




    function myfunction7() {
        var x = $('#operability').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot7').val(result.bobot_pertanyaan);
            }
        );

    }

    function myfunction8() {
        var x = $('#operability1').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot8').val(result.bobot_pertanyaan);
            }
        );

    }

    function myfunction9() {
        var x = $('#operability2').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot9').val(result.bobot_pertanyaan);
            }
        );

    }

    function myfunction10() {
        var x = $('#operability3').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot10').val(result.bobot_pertanyaan);
            }
        );

    }

    function myfunction11() {
        var x = $('#traning').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot11').val(result.bobot_pertanyaan);
            }
        );

    }

    function myfunction12() {
        var x = $('#traning1').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot12').val(result.bobot_pertanyaan);
            }
        );

    }
    function myfunction13() {
        var x = $('#traning2').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot13').val(result.bobot_pertanyaan);
            }
        );

    }
    function myfunction14() {
        var x = $('#traning3').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot14').val(result.bobot_pertanyaan);
            }
        );

    }
    function myfunction15() {
        var x = $('#traning4').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot15').val(result.bobot_pertanyaan);
            }
        );

    }
    function myfunction16() {
        var x = $('#traning5').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot16').val(result.bobot_pertanyaan);
            }
        );

    }
    function myfunction17() {
        var x = $('#traning6').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot17').val(result.bobot_pertanyaan);
            }
        );

    }
    function myfunction18() {
        var x = $('#traning7').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                result = JSON.parse(result)
                console.log(result)
                $('#bobot18').val(result.bobot_pertanyaan);
            }
        );

    }
    </script>

</body>

</html>