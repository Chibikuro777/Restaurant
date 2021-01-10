<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('/js/app.js') }}"></script>
    <title>{{ config('app.name') }}</title>

    </head>
<body>
  <div class="booking-body-container">
    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <a class="navbar-brand" href="./">Hoque's Restaurant</a>
            <div class="navbar-collapse globalMenuSp" id="navbarText">
                <ul class="navbar-nav mr-auto d-flex justify-content-end">
                  <li class="nav-item">
                    <a class="nav-link" href="./">TOP</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./menu">Menu</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./booking">Booking</a>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./contact">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./access">Access</a>
                  </li>
              </ul>
            </div>
          </nav>

          <div class="container">
            <h1 class="mt-5 mb-4 title-color text-center">Thank you for your Booking!</h1>
            <p class="text-center">Your booking has been made successfully!</p>
            <div class="row">
                <a href="./" class="col d-flex justify-content-center"><button type="button" name="button" class="btn btn-primary mt-3 col-4" value="back">Back to Top</button></a>
            </div>
          </div>
        </div>
          
          <div class="smooth-up">
            <i class="far fa-caret-square-up scroll-up fa-2x"></i>
            <aside class="easy-contact">
              <p>TEL: ○○○-○○○○-○○○○</p>
              <p>OPEN: 10:00~22:00</p>
            </aside>
          </div>

          <footer>
          <div class="footer-menu-container">
            <div class="footer-menu">
              <p><a href="./">TOP ｜</a></p>
              <p><a href="/menu">Menu ｜</a></p>
              <p><a href="/booking">Booking ｜</a></p>
              <p><a href="/contact">Contact ｜</a></p>
              <p><a href="/access">Access</a></p>
            </div>
            <div class="footer-logo">
              <p>© All rights reserved by Sanae.</p>
            </div>
          </div>
    </footer>
</body>
</html>