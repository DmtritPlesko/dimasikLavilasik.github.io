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
