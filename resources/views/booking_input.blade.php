<?php
  use Carbon\Carbon;

?>
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
            <h1 class="mt-5 mb-4 title-color">Booking Page</h1>
          <form action="{{ route('restaurant.booking_confirm') }}" method="POST" class="needs-validation">
              @csrf
              <div class="form-group">
                <div class="form-row">
                  <div class="form-group col">
                    <label for="date">Date:</label><input type="text" name="date" value="{{ old('date', Carbon::now()->format('d/m/Y')) }}" class="form-control">
                  </div>
                  <div class="form-group col">
                    <label for="time">Time:</label><input type="time" value="19:00" name="time" class="form-control" value="{{ old('time') }}"><br>
                  </div>
                  <div class="form-group col">
                    <label for="people">People:</label>
                      <select name="people" id="" class="form-control" value="{{ old('people') }}">
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="Larger party">Larger party</option>
                      </select><br>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                  <label for="first_name">First Name:</label><input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" placeholder="First Name">
                  @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                  </div>
                  <div class="col">
                <label for="last_name">Last Name:</label><input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" Placeholder="Last Name">
                  @error('last_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                  </div>
                </div>
                  <div class="row">
                    <div class="col">
                      <label for="">Tel#:</label><input type="text" name="tel" class="form-control @error('tel') is-invalid @enderror" value="{{ old('tel') }}" placeholder="01 23 45 67 89">
                      @error('tel')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="col">
                      <label for="">Email:</label><input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email.address@example.fr">
                    @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                  </div>
                    Comments:<textarea name="comments" class="form-control" rows="5">{{ old('comments') }}</textarea><br>
                  <div class="row">
                    <div class="col d-flex justify-content-center">
                      <button type="submit" name="return" class="btn btn-primary mt-3 mr-5 col-3" value="back">Return</button>
                      <button type="submit" name="submit" class="btn btn-primary mt-3 col-3" value="confirm">Confirm</button>
                    </div>
                </div>
            </form>
          </div>
</body>
</html>