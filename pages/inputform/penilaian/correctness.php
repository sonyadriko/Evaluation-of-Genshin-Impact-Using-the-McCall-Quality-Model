<?php
    $koneksi  = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');



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
                   Input Correctness
               </div>
               <div class="card-body">
                   <!-- Pertanyaan Completeness -->
                   <form action="" method="POST">
                        <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">Id_Correctness</label>
                           <div class="col order-5">
                               <input type="text" class="form-control col-md-1" id="id_correctness"
                                   name="id_correctness">
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
                                  $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');

                                $query = mysqli_query($koneksi, "SELECT * FROM `hasil_akhir`");

                                while($data = mysqli_fetch_array($query)) {
                                    ?>
                                   <option value="<?php echo $data['id']?>"><?php echo $data['nama_hasil']?></option>
                                   <?php  } ?>
                               </select>
                           </div>
                       </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">1. Pertanyaan Completeness</label>
                            <div class="col-sm-10">
                                <!-- 
                                <input name="cmd_show" type="text" value="true" /> -->
                                <select name="pertanyaan_completeness" class="form-control" name="correctness" id="ganti"
                                    onchange="myfunction()">
                                    <option value="">- Pilih -</option>
                                    <?php
                                    $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');


                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Completeness'");
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
                                        <input type="text" class="form-control col-md-3" id="avg" name="avg" value="">
                                    </div>
                                </div>
                                <div class="col order-1">
                                    <label for="" class="form-label"></label>
                                    <button type="button" class="btn btn-success col-md-3" onclick="hasil()"
                                        style="margin-top: 26px;">
                                        Hasil</button>
                                </div>
                                <div class="col order-5">
                                    <label for="" class="form-label">wncn</label>
                                    <div class="">
                                        <input type="text" class="form-control col-md-3" id="wncn" name="wncn" value=""
                                            readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">2. Pertanyaan Completeness</label>
                           <div class="col-sm-10">
                               <!-- 
                            <input name="cmd_show" type="text" value="true" /> -->
                               <select name="pertanyaan_completeness" class="form-control" name="" name="correctness"
                                   id="ganti1" onchange="myfunction1()">
                                   <option value="">- Pilih -</option>
                                   <?php
                                   $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');


                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Completeness'");
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
                                       <input type="text" class="form-control col-md-3" id="bobot1" name="bobot1"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg1" name="avg" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil1()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wncn1" name="wncn" value=""
                                           readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">3. Pertanyaan Completeness</label>
                           <div class="col-sm-10">
                               <!-- 
                            <input name="cmd_show" type="text" value="true" /> -->
                               <select name="pertanyaan_completeness" class="form-control" name="" name="correctness"
                                   id="ganti2" onchange="myfunction2()">
                                   <option value="">- Pilih -</option>
                                   <?php
                               $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');


                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Completeness'");
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
                                       <input type="text" class="form-control col-md-3" id="bobot2" name="bobot"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg2" name="avg" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil2()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wncn2" name="wncn" value=""
                                           readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">4. Pertanyaan Completeness</label>
                           <div class="col-sm-10">
                               <!-- 
                            <input name="cmd_show" type="text" value="true" /> -->
                               <select name="pertanyaan_completeness" class="form-control" name="" name="correctness"
                                   id="ganti3" onchange="myfunction3()">
                                   <option value="">- Pilih -</option>
                                   <?php
                                   $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Completeness'");
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
                                       <input type="text" class="form-control col-md-3" id="bobot3" name="bobot3"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg3" name="avg" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil3()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wncn3" name="wncn" value=""
                                           readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">5. Pertanyaan Completeness</label>
                           <div class="col-sm-10">
                               <!-- 
                            <input name="cmd_show" type="text" value="true" /> -->
                               <select name="pertanyaan_completeness" class="form-control" name="" name="correctness"
                                   id="ganti4" onchange="myfunction4()">
                                   <option value="">- Pilih -</option>
                                   <?php
                                   $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Completeness'");
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
                                       <input type="text" class="form-control col-md-3" id="bobot4" name="bobot4"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg4" name="avg" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil4()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wncn4" name="wncn" value=""
                                           readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">6. Pertanyaan Completeness</label>
                           <div class="col-sm-10">
                               <!-- 
                            <input name="cmd_show" type="text" value="true" /> -->
                               <select name="pertanyaan_completeness" class="form-control" name="" name="correctness"
                                   id="ganti5" onchange="myfunction5()">
                                   <option value="">- Pilih -</option>
                                   <?php
                                   $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Completeness'");
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
                                       <input type="text" class="form-control col-md-3" id="bobot5" name="bobot5"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg5" name="avg" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil5()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wncn5" name="wncn" value=""
                                           readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">7. Pertanyaan Completeness</label>
                           <div class="col-sm-10">
                               <!-- 
                            <input name="cmd_show" type="text" value="true" /> -->
                               <select name="pertanyaan_completeness" class="form-control" name="" name="correctness"
                                   id="ganti6" onchange="myfunction6()">
                                   <option value="">- Pilih -</option>
                                   <?php
                                   $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Completeness'");
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
                                       <input type="text" class="form-control col-md-3" id="bobot6" name="bobot6"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg6" name="avg" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil6()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wncn6" name="wncn" value=""
                                           readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">8. Pertanyaan Completeness</label>
                           <div class="col-sm-10">
                               <!-- 
                            <input name="cmd_show" type="text" value="true" /> -->
                               <select name="pertanyaan_completeness" class="form-control" name="" name="correctness"
                                   id="ganti7" onchange="myfunction7()">
                                   <option value="">- Pilih -</option>
                                   <?php
                                   $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Completeness'");
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
                                       <input type="text" class="form-control col-md-3" id="bobot7" name="bobot7"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg7" name="avg" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil7()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wncn7" name="wncn" value=""
                                           readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">9. Pertanyaan Completeness</label>
                           <div class="col-sm-10">
                               <!-- 
                            <input name="cmd_show" type="text" value="true" /> -->
                               <select name="pertanyaan_completeness" class="form-control" name="" name="correctness"
                                   id="ganti8" onchange="myfunction8()">
                                   <option value="">- Pilih -</option>
                                   <?php
                                   $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Completeness'");
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
                                       <input type="text" class="form-control col-md-3" id="bobot8" name="bobot8"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg8" name="avg" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil8()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wncn8" name="wncn" value=""
                                           readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">10. Pertanyaan Completeness</label>
                           <div class="col-sm-10">
                               <!-- 
                            <input name="cmd_show" type="text" value="true" /> -->
                               <select name="pertanyaan_completeness" class="form-control" name="" name="correctness"
                                   id="ganti9" onchange="myfunction9()">
                                   <option value="">- Pilih -</option>
                                   <?php
                                   $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Completeness'");
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
                                       <input type="text" class="form-control col-md-3" id="bobot9" name="bobot9"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg9" name="avg" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil9()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wncn9" name="wncn" value=""
                                           readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">11. Pertanyaan Completeness</label>
                           <div class="col-sm-10">
                               <!-- 
                            <input name="cmd_show" type="text" value="true" /> -->
                               <select name="pertanyaan_completeness" class="form-control" name="" name="correctness"
                                   id="ganti10" onchange="myfunction10()">
                                   <option value="">- Pilih -</option>
                                   <?php
                                   $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Completeness'");
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
                                       <input type="text" class="form-control col-md-3" id="bobot10" name="bobot10"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg10" name="avg" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil10()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wncn10" name="wncn" value=""
                                           readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">12. Pertanyaan Completeness</label>
                           <div class="col-sm-10">
                               <!-- 
                            <input name="cmd_show" type="text" value="true" /> -->
                               <select name="pertanyaan_completeness" class="form-control" name="" name="correctness"
                                   id="ganti11" onchange="myfunction11()">
                                   <option value="">- Pilih -</option>
                                   <?php
                                   $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Completeness'");
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
                                       <input type="text" class="form-control col-md-3" id="bobot11" name="bobot11"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg11" name="avg" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil11()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wncn11" name="wncn" value=""
                                           readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <hr>
                       <div class="mb-3 row">
                           <button type="button" class="col-sm-2 col-btn btn-success" onclick="hasil_akhir()">Hasil
                               Completeness</button>
                           <div class="col order-5">
                               <input type="text" class="form-control col-md-1" id="hasilnya" name="hasilnya" readonly>
                           </div>
                       </div>
                       <hr>
                       <!--    </form> -->


                       <!-- Pertanyaan Consistency -->
                       <!-- <form action="" method="POST"> -->
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">1. Pertanyaan Consistency</label>
                           <div class="col-sm-10">
                               <select name="pertanyaan_completeness" class="form-control" name="consistency"
                                   id="consistency" onchange="myfunctioncy()">
                                   <option value="">- Pilih -</option>
                                   <?php
                                        $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');

                                        $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Consistency'");

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                   <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                   <?php } ?>
                               </select>
                           </div>
                       </div>
                       <div class="container mb-3">
                           <div class="row">
                               <div class="col">
                                   <label for="" class="form-label">Bobot</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="bobot12" name="bobot12"
                                           value="" readonly>

                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg_consistency"
                                           name="avg_consistency" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil_consistency()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wcnc_consistency"
                                           name="wcnc_consistency" value="" readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">2. Pertanyaan Consistency</label>
                           <div class="col-sm-10">
                               <select name="pertanyaan_completeness" class="form-control" name="consistency"
                                   id="consistency1" onchange="myfunctioncy1()">
                                   <option value="">- Pilih -</option>
                                   <?php
                                   $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');


                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Consistency'");

                                    while($data = mysqli_fetch_array($query)) {
                                        ?>
                                   <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                   <?php } ?>
                               </select>
                           </div>
                       </div>
                       <div class="container mb-3">
                           <div class="row">
                               <div class="col">
                                   <label for="" class="form-label">Bobot</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="bobot13" name="bobot13"
                                           value="" readonly>

                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg_consistency1"
                                           name="avg_consistency1" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil_consistency1()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wcnc_consistency1"
                                           name="wcnc_consistency1" value="" readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">3. Pertanyaan Consistency</label>
                           <div class="col-sm-10">
                               <select name="pertanyaan_completeness" class="form-control" name="consistency"
                                   id="consistency2" onchange="myfunctioncy2()">
                                   <option value="">- Pilih -</option>
                                   <?php
                               $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');


                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Consistency'");

                                while($data = mysqli_fetch_array($query)) {
                                    ?>
                                   <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                   <?php } ?>
                               </select>
                           </div>
                       </div>
                       <div class="container mb-3">
                           <div class="row">
                               <div class="col">
                                   <label for="" class="form-label">Bobot</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="bobot14" name="bobot14"
                                           value="" readonly>

                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg_consistency2"
                                           name="avg_consistency2" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil_consistency2()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wcnc_consistency2"
                                           name="wcnc_consistency2" value="" style="width: 200px;" readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">4. Pertanyaan Consistency</label>
                           <div class="col-sm-10">
                               <select name="pertanyaan_completeness" class="form-control" name="consistency"
                                   id="consistency3" onchange="myfunctioncy3()">
                                   <option value="">- Pilih -</option>
                                   <?php
                           $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');


                            $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Consistency'");

                            while($data = mysqli_fetch_array($query)) {
                                ?>
                                   <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                   <?php } ?>
                               </select>
                           </div>
                       </div>
                       <div class="container mb-3">
                           <div class="row">
                               <div class="col">
                                   <label for="" class="form-label">Bobot</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="bobot15" name="bobot15"
                                           value="" readonly>

                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg_consistency3"
                                           name="avg_consistency3" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil_consistency3()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wcnc_consistency3"
                                           name="wcnc_consistency3" value="" readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">5. Pertanyaan Consistency</label>
                           <div class="col-sm-10">
                               <select name="pertanyaan_completeness" class="form-control" name="consistency"
                                   id="consistency4" onchange="myfunctioncy4()">
                                   <option value="">- Pilih -</option>
                                   <?php
                           $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');


                            $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Consistency'");

                            while($data = mysqli_fetch_array($query)) {
                                ?>
                                   <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                   <?php } ?>
                               </select>
                           </div>
                       </div>
                       <div class="container mb-3">
                           <div class="row">
                               <div class="col">
                                   <label for="" class="form-label">Bobot</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="bobot16" name="bobot16"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg_consistency4"
                                           name="avg_consistency4" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil_consistency4()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wcnc_consistency4"
                                           name="wcnc_consistency4" value="" readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">6. Pertanyaan Consistency</label>
                           <div class="col-sm-10">
                               <select name="pertanyaan_completeness" class="form-control" name="consistency"
                                   id="consistency5" onchange="myfunctioncy5()">
                                   <option value="">- Pilih -</option>
                                   <?php
                           $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');


                            $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Consistency'");

                            while($data = mysqli_fetch_array($query)) {
                                ?>
                                   <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                   <?php } ?>
                               </select>
                           </div>
                       </div>
                       <div class="container mb-3">
                           <div class="row">
                               <div class="col">
                                   <label for="" class="form-label">Bobot</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="bobot17" name="bobot17"
                                           value="" readonly>

                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg_consistency5"
                                           name="avg_consistency5" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil_consistency5()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wcnc_consistency5"
                                           name="wcnc_consistency5" value="" readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <hr>
                       <div class="mb-3 row">
                           <button type="button" class="col-sm-2 col-btn btn-success"
                               onclick="hasil_akhirconsistency()">Hasil Consistency</button>
                           <div class="col order-5">
                               <input type="text" class="form-control col-md-1" id="hasilcst" name="hasilcst" value=""
                                   readonly>
                           </div>
                       </div>
                       <!--     </form> -->
                       <hr>
                       <!--  <form action="" method="POST"> -->
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">1. Pertanyaan
                               Treaceability</label>
                           <div class="col-sm-10">
                               <select name="pertanyaan_completeness" class="form-control" name="treacebility"
                                   id="treacebility" onchange="myfunctioncyt1()">
                                   <option value="">- Pilih -</option>
                                   <?php
                           $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');


                            $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Traceability'");

                            while($data = mysqli_fetch_array($query)) {
                                ?>
                                   <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                   <?php } ?>
                               </select>
                           </div>
                       </div>
                       <div class="container mb-3">
                           <div class="row">
                               <div class="col">
                                   <label for="" class="form-label">Bobot</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="bobot18" name="bobot18"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg_treacebility"
                                           name="avg_treacebility" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil_Treceability()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wcnc_consistencyt"
                                           name="wcnc_consistencyt" value="" readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">2. Pertanyaan
                               Treaceability</label>
                           <div class="col-sm-10">
                               <select name="pertanyaan_completeness" class="form-control" name="treacebility1"
                                   id="treacebility1" onchange="myfunctioncyt2()">
                                   <option value="">- Pilih -</option>
                                   <?php
                           $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');


                            $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Traceability'");

                            while($data = mysqli_fetch_array($query)) {
                                ?>
                                   <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                   <?php } ?>
                               </select>
                           </div>
                       </div>
                       <div class="container mb-3">
                           <div class="row">
                               <div class="col">
                                   <label for="" class="form-label">Bobot</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="bobot19" name="bobot19"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg_treacebility1"
                                           name="avg_treacebility1" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil_Treceability1()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wcnc_consistencyt1"
                                           name="wcnc_consistencyt1" value="" readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">3. Pertanyaan
                               Treaceability</label>
                           <div class="col-sm-10">
                               <select name="pertanyaan_completeness" class="form-control" name="treacebility2"
                                   id="treacebility2" onchange="myfunctioncyt3()">
                                   <option value="">- Pilih -</option>
                                   <?php
                           $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');


                            $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Traceability'");

                            while($data = mysqli_fetch_array($query)) {
                                ?>
                                   <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                   <?php } ?>
                               </select>
                           </div>
                       </div>
                       <div class="container mb-3">
                           <div class="row">
                               <div class="col">
                                   <label for="" class="form-label">Bobot</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="bobot20" name="bobot20"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg_treacebility2"
                                           name="avg_treacebility2" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil_Treceability2()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wcnc_consistencyt2"
                                           name="wcnc_consistencyt2" value="" readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">4. Pertanyaan
                               Treaceability</label>
                           <div class="col-sm-10">
                               <select name="pertanyaan_completeness" class="form-control" name="treacebility3"
                                   id="treacebility3" onchange="myfunctioncyt4()">
                                   <option value="">- Pilih -</option>
                                   <?php
                           $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');


                            $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Traceability'");

                            while($data = mysqli_fetch_array($query)) {
                                ?>
                                   <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                   <?php } ?>
                               </select>
                           </div>
                       </div>
                       <div class="container mb-3">
                           <div class="row">
                               <div class="col">
                                   <label for="" class="form-label">Bobot</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="bobot21" name="bobot21"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg_treacebility3"
                                           name="avg_treacebility3" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil_Treceability3()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wcnc_consistencyt3"
                                           name="wcnc_consistencyt3" value="" readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">5. Pertanyaan
                               Treaceability</label>
                           <div class="col-sm-10">
                               <select name="pertanyaan_completeness" class="form-control" name="treacebility4"
                                   id="treacebility4" onchange="myfunctioncyt5()">
                                   <option value="">- Pilih -</option>
                                   <?php
                           $koneksi    = mysqli_connect('localhost', 'root', '', 'dbmansyah_mccall');


                            $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Traceability'");

                            while($data = mysqli_fetch_array($query)) {
                                ?>
                                   <option value="<?php echo $data['id']?>"><?php echo $data['pertanyaan']?></option>
                                   <?php } ?>
                               </select>
                           </div>
                       </div>
                       <div class="container mb-3">
                           <div class="row">
                               <div class="col">
                                   <label for="" class="form-label">Bobot</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="bobot22" name="bobot22"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg_treacebility4"
                                           name="avg_treacebility4" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil_Treceability4()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wcnc_consistencyt4"
                                           name="wcnc_consistencyt4" value="" readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <hr>

                       <div class="mb-3 row">
                           <button type="button" class="col-sm-2 col-btn btn-success"
                               onclick="hasil_akhirTreceability()">Hasil
                               Treaceability</button>
                           <div class="col order-5">
                               <input type="text" class="form-control col-md-1" id="hasiltre" name="hasiltre" value=""
                                   readonly>
                           </div>
                       </div>
                       <hr>
                       <hr>
                       <div class="mb-3 row">
                           <button type="button" class="col-sm-2 col-btn btn-success"
                               onclick="hasil_keseluruhan()">Hasil Akhir</button>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">Nilai Correctness</label>
                           <div class="col-sm-10">
                               <input type="text" class="form-control col-md-1" id="n_corec" name="n_corec" value=""
                                   readonly>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">Persentase Correctness</label>
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