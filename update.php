<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
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


$goods_id = $_GET['id'];

$good = mysqli_query($connect, "SELECT * FROM `goods` WHERE id = '$goods_id'");
$good = mysqli_fetch_assoc($good);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Обновить товар</title>
</head>
<body>

<h2>Обновить товар</h2>
<form action="vendor/update.php" method="post">
    <input type="hidden" name="id" value="<?=$goods_id?>">
    <p>Инвентарный номер</p>
    <input type="text" name="Inventory" value="<?=$good['Inventory'] ?>">
    <p>Описание</p>
    <textarea name="description"> <?=$good['description']?></textarea>
    <p>Владелец</p>
    <input type="text" name="Owner" value="<?=$good['Owner']?>">
    <button type="submit">Обновить</button>
</form>
<?php if(isset($filename)): ?>
<div>
    <img  src="<?= $filename; ?>" alt="Qrcode" loading="lazy" class="w-60">

</div>
<a href="<?= $filename; ?>"  download> download </a>
<?php endif ?>
</body>
</html>
