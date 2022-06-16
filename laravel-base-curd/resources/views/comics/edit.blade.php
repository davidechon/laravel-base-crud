@extends('layouts.default')

@section('pageTitle','Modifica Fumetto')
    
@section('mainContent')
<main class="container">
<h1 class="text-center">Modifica fumetto</h1>

<form action="{{route('comics.update', $comic->id)}}" method="POST">
  @csrf
  @method('PUT')
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="title" name="title" value="{{$comic->title}}">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" aria-describedby="description" cols="30" name="description" value="{{$comic->description}}">{{$comic->description}}</textarea>
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">Image-url</label>
      <input type="text" class="form-control" id="thumb" aria-describedby="thumb" name="thumb"  value="{{$comic->thumb}}"">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control" id="price" aria-describedby="price" name="price"  value="{{$comic->price}}">
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control" id="series" aria-describedby="series" name="series"  value="{{$comic->series}}">
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">Data Uscita</label>
      <input type="text" class="form-control" id="sale_date" aria-describedby="sale_date" name="sale_date"  value="{{$comic->sale_date}}">
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Select Type :</label>
      <select class="form-control" name="type" id="type">
        <option value="comic book" {{$comic->type == 'comic book' ? 'selected' : ''}}">Comic Book</option>
        <option value="graphic novel" {{$comic->type == 'graphic novel' ? 'selected' : ''}}">Graphic Novel</option>
      </select>
    </div>
    <button type="submit" class="btn btn-warning">Salva modifiche</button>
  </form>


</main>
@endsection
