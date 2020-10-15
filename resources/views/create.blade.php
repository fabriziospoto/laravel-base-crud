@extends('layouts.app')
@section('content')
    <h2>Inserisci il tuo fumetto</h2>
    <form action="{{route('comics.store')}}" method="post">
    @csrf
    @method('POST')
    <label for="personaggio">Personaggio</label>
    <input type="text" name="personaggio" placeholder="Nome" value = {{ old('nome' )}}>
    <label for="storia">Storia</label>
    <input type="text" name="storia" placeholder="Storia" value = {{ old('storia' )}}>
    <label for="numero">Numero</label>
    <input type="number" name="numero" placeholder="Numero" value = {{ old('numero' )}}>
    <label for="anno">Anno</label>
    <input type="number" name="anno" placeholder="Anno" value = {{ old('anno' )}}>
    <label for="editore">Editore</label>
    <input type="text" name="editore" placeholder="Editore" value = {{ old('editore' )}}>
    <input type="submit" value="Invia">
    </form>

@endsection
