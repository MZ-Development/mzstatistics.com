<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
<h1>Регистрация</h1>
<form method="POST" action="/signUser">
    @csrf
    <h4>Введите имя</h4>
    <input type="text" name="name" id="">
    <h4>Введите почту</h4>
    <input type="email" name="email" id="">
    <h4>Введите ваш номер</h4>
    <input type="tel" name="phone" id="">
    <h4>Введите логин</h4>
    <input type="text" name="login" id="">
    <h4>Введите пароль</h4>
    <input type="password" name="password" id="">
    <input type="submit" value="Регистрация">
</form>
</body>
</html>
