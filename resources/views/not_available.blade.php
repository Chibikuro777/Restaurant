<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('/js/display_table_left.js') }}"></script>
    <title>{{ config('app.name') }}</title>
    </head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <a class="navbar-brand" href="./">Hoque's Restaurant</a>
            <div class="collapse navbar-collapse" id="navbarText">
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

            <div>Sorry, The date: {{ $date }} is not available.</div>

            <form action="{{ route('restaurant.booking') }}" method="get">
                <div class="d-flex justify-content-center">
                    <input type="submit" name="return" class="btn btn-primary mt-3 mr-5 col-3" value="back">
                </div>
            </form>
          </div>

</body>
</html>