<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
<h1>Авторизация</h1>
<form method="POST" action="/authUser">
    @csrf
    <h4>логин</h4>
    <input type="text" name="login" id="">
    <h4>пароль</h4>
    <input type="password" name="password" id="">
    <input type="submit" value="Войти">
</form>
</body>
</html>
