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
    <div class="page-header"><h1 align="center">Jumlah Buku Yang Dibeli</h1></div>
    <div class="row" style="padding:20px;">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header">Buku</div>
            <?php
            if(isset($_POST['simpan'])){
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $tgl = $_POST['tgl'];
                $jk = $_POST['jk'];
                $jumlah = $_POST['jumlah'];
                for ($i=0; $i < $jumlah ; $i++) { ?>

            
            <div class="card-body">
                <form action="output.php" method="post">

                <input type="hidden" name="nama" value="<?= $nama; ?>">
                <input type="hidden" name="alamat" value="<?= $alamat; ?>">
                <input type="hidden" name="tgl" value="<?= $tgl; ?>">
                <input type="hidden" name="jumlah" value="<?= $jumlah; ?>">
                <input type="hidden" name="jk" value="<?= $jk; ?>">

                  <div class="form-group">
                    <label for="">Judul</label>
                      <input type="text" name="judul[]" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="">Kode Buku</label>
                    <input type="number" name="kode[]" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Pengarang</label><br>
                     <input type="text" name="peng[]" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="">Jenis Buku</label>
                        <select class="form-control" name="jb[]" required>
                            <option value="Novel">Novel</option>
                            <option value="Fiksi">Fiksi</option>
                            <option value="Horror">Horror</option>
                            <option value="Cergam">Cergam</option>
                            <option value="Komik">Komik</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="">Harga Buku</label>
                      <input type="number" name="har[]" class="form-control" required>
                  </div><hr>
                  
            </div>
            <?php
                }
            }
            ?>
            <div class="form-group">
                <button type="submit" name="smp" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
        </div>
        
      </div>
    </div>
</div>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>