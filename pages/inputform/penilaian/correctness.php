<?php
    $koneksi  = mysqli_connect('localhost', 'root', '', 'mccallgenshin');



   ?>

   <div class="content-header">
       <div class="container-fluid">
           <div class="row mb-2">
               <div class="col-sm-6">
                   <h1 class="m-0">Penilaian Correctness</h1>
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
                   Hasil Correctness
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
                            $sql2   = "select * from pertanyaan where sub_indikator = 'Completeness' order by id asc";
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

                    <p style="font-weight:bold;" class="mt-4"> Hasil Completeness: <?php echo $totalHasil1 ?> </p>

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
                            $sql2   = "select * from pertanyaan where sub_indikator = 'Consistency' order by id asc";
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
                        
                    <p style="font-weight:bold;" class="mt-4"> Hasil Consistency: <?php echo $totalHasil2 ?> </p>

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
                            $sql2   = "select * from pertanyaan where sub_indikator = 'Traceability' order by id asc";
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

                    <p style="font-weight:bold;" class="mt-4"> Hasil Traceability: <?php echo $totalHasil3 ?> </p>

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
                    <p style="font-weight:bold;" class="mt-4"> Nilai Correctness: <?php echo $hasilketemu ?> </p>
                    <p style="font-weight:bold;" class="mt-4"> Presentase Correctness: <?php echo $roundedHasilnya ?>%</p>
                    <p style="font-weight:bold;" class="mt-4"> Kategori Kelayakan: <?php echo $k_corec ?></p>


                    <button id="simpanButton" class="btn btn-primary mt-4">Simpan</button>
               </div>
           </div>
       </div>

       <script>
document.getElementById("simpanButton").addEventListener("click", function() {
    // Menggunakan Ajax untuk mengirim data ke server
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "simpan_hasil_correctnes.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Mengumpulkan data yang ingin disimpan
    var data = "totalHasil1=" + encodeURIComponent(<?php echo json_encode($totalHasil1); ?>) +
               "&totalHasil2=" + encodeURIComponent(<?php echo json_encode($totalHasil2); ?>) +
               "&totalHasil3=" + encodeURIComponent(<?php echo json_encode($totalHasil3); ?>) +
               "&totalcorrectness=" + encodeURIComponent(<?php echo json_encode($hasilketemu); ?>) +
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
        }
    };

    // Mengirim data
    xhr.send(data);
});
</script>


       <?php
