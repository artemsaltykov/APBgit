<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Заявки</title>
    <link rel="stylesheet" href="static/styles/adminpage.css" />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <main id="main-holder">
        <div class="logo">
            <img src="static/images/АРХИТЕКТУРНОЕ  БЮРО.png" alt="logo">
        </div>
        <div class="text">
            <h2>Заявки клиентов:</h2>
        </div>
        <div class="DB">
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
        <?php
        $sql = mysqli_query($link, 'SELECT `name`,`phone` FROM `applications`');
        while ($result = mysqli_fetch_array($sql)) {
            echo "Имя: {$result['name']} | Телефон: {$result['phone']} <br/>";
        }
        ?>
        </div>
        <p class="text2">
        <a href="index.php"> На главную страницу </a>
        </p>
    </main>
</body>

</html>