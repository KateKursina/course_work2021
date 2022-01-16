<?php

session_start();

require_once $_SERVER["DOCUMENT_ROOT"]."/php/database/connect.php";

$name = $_POST["name"];
$login = $_POST["login"];
$password = $_POST["password"];

$user = mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `password`) VALUES (NULL, '$name', '$login', '$password')");

header("Location: /index.php");