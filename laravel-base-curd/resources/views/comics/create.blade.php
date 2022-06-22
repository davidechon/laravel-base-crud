@extends('layouts.default')

@section('pageTitle','Aggiungi Fumetto')
    
@section('mainContent')
<main class="container">
<h1 class="text-center">Aggiungi nuovo fumetto</h1>

<form action="{{route('comics.store')}}" method="POST">
  @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="title" name="title" placeholder="Inserisci titolo" value="{{old('title')}}">
      @error('title')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" aria-describedby="description" cols="30" name="description" placeholder="Inserisci descrizione" value="{{old('description')}}"></textarea>
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">Image-url</label>
      <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" aria-describedby="thumb" name="thumb" placeholder="Inserisci url immagine" value="{{old('thumb')}}">
      @error('thumb')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="float" class="form-control @error('price') is-invalid @enderror" id="price" aria-describedby="price" name="price" placeholder="Inserisci il prezzo" value="{{old('price')}}">
      @error('price')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" aria-describedby="series" name="series" placeholder="Inserisci il nome della serie" value="{{old('series')}}">
      @error('series')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">Data Uscita</label>
      <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" aria-describedby="sale_date" name="sale_date" placeholder="Inserisci la data di uscita" value="{{old('sales_date')}}">
      @error('sale_date')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Select Type :</label>
      <select class="form-control" name="type" id="type">
        <option value="comic book">Comic Book</option>
        <option value="graphic novel">Graphic Novel</option>
      </select>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
  </form>


</main>
@endsection
