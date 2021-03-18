@extends('layouts.app')

@section('title', 'add movies')
    
@section('content')



    <div class="container ">
        <h3>Aggiungi Film</h3>
        <form action="{{route('movies.store')}}">
        <div class="form-group">
            <label for="name">Titolo</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Inserire Titolo del Film">
        </div>
        <div class="form-group">
            <label for="language">Lingua</label>
            <input type="text" class="form-control" id="language" name="language" placeholder="language">
        </div>
        <div class="form-group">
            <label for="rating">Valutazione</label>
            <input type="text" class="form-control" id="rating" name="rating" placeholder="Valutazione">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description" placeholder="Descrizione"></textarea>
        </div>

        <button type="add" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>


@endsection