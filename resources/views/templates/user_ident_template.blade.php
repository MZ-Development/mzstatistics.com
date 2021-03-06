<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset("assets/css/user_ident.css")}}">
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <title>Идентификация</title>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
</head>
<script src="{{URL::asset("assets/js/gsap.min.js")}}"></script>
<script src="{{URL::asset("assets/js/ScrollTrigger.min.js")}}"></script>
<script src="{{URL::asset("assets/js/ScrollToPlugin3.min.js")}}"></script>
<script src="{{URL::asset("assets/js/ident.js")}}"></script>
@yield("content")
