
<?php
use Illuminate\Support\Facades\Auth;
?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mz-statistics    </title>
    <link rel="stylesheet" href="{{URL::asset("assets/css/style.css")}}">
</head>
    <body>
 {{--   <?php
        if (Auth::check()){
            echo 'Вы авторизированы';
    ?>
    <form method="POST" action="/logout">
        @csrf
        <input type="submit" value="Выйти">
    </form>
    <?php
        }
        else{
            echo 'Вы не авторизированы';
        }
    ?>--}}
 <div id="background"></div>
 <header id="page-header"><a id="hamburger" href="#sidebar-nav" target="_self"><span class="line"></span><span class="line"></span><span class="line"></span></a></header>
 <nav id="sidebar-nav">
     <header id="sidebar-header">
         <ul id="sidebar-nav-list">
             <li class="sidebar-nav-item" id="nav-item-home"><a href="#"><i class="material-icons">ико</i>1</a></li>
             <li class="sidebar-nav-item" id="nav-item-social"><a href="#"><i class="material-icons">ико</i>2</a></li>
             <li class="sidebar-nav-item" id="nav-item-mail"><a href="#"><i class="material-icons">ико</i>3</a></li>
             <li class="sidebar-nav-item" id="nav-item-pictures"><a href="#"><i class="material-icons">ико</i>4</a></li>
             <li class="sidebar-nav-item" id="nav-item-music"><a href="#"><i class="material-icons">ико</i>5</a></li>
             <li class="sidebar-nav-item" id="nav-item-files"><a href="#"><i class="material-icons">ико</i>6</a></li>
             <li class="sidebar-nav-item" id="nav-item-settings"><a href="#"><i class="material-icons">ико</i>7</a></li>
             <li class="sidebar-nav-item" id="nav-item-close"><a href="#"><i class="material-icons">ико</i>8</a></li>
         </ul>
     </header>
 </nav><a id="nav-screen-overlay" href="#" target="_self"></a>
 <div class="scrollDist"></div>
 <div class="main">
     <svg viewBox="0 0 1200 800" xmlns="http://www.w3.org/2000/svg">
         <mask id="m">
             <g class="cloud1">
                 <rect fill="#fff" width="100%" height="801" y="799" />
                 <image xlink:href="/assets/img/cloud1Mask.jpg" width="1200" height="800"/>
             </g>
         </mask>

         <image class="sky" xlink:href="/assets/img/sky.jpg"  width="1200" height="590" />
         <image class="mountBg" xlink:href="/assets/img/mountBg.png" width="1200" height="800"/>
         <image class="mountMg" xlink:href="/assets/img/mountMg.png" width="1200" height="800"/>
         <image class="cloud2" xlink:href="/assets/img/cloud2.png" width="1200" height="800"/>
         <image class="mountFg" xlink:href="/assets/img/mountFg.png" width="1200" height="800"/>
         <image class="cloud1" xlink:href="/assets/img/cloud1.png" width="1200" height="800"/>
         <image class="cloud3" xlink:href="/assets/img/cloud3.png" width="1200" height="800"/>
         <text id="animt" fill="#fff" x="350" y="200">Почувствуй</text>
         <polyline class="arrow" fill="#fff" points="599,250 599,289 590,279 590,282 600,292 610,282 610,279 601,289 601,250" />

         <g mask="url(#m)">
             <rect fill="#fff" width="100%" height="100%" />
             <text id="animt" x="350" y="200" fill="#162a43">Будущее</text>
         </g>

         <rect id="arrowBtn" width="100" height="100" opacity="0" x="550" y="220" style="cursor:pointer"/>
     </svg>
 </div>
 <script src="{{URL::asset("assets/js/gsap.min.js")}}"></script>
 <script src="{{URL::asset("assets/js/ScrollTrigger.min.js")}}"></script>
 <script src="{{URL::asset("assets/js/ScrollToPlugin3.min.js")}}"></script>
 <script src="{{URL::asset("assets/js/zepto.min.js")}}"></script>
 <script src="{{URL::asset("assets/js/script.js")}}"></script>
    </body>
