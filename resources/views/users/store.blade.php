@extends('layouts.app');

@section('title','Criar Usuários')

@section('content')
<h1>Novo Usuário</h1>

<form action="" method="post">
    <input type="text" name="name" placeholder="Nome do Usuário:" >
    <input type="email" name="email" placeholder="E-mail:" >
    <input type="password" name="password" placeholder="Senha:" >
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
