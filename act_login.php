<?php
session_start();
include "koneksi.php";

$user = $_POST['username'];
$pass = $_POST['password'];

$q = mysqli_query($conn,"select * from users where username='$user'");
$data = mysqli_fetch_array($q);

if($data){
    if($pass == $data['password']){
        $_SESSION['login'] = true;
        $_SESSION['user'] = $data['username'];
        header("location:minecraft1.php");
    }else{
        echo "password salah";
    }
}else{
    echo "user tidak ada";
}
?>
