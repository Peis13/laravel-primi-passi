@extends('layout.app')

@section('title')
  FAQ
@endsection

@section('content')

  {{-- INTRO --}}
  <section id="intro" class="section">
    <div class="container-fluid">
      <div class="intro">
        <h2>Domande frequenti</h2>
        <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
      </div>
    </section>
    </div>
  {{-- FINE INTRO --}}

  {{-- FAQ --}}
  <section id="faq">
    <div class="container-fluid">
      <div class="row">

        {{-- prima del corso --}}
        <div class="col-6 section prima">
          <h4>Prima del corso</h4>

            @foreach ($faqs_prima_del_corso as $indice => $faq)
              <h5 data-index="{{ $indice }}" class="domanda">{{ $faq['domanda'] }}&nbsp;<span class="visualizza-faq">+</span></h5>
              <p data-index="{{ $indice }}" class="risposta">{{ $faq['risposta'] }}</p>
            @endforeach

        </div>
        {{-- fine prima del corso --}}

        {{-- dopo il corso --}}
        <div class="col-6 section dopo">
          <h4>Dopo del corso</h4>

            @foreach ($faqs_dopo_il_corso as $indice => $faq)
              <h5 data-index="{{ $indice }}" class="domanda">{{ $faq['domanda'] }}&nbsp;<span class="visualizza-faq">+</span></h5>
              <p data-index="{{ $indice }}" class="risposta">{{ $faq['risposta'] }}</p>
            @endforeach

        </div>
        {{-- fine dopo il corso --}}
      </div>
    </div>
  </section>
  {{-- FINE FAQ --}}

@endsection
