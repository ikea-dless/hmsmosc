<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>laravel</title>
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">hmsmosc</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/menus/index">メニュー<span class="sr-only"></span></a></li>
                <li><a href="/users/index">マイページ</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    @if(Auth::check())
                        <a href="/auth/logout">ログアウト</a>
                    @else
                        <a href="/auth/login">ログイン</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-top: 30px">
            @if (Session::has('flash_message'))
                <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
            @endif
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>