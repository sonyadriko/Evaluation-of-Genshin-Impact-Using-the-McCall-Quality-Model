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

                    <?php
                    if($_SESSION['role'] == 'admin') {
                ?>
                    <button id="simpanButton" class="btn btn-primary mt-4">Simpan</button>
                    <?php } ?>

            </div>
        </div>
    </div>

    <script>
document.getElementById("simpanButton").addEventListener("click", function() {
    // Menggunakan Ajax untuk mengirim data ke server
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "simpan_hasil_integrity.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Mengumpulkan data yang ingin disimpan
    var data = "totalHasil1=" + encodeURIComponent(<?php echo json_encode($totalHasil1); ?>) +
               "&totalIntegrity=" + encodeURIComponent(<?php echo json_encode($hasilketemu); ?>) +
               "&roundedHasilnya=" + encodeURIComponent(<?php echo json_encode($roundedHasilnya); ?>) +
               "&k_corec=" + encodeURIComponent(<?php echo json_encode($k_corec); ?>);

    // Menanggapi hasil pengiriman data
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Tanggapan dari server (jika diperlukan)
            var response = xhr.responseText;
            console.log(response); // Tampilkan di konsol untuk tujuan debug
            // Mungkin ada langkah-langkah atau tindakan lain yang perlu diambil setelah menyimpan data
            // ...
            Swal.fire({
                icon: 'success',
                title: 'Data berhasil disimpan!',
                showConfirmButton: false,
                timer: 1500
            });
        }
    };

    // Mengirim data
    xhr.send(data);
});
</script>


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