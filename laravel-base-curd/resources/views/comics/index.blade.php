@extends('layouts.default')

@section('pageTitle', 'Comics - Lista Fumetti')

@section('mainContent')
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
              <td> <a href="{{route('comics.show', $comic->id)}}" class="btn btn-info">Visualizza</a></td>
              <td> <a href="{{route('comics.edit',$comic->id)}}" class="btn btn-warning">Modifica</a></td>
              <td> 
                <form action='{{route('comics.destroy',$comic->id)}}' method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
                 </td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>

    
@endsection