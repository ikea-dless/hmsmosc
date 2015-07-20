@extends('app')

@section('content')
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>メニュー</th>
            <th>値段</th>
            <th>食った？</th>
        </tr>
        </thead>
        <tbody>
        @foreach($menus as $menu)
            <tr>
                <td>{{ $menu->id }}</td>
                <td>{{ $menu->name }}</td>
                <td>{{ $menu->cost }}円</td>
                <td>
                    {!! Form::open(['action' => ['MenusController@create']]) !!}
                    <input type="hidden" name="id" value={{ $menu->id }}>
                    <button type="submit" class="btn btn-success">食った</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
