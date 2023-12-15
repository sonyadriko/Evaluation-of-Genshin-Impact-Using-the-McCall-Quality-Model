<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Nama Uji</h1>
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
                Input Nama Uji
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama Uji</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="uji" id="uji">
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
        $nama_hasil = $_POST['uji'];



        $insert = $koneksi->query("INSERT INTO hasil_akhir(nama_hasil, persentase, kategory) VALUES ('$nama_hasil','0','')");
        if($insert){
            echo"<script>alert('Penambahan Berhasil');
            window.location='?page=pages/inputform/penilaian/tambah_ujikelayakan';
            </script>";
        }else{
            echo"<script>alert('Penambahan Gagal');</script>";
        }
    }
    ?>
</body>

</html>