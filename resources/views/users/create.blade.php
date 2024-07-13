@extends('layouts.app');

@section('title','Criar Usuários')

@section('content')
<h1>Novo Usuário</h1>

<form action="{{ route('users.store') }}" method="post">
    <input type="text" name="name" placeholder="Nome do Usuário:" required>
    <input type="email" name="email" placeholder="E-mail:" required>
    <input type="password" name="password" placeholder="Senha:" required>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
