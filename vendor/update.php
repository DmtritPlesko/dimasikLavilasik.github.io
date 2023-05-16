<?php
$host = 'localhost'; // адрес сервера
$db_name = 'test'; // имя базы данных
$user = 'root'; // имя пользователя
$password = 'root'; // пароль

// создание подключения к базе
$connect = mysqli_connect($host, $user, $password, $db_name);
if (!$connect){
    die ('Error 1000');
}


$inventory = $_POST['Inventory'];
$description = $_POST['description'];
$owner = $_POST['Owner'];
$id = $_POST['id'];
mysqli_query($connect, "UPDATE `goods` SET  `Inventory` = '$inventory', `description` = '$description', `Owner` = '$owner' WHERE `goods`.`id` = '$id'");
header('Location: /');
    

