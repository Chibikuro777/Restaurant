<?php
  use Carbon\Carbon;
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('/js/app.js') }}"></script>
        {{-- <script src="{{ asset('/js/display_table_left.js') }}"></script> --}}
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
            <div class="mt-5 mb-4">
              <h1 class="text-center title-color">Booking Page</h1>
            <h3 class="text-right text-danger">{{ $vacancy }}Table left</h3>
            </div>
          <form action="{{ route('restaurant.booking_confirm') }}" method="POST" class="needs-validation">
              @csrf
                  <div class="col">
                    <label for="date"><span class="required-red"> *</span> Date:</label><input type="text" name="date" value="{{ old('date', $date) }}" class="form-control form-control-lg mb-2 @error('date') is-invalid @enderror" disabled>
                    <input type="hidden" name="date" value="{{ old('date', $date) }}" class="form-control">
                    @error('date')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col">
                    <label for="time"><span class="required-red"> *</span> Time:</label><input type="time" value="19:00" name="time" class="form-control form-control-lg mb-2" value="{{ old('time') }}">
                  </div>
                  <div class="col">
                    <label for="people"><span class="required-red"> *</span> People:</label>
                      <select name="people" id="" class="form-control form-control-lg mb-2" value="{{ old('people') }}">
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
                      </select>
                  </div>
                  <div class="col">
                  <label for="first_name"><span class="required-red"> *</span> First Name:</label><input type="text" name="first_name" class="form-control form-control-lg mb-2 @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" placeholder="First Name">
                  @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                  </div>
                  <div class="col">
                <label for="last_name"><span class="required-red"> *</span> Last Name:</label><input type="text" name="last_name" class="form-control form-control-lg mb-2 @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" Placeholder="Last Name">
                  @error('last_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                  </div>
                    <div class="col">
                      <label for=""><span class="required-red"> *</span> Tel#:</label><input type="text" name="tel" class="form-control form-control-lg mb-2 @error('tel') is-invalid @enderror" value="{{ old('tel') }}" placeholder="01 23 45 67 89">
                      @error('tel')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="col">
                      <label for=""><span class="required-red"> *</span> Email:</label><input type="email" class="form-control form-control-lg mb-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email.address@example.fr">
                    @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col button-margin">
                    <label class="mb-2">Comment: </label><textarea name="comment" class="form-control form-control-lg" rows="5">{{ old('comment') }}</textarea><br>
                    <div class="col d-flex justify-content-center button-margin-top">
                      <button type="submit" name="return" class="btn btn-primary mr-5 col-3" value="back">Return</button>
                      <button type="submit" name="submit" class="btn btn-primary col-3" value="confirm">Confirm</button>
                    </div>
                  </div>

                    </div>

            </form>
          </div>
      </div>
          <aside class="easy-contact">
            <p>TEL: ○○○-○○○○-○○○○</p>
            <p>OPEN: 10:00~22:00</p>
          </aside>

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