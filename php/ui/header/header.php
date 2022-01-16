<header class="menu">
  <div class="main_menu">
      <div class="menu__logo">
        <img src="/images/logo.png" width="60" alt="" />
      </div>
      <div class="menu__urls">
        <ul>
          <li><a href="/">Главная</a></li>
          <li><a href="/information/">Информация</a></li>
        </ul>
      </div>
      </div>
      <div class = "auth">
        <?php
        
        if(isset($_SESSION["user"])){
          echo '<p class = "hello--form">Добро пожаловать <span>'.$_SESSION["user"]["name"].'</span>!</p>';
        }
        
        ?>
      <ul>
        <?php
        
        if (!isset($_SESSION["user"])){
          echo '<li><a href="/login/index.php">Войти</a></li>';
        }
        else{
          echo '<li><a href="/php/database/auth/logout.php">Выйти</a></li>';
        }
        
        ?>
        </ul>
      </div>
    </header>