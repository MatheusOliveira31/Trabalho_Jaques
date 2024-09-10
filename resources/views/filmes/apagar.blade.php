{{-- views/animais/apagar.blade.php --}}
@extends('base')

@section('titulo', 'Filmes | Filmes para Inserção')

@section('conteudo')
<p>Tem certeza que quer apagar?</p>
<p><em>{{ $filmes['nome'] }}</em></p>

<form action="{{ route('filmes.apagar', $filmes['id']) }}" method="post">
@method('delete')
@csrf

<input type="submit" value="Pode apagar sem medo" style="background-color:red;color:white;">

</form>

<a href="{{ route('filmes') }}">Cancelar</a>
@endsection