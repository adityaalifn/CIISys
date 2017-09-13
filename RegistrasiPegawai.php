<?php include('backend/manajer.php');

if ($_SESSION['posisi'] != 'manajer'){
    header("location: index.php");
}
?>



<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
            <link href="style.css" rel="stylesheet">    
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <title>RegistrasiPegawai</title>
    </head>


<form method="post" action="backend/manajer.php">
    <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand logo-cis" href="TampilanAwalManajer.php">CIISYs</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Laporan <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="LaporanStatistika.html">Statistik Citramart</a></li>
                        <li><a href="LaporanKeuangan.html">Laporan Keuangan</a></li>
                        <li><a href="LaporanPengadaanBarang.html">Laporan Pengadaan Barang</a></li>
                        <li><a href="LaporanPenjualanBarang.html">Laporan Penjualan Barang</a></li>
                    </ul>
                  </li>
                  <li><a href="DaftarPegawai.html">Daftar Pegawai</a></li>
                  <li><a href="RegistrasiPegawai.php">Registrasi Pegawai</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                      </ul>
              </div>
            </div>
          </nav>
          <div class="container">
            <h2>Registrasi Pegawai</h2>
            <p>Citramart</p>
          </div>

          <br><br>
          <div class="container">
          <div class="form-group row">
            <label for="no_KTP" class="col-2 col-form-label">No KTP</label>
            <div class="col-10">
              <input class="form-control" type="text" placeholder="Masukkan Nomor KTP" name="no_ktp">
            </div>
          </div>
          </div>

          <div class="container">
          <div class="form-group row">
            <label for="nama" class="col-2 col-form-label">Nama</label>
            <div class="col-10">
              <input class="form-control" type="text" placeholder="Masukkan Nama Lengkap" name="nama">
            </div>
          </div>
          </div>

          <!--<div class="container">
          <div class="form-group row">
            <label for="example-datetime-local-input" class="col-2 col-form-label">TTL</label>
            <div class="col-10">
              <input class="form-control" type="date" value="2011-08-19T13:45:00" name="tanggal">
            </div>
          </div>
          </div>-->

          <div class="container">
          <div class="form-group row">
            <label for="example-url-input" class="col-2 col-form-label">Alamat</label>
            <div class="col-10">
              <input class="form-control" type="text" placeholder="Masukkan Alamat Lengkap" name="alamat">
            </div>
          </div>
          </div>

          <div class="container">
          <div class="form-group row">
            <label for="example-password-input" class="col-2 col-form-label">Gaji Pegawai</label>
            <div class="col-10">
              <input class="form-control" type="text" placeholder="Rp. ,-" name="gajipegawai">
            </div>
          </div>
          </div>

          <div class="container">         
          <div class="form-group row">
            <label for="example-username-input" class="col-2 col-form-label">Username</label>
            <div class="col-10">
              <input class="form-control" type="text" placeholder="Maksimal 15 char" name="username">
            </div>
          </div>
          </div>

          <div class="container">
          <div class="form-group row">
            <label for="example-password-input" class="col-2 col-form-label">Password</label>
            <div class="col-10">
              <input class="form-control" type="password" placeholder="Maksimal 20 char" name="password">
            </div>
          </div>
          </div>

          <div class="container">
          <div class="form-group row">
            <label for="example-email-input" class="col-2 col-form-label">Email</label>
            <div class="col-10">
              <input class="form-control" type="email" placeholder="UniversitasTelkom@telkomuniversity.ac.id" name="email">
            </div>
          </div>
          </div>

          <div class="container">
          <div class="form-group row">
            <label for="example-email-input" class="col-2 col-form-label">Posisi</label>
            <div class="col-10">
              <select name="posisi">
                <option value="manajer">Manajer</option>
                <option value="kasir">Kasir</option>
                <option value="koordinator">Koordinator</option>
                <option value="gudang">Gudang</option>
              </select>
            </div>
          </div>
          </div>

          <br><br>

          <div align="right" class="container">
          <div class="control-group">
            <div class="controls">
              <a href="#"><button class="btn btn-success" type="submit" name="register_pegawai">Register</button> </a>
              <a href="TampilanAwalManajer.php"><button class="btn btn-success">Back</button> </a>
            </div>
          </div>
          </div>
</form>
</body>
</html>