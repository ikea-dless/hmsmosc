@extends('app')

@section('content')
    <div class="col-md-6">
        <form method="POST" action="/auth/login">
            {!! csrf_field() !!}
            <div class="form-group">
                メールアドレス
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                パスワード
                <input type="password" name="password" class="form-control" id=password">
            </div>

            <div class="form-group">
                <input type="checkbox" name="remember" class="checkbox"> 記憶する
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg">ログイン</button>
            </div>
        </form>
        <a href="/auth/register" class="btn btn-primary btn-lg">新規登録</a>
    </div>
@endsection