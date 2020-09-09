<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="">
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
            <h1 class="mt-5 mb-4 title-color">Booking Confirmation Page</h1>
            
          <form action="{{ route('restaurant.booking_thanks') }}" method="POST">
              @csrf
              <div class="form-group">
                <div class="form-row">
                  <div class="form-group col">
                    <label for="date" class="mr-5">Date:</label>{{ $input['date'] }}
                  </div>
                  <div class="form-group col">
                    <label for="time" class="mr-5">Time:</label>{{ $input['time'] }}
                  </div>
                  <div class="form-group col">
                    <label for="people" class="mr-5">People:</label>{{ $input['people'] }}
                      
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                <label for="first_name" class="mr-5">First Name:</label>{{ $input['first_name'] }}
                  </div>
                  <div class="col">
                <label for="last_name" class="mr-5">Last Name:</label>{{ $input['last_name'] }}
                  </div>
                </div>
                  <div class="row">
                    <div class="col">
                      <label for="tel" class="mr-5">Tel#:</label>{{ $input['tel'] }}
                    </div>
                    <div class="col">
                      <label for="email" class="mr-5">Email:</label>{{ $input['email'] }}
                    </div>
                  </div>
                    <span class="mr-5">Comments:</span>{{ $input['comments'] }}
                  <div class="row">
                    <div class="d-flex justify-content-center col">
                      <button type="submit" name="submit" class="btn btn-primary mt-3 mr-5 col-3" value="return">Return</button>
                      <button type="submit" name="submit" class="btn btn-primary mt-3 col-3" value="submit">Submit</button>
                    </div>
                </div>
            </form>
          </div>
</body>
</html>