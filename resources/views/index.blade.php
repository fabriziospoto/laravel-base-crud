@extends('layouts.app')
@section('content')
    <h2>Ecco i tuoi fumetti</h2>
    @foreach ($data as $comic)
        <a href="{{ route('comics.show', $comic->id) }}"><h3>{{ $comic->personaggio }}</h3></a>
        <p>{{ $comic->storia }}</p>
        <form action="{{ route('comics.destroy',$comic->id)}}"  method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="cancella">
        </form>
    @endforeach
@endsection
