@extends('master')

@section('content')
    <table>
        <h2>Usuarios</h2>
        <thead>
            <th>Nome</th>
            <th>Email</th>
        </thead>
        @foreach ($users as $user)
        <tr>
            <td>{{$user ->name}}</td>
            <td>{{$user ->email}}</td>
            <td>
            <a href="{{route('users.edit',['user' => $user->id])}}">Editar</a>
            <a href="{{route('users.show',['user' => $user->id])}}">Perfil</a>
        </tr>
        @endforeach
    </table>
    <a href="{{route('index')}}">Inicio</a>
@endsection
