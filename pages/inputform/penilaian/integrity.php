<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Penilaian Integrity</h1>
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
                Hasil Integrity
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
                            $sql2   = "select * from pertanyaan where sub_indikator = 'Security' order by id asc";
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

                    <p style="font-weight:bold;" class="mt-4"> Hasil Security: <?php echo $totalHasil1 ?> </p>

                <hr>

                <?php
                        $ketemu = ($totalHasil1) / 1;
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
                    <p style="font-weight:bold;" class="mt-4"> Nilai Integrity: <?php echo $hasilketemu ?> </p>
                    <p style="font-weight:bold;" class="mt-4"> Presentase Integrity: <?php echo $roundedHasilnya ?>%</p>
                    <p style="font-weight:bold;" class="mt-4"> Kategori Kelayakan: <?php echo $k_corec ?></p>

                <!-- <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Id_Integrity</label>
                        <div class="col order-5">
                            <input type="text" class="form-control col-md-1" id="id_integrity" name="id_integrity"
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
                        <label for="" class="col-sm-2 col-form-label">1. Pertanyaan Security</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="integrity" id="integrity"
                                onchange="myfunction()">
                                <option value="">- Pilih -</option>
                                <?php
                            include '/../../../model/koneksi.php';

                            $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Security'");
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
                                    <input type="text" class="form-control col-md-3" id="avg_integrity"
                                        name="avg_integrity" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_integrity()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_integriy"
                                        name="wncn_integriy" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">2. Pertanyaan Security</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="integrity1" id="integrity1"
                                onchange="myfunction1()">
                                <option value="">- Pilih -</option>
                                <?php
                                include '/../../../model/koneksi.php';

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Security'");
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
                                    <input type="text" class="form-control col-md-3" id="avg_integrity1"
                                        name="avg_integrity1" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_integrity1()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_integriy1"
                                        name="wncn_integriy1" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">3. Pertanyaan Security</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="integrity2" id="integrity2"
                                onchange="myfunction2()">
                                <option value="">- Pilih -</option>
                                <?php
                                include '/../../../model/koneksi.php';

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Security'");
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
                                    <input type="text" class="form-control col-md-3" id="avg_integrity2"
                                        name="avg_integrity2" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_integrity2()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_integriy2"
                                        name="wncn_integriy2" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">4. Pertanyaan Security</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="integrity3" id="integrity3"
                                onchange="myfunction3()">
                                <option value="">- Pilih -</option>
                                <?php
                                include '/../../../model/koneksi.php';

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Security'");
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
                                    <input type="text" class="form-control col-md-3" id="avg_integrity3"
                                        name="avg_integrity3" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_integrity3()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_integriy3"
                                        name="wncn_integriy3" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 row">
                        <button type="button" class="col-sm-2 col-btn btn-success"
                            onclick="hasil_akhirintegrity()">Hasil Security</button>
                        <div class="col order-5">
                            <input type="text" class="form-control col-md-1" id="hasilnya" name="hasilnya" value=""
                                readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 row">
                        <button type="button" class="col-sm-2 col-btn btn-success" onclick="hasil_keseluruhan()">Hasil
                            Akhir</button>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nilai Integrity</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control col-md-1" id="n_corec" name="n_corec" value=""
                                readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Persentase Integrity</label>
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
            $id_integrity = $_POST['id_integrity'];
            $nilai_security = $_POST['hasilnya'];
            $nilai_integrity = $_POST['n_corec'];
            $persentase = $_POST['p_corec'];
            $kategori = $_POST['k_corec'];
            $uji = $_POST['uji'];


             // proses insert and validasi
            $cek_data = mysqli_num_rows($koneksi->query("SELECT * FROM glue WHERE id_sumber = '$id_integrity'"));
            if ($cek_data > 0) {
                echo "<script>alert('Pengujian sudah ada!');</script>";
                echo "<meta http-equiv='refresh' content='0;url=?page=pages/inputform/penilaian/correctness'>";
            }else{

             $insert = $koneksi->query("INSERT INTO integrity(id_integrity, nilai_security, nilai_integrity, persentase, kategori) VALUES ('$id_integrity', '$nilai_security','$nilai_integrity','$persentase','$kategori')");
             $insert = $koneksi->query("INSERT INTO glue(id_hasilakhir, id_sumber, tipe_sumber) VALUES ('$uji', '$id_integrity','integrity')");


             if($insert){
                echo"<script>alert('Penambahan Berhasil');
                window.location='?page=pages/inputform/penilaian/integrity';
                </script>";
            }else{
                echo"<script>alert('Penambahan Gagal');</script>";
            }

        }

    }

    ?>



    <script>
    // Perhitungan integrity
    function hasil_integrity() {
        var bobot = $('#bobot').val();
        var avg = $('#avg_integrity').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_integriy").val(hasil);
    }

    function hasil_integrity1() {
        var bobot = $('#bobot1').val();
        var avg = $('#avg_integrity1').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_integriy1").val(hasil);
    }

    function hasil_integrity2() {
        var bobot = $('#bobot2').val();
        var avg = $('#avg_integrity2').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_integriy2").val(hasil);
    }

    function hasil_integrity3() {
        var bobot = $('#bobot3').val();
        var avg = $('#avg_integrity3').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_integriy3").val(hasil);
    }

    function hasil_akhirintegrity() {
        var hasil1 = $('#wncn_integriy').val();
        var hasil2 = $('#wncn_integriy1').val();
        var hasil3 = $('#wncn_integriy2').val();
        var hasil4 = $('#wncn_integriy3').val();
        var ketemu = Number(hasil1) + Number(hasil2) + Number(hasil3) + Number(hasil4);
        $('#hasilnya').val(ketemu.toFixed(2));
    }




    function hasil_keseluruhan() {
        var total1 = $('#hasilnya').val();
        console.log(total1);
        var ketemu = ((Number(total1)) / 1);
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




    // tampil integrity
    function myfunction() {
        var x = $('#integrity').val();

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
        var x = $('#integrity1').val();

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
        var x = $('#integrity2').val();

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
        var x = $('#integrity3').val();

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
    </script>

</body>

</html>