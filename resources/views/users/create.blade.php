@extends('layouts.app');

@section('title','Criar Usuários')

@section('content')
<h1>Novo Usuário</h1>

@if ($errors->any())
    <ul class="erros">
        @foreach ($errors->all() as $error)
            <li class="error"> {{ $error }} </li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nome do Usuário:" >
    <input type="email" name="email" placeholder="E-mail:" >
    <input type="password" name="password" placeholder="Senha:" >
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
