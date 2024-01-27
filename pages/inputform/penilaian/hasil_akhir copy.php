<?php

if (isset($_POST['tampil']) && !empty($_POST['uji'])) {
    $uji = $_POST['uji'];


    include 'model/koneksi.php';

    // $tampil_correctnes = $koneksi->query("SELECT * FROM glue INNER JOIN correctness ON correctness.id_correctness=glue.id_sumber WHERE glue.id_hasilakhir='$uji' AND glue.tipe_sumber='correctness' order by glue.id LIMIT 1");

    // tampil correctnes 
    $tampil_correctnes = $koneksi->query("SELECT * FROM glue INNER JOIN correctness ON correctness.id_correctness=glue.id_sumber WHERE glue.id_hasilakhir='$uji' AND glue.tipe_sumber='correctness'");

    $data_correctness = mysqli_fetch_array($tampil_correctnes);

    // tampil reliability
    $tampil_reliability = $koneksi->query("SELECT * FROM glue INNER JOIN reliability ON reliability.id_reliability=glue.id_sumber WHERE glue.id_hasilakhir='$uji' AND glue.tipe_sumber='reliability'");

    $data_reliability= mysqli_fetch_array($tampil_reliability);

    // tampil efficiency
    $tampil_efficiency = $koneksi->query("SELECT * FROM glue INNER JOIN efficiency ON efficiency.id_efficiency=glue.id_sumber WHERE glue.id_hasilakhir='$uji' AND glue.tipe_sumber='efficiency'");

    $data_efficiency= mysqli_fetch_array($tampil_efficiency);

    // tampil integrity
    $tampil_integrity = $koneksi->query("SELECT * FROM glue INNER JOIN integrity ON integrity.id_integrity=glue.id_sumber WHERE glue.id_hasilakhir='$uji' AND glue.tipe_sumber='integrity'");

    $data_integrity= mysqli_fetch_array($tampil_integrity);

    // tampil integrity
    $tampil_usability = $koneksi->query("SELECT * FROM glue INNER JOIN usability ON usability.id_usability=glue.id_sumber WHERE glue.id_hasilakhir='$uji' AND glue.tipe_sumber='usability'");

    $data_usability= mysqli_fetch_array($tampil_usability);


    $hasil_akhir = $koneksi->query("SELECT ROUND((((0.3 * (SELECT IFNULL((SELECT correctness.nilai_correctness FROM correctness WHERE correctness.id_correctness = (SELECT glue.id_sumber FROM glue WHERE glue.tipe_sumber = 'correctness' AND glue.id_hasilakhir = hasil_akhir.id) ORDER BY correctness.id DESC LIMIT 1),0))) + (0.2 * (SELECT IFNULL((SELECT reliability.nilai_reliability FROM reliability WHERE reliability.id_reliability = (SELECT glue.id_sumber FROM glue WHERE glue.tipe_sumber = 'reliability' AND glue.id_hasilakhir = hasil_akhir.id) ORDER BY reliability.id DESC LIMIT 1),0))) + (0.2 * (SELECT IFNULL((SELECT efficiency.nilai_efficiency FROM efficiency WHERE efficiency.id_efficiency = (SELECT glue.id_sumber FROM glue WHERE glue.tipe_sumber = 'efficiency' AND glue.id_hasilakhir = hasil_akhir.id) ORDER BY efficiency.id DESC LIMIT 1),0))) + (0.3 * (SELECT IFNULL((SELECT integrity.nilai_integrity FROM integrity WHERE integrity.id_integrity = (SELECT glue.id_sumber FROM glue WHERE glue.tipe_sumber = 'integrity' AND glue.id_hasilakhir = hasil_akhir.id) ORDER BY integrity.id DESC LIMIT 1),0))) + (0.2 * (SELECT IFNULL((SELECT usability.nilai_usability FROM usability WHERE usability.id_usability = (SELECT glue.id_sumber FROM glue WHERE glue.tipe_sumber = 'usability' AND glue.id_hasilakhir = hasil_akhir.id) ORDER BY usability.id DESC LIMIT 1),0)))) / 5) * 100, 2)AS hasil_akhir FROM hasil_akhir WHERE hasil_akhir.id='$uji'");

    $data_akhir = mysqli_fetch_array($hasil_akhir);
}
?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Hasil Akhir</h1>
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
                Hasil Akhir
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <div class="col order">
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
                                        <option value="<?php echo $data['id']?>"><?php echo $data['nama_hasil']?>
                                        </option>
                                        <?php  } ?>
                                    </select>
                                </div>
                            </div>
                            <!--  <a href=""><button type="button" class="btn btn-outline-primary">Tampil</button></a> -->
                            <input type="submit" name="tampil" value="Tampil" class="btn btn-outline-primary" />
                        </div>
                        <hr>
                        <label>Correctness
                            <hr>
                        </label>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Hasil Penilaian Correctness</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="correctness" name="correctness"
                                    value="<?php echo (isset($data_correctness)) ? $data_correctness['nilai_correctness'] : ""; ?>"
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Persentase</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="persentase_correctness"
                                    name="persentase_correctness"
                                    value="<?php echo (isset($data_correctness)) ?  $data_correctness['persentase'] : "";?>%"
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Kategori Kelayakan</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="kategori_correctness"
                                    name="kategori_correctness"
                                    value="<?php echo (isset($data_correctness)) ? $data_correctness['kategori'] : "";?>"
                                    readonly>
                            </div>
                        </div>
                        <hr>
                        <label>Reliability
                            <hr>
                        </label>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Hasil Penilaian Reliability</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="" name=""
                                    value="<?php echo (isset($data_reliability)) ? $data_reliability['nilai_reliability'] : "";?>"
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Persentase</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="" name=""
                                    value="<?php echo (isset($data_reliability)) ? $data_reliability['persentase'] : "";?>%"
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Kategori Kelayakan</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="" name=""
                                    value="<?php echo (isset($data_reliability)) ? $data_reliability['kategori'] : "";?>"
                                    readonly>
                            </div>
                        </div>
                        <hr>
                        <label>Efficiency
                            <hr>
                        </label>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Hasil Penilaian Efficiency</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="" name=""
                                    value="<?php echo (isset($data_efficiency)) ? $data_efficiency['nilai_efficiency'] : "";?>"
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Persentase</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="" name=""
                                    value="<?php echo (isset($data_efficiency)) ? $data_efficiency['persentase'] : "";?>%"
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Kategori Kelayakan</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="" name=""
                                    value="<?php echo (isset($data_efficiency)) ? $data_efficiency['kategori'] : "";?>"
                                    readonly>
                            </div>
                        </div>
                        <hr>
                        <label>Integrity
                            <hr>
                        </label>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Hasil Penilaian Integrity</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="" name=""
                                    value="<?php echo (isset($data_integrity)) ? $data_integrity['nilai_integrity'] : "";?>"
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Persentase</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="" name=""
                                    value="<?php echo (isset($data_integrity)) ? $data_integrity['persentase'] : "";?>%"
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Kategori Kelayakan</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="" name=""
                                    value="<?php echo (isset($data_integrity)) ? $data_integrity['kategori'] : "";?>"
                                    readonly>
                            </div>
                        </div>
                        <hr>
                        <label>Usability
                            <hr>
                        </label>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Hasil Penilaian Usability</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="" name=""
                                    value="<?php echo (isset($data_usability)) ? $data_usability['nilai_usability'] : "";?>"
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Persentase</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="" name=""
                                    value="<?php echo (isset($data_usability)) ? $data_usability['persentase'] : "";?>%"
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Kategori Kelayakan</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="" name=""
                                    value="<?php echo (isset($data_usability)) ? $data_usability['kategori'] : "";?>"
                                    readonly>
                            </div>
                        </div>
                        <hr>
                        <label>Hasil Akhir
                            <hr>
                        </label>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">ID</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="id_akhir" name="id_akhir"
                                    value="<?= (isset($uji)) ? $uji : ""; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Hasil Persentase</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="nilai_akhir" name="nilai_akhir"
                                    value="<?php echo (isset($data_akhir)) ? round($data_akhir['hasil_akhir']) : ""; ?>%"
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Kategori Kelayakan</label>
                            <div class="col order-5">
                                <input type="text" class="form-control col-md-3" id="kategori_akhir"
                                    name="kategori_akhir" value="<?php
        if (isset($data_akhir)){
          if($data_akhir['hasil_akhir'] >=80 && $data_akhir['hasil_akhir'] <=100) {


            // $('#kategori_akhir').val("sangat baik")
            echo "Sangat Baik";

            }else if($data_akhir['hasil_akhir'] >=61 && $data_akhir['hasil_akhir'] <=80) {

                echo "Baik";

                }else if($data_akhir['hasil_akhir'] >=41 && $data_akhir['hasil_akhir'] <=60) {

                    echo "Cukup Baik";

                    }else if($data_akhir['hasil_akhir'] >=21 && $data_akhir['hasil_akhir'] <=40) {

                       echo "Tidak Baik";

                       }else if($data_akhir['hasil_akhir'] >=0 && $data_akhir['hasil_akhir'] <=20) {

                         echo "Sangat Tidak Baik";
                     }
                     else
                     {
                       echo "";
                   } 

               }

           ?>" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="col order">
                            <input type="submit" name="save" value="Save" class="btn btn-outline-success" />
                            <!--     <a href="#"><button type="button" class="btn btn-outline-success">Save</button></a> -->
                            <a href="cetak_laporan.php?uji=<?= (isset($uji))? $uji : "" ?>" id="tmbl_cetak"
                                target="_blank"><button type="button" class="btn btn-outline-warning">Cetak
                                    Laporan</button></a>

                            <!--   <script type="text/javascript">
        function changeLink(ini) {
            $('#tmbl_cetak').attr("cetak_laporan.php?uji="+$(ini).val())
        }
    </script> -->
                        </div>
                </form>
            </div>
            <?php 

if (isset($_POST['save'])) {

    $id_akhir = $_POST['id_akhir'];
    $nilai_akhir = $_POST['nilai_akhir'];
    $kategori_akhir =$_POST['kategori_akhir'];


    $insert = $koneksi->query("INSERT INTO penilaian(id_penilaian, hasil, kelayakan) VALUES ('$id_akhir','$nilai_akhir','$kategori_akhir')");

    if($insert){
        echo"<script>alert('Penambahan Berhasil');
        window.location='?page=pages/inputform/penilaian/hasil_akhir';
        </script>";
    }else{
        echo"<script>alert('Penambahan Gagal');</script>";
    }

}


?>

        </div>
    </div>
    </div>
</body>

</html>