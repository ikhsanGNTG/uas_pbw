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
    <title>Minecraft</title>
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
    <h2>Apa itu Minecraft?</h2>
    <p style="text-align:center;">
        Minecraft adalah game kotak-kotak yang memberi kebebasan pemain untuk membangun dan menjelajahi dunia mereka sendiri. 
        Game ini dibuat oleh Markus Persson (Notch) dan dikembangkan oleh Mojang Studios.
    </p>
    <p style="text-align:center;">
        Karena tampilannya sederhana tapi kreatif, Minecraft menjadi salah satu game paling populer di dunia.
    </p>
</div>

<div class="artikel">
    <h2>Mode Permainan</h2>
    <div class="container">
        <div class="mode">
            <h3>Survival</h3>
            <p>Pemain harus bertahan hidup, mencari makanan, dan melawan monster di malam hari.</p>
        </div>
        <div class="mode">
            <h3>Creative</h3>
            <p>Mode di mana pemain memiliki semua blok tanpa batas, bebas membangun dunia apapun.</p>
        </div>
        <div class="mode">
            <h3>Adventure</h3>
            <p>Mode khusus untuk menjelajahi map buatan pemain lain, dengan aturan tertentu.</p>
        </div>
    </div>
</div>

<div class="artikel">
    <h2>Dunia Minecraft</h2>
    <p style="text-align:center;">Minecraft punya tiga dunia utama yang bisa dijelajahi:</p>
    <ul>
        <li><b>Overworld</b> – Dunia penuh pohon, air, dan gunung tempat pemain memulai petualangan.</li>
        <li><b>Nether</b> – Dunia bawah tanah penuh lava, piglin, dan ghast.</li>
        <li><b>The End</b> – Dunia gelap misterius, tempat tinggal Ender Dragon.</li>
    </ul>
</div>

<div class="artikel">
    <h2>Kesimpulan</h2>
    <p style="text-align:center;">
        Minecraft bukan sekadar game, tapi dunia tanpa batas di mana kreativitas menjadi kekuatan utama.
    </p>
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
