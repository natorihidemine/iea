<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="icon" type="image/x-icon" href="/images/avatar20190701094624.jpg">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>家ある〜子</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="{{secure_asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">



<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

<div id="container">

<header>
<div class="inner">
<h1 id="logo"><a href="/rooms">家ある〜子   中央区版</a></h1>
</div>
</header>

@yield('content')
<footer>

<div id="copyright">
<small>Copyright&copy; <a href="/rooms">家ある〜子</a> All Rights Reserved.</small>
<span class="pr"><a href="http://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
</div>
<!--/#copyright-->

</footer>

</div>
<!--/#container-->

<p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>

<!--メニュー開閉ボタン-->


</body>
</html>