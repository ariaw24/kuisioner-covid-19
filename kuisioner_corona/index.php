<?php
include "config/koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>Covid-19 Risk Test</title>
  <link href="css/index.css" rel="stylesheet">
</head>

<body>
<body background = "image/corona.jpg">
<div class="signup-form">
  <div class="container">
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Silahkan masukkan identitas anda </h1>
                  </div>
                  <form method="post" class="user" name="pendaftaran" action="proses_daftar.php">
                    <div class="form-group">
                      <input type="text" name="nama" class="txtb" placeholder="Nama" onkeypress="return event.charCode < 48 || event.charCode  >57" maxlength="30" >
                    </div>
                    <div class="form-group">
                      <input type="number" name="usia" class="txtb" placeholder="Usia" min="1" max="110">
                    </div>
                    <div class="form-group">
                      <input type="text" name="jk" class="txtb" placeholder="Jenis Kelamin" onkeypress="return event.charCode < 48 || event.charCode  >57"maxlength="9">
                    </div>
                    <div class="form-group">
                      <input type="text" name="alamat" class="txtb" placeholder="Alamat" maxlength="40">
                    </div>
                    <input type="submit" name="submit" value="Mulai" class="signup-btn">
                  </form>

    </div>
</body>

</html>

