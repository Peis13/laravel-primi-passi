@extends('layout.app')

@section('title')
  Home
@endsection

@section('content')
  <main>
    <section id="jumbotron" class="section">

      {{-- Jumbotron --}}
      <div class="container">
        <div class="row">
          {{-- left --}}
          <div class="col-6">
            <h1>DIVENTA <strong>SVILUPPATORE WEB</strong></h1>
            <h5>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</h5>
            <ul>
              <li><strong>6 mesi</strong> di corso intensivo online in diretta</li>
              <li><strong>Nessuna competenza</strong> di programmazione richiesta</li>
              <li>Siamo certi del tuo successo, altrimenti <strong>ti rimborsiamo</strong></li>
            </ul>
          </div>
          {{-- fine left --}}

          {{-- right --}}
          <div class="col-6">
            <div class="gif">
              <img src="{{ asset('img/jumbo-gif.gif') }}" alt="laptop-coding">
            </div>
          </div>
          {{-- fine right --}}
        </div>
      </div>
      {{-- Fine Jumbotron --}}
    </section>
  </main>
@endsection
