<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="#">Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="?url=home">Home</a>
        <a class="nav-link" href="?url=upload">Upload</a>
        <a class="nav-link" href="?url=profile">Profile</a>
        <a class="nav-link" href="login.php">Login</a>
        <a class="nav-link" href="daftar.php">Daftar</a>
      </div>
    </div>
  </div>
</nav>
<?php
    $url=@$_Get["url"];
    if($url=='home'){
        include 'page/home.php';
    }elseif($url=='profile'){
        include 'page/profile.php';
    }else if($url=='upload'){
        include 'page/upload.php';
    }else{
        include 'page/home.php';
    }
?>
    <script src="assets/js/bootstrap.bunlde.min.js"></script>
</body>
</html>