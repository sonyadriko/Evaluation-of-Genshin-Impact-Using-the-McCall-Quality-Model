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
                Input Usability
            </div>
            <div class="card-body">
                <form action="" method="POST">
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
                                id="operability" onchange="myfunction4()">
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
                                    <input type="text" class="form-control col-md-3" id="bobot4" name="bobot4" value=""
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
                                id="operability1" onchange="myfunction5()">
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
                                    <input type="text" class="form-control col-md-3" id="bobot5" name="bobot5" value=""
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
                                id="operability2" onchange="myfunction6()">
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
                                    <input type="text" class="form-control col-md-3" id="bobot6" name="bobot6" value=""
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
                                onchange="myfunction7()">
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
                                    <input type="text" class="form-control col-md-3" id="bobot7" name="bobot7" value=""
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


    function hasil_akhircommunicative() {
        var hasil1 = $('#wncn_communicative').val();
        var hasil2 = $('#wncn_communicative1').val();
        var hasil3 = $('#wncn_communicative2').val();
        var hasil4 = $('#wncn_communicative3').val();
        var ketemu = Number(hasil1) + Number(hasil2) + Number(hasil3) + Number(hasil4);
        $('#hasilnya').val(ketemu.toFixed(2));
    }




    function hasil_operability() {
        var bobot = $('#bobot4').val();
        var avg = $('#avg_operability').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_operability").val(hasil);

    }

    function hasil_operability1() {
        var bobot = $('#bobot5').val();
        var avg = $('#avg_operability1').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_operability1").val(hasil);

    }

    function hasil_operability2() {
        var bobot = $('#bobot6').val();
        var avg = $('#avg_operability2').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_operability2").val(hasil);

    }


    function hasil_akhiroperability() {
        var hasil1 = $('#wncn_operability').val();
        var hasil2 = $('#wncn_operability1').val();
        var hasil3 = $('#wncn_operability2').val();
        var ketemu = Number(hasil1) + Number(hasil2) + Number(hasil3);
        $('#hasilakhoperability').val(ketemu.toFixed(2));
    }


    function hasil_training() {
        var bobot = $('#bobot5').val();
        var avg = $('#avg_traning').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_traning").val(hasil);
    }

    function hasil_akhirtraining() {
        var hasil1 = $('#wncn_traning').val();
        var ketemu = Number(hasil1) * 1;
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
        var x = $('#operability').val();

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
        var x = $('#operability1').val();

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
        var x = $('#operability2').val();

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
        var x = $('#traning').val();

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
    </script>

</body>

</html>