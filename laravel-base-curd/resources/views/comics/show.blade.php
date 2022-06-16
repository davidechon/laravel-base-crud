@extends('layouts.default')

@section('pageTitle', 'Comics - Fumetti')

@section('mainContent')
  <div class="container">
    <h1>{{$comic->title}}</h1>
    <div>
      <img src="{{$comic->thumb}}" alt="">
      <p>{{$comic->description}}</p>
    </div>
  </div>
@endsection

{{-- @section('mainContent')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3 text-center">
                <a href="{{ route('comics.edit', $comic->id)}}">
                    <button class="btn btn-primary m-2">Modifica</button>
                </a>
            </div>
            <div class="col-3 text-center">
                <form action='{{ route('comics.destroy', $comic->id)}}' method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger m-2">Elimina</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="card" style="width: 500px;">
                <img class="w-25 mx-auto" src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->description }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Prezzo: {{ $comic->price }}</li>
                    <li class="list-group-item">Uscita: {{ $comic->sale_date }}</li>
                    <li class="list-group-item text-capitalize">Tipo: {{ $comic->type }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection --}}
