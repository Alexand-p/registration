<?php
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
$passCheck = filter_var(trim($_POST['pass-check']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);

if(mb_strlen($login) <= 2 || mb_strlen($login) >= 90){
    echo"Недопустимая длинна поля <b>логин</b>";
    exit();
}else if ( $passCheck !==  $pass){
    echo"Пароли не совпадают";
    exit();
}
else if (mb_strlen($name) <= 3 || mb_strlen($name) >= 20){
    echo"Недопустимая длинна поля <b>имя</b>";
    exit();
}else if (mb_strlen($pass) <= 5 || mb_strlen($pass) >= 50) {
    echo "Недопустимая длинна поля <b>пароль</b>";
    exit();
}else if ($email === ''){
    echo "Нужно ввести email";
    exit();
}

$pass = md5($pass."salt");

$mysql = mysqli_connect('localhost', 'root', '1111', 'registr-bg','80');
mysqli_query($mysql, "INSERT INTO `users` ( `login`, `pass`,`name`) VALUES ('$login','$pass','$name')");

//    $mysql = new mysqli('localhost','root','1111','base');
//    $mysql->query("INSERT INTO `users` (`login`, `pass`,`name`) VALUES ('$login','$pass','$name')");

    $mysql->close();

    header('Location: / ');





































    ?>