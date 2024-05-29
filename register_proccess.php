<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    include_once("./connect.php");

    if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = password_hash($_POST['password'] , PASSWORD_DEFAULT);
    $sql = "SELECT * FROM user WHERE email='$email'";
    $result  = mysqli_query($db,$sql);

    if(mysqli_num_rows($result) > 0){
        echo "email sudah terdaftar";
    } else{
        $sql = "INSERT INTO user (email, password) VALUES ('$email','$password')";
        
        if(mysqli_query($db,$sql) === TRUE){
        echo "Registrasi berhasil. Silahkan <a href='login.php'>Login</a>";
    }else{
        echo "Registrasi Gagal!";
    }
}
    
}    
?>
</body>
</html>