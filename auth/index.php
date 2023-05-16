<?php
    session_start();
$host = 'localhost'; // адрес сервера
$db_name = 'test'; // имя базы данных
$user = 'root'; // имя пользователя
$password = 'root'; // пароль

// создание подключения к базе
$connect = mysqli_connect($host, $user, $password, $db_name);
if (!$connect){
    die ('Error 1000');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Авторизация</title>
</head>
<body >
<form action="authvendor/signin.php" method="post" >
    <label>Login</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <labal>Password</labal>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit">Sign</button>
    <p class="error">
        <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
        ?>
    </p>

   
</form>
</body>
</html>