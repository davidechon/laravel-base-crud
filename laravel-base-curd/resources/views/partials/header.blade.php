<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand ms-3" href="/">
      <i class="fa-solid fa-house-chimney-window"></i>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" {{Route::currentRouteName() == 'home' ? 'active' : ''}} aria-current="page" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" {{Route::currentRouteName() == 'comics.index' ? 'active' : ''}} aria-current="page" href="{{route('comics.index')}}">Fumetti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" {{Route::currentRouteName() == 'comics.create' ? 'active' : ''}} aria-current="page" href="{{route('comics.create')}}">Aggiungi fumetto</a>
        </li>
        
      </ul>
    </div>
  </nav>
</header>