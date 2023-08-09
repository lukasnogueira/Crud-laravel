@extends('master')

@section('content')
<h2>Detalhes do usuario</h2>

    <form action="{{route('users.destroy')}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <ul>            
            <li>{{$user->name}}</li>
            <li>{{$user->email}}</li>
            <li>{{$user->password}}</li>

        </ul>
        <button type="submit">Deletar</button><br>
        <a href="{{route('index')}}">Inicio</a>
    </form>
@endsection