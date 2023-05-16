<?php
session_start();
$host = 'localhost'; // адрес сервера
$db_name = 'test'; // имя базы данных
$user = 'root'; // имя пользователя
$pass = 'root'; // пароль

// создание подключения к базе
$connect = mysqli_connect($host, $user, $pass, $db_name);
if (!$connect){
    die ('Error 1000');
}

$login = $_POST['login'];
$password = $_POST['password'];

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'");

if (mysqli_num_rows($check_user) > 0){
    header('Location: /');
}else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../index.php');
}