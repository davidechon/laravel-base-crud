@extends('layouts.default')

@section('pageTitle', 'Comics - Fumetti')

@section('mainContent')
<main>
  <div class="container">
    <h1>{{$comics->title}}</h1>
    <div>
      <img src="{{$comics-thumb}}" alt="">
      <p>{{$comics->description}}</p>
    </div>
  </div>
</main>
@endsection