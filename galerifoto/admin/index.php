<?php
session_start();
if ($_SESSION['status'] != 'login') {
    echo "<script>
    alert('Anda Belum Login!');
    location.href='../index.php';
    </script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">>
  <div class="container">
    <a class="navbar-brand" href="index.php">WEB Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
        <a href="album.php" class="nav-link">album</a>
      </div>
     
      <a href="../config/aksi_logout.php" class="btn btn-primary mt-2">Keluar</a>
    </div>
  </div>
</nav>


<footer class="d-flax justify-content-center border-top mt-3 bg-light fixed-bottom">
    <div class="container" style="text-align: center;">
        <p>&copy; UKK RPL 2024 | Dava Tirta Ananta</p>
    </div>
</footer>
    
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>