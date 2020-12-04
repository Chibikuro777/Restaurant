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
            <article>
            <form action="{{ route('contact_confirm') }}" method="POST" class="needs-validation">
              @csrf
              <div class="form-group">
                  <div class="col">
                  <label for="first_name"><span class="required-red"> *</span> First Name:</label><input type="text" name="first_name" class="form-control form-control-lg mb-2 @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" placeholder="First Name">
                  @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                  </div>
                  <div class="col">
                <label for="last_name"><span class="required-red"> *</span> Last Name:</label><input type="text" name="last_name" class="form-control form-control-lg mb-2 @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" placeholder="Last Name">
                  @error('last_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                  </div>
                    <div class="col">
                      <label for="tel"><span class="required-red"> *</span> Tel#:</label><input type="text" name="tel" class="form-control form-control-lg mb-2 @error('tel') is-invalid @enderror" value="{{ old('tel') }}" placeholder="01 23 45 67 89">
                      @error('tel')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="col">
                      <label for="email"><span class="required-red"> *</span> Email:</label><input type="email" class="form-control form-control-lg mb-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email.address@example.fr">
                    @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col">
                    <label class="mb-2"><span class="required-red"> *</span> Enquery: </label><textarea name="enquiry" class="form-control form-control-lg @error('enquiry') is-invalid @enderror" rows="8">{{ old('enquiry') }}</textarea><br>
                    @error('enquiry')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                  <div class="row button-margin button-margin-top">
                    <div class="col d-flex justify-content-center">
                      <button type="submit" name="submit" class="btn btn-primary mt-3 col-8" value="confirm">Confirm</button>
                    </div>
                  </div>
              </div>
            </form>
            </article>
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