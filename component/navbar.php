<nav class="main-header navbar navbar-expand navbar-light navbar-white">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="?page=pages/inputform/about" class="nav-link">About</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <?php
        // Check if the user is logged in (modify this condition based on your authentication logic)
        $isLoggedIn = isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);

        if ($isLoggedIn) {
            echo '<li class="nav-item">';
            echo '<a href="logout.php" class="btn btn-primary"><i class="fa fa-sign-out-alt"></i> Logout</a>';
            echo '</li>';
        }
    ?>
</ul>

</nav>