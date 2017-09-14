<?php
/**
 * Created by PhpStorm.
 * User: Tabul
 * Date: 14/09/2017
 * Time: 18:40
 */
// Return date/time info of a timestamp; then format the output
session_start();
$mydate=getdate(date("U"));
$username = $_SESSION['username'];
?>
<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
<title>Transaksi Kasir</title>
</head>
<body>
<div class="jumbotron text-center">
    <h1>Welcome to Citramart!</h1>
    <p>Belanja hemat tanpa diskon!</p>
</div>
<form action="transaksi-act.php" method="post">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="usr">Tanggal Transaksi</label>
                <input type="text" class="form-control" id="usr" value="<?php echo "$mydate[year]-$mydate[mon]-$mydate[mday]"; ?>">
            </div>
            <div class="form-group">
                <label for="pwd">ID Kasir</label>
                <input type="text" class="form-control" id="pwd" value="<?php echo $username?>">
            </div>
        </div>
        <div class="col-sm-8">
            <h2>List Barang</h2>
            <p>Lorem ipsum dolor..</p>
            <p>Ut enim ad..</p>
        </div>
    </div>
</div>
</form>
</body>
</html>
