<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login</title>
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

.login-box{
    background:white;
    padding:30px;
    width:320px;
    border:2px solid #2e7d32;
    box-shadow:4px 4px 0 #2e7d32;
}

.login-box h2{
    text-align:center;
    margin-bottom:20px;
}

input{
    width:100%;
    padding:10px;
    margin:8px 0;
    border:1px solid #555;
}

button{
    width:100%;
    padding:10px;
    background:#2e7d32;
    color:white;
    border:none;
    cursor:pointer;
}

button:hover{
    background:#1b5e20;
}
</style>
</head>

<body>

<div class="login-box">
    <h2>Login</h2>
    <form action="act_login.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <h3>User :aku  Pw:123</h3>
</div>

</body>
</html>
