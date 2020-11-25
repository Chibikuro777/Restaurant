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
            <h1 class="mt-5 mb-4 title-color text-center">Thank you for your Booking!</h1>
            <p>Your booking has been made successfully!</p>

            <a href="./" class="btn btn-primary"> Back to Top</a>
          </div>
          <footer>
            <div class="footer-menu">
              <p>home ｜</p>
              <p>about ｜</p>
              <p>service ｜</p>
              <p>Contact Us</p>
            </div>
            <div class="footer-logo">
              <p>© All rights reserved by webcampnavi.</p>
            </div>
            <aside class="easy-contact">
              <p>TEL: ○○○-○○○○-○○○○</p>
              <p>営業時間: ○○:○○~○○:○○</p>
            </aside>
          </footer>
</body>
</html>