<?php
include "koneksi.php";
$user=$_POST['username'];
$pass=$_POST['password'];
mysqli_query($conn,"insert into users values(null,'$user','$pass')");
header("location:listUser.php");
?>
