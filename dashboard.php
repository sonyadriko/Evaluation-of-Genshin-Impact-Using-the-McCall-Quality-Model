<?php 
        session_start();
        if($_SESSION['status']!="login"){
            header("location:login.php");
        }
    ?>

<?php include "model/koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'component/style.php' ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="asset/dist/img/foto1.png" alt="foto1" height="60" width="60">
        </div> -->

        <!-- Navbar -->
        <?php include 'component/navbar.php' ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include 'component/sidebar.php' ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-image: url('asset/dist/img/logo6.png');">

            <!-- Content Header (Page header) -->
            <?php include 'content.php' ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include 'component/footer.php' ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php include 'component/script.php' ?>

</body>

</html>