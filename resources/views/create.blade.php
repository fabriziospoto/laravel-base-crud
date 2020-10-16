@extends('layouts.app')
@section('content')
    <h2>Inserisci il tuo fumetto</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
           </ul>
        </div>
    @endif
    <form action="{{(!empty($comic)) ? route('comics.update',$comic->id) : route('comics.store')}}" method="post">
        @csrf
        @if(!empty($comic))
            @method('PATCH')
            <input type="hidden" name="id" value="{{ $comic->id}}">
        @else
            @method('POST')
        @endif
        <label for="personaggio">Personaggio</label>
        <input type="text" name="personaggio" placeholder="Nome" value = {{(!empty($comic)) ? $comic->personaggio : old('personaggio')}}>
        <label for="storia">Storia</label>
        <input type="text" name="storia" placeholder="Storia" value = {{(!empty($comic)) ? $comic->storia : old('storia')}}>
        <label for="numero">Numero</label>
        <input type="number" name="numero" placeholder="Numero" value = {{(!empty($comic)) ? $comic->numero : old('numero')}}>
        <label for="anno">Anno</label>
        <input type="number" name="anno" placeholder="Anno" value = {{(!empty($comic)) ? $comic->anno : old('anno')}}>
        <label for="editore">Editore</label>
        <input type="text" name="editore" placeholder="Editore" value = {{(!empty($comic)) ? $comic->editore : old('editore')}}>
        <input type="submit" value="Invia">
    </form>

@endsection
