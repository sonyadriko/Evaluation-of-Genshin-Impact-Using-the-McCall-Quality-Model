<?php
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="?page=home" class="brand-link">
        <img src="asset/dist/img/logo7.png" alt="logo" class="brand-image img-circle elevation-3">
        <span>McCALL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              
                <li class="nav-item">
                    <a href="?page=home" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dasboard
                        </p>
                    </a>
                </li>
                <?php
                    if($_SESSION['role'] == 'admin') {
                ?>
                <li class="nav-item">
                    <a href="?page=pages/inputform/katkel" class="nav-link ">
                        <i class="nav-icon far fa-keyboard"></i></far></i></i>
                        <p>
                            Kategori Kelayakan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=pages/inputform/bobot" class="nav-link ">
                        <i class="nav-icon far fa-keyboard"></i>
                        <p>
                            Bobot
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=pages/inputform/indikator" class="nav-link ">
                        <i class="nav-icon far fa-keyboard"></i>
                        <p>
                            Indikator
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=pages/inputform/subindi" class="nav-link ">
                        <i class="nav-icon far fa-keyboard"></i>
                        <p>
                            Sub Indikator
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=pages/inputform/pertanyaan" class="nav-link ">
                        <i class="nav-icon far fa-keyboard"></i>
                        <p>
                            Pertanyaan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=isi_form" class="nav-link ">
                        <i class="nav-icon far fa-keyboard"></i>
                        <p>
                            Isi Form
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=hasil" class="nav-link ">
                        <i class="nav-icon far fa-keyboard"></i>
                        <p>
                            Hasil
                        </p>
                    </a>
                </li>
                <?php } ?>
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Penilaian
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="?page=pages/inputform/penilaian/correctness" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Correctness</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=pages/inputform/penilaian/reliability" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Reliability</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=pages/inputform/penilaian/efficiency" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Efficiency</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=pages/inputform/penilaian/integrity" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Integrity</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=pages/inputform/penilaian/usability" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Usability</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=pages/inputform/penilaian/hasil_akhir" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Hasil Akhir (Repor)</p>
                            </a>
                        </li>
                    </ul>
                </li> -->
                <li class="nav-item">
                    <a href="?page=logout" class="nav-link ">
                        <i class="nav-icon far fa-keyboard"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>