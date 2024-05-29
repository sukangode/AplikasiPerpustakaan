<?php
include_once("./connect.php");

if(isset($_POST["submit"])){
    $nama_buku = $_POST["nama_buku"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];

    $query = mysqli_query($db,"INSERT INTO buku VALUES (NULL,'$nama_buku','$isbn', $unit)");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH BUKU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container w-75">
<h1>FORM TAMBAH BUKU</h1>

<form method="POST" action="">

<div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input required name="id" type="text" class="form-control" id="id">
  </div>

  <div class="mb-3">
    <label for="nama_buku" class="form-label">Nama Buku</label>
    <input required name="nama_buku" type="text" class="form-control" id="nama_buku">
  </div>

  <div class="mb-3">
    <label for="sibn" class="form-label">ISBN</label>
    <input required name="isbn" type="text" class="form-control" id="isbn">
  </div>

  <div class="mb-3">
    <label for="unit" class="form-label">UNIT</label>
    <input required name="unit" type="text" class="form-control" id="unit">
  </div>

  <button class="btn btn-primary"type="submit" name="submit">SUBMIT</button>
        <a class="btn btn-success" href="./index.php">Kembali Ke Halaman Utama</a>
  </form>
    </div>
</body>
</html>