if(isset($_POST['save'])) {
    $id_correctness = $_POST['id_correctness'];
    $nilai_completeness = $_POST['hasilnya'];
    $nilai_consistency = $_POST['hasilcst'];
    $nilai_treacebility = $_POST['hasiltre'];
    $nilai_correctness = $_POST['n_corec'];
    $persentase = $_POST['p_corec'];
    $kategori = $_POST['k_corec'];
    $uji = $_POST['uji'];


    // proses insert and validasi
    $cek_data = mysqli_num_rows($koneksi->query("SELECT * FROM glue WHERE id_sumber = '$id_correctness'"));
    if ($cek_data > 0) {
        echo "<script>alert('Pengujian sudah ada!');</script>";
        echo "<meta http-equiv='refresh' content='0;url=?page=pages/inputform/penilaian/correctness'>";
    }else{
        
     $insert = $koneksi->query("INSERT INTO correctness(id_correctness, nilai_completeness, nilai_consistency, nilai_treacebility, nilai_correctness, persentase, kategori) VALUES ('$id_correctness', '$nilai_completeness','$nilai_consistency','$nilai_treacebility','$nilai_correctness','$persentase','$kategori')");
    // $correctness_id = $koneksi->insert_id;
     $insert = $koneksi->query("INSERT INTO glue(id_hasilakhir, id_sumber, tipe_sumber) VALUES ('$uji', '$id_correctness','correctness')");
     if($insert){
        echo"<script>alert('Penambahan Berhasil');
        window.location='?page=pages/inputform/penilaian/correctness';
        </script>";
    }else{
        echo"<script>alert('Penambahan Gagal');</script>";
    }


} 


}
?>


       <script>
       // Perhitungan Completeness
       function hasil() {
           var bobot = $('#bobot').val();
           var avg = $('#avg').val();
           var hasil = (bobot * avg).toFixed(2);
           $("#wncn").val(hasil);

       }

       function hasil1() {
           var bobot = $('#bobot1').val();
           var avg = $('#avg1').val();
           var hasil = (bobot * avg).toFixed(2);
           $("#wncn1").val(hasil);
       }

       function hasil2() {
           var bobot = $('#bobot2').val();
           var avg = $('#avg2').val();
           var hasil = (bobot * avg).toFixed(2);
           $("#wncn2").val(hasil);
       }

       function hasil3() {
           var bobot = $('#bobot3').val();
           var avg = $('#avg3').val();
           var hasil = (bobot * avg).toFixed(2);
           $("#wncn3").val(hasil);
       }

       function hasil4() {
           var bobot = $('#bobot4').val();
           var avg = $('#avg4').val();
           var hasil = (bobot * avg).toFixed(2);
           $("#wncn4").val(hasil);
       }

       function hasil5() {
           var bobot = $('#bobot5').val();
           var avg = $('#avg5').val();
           var hasil = (bobot * avg).toFixed(2);
           $("#wncn5").val(hasil);
       }

       function hasil6() {
           var bobot = $('#bobot6').val();
           var avg = $('#avg6').val();
           var hasil = (bobot * avg).toFixed(2);
           $("#wncn6").val(hasil);
       }

       function hasil7() {
           var bobot = $('#bobot7').val();
           var avg = $('#avg7').val();
           var hasil = (bobot * avg).toFixed(2);
           $("#wncn7").val(hasil);
       }


       function hasil8() {
           var bobot = $('#bobot4').val();
           var avg = $('#avg8').val();
           var hasil = (bobot * avg).toFixed(2);
           $("#wncn8").val(hasil);
       }

       function hasil9() {
           var bobot = $('#bobot9').val();
           var avg = $('#avg9').val();
           var hasil = (bobot * avg).toFixed(2);
           $("#wncn9").val(hasil);
       }
       function hasil10() {
           var bobot = $('#bobot10').val();
           var avg = $('#avg10').val();
           var hasil = (bobot * avg).toFixed(2);
           $("#wncn10").val(hasil);
       }
       function hasil11() {
           var bobot = $('#bobot11').val();
           var avg = $('#avg11').val();
           var hasil = (bobot * avg).toFixed(2);
           $("#wncn11").val(hasil);
       }
       function hasil12() {
           var bobot = $('#bobot12').val();
           var avg = $('#avg12').val();
           var hasil = (bobot * avg).toFixed(2);
           $("#wncn12").val(hasil);
       }

       function hasil_akhir() {
           var hasil1 = $('#wncn').val();
           var hasil2 = $('#wncn1').val();
           var hasil3 = $('#wncn2').val();
           var hasil4 = $('#wncn3').val();
           var hasil5 = $('#wncn4').val();
           var hasil6 = $('#wncn5').val();
           var hasil7 = $('#wncn6').val();
           var hasil8 = $('#wncn7').val();
           var hasil9 = $('#wncn8').val();
           var hasil10 = $('#wncn9').val();
           var hasil11 = $('#wncn10').val();
           var hasil12 = $('#wncn11').val();
           var ketemu = Number(hasil1) + Number(hasil2) + Number(hasil3) + Number(hasil4) + Number(hasil5) + Number(hasil6) + Number(hasil7) + Number(hasil8) + Number(hasil9) + Number(hasil10) + Number(hasil11) + Number(hasil12);
           $('#hasilnya').val(ketemu.toFixed(2));

       }

       // Perhitungan consistency
       function hasil_consistency() {
           var bobot1 = $('#bobot12').val();
           var avgc = $('#avg_consistency').val();
           var hasil1 = (bobot1 * avgc).toFixed(2);
           $('#wcnc_consistency').val(hasil1);
       }

       function hasil_consistency1() {
           var bobot2 = $('#bobot13').val();
           var avg = $('#avg_consistency1').val();
           var hasil = (bobot2 * avg).toFixed(2);
           $("#wcnc_consistency1").val(hasil);
       }

       function hasil_consistency2() {
           var bobot3 = $('#bobot14').val();
           var avg = $('#avg_consistency2').val();
           var hasil = (bobot3 * avg).toFixed(2);
           $("#wcnc_consistency2").val(hasil);
       }

       function hasil_consistency3() {
           var bobot4 = $('#bobot15').val();
           var avg = $('#avg_consistency3').val();
           var hasil = (bobot4 * avg).toFixed(2);
           $("#wcnc_consistency3").val(hasil);
       }

       function hasil_consistency4() {
           var bobot5 = $('#bobot16').val();
           var avg = $('#avg_consistency4').val();
           var hasil = (bobot5 * avg).toFixed(2);
           $("#wcnc_consistency4").val(hasil);
       }

       function hasil_consistency5() {
           var bobot6 = $('#bobot17').val();
           var avg = $('#avg_consistency5').val();
           var hasil = (bobot6 * avg).toFixed(2);
           $("#wcnc_consistency5").val(hasil);
       }

       function hasil_akhirconsistency() {
           var hasil1 = $('#wcnc_consistency').val();
           var hasil2 = $('#wcnc_consistency1').val();
           var hasil3 = $('#wcnc_consistency2').val();
           var hasil4 = $('#wcnc_consistency3').val();
           var hasil5 = $('#wcnc_consistency4').val();
           var hasil6 = $('#wcnc_consistency5').val();
           var ketemu = Number(hasil1) + Number(hasil2) + Number(hasil3) + Number(hasil4) + Number(hasil5) + Number(hasil6);
           $('#hasilcst').val(ketemu.toFixed(2));
       }


       // perhitungan Treceability
       function hasil_Treceability() {
           var bobot6 = $('#bobot18').val();
           var avg = $('#avg_treacebility').val();
           var hasil = (bobot6 * avg).toFixed(2);
           $("#wcnc_consistencyt").val(hasil);
       }
       function hasil_Treceability1() {
           var bobot7 = $('#bobot19').val();
           var avg = $('#avg_treacebility1').val();
           var hasil = (bobot7 * avg).toFixed(2);
           $("#wcnc_consistencyt1").val(hasil);
       }
       function hasil_Treceability2() {
           var bobot8 = $('#bobot20').val();
           var avg = $('#avg_treacebility2').val();
           var hasil = (bobot8 * avg).toFixed(2);
           $("#wcnc_consistencyt2").val(hasil);
       }
       function hasil_Treceability3() {
           var bobot9 = $('#bobot21').val();
           var avg = $('#avg_treacebility3').val();
           var hasil = (bobot9 * avg).toFixed(2);
           $("#wcnc_consistencyt3").val(hasil);
       }
       function hasil_Treceability4() {
           var bobot10 = $('#bobot22').val();
           var avg = $('#avg_treacebility4').val();
           var hasil = (bobot10 * avg).toFixed(2);
           $("#wcnc_consistencyt4").val(hasil);
       }
       function hasil_akhirTreceability() {
           var hasil1 = $('#wcnc_consistencyt').val();
           var hasil2 = $('#wcnc_consistencyt1').val();
           var hasil3 = $('#wcnc_consistencyt2').val();
           var hasil4 = $('#wcnc_consistencyt3').val();
           var hasil5 = $('#wcnc_consistencyt4').val();
           var ketemu = Number(hasil1) + Number(hasil2) + Number(hasil3) + Number(hasil4) + Number(hasil5);
           $('#hasiltre').val(ketemu.toFixed(2));
       }
       // total Keseluruhan
       function hasil_keseluruhan() {
           // nilai corectnes
           var total1 = $('#hasilnya').val();
           var total2 = $('#hasilcst').val();
           var total3 = $('#hasiltre').val();
           console.log(total1);
           console.log(total2);
           console.log(total3);
           var ketemu = ((Number(total1) + Number(total2) + Number(total3)) / 3);
           var hasil = Math.min(ketemu, 5);
           console.log(hasil);
           $("#n_corec").val(hasil.toFixed(2));

           // persentase corectness
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

       // tampil Completeness
       function myfunction() {
        var x = $('#ganti').val();

        $.post(
            "pages/inputform/ganti.php", {
                bobot: x
            },
            (result) => {
                console.log('Response from server:', result);
                try {
                    result = JSON.parse(result);
                    console.log(result);
                    $('#bobot').val(result.bobot_pertanyaan);
                } catch (error) {
                    console.error('Error parsing JSON:', error);
                }
            }
        );
    }


       function myfunction1() {
           var y = $('#ganti1').val();

           $.post(
               "pages/inputform/ganti.php", {
                   bobot: y
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   $('#bobot1').val(result.bobot_pertanyaan);
               }

           );
       }


       function myfunction2() {
           var y = $('#ganti2').val();

           $.post(
               "pages/inputform/ganti.php", {
                   bobot: y
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   $('#bobot2').val(result.bobot_pertanyaan);
               }

           );
       }

       function myfunction3() {
           var y = $('#ganti3').val();

           $.post(
               "pages/inputform/ganti.php", {
                   bobot: y
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   $('#bobot3').val(result.bobot_pertanyaan);
               }

           );
       }

       function myfunction4() {
           var y = $('#ganti4').val();

           $.post(
               "pages/inputform/ganti.php", {
                   bobot: y
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   $('#bobot4').val(result.bobot_pertanyaan);
               }

           );
       }

       function myfunction5() {
           var y = $('#ganti5').val();

           $.post(
               "pages/inputform/ganti.php", {
                   bobot: y
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   $('#bobot5').val(result.bobot_pertanyaan);
               }

           );
       }

       function myfunction6() {
           var y = $('#ganti6').val();

           $.post(
               "pages/inputform/ganti.php", {
                   bobot: y
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   $('#bobot6').val(result.bobot_pertanyaan);
               }

           );
       }

       function myfunction7() {
           var y = $('#ganti7').val();

           $.post(
               "pages/inputform/ganti.php", {
                   bobot: y
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   $('#bobot7').val(result.bobot_pertanyaan);
               }

           );
       }


       function myfunction8() {
           var y = $('#ganti8').val();

           $.post(
               "pages/inputform/ganti.php", {
                   bobot: y
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   $('#bobot8').val(result.bobot_pertanyaan);
               }

           );
       }

       function myfunction9() {
           var y = $('#ganti9').val();

           $.post(
               "pages/inputform/ganti.php", {
                   bobot: y
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   $('#bobot9').val(result.bobot_pertanyaan);
               }

           );
       }


       function myfunction10() {
           var y = $('#ganti10').val();

           $.post(
               "pages/inputform/ganti.php", {
                   bobot: y
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   $('#bobot10').val(result.bobot_pertanyaan);
               }

           );
       }


       function myfunction11() {
           var y = $('#ganti11').val();

           $.post(
               "pages/inputform/ganti.php", {
                   bobot: y
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   $('#bobot11').val(result.bobot_pertanyaan);
               }

           );
       }


       function myfunction12() {
           var y = $('#ganti5').val();

           $.post(
               "pages/inputform/ganti.php", {
                   bobot: y
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   $('#bobot12').val(result.bobot_pertanyaan);
               }

           );
       }


       // tampil consistency
       function myfunctioncy() {
           var c = $('#consistency').val();

           $.post(
               "pages/inputform/consistency.php", {
                   bobot: c
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   if (result) {
                       $('#bobot12').val(result.bobot_pertanyaan);
                   } else {
                       $('#bobot12').val("");
                   }

               }
           );
       }

       function myfunctioncy1() {
           var d = $('#consistency1').val();

           $.post(
               "pages/inputform/consistency.php", {
                   bobot: d
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   if (result) {
                       $('#bobot13').val(result.bobot_pertanyaan);
                   } else {
                       $('#bobot13').val("");
                   }

               }
           );
       }

       function myfunctioncy2() {
           var e = $('#consistency2').val();

           $.post(
               "pages/inputform/consistency.php", {
                   bobot: e
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   if (result) {
                       $('#bobot14').val(result.bobot_pertanyaan);
                   } else {
                       $('#bobot14').val("");
                   }

               }
           );
       }

       function myfunctioncy3() {
           var f = $('#consistency3').val();

           $.post(
               "pages/inputform/consistency.php", {
                   bobot: f
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   if (result) {
                       $('#bobot15').val(result.bobot_pertanyaan);
                   } else {
                       $('#bobot15').val("");
                   }

               }
           );
       }

       function myfunctioncy4() {
           var f = $('#consistency4').val();

           $.post(
               "pages/inputform/consistency.php", {
                   bobot: f
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   if (result) {
                       $('#bobot16').val(result.bobot_pertanyaan);
                   } else {
                       $('#bobot16').val("");
                   }

               }
           );
       }

       function myfunctioncy5() {
           var f = $('#consistency5').val();

           $.post(
               "pages/inputform/consistency.php", {
                   bobot: f
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)
                   if (result) {
                       $('#bobot17').val(result.bobot_pertanyaan);
                   } else {
                       $('#bobot17').val("");
                   }

               }
           );
       }


       // tampil treacebility

       function myfunctioncyt1() {
           var g = $('#treacebility').val();

           $.post(
               "pages/inputform/treacibility.php", {
                   bobot: g
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)

                   if (result) {
                       $('#bobot18').val(result.bobot_pertanyaan);
                   } else {
                       $('#bobot18').val("");
                   }


               }
           );
        }
        function myfunctioncyt2() {
           var g = $('#treacebility1').val();

           $.post(
               "pages/inputform/treacibility.php", {
                   bobot: g
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)

                   if (result) {
                       $('#bobot19').val(result.bobot_pertanyaan);
                   } else {
                       $('#bobot19').val("");
                   }


               }
           );
       }
       function myfunctioncyt3() {
           var g = $('#treacebility2').val();

           $.post(
               "pages/inputform/treacibility.php", {
                   bobot: g
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)

                   if (result) {
                       $('#bobot20').val(result.bobot_pertanyaan);
                   } else {
                       $('#bobot20').val("");
                   }


               }
           );
       }
       function myfunctioncyt4() {
           var g = $('#treacebility3').val();

           $.post(
               "pages/inputform/treacibility.php", {
                   bobot: g
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)

                   if (result) {
                       $('#bobot21').val(result.bobot_pertanyaan);
                   } else {
                       $('#bobot21').val("");
                   }


               }
           );
       }
       function myfunctioncyt5() {
           var g = $('#treacebility4').val();

           $.post(
               "pages/inputform/treacibility.php", {
                   bobot: g
               },
               (result) => {
                   result = JSON.parse(result)
                   console.log(result)

                   if (result) {
                       $('#bobot22').val(result.bobot_pertanyaan);
                   } else {
                       $('#bobot22').val("");
                   }


               }
           );
       }
       </script>

   </body>

   </html>