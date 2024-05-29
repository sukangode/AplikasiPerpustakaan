<?php
include_once("./connect.php");

if(isset($_POST["submit"])){
    $nama_staff = $_POST["nama_staff"];
    $no_telp = $_POST["no_telp"];
    $email = $_POST["email"];

    $query = mysqli_query($db,"INSERT INTO staff VALUES (NULL,'$nama_staff','$no_telp', '$email')");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH STAFF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container w-75">
<h1>FORM TAMBAH STAFF</h1>
<form method="POST" action="">

<div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input required name="id" type="text" class="form-control" id="id">
  </div>

  <div class="mb-3">
    <label for="nama_staff" class="form-label">Nama Staff</label>
    <input required name="nama_staff" type="text" class="form-control" id="nama_staff">
  </div>

  <div class="mb-3">
    <label for="no_telp" class="form-label">NO TELP</label>
    <input required name="no_telp" type="text" class="form-control" id="no_telp">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">EMAIL</label>
    <input required name="email" type="text" class="form-control" id="email">
  </div>

  <button class="btn btn-primary"type="submit" name="submit">SUBMIT</button>
        <a class="btn btn-success" href="./index.php">Kembali Ke Halaman Utama</a>
  </form>

</div>




</body>
</html>