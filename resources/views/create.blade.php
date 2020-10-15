@extends('layouts.app')
@section('content')
    <form action="{{route('comics.store')}}" method="post">
    @csrf
    @method('POST')
    <label for="personaggio">Personaggio</label>
    <input type="text" name="personaggio" placeholder="Nome">
    <label for="storia">Storia</label>
    <input type="text" name="storia" placeholder="Storia">
    <label for="numero">Numero</label>
    <input type="number" name="numero" placeholder="Numero">
    <label for="anno">Anno</label>
    <input type="number" name="anno" placeholder="Anno">
    <label for="editore">Editore</label>
    <input type="text" name="editore" placeholder="Editore">
    <input type="submit" value="Invia">
    </form>

@endsection
