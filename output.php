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
    <div class="page-header"><h1 align="center">Hasil Akhir</h1></div>
    <div class="row" style="padding:20px;">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header">Output</div>
            <?php
            if(isset($_POST['smp'])){
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $tgl = $_POST['tgl'];
                $jk = $_POST['jk'];
                $jumlah = $_POST['jumlah'];
                $judul = $_POST['judul'];
                $kode = $_POST['kode'];
                $peng = $_POST['peng'];
                $jb = $_POST['jb'];
                $har = $_POST['har'];
            }
            // if(isset($_POST['byr'])){
            //     $nama = $_POST['nama'];
            //     $alamat = $_POST['alamat'];
            //     $tgl = $_POST['tgl'];
            //     $jk = $_POST['jk'];
            //     $jumlah = $_POST['jumlah'];
            //     $judul = $_POST['judul'];
            //     $kode = $_POST['kode'];
            //     $peng = $_POST['peng'];
            //     $jb = $_POST['jb'];
            //     $har = $_POST['har'];
            //     $num = $_POST['num'];
            //     $total = $_POST['total'];
            //     $kem = $num - $total;
                
            // }
            ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Pembelian</th>
                            <th>Jumlah Buku</th>
                        </tr>
                        <tr>
                            <td><?= $nama; ?></td>
                            <td><?= $alamat; ?></td>
                            <td><?= $jk; ?></td>
                            <td><?= $tgl; ?></td>
                            <td><?= $jumlah; ?></td>
                        </tr>
                    </table>
                    <div class="form-control"><center>Jumlah Buku</center></div>
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kode Buku</th>
                            <th>Pengarang</th>
                            <th>Jenis Buku</th>
                            <th>Harga Buku</th>
                        </tr>
                        <?php foreach($judul as $key => $value) : ?>
                        <tr>
                            <td><?= $key+1; ?></td>
                            <td><?= $judul[$key]; ?></td>
                            <td><?= $kode[$key]; ?></td>
                            <td><?= $peng[$key]; ?></td>
                            <td><?= $jb[$key]; ?></td>
                            <td><?= "Rp. $har[$key]"; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <div class="form-control"><center>Pembayaran</center></div>
                    <table class="table">
                        <?php
                        $a = array_sum($har);
                        if($jumlah >= 5){
                            $b = $a * 0.1;
                            $e = "(10%)";
                            $c = $a - $b;
                        }
                        else if($jumlah >= 3){
                            $b = $a * 0.05;
                            $e = "(5%)";
                            $c = $a - $b;
                        }
                        else{
                            $b = 0;
                            $c = $a - $b;
                        }
                        $_SESSION['$c'];
                        ?>
                        <tr>
                            <th>Sub Harga</th>
                            <td align="right"><?= "Rp .$a"; ?></td>
                        </tr>
                        <tr>
                            <th>Diskon<?= $e; ?></th>
                            <td align="right"><?= "Rp. $b"; ?></td>
                        </tr>
                        <tr>
                            <th>Total Harga</th>
                            <td align="right"><?= "Rp. $c"; ?></td>
                        </tr>
                    </table>
                    
                    <table class="table">
                    <form action="output2.php" method="post">
                        <input type="hidden" name="total" value="<?= $c; ?>">
                        <input type="hidden" name="nama" value="<?= $nama; ?>">
                        <input type="hidden" name="alamat" value="<?= $alamat; ?>">
                        <input type="hidden" name="tgl" value="<?= $tgl; ?>">
                        <input type="hidden" name="jumlah" value="<?= $jumlah; ?>">
                        <input type="hidden" name="jk" value="<?= $jk; ?>">
                        <input type="hidden" name="judul[]" value="<?= $judul[$key]; ?>">
                        <input type="hidden" name="kode[]" value="<?= $kode[$key]; ?>">
                        <input type="hidden" name="peng[]" value="<?= $peng[$key]; ?>">
                        <input type="hidden" name="jb[]" value="<?= $jb[$key]; ?>">
                        <input type="hidden" name="har[]" value="<?= $har[$key]; ?>">

                        <tr>
                            <th>Masukan Pembayaran</th>
                            <th><input type="number" min="<?= $c; ?>" name="num" id="" placeholder="Masukan Pembayaran">
                                <button type="submit" name="byr" class="btn btn-primary">Bayar</button>
                            </th>
                        </tr>    
                        <!-- <tr>
                            <th>Bayar</th>
                            <td align="right"><?= $num; ?></td>
                        </tr>
                        <tr>
                            <th>Kembalian</th>
                            <td align="right"><?= $kem; ?></td>
                        </tr>          -->
                    </form>
                    </table>
                </div>
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