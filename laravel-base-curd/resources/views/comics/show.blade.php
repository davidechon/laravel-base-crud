@extends('layouts.default')

@section('pageTitle', 'Comics - Fumetti')


@section('mainContent')
<div class="container">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
        <div class="col-md-4">
            <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="{{$comic->title}}">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">{{$comic->title}}</h5>
            <p class="card-text"><small class="text-muted">Type: {{$comic->type}}</small></p>
            <p class="card-text"><small class="text-muted">Series: {{$comic->series}}</small></p>
            <p class="card-text">{{$comic->description}}</p>
            <p class="card-text"><small class="text-muted">Sale date: {{$comic->sale_date}}</small></p>
            <p class="card-text"><small class="text-muted">Price: {{$comic->price}}</small></p>
            </div>
        </div>
        </div>
  </div>
</div>
@endsection
