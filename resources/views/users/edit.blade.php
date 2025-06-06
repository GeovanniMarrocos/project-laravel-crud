@extends('layouts.app');

@section('title', "Editar o usuário $user->name ")

@section('content')
<h1>Editar o usuário {{ $user->name }}</h1>

@if ($errors->any())
    <ul class="erros">
        @foreach ($errors->all() as $error)
            <li class="error"> {{ $error }} </li>
        @endforeach
    </ul>
@endif

<form action="{{route('users.update', $user->id)}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" placeholder="Nome do Usuário:" value="{{$user->name}}" >
    <input type="email" name="email" placeholder="E-mail:" value="{{ $user->email }}">
    <input type="password" name="password" placeholder="Senha:">
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
