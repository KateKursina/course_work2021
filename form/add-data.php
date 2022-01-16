<?php 

require_once $_SERVER["DOCUMENT_ROOT"]."/php/database/connect.php";

$name = $_POST["name"];
$description = $_POST["question"];
$id = $_POST["shelter_id"];

mysqli_query($connect, "INSERT INTO `clients` (`id`, `name`, `reason`, `shelter_id`) VALUES (NULL, '$name', '$description', '$id')");

header("Location: /wait/index.php");