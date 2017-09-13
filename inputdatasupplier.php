<!DOCTYPE html>
<html lang="en">
<head>
  <title>Menu Gudang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> 
  <link rel="stylesheet" href="style.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand logo-cis" href="#">CIISys</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="daftarbarang.php">Daftar Barang</a></li>
      <li><a href="inputbarang.php">Input Data Barang</a></li>
      <li class="active"><a href="#">Input Data Supplier</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <div class="row">
  <!-- <div class="container" align="center" "row centered-form"> -->
    <form class="form-horizontal" action='inputdatasupplier-act.php' method="post">
        <fieldset>
          <div id="legend">
              <h2 class="">Input Data Supplier</h2>
          </div>
          <div class="control-group">
            <label class="control-label"  for="id_supplier">ID Supplier</label>
            <div class="controls">
              <input type="text" id="id_supplier" name="id_supplier" placeholder="" class="form-control">
            </div>
          </div>
    
          <div class="control-group">
            <label class="control-label" for="nama_supplier">Nama Supplier</label>
            <div class="controls">
              <input type="text" id="nama_supplier" name="email" placeholder="" class="form-control">
            </div>
          </div>
          
          <div class="control-group">
            <label class="control-label" for="no_kontak">No. Kontak</label>
            <div class="controls">
                <input type="number" id="no_kontak" name="no_kontak" placeholder="" class="form-control">
            </div>
          </div>

            <div class="control-group">
                <label class="control-label" for="no_kontak">No. Rekening</label>
                <div class="controls">
                    <input type="number" id="no_kontak" name="rekening" placeholder="" class="form-control">
                </div>
            </div>

          <div class="control-group">
              <label class="control-label" for="alamat">Alamat</label>
              <div class="controls">
                  <textarea name="alamat" placeholder="" rows="3" class="form-control"></textarea>
              </div>
            </div>
            <br>

    
          <div class="control-group">
            <!-- Button -->
            <div class="controls">
              <button class="btn btn-success" type="submit">Input</button>
            </div>
          </div>
        </fieldset>
      </form>
    <!-- </div> -->  
  </div>
</div>


</body>
</html>