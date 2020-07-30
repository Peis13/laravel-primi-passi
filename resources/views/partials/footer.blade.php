<footer>

  {{-- Footer top --}}
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="footer-top">
          <div class="row">

            {{-- footer left --}}
            <div class="col-6">
              <div class="logo">
                <img class="logo" src="{{ asset('img/logo-white.png') }}" alt="boolean.careers">
              </div>
              <div class="address">
                <span>Sede operativa</span>
                <span>Via Carducci 12 - 20123 Milano</span>
                <span>Tel: 02-40031288</span>
              </div>
            </div>
            {{-- fine footer left --}}

            {{-- footer right --}}
            <div class="col-6">
              <ul class="links">
                <li>
                  <a href="#">Lezione gratuita</a>
                </li>
                <li>
                  <a href="{{ route('faq') }}">Domande frequenti</a>
                </li>
                <li>
                  <a href="{{ route('privacy-policy') }}">Privacy policy</a>
                </li>
                <li>
                  <a href="#">Lavora con noi</a>
                </li>
              </ul>
            </div>
            {{-- fine footer right --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Fine Footer top --}}

  {{-- Footer bottom --}}
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="footer-bottom text-center">
          <ul class="social">
            <li>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul>

          <span class="address">Boolean SRL - Piazzale Giovanni dalle Bande Nere, 9 - 20146, Milano - P.IVA: 10214930967</span>
        </div>
      </div>
    </div>
  </div>
  {{-- Fine Footer bottom --}}
</footer>
