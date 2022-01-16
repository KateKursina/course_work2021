<?php

session_start();

if(!isset($_SESSION["user"])){
  header("Location: /index.php");
}

if(!isset($_GET["id"])) header("Location: /index.php");
$shelter_id = $_GET["id"];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/style/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap"
      rel="stylesheet"
    />
    <title>Курсовая работа</title>
  </head>
  <body class="main__class">
  <?php include_once $_SERVER["DOCUMENT_ROOT"]."/php/ui/header/header.php"; ?>
    <main class="main_container_for_form">
      <h2>Заполните форму</h2>
      <form action="add-data.php" method="POST" class="search__form">
        <input type="text" name="name" id="" placeholder="Ваше имя" />
        <textarea name="question" id="" cols="30" rows="10" placeholder="Опишите проблему"></textarea>
        <input type="hidden" name = "shelter_id" value="<?php echo $shelter_id; ?>">
        <div class="send-button">
          <input type="submit" value="Отправить" />
        </div>
      </form>
    </main>
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/php/ui/footer/footer.php"; ?>
  </body>
</html>
