<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            <a class="navbar-brand" href="./">Hoque's restaurant</a>
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
            <h1 class="mt-5 mb-4 title-color text-center">Contact Us</h1>
            
            Thank you for your contact!
            <br>
            <a href="/contact"><button type="button" name="button" class="btn btn-primary mt-3 col-3 mr-5" value="back">back</button></a>
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