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
            
            <form action="" method="POST">
              @csrf
              <div class="form-group">
                <div class="form-row">
                  <div class="form-group col">
                    <label for="date">Date:</label>
                  </div>
                  <div class="form-group col">
                    <label for="time">Time:</label>
                  </div>
                  <div class="form-group col">
                    <label for="people">People:</label>
                      
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                <label for="first_name">First Name:</label>
                  </div>
                  <div class="col">
                <label for="last_name">Last Name:</label>
                  </div>
                </div>
                  <div class="row">
                    <div class="col">
                      <label for="">Tel#:</label>
                    </div>
                    <div class="col">
                      <label for="">Email:</label>
                    </div>
                  </div>
                    Comments:
                  <div class="row">
                    <div class="d-flex justify-content-center col">
                      <button type="submit" name="submit" class="btn btn-primary mt-3 mr-5 col-3" value="back">Return</button>
                      <button type="submit" name="submit" class="btn btn-primary mt-3 col-3" value="submit">Submit</button>
                    </div>
                </div>
            </form>
          </div>
</body>
</html>