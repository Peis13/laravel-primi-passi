<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    {{-- Foglio di stile --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  </head>
  <body>

    {{-- HEADER --}}
    @include('partials/header')
    {{-- FINE HEADER --}}

    @yield('content')

    {{-- FOOTER --}}
    @include('partials/footer')
    {{-- FINE FOOTER --}}

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
