<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Получить токен</title>
</head>
<body>
<h1>Токен</h1>
<form method="POST" action="/logout">
    @csrf
    <input type="submit" value="Выйти">
</form>
<div id="tokenResponse"></div>
<div>
    <p>Введите URL сайта</p>
    <input type="text" name="url" id="tokenForm__inp_url">
    <p>Введите db_host</p>
    <input type="text" name="db_host" id="tokenForm__inp__db_host">
    <p>Введите db_port</p>
    <input type="text" name="db_port" id="tokenForm__inp__db_port">
    <p>Введите db_name</p>
    <input type="text" name="db_name" id="tokenForm__inp__db_name">
    <p>Введите db_username</p>
    <input type="text" name="db_username" id="tokenForm__inp__db_username">
    <p>Введите db_password</p>
    <input type="password" name="db_password" id="tokenForm__inp__db_password">
    <button name="tokenForm__btn" id="tokenForm__btn" >Получить токен</button>
</div>
<script src="{{URL::asset('assets/js/ajax.js')}}"></script>
</body>
</html>
