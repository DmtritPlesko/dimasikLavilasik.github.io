<?php

$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo $url;
$id = $_GET['id'];
echo $id;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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