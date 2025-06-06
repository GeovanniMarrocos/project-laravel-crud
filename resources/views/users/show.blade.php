@extends('layouts.app')

@section('title', 'Listagem do Usuário')

@section('content')
<h1>Listagem dos usuário: {{ $user->name }}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
</ul>
<form action="{{ route('users.delete', $user->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Deletar</button>
</form>
@endsection
