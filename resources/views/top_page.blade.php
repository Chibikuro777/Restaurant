<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="">
        <title>Restaurant Name</title>

    </head>
    <body>
        <div class="body-container">
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
            <a class="navbar-brand" href="./">Hoque's restaurant</a>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto d-flex justify-content-end">
                <li class="nav-item active">
                  <a class="nav-link" href="./">TOP</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./aboutUs">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./menu">メニュー</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./booking">予約する</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./enquiry">お問い合わせ</a>
                  </li>
              </ul>
            </div>
          </nav>
        <div class="justify-content-center d-flex align-items-center">
            <div class="title m-b-md font-italic font-weight-lighter text-primary">
            <h1><a href="./aboutUs">Welcome to Our Restaurant</a></h1>
        </div>
        </div>
    </div>
    </body>
</html>
