<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <script src="{{ asset('/js/app.js') }}"></script>
        <title>{{ config('app.name') }}</title>

    </head>
    <body>
        <div class="body-container">
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
            <a class="navbar-brand" href="./">Hoque's restaurant</a>
            <div class="navbar-collapse globalMenuSp " id="navbarText">
                <ul class="navbar-nav mr-auto d-flex justify-content-end">
                <li class="nav-item">
                  <a class="nav-link" href="./">TOP</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./aboutUs">About Us</a>
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
              </ul>
            </div>
          </nav>
        <div class="justify-content-center d-flex align-items-center title-margin">
          <div class="title m-b-md font-italic font-weight-lighter text-primary">
            <h1 class="home-title">Welcome to </h1>
            <h1><a href="./aboutUs" class="home-title"> Our Restaurant</a></h1>
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
