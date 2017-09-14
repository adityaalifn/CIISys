<?php
include_once("dbcon.php");

if(isset($_POST['update']))
{
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nama_pegawai = mysqli_real_escape_string($db, $_POST['nama_pegawai']);
    $posisi = mysqli_real_escape_string($db, $_POST['posisi']);
    $alamat = mysqli_real_escape_string($db, $_POST['alamat']);
    $gaji = mysqli_real_escape_string($db, $_POST['gaji']);


    if(empty($nama_pegawai) || empty($posisi)|| empty($alamat) ||  (empty($gaji))) {


        if(empty($nama_pegawai)) {
            echo "<font color='red'>Nama pegawai tidak boleh kosong.</font><br/>";
        }
        if(empty($posisi)) {
            echo "<font color='red'>Posisi tidak boleh kosong.</font><br/>";
        }
        if(empty($alamat)) {
            echo "<font color='red'>Alamat tidak boleh kosong.</font><br/>";
        }
    }
    else {
        $result = mysqli_query($db, "UPDATE pegawai SET Nama_pegawai='$nama_pegawai',Posisi='$posisi',Alamat='$alamat',Gaji='$gaji' WHERE No_ktp='$id'");
        header("Location: DaftarPegawai.php");
    }
}
?>
<?php

$id = $_GET['id'];
$result = mysqli_query($db, "SELECT * FROM pegawai WHERE No_ktp='$id'");

while($res = mysqli_fetch_array($result))
{
    $nama_pegawai = $res['Nama_pegawai'];
    $posisi = $res['Posisi'];
    $alamat = $res['Alamat'];
    $gaji = $res['Gaji'];
}

?>
<style>
    .member-dashboard {
        padding: 10px;
        background: #D2EDD5;
        color: #555;
        border-radius: 4px;
        display: inline-block;
        text-align:center;
    }
</style>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Edit Data Barang</title>
</head>
<div class="">
    <body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand logo-cis" href="#">CIISys</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="daftarbarang.php">Daftar Barang</a></li>
                <li class="active"><a href="#">Input Data Barang</a></li>
                <li><a href="inputdatasupplier.php">Input Data Supplier</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
    <br/><br/>

    <form name="form1" method="post" action="editPegawai.php">
        <table border="0">
            <tr>
                <td>Nama Pegawai</td>
                <td><input type="text" name="nama_pegawai" value="<?php echo $nama_pegawai;?>"></td>
            </tr>
            <tr>
                <td>Posisi</td>
                <td><input type="text" name="posisi" value="<?php echo $posisi;?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat;?>"></td>
            </tr>
            <tr>
                <td>Posisi</td>
                <td><input type="number" name="gaji" value="<?php echo $gaji;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><button type="submit" name="update">Edit</button></td>
            </tr>
        </table>
    </form>
    </body>
</div>
</html>
