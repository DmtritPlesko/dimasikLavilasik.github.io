<?php
require_once '../config/connect.php';

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

mysqli_query($connect, "INSERT INTO `goods` (`id`, `Inventory`, `description`, `Owner`) VALUES (NULL, '$inventory', '$description', '$owner')");

header('Location: ../');