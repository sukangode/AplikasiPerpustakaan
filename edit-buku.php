<?php
include_once("./connect.php");

$id =$_GET["id"];
$query_get_data = mysqli_query($db,"SELECT * FROM buku WHERE id=$id");
$buku = mysqli_fetch_assoc($query_get_data);

if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $nama_buku = $_POST["nama_buku"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];

    $query = mysqli_query($db,"UPDATE buku SET nama_buku='$nama_buku',isbn='$isbn',unit=$unit WHERE id=$id");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT BUKU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container w-75">
<h1>FORM EDIT BUKU</h1>
    
<form method="POST" action="">

<div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input value="<?php echo $buku['id'] ?>" id="id" name="id" class="form-control">
  </div>

  <div class="mb-3">
    <label for="nama_buku" class="form-label">Nama Buku</label>
    <input value="<?php echo $buku['nama_buku'] ?>" id="nama_buku" name="nama_buku" class="form-control">
  </div>

  <div class="mb-3">
    <label for="sibn" class="form-label">ISBN</label>
    <input value="<?php echo $buku['isbn'] ?>"type="text" id="isbn" name="isbn" class="form-control">
  </div>

  <div class="mb-3">
    <label for="unit" class="form-label">UNIT</label>
    <input value="<?php echo $buku['unit'] ?>" type="number" id="unit" name="unit" class="form-control">
  </div>

  <button class="btn btn-primary"type="submit" name="submit">SUBMIT</button>
        <a class="btn btn-success" href="./buku.php">Kembali</a>
  </form>
    </div>
</body>
</html>