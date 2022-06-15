@extends('layouts.default')

@section('pageTitle', 'Comics - Fumetti')

@section('')
<main>
  <div class="container">
    <h1>{{$comic->title}}</h1>
    <div>
      <img src="{{$comic-thumb}}" alt="">
      <p>{{$comic->description}}</p>
    </div>
  </div>
</main>
@endsection