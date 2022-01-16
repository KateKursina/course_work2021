<?php

session_start();

require_once $_SERVER["DOCUMENT_ROOT"]."/php/database/connect.php";

$data_from_table = mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `shelters`"), MYSQLI_ASSOC);

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
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Курсовая работа</title>
  </head>
  <body class="main__class">
  <?php include_once $_SERVER["DOCUMENT_ROOT"]."/php/ui/header/header.php"; ?>
    <main class="test-align-center">
      <div class="main__container">
      <?php

        foreach($data_from_table as $item){
            echo '        <div class="card">
                            <div class="card__image">
                              <img src="/images/logo.png" width="176" alt="" />
                            </div>
                            <div class="card__text">
                              <div class="text__main">
                                <h2>'.$item["Name"].'</h2>
                                <p>
                                  '.$item["AdmArea"].', <br>'.$item["District"].', <br>'.$item["Address"].', <br>'.$item["Phone"].'
                                </p>
                              </div>
                            </div>
                          </div>';

        }

      ?>
      </div>
    </main>
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/php/ui/footer/footer.php"; ?>

  </body>
</html>
