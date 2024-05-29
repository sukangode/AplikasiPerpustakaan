<?php
include_once("./connect.php");

$id =$_GET["id"];
$query_get_data = mysqli_query($db,"SELECT * FROM staff WHERE id=$id");
$staff = mysqli_fetch_assoc($query_get_data);

if(isset($_POST["submit"])){
    $nama_staff = $_POST["nama_staff"];
    $no_telp = $_POST["no_telp"];
    $email = $_POST["email"];

    $query = mysqli_query($db,"UPDATE staff SET nama_staff='$nama_staff',no_telp='$no_telp',email='$email' WHERE id=$id");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT STAFF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
<h1>FORM EDIT STAFF</h1>
<form method="POST" action="">

<div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input value="<?php echo $staff['id'] ?>" id="id" name="id" class="form-control">
  </div>

  <div class="mb-3">
    <label for="nama_buku" class="form-label">Nama Buku</label>
    <input value="<?php echo $staff['nama_staff'] ?>" id="nama_staff" name="nama_staff" class="form-control">
  </div>

  <div class="mb-3">
    <label for="no_telp" class="form-label">No Telp</label>
    <input value="<?php echo $staff['no_telp'] ?>"type="text" id="no_telp" name="no_telp" class="form-control">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input value="<?php echo $staff['email'] ?>" type="email" id="email" name="email" class="form-control">
  </div>

  <button class="btn btn-primary"type="submit" name="submit">SUBMIT</button>
    <a class="btn btn-success" href="./staff.php">Kembali</a>
  </form>

</div>



</body>
</html>