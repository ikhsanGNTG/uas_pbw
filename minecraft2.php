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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Minecraft - Mob</title>
   <style>
        body {
            font-family: "Comic Sans MS";
            background-color: lightgreen;
            color: black;
            padding: 0;
            margin: 0;
        }
        header {
            position: sticky;
            top: 0;
            background-color: rgb(34, 45, 34); 
            color: #f5f5f5;
            text-align: center;
            padding: 12px;
            z-index: 1000; 
            border-bottom: 2px solid #6b8e23;
            box-shadow: 0 2px 6px rgba(0,0,0,0.3);
        }
        h1, h2, h3 { text-align: center; }
        .artikel {
            background-color: white;
            padding: 15px;
            border: 1px solid #999;
            margin: 20px auto;
            width: 85%;
            border-radius: 5px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 7px 15px;
            margin-top: 5px;
            cursor: pointer;
            border-radius: 4px;
        }
        .container {
            display: flex;
            justify-content: space-between;
            text-align: center;
        }
        .mode {
            width: 30%;
            background-color: #e0ffe0;
            border: 1px solid #999;
            padding: 10px;
        }
        .nether {
            background-color: #3b0000;
            color: #ffcccc;
        }
        .nether .artikel { background-color: #5c0000; color: #ffe5e5; }
        .nether .mode { background-color: #660000; }
        .overworld {
            background-color: #9ee37d;
            color: black;
        }
        .overworld .artikel {
            background-color: #fafff4;
            color: black;
        }
        .end {
            background-color: #2b0040;
            color: #e5ccff;
        }
        .end .artikel { background-color: #3d0066; color: #fff; }
        .end .mode { background-color: #5b0099; }
        footer {
            text-align: center;
            font-size: 13px;
            margin-top: 30px;
            color: #555;
        }
    </style>
</head>

<body class="overworld">

<header>
    <h1>Minecraft</h1>
    <button id="btnTema">Ubah Tema</button><br>
    <a href="minecraft1.php" style="color:white;">Halaman 1</a> |
    <a href="minecraft2.php" style="color:white;">Halaman 2</a> |
    <a href="listUser.php" style="color:yellow;">Kelola User</a> |
    <a href="logout.php" style="color:white;">Logout</a>
</header>


<div class="artikel">
<h2>Mob di Minecraft</h2>
<p>Mob adalah makhluk hidup yang ada di dunia Minecraft. Setiap mob memiliki perilaku dan fungsi yang berbeda.</p>
</div>

<div class="artikel">
<h2>Mob Pasif</h2>
<ul>
<li>Sapi</li>
<li>Domba</li>
<li>Ayam</li>
<li>Babi</li>
</ul>
</div>

<div class="artikel">
<h2>Mob Netral</h2>
<ul>
<li>Enderman</li>
<li>Spider</li>
<li>Wolf</li>
</ul>
</div>

<div class="artikel">
<h2>Mob Hostile</h2>
<ul>
<li>Zombie</li>
<li>Skeleton</li>
<li>Creeper</li>
<li>Witch</li>
</ul>
</div>

<footer>©ilmiikhsan</footer>

<script>
let tema = 0;
let listTema = ["overworld","nether","end"];
document.getElementById("btnTema").onclick = function(){
    tema++;
    if(tema >= listTema.length) tema = 0;
    document.body.className = listTema[tema];
}
</script>

</body>
</html>
