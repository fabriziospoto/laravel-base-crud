@extends('layouts.app')
@section('content')
    <h2>Ecco i tuoi fumetti</h2>
    @foreach ($data as $comic)
        <h3>{{ $comic->personaggio }}</h3>
        <p>{{ $comic->storia }}, {{ $comic->numero }}, {{ $comic->anno }}</p>
        <p>{{ $comic->editore }}</p>
    @endforeach
@endsection
