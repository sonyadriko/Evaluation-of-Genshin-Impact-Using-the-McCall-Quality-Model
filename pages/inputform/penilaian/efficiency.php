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
                Hasil Efficiency
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
                            $sql2   = "select * from pertanyaan where sub_indikator = 'Exection Efficiency' order by id asc";
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

                    <p style="font-weight:bold;" class="mt-4"> Hasil Exection Efficiency: <?php echo $totalHasil1 ?> </p>

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
                            $sql2   = "select * from pertanyaan where sub_indikator = 'Conciseness' order by id asc";
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
                        
                    <p style="font-weight:bold;" class="mt-4"> Hasil Conciseness: <?php echo $totalHasil2 ?> </p>


                <hr>

                    <?php
                        $ketemu = ($totalHasil1 + $totalHasil2) / 1;
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
                    <p style="font-weight:bold;" class="mt-4"> Nilai Correctness: <?php echo $hasilketemu ?> </p>
                    <p style="font-weight:bold;" class="mt-4"> Presentase Correctness: <?php echo $roundedHasilnya ?>%</p>
                    <p style="font-weight:bold;" class="mt-4"> Kategori Kelayakan: <?php echo $k_corec ?></p>


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

    
    function hasil_efficiency3() {
        var bobot = $('#bobot3').val();
        var avg = $('#avg_efficiency3').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_efficiency3").val(hasil);

    }

    
    function hasil_efficiency4() {
        var bobot = $('#bobot4').val();
        var avg = $('#avg_efficiency4').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_efficiency4").val(hasil);

    }


    // Hasil akhir
    function hasil_akhirefficiency() {
        var hasil1 = $('#wncn_efficiency').val();
        var hasil2 = $('#wncn_efficiency1').val();
        var hasil3 = $('#wncn_efficiency2').val();
        var hasil4 = $('#wncn_efficiency3').val();
        var hasil5 = $('#wncn_efficiency4').val();
        var ketemu = Number(hasil1) + Number(hasil2) + Number(hasil3) + Number(hasil4) + Number(hasil5);
        $('#hasilefficiency').val(ketemu.toFixed(2));
    }

    function hasil_conciseness() {
        var bobot = $('#bobot5').val();
        var avg = $('#avg_conciseness').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_conciseness").val(hasil);

    }

    function hasil_conciseness1() {
        var bobot = $('#bobot6').val();
        var avg = $('#avg_conciseness1').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_conciseness1").val(hasil);

    }

    function hasil_conciseness2() {
        var bobot = $('#bobot7').val();
        var avg = $('#avg_conciseness2').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_conciseness2").val(hasil);

    }

    function hasil_conciseness3() {
        var bobot = $('#bobot8').val();
        var avg = $('#avg_conciseness3').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_conciseness3").val(hasil);

    }

    function hasil_conciseness4() {
        var bobot = $('#bobot9').val();
        var avg = $('#avg_conciseness4').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_conciseness4").val(hasil);

    }

    // Hasil akhir conciseness
    function hasil_akhirconciseness() {
        var hasil1 = $('#wncn_conciseness').val();
        var hasil2 = $('#wncn_conciseness1').val();
        var hasil3 = $('#wncn_conciseness2').val();
        var hasil4 = $('#wncn_conciseness3').val();
        var hasil5 = $('#wncn_conciseness4').val();
        var ketemu = Number(hasil1) + Number(hasil2) + Number(hasil3) + Number(hasil4) + Number(hasil5);
        $('#hasilconciseness').val(ketemu.toFixed(2));
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

    function myfunction3() {
        var x = $('#efficiency3').val();

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
        var x = $('#efficiency4').val();

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
        var x = $('#conciseness').val();

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
        var x = $('#conciseness1').val();

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
        var x = $('#conciseness2').val();

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
        var x = $('#conciseness3').val();

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
        var x = $('#conciseness4').val();

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


    // total keseluruhan
    function hasil_keseluruhan() {
        var total1 = $('#hasilefficiency').val();
        var total2 = $('#hasilconciseness').val();
        console.log(total1);
        console.log(total2);
        var ketemu = ((Number(total1) + Number(total2)) / 1);
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