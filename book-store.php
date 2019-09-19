<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Zamzam Ubaidilah</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="book-store.php">Book Store <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Zamzam Ubaidilah
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="btn btn-outline-success my-2 my-sm-0" href="logout.php" onclick="myFunction()">Log Out</a>
          </div>
    </div>
  </div>
</nav>

<div class="container" style="padding:20px;">
    <div class="page-header"><h1 align="center">Assalaam Book Store</h1></div>
    <div class="row" style="padding:20px;">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header">Pembelian Buku</div>
            <div class="card-body">
                <form action="detail-book.php" method="post">
                  <div class="form-group">
                    <label for="">Nama</label>
                      <input type="text" name="nama" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="5" required></textarea>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <input type="radio" name="jk" value="Laki-laki">Laki-laki
                    <input type="radio" name="jk" value="Perempuan">Perempuan<br>
                  </div>
                  <div class="form-group">
                    <label for="">Tanggal Pembelian</label>
                      <input type="date" name="tgl" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="">Jumlah Buku</label>
                      <input type="number" name="jumlah" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                  </div>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>