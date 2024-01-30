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
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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

            // Menampilkan SwalFire success alert
            Swal.fire({
                icon: 'success',
                title: 'Data berhasil disimpan!',
                showConfirmButton: false,
                timer: 1500
            });

            // Mungkin ada langkah-langkah atau tindakan lain yang perlu diambil setelah menyimpan data
            // ...
        }
    };

    // Mengirim data
    xhr.send(data);
});
</script>

   </body>

   </html>