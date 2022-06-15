@extends('layouts.default')

@section('pageTitle', 'Comics - Lista Fumetti')

@section('mainContent')
<main>
  <div class="container">

<h1 class="text-center">Comics - Lista Fumetti</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Titolo</th>
          {{-- <th scope="col">Descrizione</th> --}}
          <th scope="col">Copertina</th>
          <th scope="col">Prezzo</th>
          <th scope="col">Serie</th>
          <th scope="col">DD Uscita</th>
          <th scope="col">Tipo</th>
          {{-- <th scope="col">Visualizza</th>
          <th scope="col">Modifica</th>
          <th scope="col">Cancella</th> --}}
        </tr>
      </thead>
      <tbody>
          @foreach ($comics as $comic)
          {{-- ?php 
          var_dump($comic);
          ? --}}
          <tr>
              <td>{{$comic->id}}</td>
              <td>{{$comic->title}}</td>
              {{-- <td>{{$comic->description}}</td> --}}
              <td>{{$comic->thumb}}</td>
              <td>{{$comic->price}}</td>
              <td>{{$comic->series}}</td>
              <td>{{$comic->sale_date}}</td>
              <td>{{$comic->type}}</td>
              {{-- <td> <a href="{{route('comics/show', $comics->id)}}" class="btn-info">Visualizza</a></td>
              <td> <a href="{{route('comics/show',$comic->id)}}" class="btn-warning">Modifica</a></td>
              <td> <a href="{{route('comics/show',$comic->id)}}" class="btn-danger">Cancella</a></td> --}}
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</main>
    
@endsection