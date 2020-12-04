<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/js/display_table_left.js') }}"></script>
    <title>{{ config('app.name') }}</title>
    </head>
<body>
  <div class="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </div>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <a class="navbar-brand" href="./">Hoque's Restaurant</a>
            <div class="navbar-collapse globalMenuSp" id="navbarText">
                <ul class="navbar-nav mr-auto d-flex justify-content-end">
                  <li class="nav-item active">
                  <a class="nav-link" href="./">TOP</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./aboutUs">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./booking">Book</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./contact">Contact</a>
                  </li>
              </ul>
            </div>
          </nav>

          <div class="container">
            <div class="mt-5 mb-4">
              <h1 class="text-center title-color">Booking Page</h1>
            <h3 class="text-right text-danger">{{ $vacancy }}Table left</h3>
            </div>
                
            <div>
                <div>We only have few tables left on {{ $date }}.</div>
                <div>To book this date, please contact us directly.</div>
                <div>TEL: ○○○-○○○○-○○○○</div>
                <div>Open: ○○:○○~○○:○○</div>
                <div>MAP: </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d44994.27278371845!2d5.680523!3d45.1842207!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478af4f4b38dff7d%3A0xdd66c42bbf04a627!2sMus%C3%A9e%20de%20Grenoble!5e0!3m2!1sfr!2sjp!4v1601459976596!5m2!1sfr!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

            <form action="{{ route('restaurant.booking') }}" method="get">
                <div class="d-flex justify-content-center">
                    <input type="submit" name="return" class="btn btn-primary mt-3 mr-5 col-3" value="back">
                </div>
            </form>
          </div>
          <aside class="easy-contact">
          <p>TEL: ○○○-○○○○-○○○○</p>
          <p>OPEN: 10:00~22:00</p>
        </aside>

          <footer>
          <div class="footer-menu-container">
            <div class="footer-menu">
              <p>TOP ｜</p>
              <p>About Us ｜</p>
              <p>Menu ｜</p>
              <p>Booking ｜</p>
              <p>Contact</p>
            </div>
            <div class="footer-logo">
              <p>© All rights reserved by Sanae.</p>
            </div>
          </div>
    </footer>
</body>
</html>