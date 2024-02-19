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
                                <th scope="col">Pertanyaan</th>
                            </tr>
                            <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql2   = "select * from pertanyaan order by id asc";
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $id                 = $r2['id'];
                                $pertanyaan         = $r2['pertanyaan'];
                            ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $pertanyaan ?></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="inputAverage[<?php echo $id; ?>]" value="sangat_tidak_setuju" required>
                                        <label class="form-check-label">Sangat Tidak Setuju</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="inputAverage[<?php echo $id; ?>]" value="tidak_setuju" required>
                                        <label class="form-check-label">Tidak Setuju</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="inputAverage[<?php echo $id; ?>]" value="cukup" required>
                                        <label class="form-check-label">Cukup</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="inputAverage[<?php echo $id; ?>]" value="setuju" required>
                                        <label class="form-check-label">Setuju</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="inputAverage[<?php echo $id; ?>]" value="sangat_setuju" required>
                                        <label class="form-check-label">Sangat Setuju</label>
                                    </div>
                                    <input type="hidden" name="idPertanyaan[]" value="<?php echo $id; ?>">
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

