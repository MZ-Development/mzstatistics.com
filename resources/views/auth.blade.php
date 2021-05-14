@extends('templates.auth_template')
@section('content')
<body>
{{--<img class="body_image" src="{{URL::asset("assets/img/1122.jpg")}}">--}}
<div class="container right-panel-active">
    <div class="container__form container__signup">
        <form action="#" class="form" id="form1">
            <h2 class="form__title">Регистрация</h2>
            <input type="text" placeholder="Логин" class="input" />
            <input type="email" placeholder="Почта" class="input" />
            <input type="password" placeholder="Пароль" class="input" />
            <button class="btn">Регистрация</button>
        </form>
    </div>

    <div class="container__form container__signin">
        <form method="POST" action="/authUser" class="form" id="form2">
            <h2 class="form__title">Войти</h2>
            <input type="text" placeholder="Логин" name="login" class="input" />
            <input type="password" placeholder="Пароль" name="password" class="input" />
            <a href="#" class="link">Забыли пароль?</a>
            <button class="btn">Войти</button>
        </form>
    </div>

    <div class="container__overlay">
        <div class="overlay">
            <div class="overlay__panel overlay--left">
                <button class="btn" id="signIn">Войти</button>
            </div>
            <div class="overlay__panel overlay--right">
                <button class="btn" id="signUp">Регистрация</button>
            </div>
        </div>
    </div>
</div>

<script src="{{URL::asset("assets/js/script.js")}}"></script>
</body>
</html>
