<?php
include "koneksi.php";
$id=$_GET['id'];
mysqli_query($conn,"delete from users where id='$id'");
header("location:listUser.php");
?>
