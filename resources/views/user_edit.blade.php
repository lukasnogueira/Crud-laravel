@extends('master')

@section('content')
<h2>Alterar Cadastro</h2>

    @if(session()->has('message'))
    {{session()->get('message')}}
    @endif
    <form action="{{route('users.update',['user' =>$user->id])}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" placeholder="Nome de Usuario" value="{{$user->name}}" name="name">
        <input type="email" placeholder="Email" name="email" value="{{$user->email}}">
        <input type="password" placeholder="Senha" name="password" value="{{$user->password}}">
        <button type="submit">Enviar</button><br>
        <a href="{{route('index')}}">Inicio</a>
    </form>
@endsection
