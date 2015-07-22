@extends('app')

@section('content')
    <h1>{{ $user->name }}さんは今日学食で{{ $todaycost }}円使いました。</h1>
    <h1>トータルでは{{ $allcost }}円使っています。</h1>
@endsection