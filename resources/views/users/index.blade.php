@extends('app')

@section('content')
    <?php $all = 0; ?>
    @foreach($usermenus as $usermenu)
        <?php $all += $usermenu->menu->cost; ?>
    @endforeach
    <h1>あなたは今日学食で{{ $all }}円使いました。</h1>
@endsection