@extends('layouts.app')
@section('content')
    <h2>Ecco il fumetto selezionato</h2>
        <h3>{{ $comic->personaggio }}, id: {{ $comic->id }}</h3>
        <p>{{ $comic->storia }}, {{ $comic->numero }}, {{ $comic->anno }}</p>
        <p>{{ $comic->editore }}</p>
@endsection
