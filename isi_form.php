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
$id_pertanyaan      = "";
$sub_indikator      = "";
$pertanyaan         = "";
$bobot_pertanyaan   = "";
$sukses             = "";
$error              = "";

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
    $id                 = $_GET['id'];
    $sql1               = "select * from pertanyaan where id = '$id'";
    $q1                 = mysqli_query($koneksi, $sql1);
    $r1                 = mysqli_fetch_array($q1);
    $id_pertanyaan      = $r1['id_pertanyaan'];
    $sub_indikator      = $r1['sub_indikator'];
    $pertanyaan         = $r1['pertanyaan'];
    $bobot_pertanyaan   = $r1['bobot_pertanyaan'];
    
    if ($id_pertanyaan == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $id_pertanyaan      = $_POST['id_pertanyaan'];
    $sub_indikator      = $_POST['sub_indikator'];
    $pertanyaan         = $_POST['pertanyaan'];
    $bobot_pertanyaan   = $_POST['bobot_pertanyaan'];
    
    if ($id_pertanyaan && $sub_indikator && $pertanyaan && $bobot_pertanyaan) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update pertanyaan set id_pertanyaan = '$id_pertanyaan',sub_indikator  = '$sub_indikator ',pertanyaan = '$pertanyaan',bobot_pertanyaan = '$bobot_pertanyaan' where id = $id";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "insert into pertanyaan(id_pertanyaan,sub_indikator,pertanyaan ,bobot_pertanyaan) values ('$id_pertanyaan ','$sub_indikator','$pertanyaan','$bobot_pertanyaan')";
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
       // Add these lines to send a response message to the client-side
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
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk mengeluarkan data -->
        <div class="card border-success">
            <div class="card-header text-white bg-success">
                Data Pertanyaan
            </div>
            <div class="card-body">
                <form method="post" action="handle_hitung.php" id="averageForm">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Indikator</th>
                                <th scope="col">Pertanyaan</th>
                                <th scope="col">Average</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql2   = "select * from pertanyaan order by id asc";
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $id                 = $r2['id'];
                                $id_pertanyaan      = $r2['id_pertanyaan'];
                                $sub_indikator      = $r2['sub_indikator'];
                                $pertanyaan         = $r2['pertanyaan'];
                                $bobot_pertanyaan   = $r2['bobot_pertanyaan'];
                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <!-- <td scope="row"><?php echo $id_pertanyaan ?></td> -->
                                <td scope="row"><?php echo $sub_indikator ?></td>
                                <td scope="row"><?php echo $pertanyaan ?></td>
                                <input type="hidden" name="idPertanyaan[]" value="<?php echo $id; ?>">
                                    <td>
                                        <input type="text" class="form-control" name="inputAverage[]" aria-describedby="inputAverage" required>
                                    </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <br>
                    <button type="submit" class="btn btn-primary" id="submitAverage">Submit Average</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const averageForm = document.getElementById('averageForm');

        averageForm.addEventListener('submit', function (event) {
            event.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: 'You are about to submit the form. Proceed?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, submit it!'
            }).then(function (result) {
                if (result.isConfirmed) {
                    // Submit the form
                    const formData = new FormData(averageForm);

                    fetch('handle_hitung.php', {
                        method: 'POST',
                        body: formData,
                    })
                    .then(function (response) {
                        return response.json();
                    })
                    .then(function (data) {
                        if (data && 'error' in data) {
                            console.error('Error:', data.error);
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'An error occurred while updating data.',
                            });
                        } else if (data && 'sukses' in data) {
                            console.log('Success:', data.sukses);
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: data.sukses,
                                confirmButtonText: 'OK' // Add this line to customize the confirm button text
                            }).then(function () {
                                // Redirect to the dashboard page
                                window.location.href = 'dashboard.php';
                            });
                        }
                    })
                    .catch(function (error) {
                        console.error('Fetch error:', error);

                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'An error occurred while processing your request.',
                        });
                    });
                }
            });
        });
    });
</script>
