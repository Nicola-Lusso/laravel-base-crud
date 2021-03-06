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
          </tr>
        </thead>
        <tbody>
            @foreach ($films as $film)
            <tr>
                <th scope="row">{{ $film->id }}</th>
                <td>{{ $film->name }}</td>
                <td>{{ $film->language }}</td>
                <td>{{ $film->rating }}</td>
                <td><a href="{{ route ('movies.show', ['movie' => $film->id])}}">Descrizione</a></td>
                <td><a href="{{ route('movies.edit', ['movie' => $film->id])}}" class="btn btn-warning">modifica</a></td>
              </tr>
            @endforeach
            <td>
              <div class="adds">
                  <a href="{{route('movies.create')}}">Aggiungi Film</a>
              </div>
            </td>
        </tbody>
      </table>
@endsection