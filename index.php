<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-4">
    <?php
    if($_COOKIE['user'] == ''):
    ?>
       <div class="row">
           <div class="col">
               <h1>Форма регистрации</h1>
               <form action="validation-form/check.php" method="post">
                   <input type="text" class="form-control" name="login" id="login" placeholder="введите логин" required><br>
                   <input type="email" class="form-control" name="email" id="email" placeholder="введите почту" required><br>
                   <input type="password" class="form-control" name="pass" id="password" placeholder="введите пароль"><br>
                   <input type="password" class="form-control" name="pass-check" id="password-check" placeholder="проверьте пароль" required><br>
                   <input type="text" class="form-control" name="name" id="name" placeholder="введите имя"><br>
                   <button class="btn btn-success" type="submit">Регистрация</button>
               </form>
           </div>
           <div class="col">
               <h1>Форма авторизация</h1>
               <form action="validation-form/auth.php" method="post">
                   <input type="text" class="form-control" name="login" id="login" placeholder="введите логин"><br>
                   <input type="password" class="form-control" name="pass" id="password" placeholder="введите пароль"><br>
                   <button class="btn btn-success" type="submit">Авторизоваться</button>
               </form>
           </div>

           <?php else: ?>
            <p><?=$_COOKIE['user']?>. <a href="/exit.php">Выход</a></p>
           <?php endif; ?>

       </div>
    </div>

</body>
</html>