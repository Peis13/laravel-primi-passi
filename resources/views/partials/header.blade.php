<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('homepage') }}">
      <img class="logo" src="{{ asset('img/logo.png') }}" alt="boolean.careers">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('homepage') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Corso</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dopo il corso</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Lezione Gratuita</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
