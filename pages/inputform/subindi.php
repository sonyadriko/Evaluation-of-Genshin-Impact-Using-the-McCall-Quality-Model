<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Sub Indikator</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<?php
$koneksi    = mysqli_connect('localhost', 'root', '', 'mccallgenshin');
$id_sub         = "";
$id_indikator   = "";
$indikator      = "";
$sub_indikator  = "";
$sukses         = "";
$error          = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "delete from sub_indikator where id = '$id'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id             = $_GET['id'];
    $sql1           = "select * from sub_indikator where id = '$id'";
    $q1             = mysqli_query($koneksi, $sql1);
    $r1             = mysqli_fetch_array($q1);
    $id_sub         = $r1['id_sub'];
    $id_indikator   = $r1['id_indikator'];
    $indikator      = $r1['indikator'];
    $sub_indikator  = $r1['sub_indikator'];

    if ($id_sub == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $id_sub         = $_POST['id_sub'];
    $id_indikator   = $_POST['id_indikator'];
    $indikator      = $_POST['indikator'];
    $sub_indikator  = $_POST['sub_indikator'];
    
    if ($id_sub && $id_indikator && $indikator && $sub_indikator) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update sub_indikator set id_sub = '$id_sub',id_indikator = '$id_indikator',indikator = '$indikator',sub_indikator = '$sub_indikator' where id = $id";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "insert into sub_indikator(id_sub,id_indikator,indikator,sub_indikator) values ('$id_sub','$id_indikator','$indikator','$sub_indikator')";
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub Indikator</title>
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
                Input Sub Indikator
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
                    // header("refresh:5;url=subindi.php");//5 : detik
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
                    // header("refresh:5;url=subindi.php");
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="id_sub" class="col-sm-2 col-form-label">Id_Sub</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_sub" name="id_sub"
                                value="<?php echo $id_sub ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="id_indikator" class="col-sm-2 col-form-label">Id Indikator</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_indikator" name="id_indikator"
                                value="<?php echo $id_indikator ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="indikator" class="col-sm-2 col-form-label">Indikator</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="indikator" name="indikator"
                                value="<?php echo $indikator ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="sub_indikator" class="col-sm-2 col-form-label">Sub Indikator</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sub_indikator" name="sub_indikator"
                                value="<?php echo $sub_indikator ?>">
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
                Data Sub Indikator
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <!-- <th scope="col">Id_Sub</th> -->
                            <!-- <th scope="col">Id_Indikator</th> -->
                            <th scope="col">Indikator</th>
                            <th scope="col">Sub_Indikator</th>
                            <!-- <th scope="col">Aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from sub_indikator order by id_sub asc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id             = $r2['id'];
                            $id_sub         = $r2['id_sub'];
                            $id_indikator   = $r2['id_indikator'];
                            $indikator      = $r2['indikator'];
                            $sub_indikator  = $r2['sub_indikator'];
                        ?>
                        <tr>
                            <th scope="row"><?php echo $urut++ ?></th>
                            <!-- <td scope="row"><?php echo $id_sub ?></td> -->
                            <!-- <td scope="row"><?php echo $id_indikator ?></td> -->
                            <td scope="row"><?php echo $indikator ?></td>
                            <td scope="row"><?php echo $sub_indikator ?></td>
                            <td scope="row">
                                <a href="?page=pages/inputform/subindi&op=edit&id=<?php echo $id ?>"><button
                                        type="button" class="btn btn-outline-warning">Edit</button></a>
                                <a href="?page=pages/inputform/subindi&op=delete&id=<?php echo $id?>"
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