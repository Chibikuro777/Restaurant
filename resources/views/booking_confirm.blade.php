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
            <h1 class="mt-5 mb-4 title-color text-center">Booking Confirmation Page</h1>
            
          <form action="{{ route('restaurant.booking_thanks') }}" method="POST">
              @csrf
                  <div class="col">
                    <label for="date" class="mr-5"><span class="required-red"> *</span> Date:</label>{{ $input['date'] }}
                    <input type="hidden" name="date" class="form-control-lg mb-2" value="{{ old('date', $input['date'])}}">
                  </div>
                  <div class="col">
                    <label for="time" class="mr-5"><span class="required-red"> *</span> Time:</label>{{ $input['time'] }}
                    <input type="hidden" name="time" class="form-control-lg mb-2" value="{{ old('time', $input['time'])}}">
                  </div>
                  <div class="col">
                    <label for="people" class="mr-5"><span class="required-red"> *</span> People:</label>{{ $input['people'] }}
                    <input type="hidden" name="people" class="form-control-lg mb-2" value="{{ old('people', $input['people'])}}">
                      
                  </div>
                  <div class="col">
                <label for="first_name" class="mr-5"><span class="required-red"> *</span> First Name:</label>{{ $input['first_name'] }}
                <input type="hidden" name="first_name" class="form-control-lg mb-2" value="{{ old('first_name', $input['first_name'])}}">
                  </div>
                  <div class="col">
                <label for="last_name" class="mr-5"><span class="required-red"> *</span> Last Name:</label>{{ $input['last_name'] }}
                <input type="hidden" name="last_name" class="form-control-lg mb-2" value="{{ old('last_name', $input['last_name'])}}">
                  </div>
                    <div class="col">
                      <label for="tel" class="mr-5"><span class="required-red"> *</span> Tel#:</label>{{ $input['tel'] }}
                      <input type="hidden" name="tel" class="form-control-lg mb-2" value="{{ old('tel', $input['tel'])}}">
                    </div>
                    <div class="col">
                      <label for="email" class="mr-5"><span class="required-red"> *</span> Email:</label>{{ $input['email'] }}
                      <input type="hidden" name="email" class="form-control-lg mb-2" value="{{ old('email', $input['email'])}}">
                    </div>
                    <div class="col mb-4">
                    <span class="mr-5">&nbsp;&nbsp;Comment:</span>{{ $input['comment'] }}
                    <input type="hidden" name="comment" class="form-control-lg mb-2" value="{{ old('comment', $input['comment'])}}">
                    </div>
                    <div class="d-flex justify-content-center col button-margin button-margin-top">
                      <button type="submit" name="action" class="btn btn-primary mt-3 mr-5 col-3" value="return">Return</button>
                      <button type="submit" name="action" class="btn btn-primary mt-3 col-3" value="submit">Submit</button>
                    </div>
            </form>
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