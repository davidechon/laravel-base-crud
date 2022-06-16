@extends('layouts.default')

@section('pageTitle','Aggiungi Fumetto')
    
@section('mainContent')
<main class="container">
<h1 class="text-center">Aggiungi nuovo fumetto</h1>

<form action="{{route('comics.store')}}" method="POST">
  @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="Inserisci titolo">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" aria-describedby="description" cols="30" name="description" placeholder="Inserisci descrizione"></textarea>
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">Image-url</label>
      <input type="text" class="form-control" id="thumb" aria-describedby="thumb" name="thumb" placeholder="Inserisci url immagine">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="float" class="form-control" id="price" aria-describedby="price" name="price" placeholder="Inserisci il prezzo">
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control" id="series" aria-describedby="series" name="series" placeholder="Inserisci il nome della serie">
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">Data Uscita</label>
      <input type="date" class="form-control" id="sale_date" aria-describedby="sale_date" name="sale_date" placeholder="Inserisci la data di uscita">
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
