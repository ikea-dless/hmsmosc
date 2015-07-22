@extends('app')

@section('content')
<form method="POST" action="/auth/register">
    {!! csrf_field() !!}
    <div class="col-md-6">
        <div class="form-group">
            名前
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            メールアドレス
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            パスワード
            <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            パスワード確認
            <input type="password" name="password_confirmation" class="form-control"`>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg">新規登録</input>
        </div>
    </div>
</form>
@endsection