<?php
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);


$pass = md5($pass."salt");

$mysql = mysqli_connect('localhost', 'root', '1111', 'registr-bg','80');

$result = $mysql->query("SELECT * FROM `registr-bg`.users WHERE `login` = '$login' AND  `pass` = '$pass'");

$user = $result->fetch_assoc();
if(count($user) == 0 ){
    echo "Такого пользователя нет";
    exit();
}

setcookie('user', $user['name'], time() + 7200 * 12,  "/");

$mysql->close();
header('Location: / ');