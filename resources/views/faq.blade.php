@extends('layout.app')

@section('title')
  FAQ
@endsection

@section('content')
  <main>
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-6">

            @foreach ($faqs_prima_del_corso as $faq)
              <h5>{{ $faq['domanda'] }}</h5>
              <p>{{ $faq['risposta'] }}</p>
            @endforeach

          </div>
          <div class="col-6">

            @foreach ($faqs_dopo_il_corso as $faq)
              <h5>{{ $faq['domanda'] }}</h5>
              <p>{{ $faq['risposta'] }}</p>
            @endforeach

          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
