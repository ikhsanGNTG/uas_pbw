<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
}
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Kelola User</title>
<style>
body{
    margin:0;
    min-height:100vh;
    background:#9ee37d;
    font-family:"Comic Sans MS";
}
.box{
    background:white;
    width:500px;
    margin:40px auto;
    padding:20px;
    border:2px solid #2e7d32;
    box-shadow:4px 4px 0 #2e7d32;
}
h2{text-align:center;}
table{
    width:100%;
    border-collapse:collapse;
    margin-top:15px;
}
th,td{
    border:1px solid #999;
    padding:8px;
    text-align:center;
}
th{
    background:#2e7d32;
    color:white;
}
a.btn{
    display:inline-block;
    padding:6px 10px;
    text-decoration:none;
    border-radius:4px;
    margin:5px 0;
}
.add{background:#2e7d32;color:white;}
.del{background:#b71c1c;color:white;}
.back{background:#555;color:white;}
.top-btn{
    text-align:center;
    margin-bottom:10px;
}
</style>
</head>

<body>

<div class="box">
    <h2>Kelola User</h2>

    <div class="top-btn">
        <a href="minecraft1.php" class="btn back">← Kembali ke Minecraft</a>
        <a href="addUser.php" class="btn add">+ Tambah User</a>
    </div>

    <table>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no=1;
        $q = mysqli_query($conn,"select * from users");
        while($data = mysqli_fetch_array($q)){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['username'] ?></td>
            <td>
                <a class="btn del"
                   href="act_deleteUser.php?id=<?= $data['id'] ?>"
                   onclick="return confirm('Hapus user ini?')">
                   Hapus
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
