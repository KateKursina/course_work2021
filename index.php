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

    <main>
      <div class="search__container">
        <div class="container__text">
          <h2>Найти приют</h2>
          <p>
            Найдите любой интересующий вас приют! Просто введите название вашего округа.
          </p>
        </div>
        <form method="POST" action="/list/index.php" class="container__form">
          <input type="text" name="find-shelter" id="" />
          <input type="submit" value="Поиск" />
        </form>
      </div>
    </main>
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/php/ui/footer/footer.php"; ?>
  </body>
</html>
