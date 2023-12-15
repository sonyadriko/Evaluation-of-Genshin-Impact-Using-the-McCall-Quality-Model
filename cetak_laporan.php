<?php  


include "model/koneksi.php";
if (isset($_GET['uji']) && !empty($_GET['uji'])) {
    $uji = $_GET['uji'];


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

    $tampil_hasil = $koneksi->query("SELECT * FROM hasil_akhir WHERE id='$uji'");

    $data_hasil= mysqli_fetch_array($tampil_hasil);


    $hasil_akhir = $koneksi->query("SELECT ROUND((((0.3 * (SELECT IFNULL((SELECT correctness.nilai_correctness FROM correctness WHERE correctness.id_correctness = (SELECT glue.id_sumber FROM glue WHERE glue.tipe_sumber = 'correctness' AND glue.id_hasilakhir = hasil_akhir.id) ORDER BY correctness.id DESC LIMIT 1),0))) + (0.2 * (SELECT IFNULL((SELECT reliability.nilai_reliability FROM reliability WHERE reliability.id_reliability = (SELECT glue.id_sumber FROM glue WHERE glue.tipe_sumber = 'reliability' AND glue.id_hasilakhir = hasil_akhir.id) ORDER BY reliability.id DESC LIMIT 1),0))) + (0.2 * (SELECT IFNULL((SELECT efficiency.nilai_efficiency FROM efficiency WHERE efficiency.id_efficiency = (SELECT glue.id_sumber FROM glue WHERE glue.tipe_sumber = 'efficiency' AND glue.id_hasilakhir = hasil_akhir.id) ORDER BY efficiency.id DESC LIMIT 1),0))) + (0.3 * (SELECT IFNULL((SELECT integrity.nilai_integrity FROM integrity WHERE integrity.id_integrity = (SELECT glue.id_sumber FROM glue WHERE glue.tipe_sumber = 'integrity' AND glue.id_hasilakhir = hasil_akhir.id) ORDER BY integrity.id DESC LIMIT 1),0))) + (0.2 * (SELECT IFNULL((SELECT usability.nilai_usability FROM usability WHERE usability.id_usability = (SELECT glue.id_sumber FROM glue WHERE glue.tipe_sumber = 'usability' AND glue.id_hasilakhir = hasil_akhir.id) ORDER BY usability.id DESC LIMIT 1),0)))) / 5) * 100, 2)AS hasil_akhir FROM hasil_akhir WHERE hasil_akhir.id='$uji'");

    $data_akhir = mysqli_fetch_array($hasil_akhir);
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Cetak Laporan Hasil Pengukuran Kualitas Software</title>
</head>

<body>

    <center>
        <table width="100%" border="0" align="center" cellspacing="1" cellpadding="1" class="no-style">
            <tbody>
                <tr>
                    <td width="140px"><img src="asset/dist/img/logo8.png" width=" 110" height="110"></td>
                    <td valign="top"><br><br>
                        <center>
                            <h1 style="color:black;font-size:16px;text-transform:uppercase;">Dinas Kearsipan dan
                                Perpustakaan Provinsi Sumatera Barat<br>
                            </h1>
                            <h3 style="font-weight:300;font-size:13px;text-transform:uppercase;">

                            </h3>

                            <p><br><span style="color:black;font-size:11px;"> Telp. :</span>
                                <span style="color:black;font-size:11px;"> Email : </span>
                                <span style="color:black;font-size:11px;"> Website : https://dap.sumbarprov.go.id/
                                </span>
                            </p>
                    </td>
                    <td width="140px"></td>
                </tr>
            </tbody>
        </table>

        <hr style="margin-top:12px;">
        <center>
            <h2>Loporan Hasil Pengukuran Sistem Informasi Perpustakaan</h2>
            <h2>Pengujian : <?php echo $data_hasil['nama_hasil']  ?></h2><br>
        </center>
        <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th {
            padding: 8px 8px;
            border: 1px solid #000000;
            text-align: center;
        }

        .table td {
            padding: 3px 3px;
            border: 1px solid #000000;
        }
        </style>
        <table border="1" style="width: 100%;">
            <thead>
                <tr>
                    <th align="center">Correctness</th>
                    <th align="center">Reliability</th>
                    <th align="center">Efficiency</th>
                    <th align="center">Integrity</th>
                    <th align="center">Usability</th>
                </tr>
            </thead>

            <tbody>
                <tr class="odd">
                    <td class=" " align="center"><?php echo $data_correctness['nilai_correctness'] ?></td>
                    <td class=" " align="center"><?php echo $data_reliability['nilai_reliability'] ?></td>
                    <td class=" " align="center"><?php echo $data_efficiency['nilai_efficiency'] ?></td>
                    <td class=" " align="center"><?php echo $data_integrity['nilai_integrity'] ?></td>
                    <td class=" " align="center"><?php echo $data_usability['nilai_usability'] ?></td>
                    <!-- <td class=" " align="center"><?php echo round($data_akhir['hasil_akhir']) ?>%</td>
                        <td class=" " align="center"><?php echo $data_akhir['hasil_akhir'] ?></td>
                        <td class=" " align="center"><?php
                        if (isset($data_akhir)){
                          if($data_akhir['hasil_akhir'] >=80 && $data_akhir['hasil_akhir'] <=100) {

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
           ?></td> -->

                </tr>

                <tr class="odd">

                    <td class=" " align="center"><?php echo $data_correctness['persentase'] ?>%</td>
                    <td class=" " align="center"><?php echo $data_reliability['persentase'] ?>%</td>
                    <td class=" " align="center"><?php echo $data_efficiency['persentase'] ?>%</td>
                    <td class=" " align="center"><?php echo $data_integrity['persentase'] ?>%</td>
                    <td class=" " align="center"><?php echo $data_usability['persentase'] ?>%</td>

                <tr>

                <tr class="odd">

                    <td class=" " align="center"><?php echo $data_correctness['kategori'] ?> </td>
                    <td class=" " align="center"><?php echo $data_reliability['kategori'] ?> </td>
                    <td class=" " align="center"><?php echo $data_efficiency['kategori'] ?> </td>
                    <td class=" " align="center"><?php echo $data_integrity['kategori'] ?> </td>
                    <td class=" " align="center"><?php echo $data_usability['kategori'] ?> </td>

                <tr>

            </tbody>
        </table>


        <div class="container">
            <h4 align="left">Hasil Persentase : <?php echo round($data_akhir['hasil_akhir']) ?>%</h4>
            <h4 align="left">Kategori Kelayakan :
                <?php
                if (isset($data_akhir)){
                  if($data_akhir['hasil_akhir'] >=80 && $data_akhir['hasil_akhir'] <=100) {

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
     ?>


            </h4>

        </div>


    </center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
        <div style="width:40%;  float:right;">Padang, 16-Januari-2022</div><br><br>
        <div style="width:40%;  float:right;">Mengetahui,</div><br>
        <div style="width:40%;  float:right;">Kepala Bidang Perpustakaan</div><br><br><br><br><br>
        <div style="width:40%;  float:right;">(___________________)</div>
    </center>
    <script>
    window.print();
    </script>

</body>

</html>