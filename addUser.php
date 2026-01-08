<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah User</title>
<style>
body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#9ee37d;
    font-family:"Comic Sans MS";
}
.box{
    background:white;
    padding:25px;
    width:350px;
    border:2px solid #2e7d32;
    box-shadow:4px 4px 0 #2e7d32;
}
h2{text-align:center;}
input{
    width:100%;
    padding:10px;
    margin:8px 0;
}
button{
    width:100%;
    padding:10px;
    background:#2e7d32;
    color:white;
    border:none;
    cursor:pointer;
}
a{
    display:block;
    text-align:center;
    margin-top:12px;
    text-decoration:none;
    color:#2e7d32;
}
</style>
</head>

<body>
<div class="box">
    <h2>Tambah User</h2>
    <form action="act_addUser.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Simpan</button>
    </form>
    <a href="listUser.php">← Kembali ke Kelola User</a>
</div>
</body>
</html>
