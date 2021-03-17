@extends('layouts.app')

@section('title', 'home movies')
    
@section('content')
    <h1>Elenco Movies</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Lingua</th>
            <th scope="col">Valutazione</th>
            <th scope="col">Descrizione</th>

          </tr>
        </thead>
        <tbody>
           
            <tr>
                <th scope="row">{{ $film->id }}</th>
                <td>{{ $film->name }}</td>
                <td>{{ $film->language }}</td>
                <td>{{ $film->rating }}</td>
                <td>{{ $film->description }}</td>
              </tr>
           
          
        </tbody>
      </table>
@endsection