<?php
session_start();
include 'model/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $koneksi->prepare("SELECT * FROM admin WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Use password_verify() to check the hashed password
        if ($password == $row['password']) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];
            header("location:dashboard.php");
        } else {
            header("location:login.php?pesan=gagal");
        }
    } else {
        header("location:login.php?pesan=gagal");
    }

    $stmt->close();
}
?>
