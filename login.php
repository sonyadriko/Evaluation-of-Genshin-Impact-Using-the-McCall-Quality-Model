<?php
include 'model/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style_login.css" rel="stylesheet">
    <title>Form Login</title>
</head>
<?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! username dan password salah!";
            }
            else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout";
            }
            else if($_GET['pesan'] == "belum_login"){
                echo "Anda harus login untuk mengakses halaman admin";
            }
        }
    ?>

<body>
    <form method="POST" action="aksi_login.php">
        <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
                <input type="text" placeholder="username" name="username">
            </div>
            <div class="textbox">
                <input type="password" placeholder="password" name="password">
            </div>
            <input class="btn" type="submit" value="Sign in">
        </div>
    </form>
</body>

</html>