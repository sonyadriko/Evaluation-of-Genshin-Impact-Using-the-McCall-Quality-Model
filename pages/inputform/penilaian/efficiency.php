<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Penilaian Efficiency</h1>
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
                Input Efficiency
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Id_Efficiency</label>
                        <div class="col order-5">
                            <input type="text" class="form-control col-md-1" id="id_efficiency" name="id_efficiency">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Pilih Nama Uji</label>
                        <div class="col-sm-10">
                            <!-- 
                            <input name="cmd_show" type="text" value="true" /> -->
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
                        <label for="" class="col-sm-2 col-form-label">1. Pertanyaan Execution Efficiency</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="efficiency" id="efficiency"
                                onchange="myfunction()">
                                <option value="">- Pilih -</option>
                                <?php
                                include '/../../../model/koneksi.php';

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Execution Efficiency'");
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
                                    <input type="text" class="form-control col-md-3" id="avg_efficiency"
                                        name="avg_efficiency" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_efficiency()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_efficiency"
                                        name="wncn_efficiency" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">2. Pertanyaan Execution Efficiency</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="efficiency" id="efficiency1"
                                onchange="myfunction1()">
                                <option value="">- Pilih -</option>
                                <?php
                                include '/../../../model/koneksi.php';

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Execution Efficiency'");
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
                                    <input type="text" class="form-control col-md-3" id="avg_efficiency1"
                                        name="avg_efficiency1" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_efficiency1()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_efficiency1"
                                        name="wncn_efficiency1" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">3. Pertanyaan Execution Efficiency</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_efficiency" class="form-control" name="efficiency" id="efficiency2"
                                onchange="myfunction2()">
                                <option value="">- Pilih -</option>
                                <?php
                                include '/../../../model/koneksi.php';

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Execution Efficiency'");
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
                                    <input type="text" class="form-control col-md-3" id="avg_efficiency2"
                                        name="avg_efficiency2" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_efficiency2()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_efficiency2"
                                        name="wncn_efficiency2" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 row">
                        <button type="button" class="col-sm-2 col-btn btn-success"
                            onclick="hasil_akhirefficiency()">Hasil Execution Efficiency</button>
                        <div class="col order-5">
                            <input type="text" class="form-control col-md-1" id="hasilefficiency" name="hasilefficiency"
                                value="" readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 row">
                        <button type="button" class="col-sm-2 col-btn btn-success" onclick="hasil_keseluruhan()">Hasil
                            Akhir</button>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nilai Efficiency</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control col-md-1" id="n_corec" name="n_corec" value=""
                                readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Persentase Efficiency</label>
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
                    <!-- batas -->
                    <div class=" col-12">
                        <input type="submit" name="save" value="Save" class="btn btn-outline-success" />
                        <button type="reset" class="btn btn-outline-warning">Reset Form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

        if (isset($_POST['save'])) {
            $id_efficiency = $_POST['id_efficiency'];
            $nilai_accuracy = $_POST['hasilefficiency'];
            $nilai_efficiency = $_POST['n_corec'];
            $persentase = $_POST['p_corec'];
            $kategori = $_POST['k_corec'];
            $uji = $_POST['uji'];



             // proses insert and validasi
            $cek_data = mysqli_num_rows($koneksi->query("SELECT * FROM glue WHERE id_sumber = '$id_efficiency'"));
            if ($cek_data > 0) {
                echo "<script>alert('Pengujian sudah ada!');</script>";
                echo "<meta http-equiv='refresh' content='0;url=?page=pages/inputform/penilaian/correctness'>";
            }else{

                $insert = $koneksi->query("INSERT INTO efficiency(id_efficiency, nilai_excution, nilai_efficiency, persentase, kategori) VALUES ('$id_efficiency', '$nilai_accuracy','$nilai_efficiency','$persentase','$kategori')");
                $insert = $koneksi->query("INSERT INTO glue(id_hasilakhir, id_sumber, tipe_sumber) VALUES ('$uji', '$id_efficiency','efficiency')");


                if($insert){
                    echo"<script>alert('Penambahan Berhasil');
                    window.location='?page=pages/inputform/penilaian/efficiency';
                    </script>";
                }else{
                    echo"<script>alert('Penambahan Gagal');</script>";
                }


            }

        }
        ?>

    <script>
    // Perhitungan efficiency
    function hasil_efficiency() {
        var bobot = $('#bobot').val();
        var avg = $('#avg_efficiency').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_efficiency").val(hasil);

    }

    function hasil_efficiency1() {
        var bobot = $('#bobot1').val();
        var avg = $('#avg_efficiency1').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_efficiency1").val(hasil);

    }

    function hasil_efficiency2() {
        var bobot = $('#bobot2').val();
        var avg = $('#avg_efficiency2').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_efficiency2").val(hasil);

    }

    // Hasil akhir
    function hasil_akhirefficiency() {
        var hasil1 = $('#wncn_efficiency').val();
        var hasil2 = $('#wncn_efficiency1').val();
        var hasil3 = $('#wncn_efficiency2').val();
        var ketemu = Number(hasil1) + Number(hasil2) + Number(hasil3);
        $('#hasilefficiency').val(ketemu.toFixed(2));
    }


    // tampil efficiency
    function myfunction() {
        var x = $('#efficiency').val();

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
        var x = $('#efficiency1').val();

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
        var x = $('#efficiency2').val();

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

    // total keseluruhan
    function hasil_keseluruhan() {
        var total1 = $('#hasilefficiency').val();
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
    </script>
</body>

</html>