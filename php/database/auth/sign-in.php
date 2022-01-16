<?php

session_start();

require_once $_SERVER["DOCUMENT_ROOT"]."/php/database/connect.php";

$login = $_POST["login"];
$password = $_POST["password"];

$user = mysqli_query($connect, "SELECT * FROM `users` WHERE login = '$login'");

if(mysqli_num_rows($user) > 0){
    $current_user = mysqli_fetch_assoc($user);
    if($current_user["password"] == $password){
        $_SESSION["user"] = [
            "id" => $current_user["id"],
            "name" => $current_user["name"],
            "login" => $current_user["login"],
        ];
    }
}

header("Location: /index.php");