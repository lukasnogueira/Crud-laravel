@extends('master')

@section('content')
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <input type="text" placeholder="Nome de Usuario" name="name">
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Senha" name="password">
        <button type="submit">Enviar</button><br>
        <a href="{{route('index')}}">Inicio</a>
    </form>
@endsection
