<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="static/styles/index.css">
  <link rel="stylesheet" href="static/styles/adaptation.css">
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300&display=swap" rel="stylesheet">
  <title>АРХИТЕКТУРНОЕ БЮРО</title>
</head>

<body>
  <header>
    <a href="index.php">
      <div class="logo">
        <img src="static\images\АРХИТЕКТУРНОЕ  БЮРО.png" alt="logo">
      </div>
    </a>
    <div class="nav1">
      <p> <a href="1_1о нас.html " class="links-nav1"> О нас </a> </p>
      <p> <a href="1_2услуги.html" class="links-nav1"> Услуги </a> </p>
      <p> <a href="1_3контакты.html" class="links-nav1"> Контакты </a> </p>
    </div>
  </header>
  <main>
    <div class="nav2">
      <p class="main-folder"> <a href="index.php" class="links-nav2"> ВСЕ</a> </p>
      <p> <a href="2_1градостроительство.html" class="links-nav2"> ГРАДОСТРОИТЕЛЬСТВО</a> </p>
      <p> <a href="2_2жилые.html" class="links-nav2"> ЖИЛЫЕ</a> </p>
      <p> <a href="2_3общественные.html" class="links-nav2"> ОБЩЕСТВЕННЫЕ</a> </p>
      <p> <a href="2_4промышленные.html" class="links-nav2"> ПРОМЫШЛЕННЫЕ</a> </p>
      <p> <a href="2_5коттеджи.html" class="links-nav2"> КОТТЕДЖИ</a> </p>
    </div>
    <div class="photos">
      <div class="containers">
        <div class="container">
          <a href="глстр1.html">
            <div class="photo">
              <img src="static/images/глстр1.jpg" alt="">
            </div>
          </a>
        </div>
        <div class="container">
          <a href="глстр2.html">
            <div class="photo">
              <img src="static/images/глстр2.jpg" alt="">
            </div>
          </a>
        </div>
        <div class="container">
          <a href="глстр3.html">
            <div class="photo">
              <img src="static/images/глстр3.jpg" alt="">
            </div>
          </a>
        </div>
      </div>
      <div class="containers">
        <div class="container">
          <a href="глстр4.html">
            <div class="photo">
              <img src="static/images/глстр4.jpg" alt="">
            </div>
          </a>
        </div>
        <div class="container">
          <a href="глстр5.html">
            <div class="photo">
              <img src="static/images/глстр5.jpg" alt="">
            </div>
          </a>
        </div>
        <div class="container">
          <a href="глстр6.html">
            <div class="photo">
              <img src="static/images/глстр6.jpg" alt="">
            </div>
          </a>
        </div>
      </div>
      <div class="containers">
        <div class="container">
          <a href="глстр7.html">
            <div class="photo">
              <img src="static/images/глстр7.jpg" alt="">
            </div>
          </a>
        </div>
        <div class="container">
          <a href="глстр8.html">
            <div class="photo">
              <img src="static/images/глстр8.jpg" alt="">
            </div>
          </a>
        </div>
        <div class="container">
          <a href="глстр9.html">
            <div class="photo">
              <img src="static/images/глстр9.jpg" alt="">
            </div>
          </a>
        </div>
      </div>
    </div>
  </main>
  <div class="application">
      <h1>Оставить заявку:</h1>
      <?php
        $host = 'localhost';
        $user = 'root';
        $pass = 'root'; 
        $db_name = 'apb'; 
        $link = mysqli_connect($host, $user, $pass, $db_name); 

        if (!$link) {
            echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
        exit;
        }
        ?>
      <form action="" method="post">
        <table>
        <tr>
          <td>Имя:</td>
          <td><input type="text" name="Name" size="35"></td>
        </tr>
        <tr>
          <td>Телефон:</td>
          <td><input type="text" name="Phone" size="35"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="Oтправить"></td>
        </tr>
        </table>
      </form>
    <?php
      if (isset($_POST["Name"])) {
        $sql = mysqli_query($link, "INSERT INTO `applications` (`name`, `phone`) VALUES ('{$_POST['Name']}', '{$_POST['Phone']}')");
        if ($sql) {
          echo '<p>Заявка успешно отправлена.</p>';
        } else {
          echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
        }
      }
    ?>
  </div>
  <footer>
    <div class="footer-text">
      <hr>
      <p>г.Ижевск</p>
      <p>ул.Пушкиская д.136 оф.15</p>
      <p>Тел: +7(341)200-22-22</p>
      <p>archplanb@gmail.com</p>
    </div>
    <div class="admin-login">
      <p> <a href="login.html" class="links-nav1">Войти как администратор</a> </p>
    </div>
  </footer>
</body>

</html>