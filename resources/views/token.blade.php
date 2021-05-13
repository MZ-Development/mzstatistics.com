<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Получить токен</title>
</head>
<body>
<h1>Токен</h1>
<form method="POST" action="/logout">
    @csrf
    <input type="submit" value="Выйти">
</form>
<form method="POST" action="/setToken">
    @csrf
    <p>Введите URL сайта</p>
    <input type="text" name="url" id="">
    <p>Введите db_host</p>
    <input type="text" name="db_host" id="">
    <p>Введите db_port</p>
    <input type="text" name="db_port" id="">
    <p>Введите db_name</p>
    <input type="text" name="db_name" id="">
    <p>Введите db_username</p>
    <input type="text" name="db_username" id="">
    <p>Введите db_password</p>
    <input type="password" name="db_password" id="">
    <input type="submit" value="Получить токен">
</form>
</body>
</html>
