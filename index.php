<?php

require_once 'config/connect.php';
$host = 'localhost'; // адрес сервера
$db_name = 'test'; // имя базы данных
$user = 'root'; // имя пользователя
$password = 'root'; // пароль

// создание подключения к базе
$connect = mysqli_connect($host, $user, $password, $db_name);
if (!$connect){
    die ('Error 1000');
}

$goods = mysqli_query($connect, "SELECT * FROM `goods`");
 $goods = mysqli_fetch_all($goods);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Товары</title>
</head>

<body>

<table align = "center">
    <tr>
        <th>id</th>
        <th>Инв. номер</th>
        <th>Описание</th>
        <th>Владелец</th>
        <th>&#9998;</th>
        <th>&#10006;</th>
        <th>Дополнительно</th>
    </tr>
    <?php
    foreach ($goods as $item){
        ?>
    <tr>
        <td><?=$item[0]?></td>
        <td><?=$item[1]?></td>
        <td><?=$item[2]?></td>
        <td><?=$item[3]?></td>
        <td><a href="update.php?id=<?=$item[0]?>"><button>Обновить</button></a></td>
        <td><a href="vendor/delete.php?id=<?=$item[0]?>"><button>Удалить</button></a></td>
        <td><a href="select/index.php?id=><?=$item[0]?>"><button>Дополнительно</button></a></td>
    </tr>
    <?php
    }

    ?>

</table>
<h2 align = "center">Добавить новый товар</h2>
<form action="vendor/create.php" method="post" align = "center">
    <p>Инв. номер</p>
    <input type="text" name="Inventory">
    <p>Описание</p>
    <textarea name="description"></textarea>
    <p>Владелец</p>
    <input type="text" name="Owner">
    <button type="submit">Добавить</button>
</form>


</body>
</html>
