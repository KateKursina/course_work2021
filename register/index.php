<?php

session_start();

if(isset($_SESSION["user"])){
    header("Location: /index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Курсовая работа | Регистрация</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/style/style.css">
</head>
<body>
<div class="login-form">
    <form action="/php/database/auth/sign-up.php" method="post">
        <h2 class="text-center">Регистрация</h2>  
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Ваше имя" required="required">
        </div>     
        <div class="form-group">
            <input type="text" class="form-control" name="login" placeholder="Логин" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name = "password" placeholder="Пароль" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Зарегистрироваться</button>
        </div>      
    </form>
</div>
</body>
</html>