@extends('master')

@section('content')
    <h2>Bem Vindo ao Crude</h2>
    <a href="{{route('users.create')}}">Cadastrar-se</a><br>
    <a href="{{route('users.index')}}">Usuarios</a>
@endsection