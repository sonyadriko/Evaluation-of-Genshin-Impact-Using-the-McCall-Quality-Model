<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pertanyaan</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<?php
$koneksi    = mysqli_connect('localhost', 'root', '', 'mccallgenshin');
$sub_indikator   = "";
$pertanyaan = "";
$sukses     = "";
$error      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "delete from pertanyaan where id = '$id'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from pertanyaan where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $sub_indikator   = $r1['sub_indikator'];
    $pertanyaan = $r1['pertanyaan'];
}
if (isset($_POST['simpan'])) { //untuk create
    $sub_indikator = $_POST['sub_indikator'];
    $pertanyaan  = $_POST['pertanyaan'];

    $sql_check   = "SELECT COUNT(*) as count FROM pertanyaan WHERE pertanyaan = '$pertanyaan'";
    $q_check     = mysqli_query($koneksi, $sql_check);
    $r_check     = mysqli_fetch_assoc($q_check);

    if ($r_check['count'] > 0) {
        $error = "Pertanyaan sudah ada, silakan masukkan pertanyaan lain";
    } else {
        if ($sub_indikator && $pertanyaan) {
            if ($op == 'edit') { //untuk update
                $sql1       = "update pertanyaan set sub_indikator='$sub_indikator',pertanyaan = '$pertanyaan' where id = $id";
                $q1         = mysqli_query($koneksi, $sql1);
                if ($q1) {
                    $sukses = "Data berhasil diupdate";
                } else {
                    $error  = "Data gagal diupdate";
                }
            } else { //untuk insert
                $sql1   = "insert into pertanyaan(sub_indikator,pertanyaan) values ('$sub_indikator','$pertanyaan')";
                $q1     = mysqli_query($koneksi, $sql1);
                if ($q1) {
                    $sukses     = "Berhasil memasukkan data baru";
                } else {
                    $error      = "Gagal memasukkan data";
                }
            }
        } else {
            $error = "Silakan masukkan semua data";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertanyaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk tampil data -->
        <div class="card border-success">
            <div class="card-header text-white bg-success">
                Input Pertanyaan
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $error ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                   // header("refresh:5;url=katkel.php");//5 : detik
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $sukses ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <?php
                   // header("refresh:5;url=?page=pages/inputform/katkel");
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-2 col-form-label">Sub Indikator</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sub_indikator" name="sub_indikator"
                                value="<?php echo $sub_indikator ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="persentasi" class="col-sm-2 col-form-label">Pertanyaan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pertanyaan" name="pertanyaan"
                                value="<?php echo $pertanyaan ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Save" class="btn btn-outline-success" />
                    </div>
                </form>
            </div>
        </div>
        <!-- untuk mengeluarkan data -->
        <div class="card border-success">
            <div class="card-header text-white bg-success">
                Data Pertanyaan
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Indikator</th>
                            <th scope="col">Pertanyaan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from pertanyaan order by id asc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id                 = $r2['id'];
                            $sub_indikator      = $r2['sub_indikator'];
                            $pertanyaan         = $r2['pertanyaan'];

                        ?>
                        <tr>
                            <th scope="row"><?php echo $urut++ ?></th>
                            <td scope="row"><?php echo $sub_indikator ?></td>
                            <td scope="row"><?php echo $pertanyaan ?></td>
                            <td scope="row">
                                <a href="?page=pages/inputform/pertanyaan&op=edit&id=<?php echo $id ?>"><button
                                        type="button" class="btn btn-outline-warning">Edit</button></a>
                                <a href="?page=pages/inputform/pertanyaan&op=delete&id=<?php echo $id?>"
                                    onclick="return confirm('Yakin mau delete data?')"><button type="button"
                                        class="btn btn-outline-danger">Delete</button></a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>