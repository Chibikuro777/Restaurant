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
      <div class="contact-body-container">
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
              <h1 class="mt-5 mb-4 title-color text-center">Confirmation</h1>
              <article>
              <form action="{{ route('contact_thanks') }}" method="POST" class="needs-validation">
                @csrf
                <div class="form-group">
                    <div class="col mb-2">
                    <label for="first_name">First Name:</label><br>
                    <span class="form-control form-control-lg bg-info text-white"> {{ $input['first_name'] }}</span>
                    <input type="hidden" name="first_name" class="form-control is-invalid" value="{{ $input['first_name'] }}" placeholder="First Name">
                    </div>
                    <div class="col mb-2">
                    <label for="last_name">Last Name:</label><br>
                    <span class="form-control form-control-lg bg-info text-white"> {{ $input['last_name'] }}</span>
                  <input type="hidden" name="last_name" class="form-control is-invalid" value="{{ $input['last_name'] }}" Placeholder="Last Name">
                    </div>
                      <div class="col mb-2">
                        <label for="tel">Tel#:</label><br>
                    <span class="form-control form-control-lg bg-info text-white"> {{ $input['tel'] }}</span>
                        <input type="hidden" name="tel" class="form-control is-invalid" value="{{ $input['tel'] }}" placeholder="01 23 45 67 89">
                      </div>
                      <div class="col mb-2">
                        <label for="email">Email:</label><br>
                    <span class="form-control form-control-lg bg-info text-white"> {{ $input['email'] }}</span>
                        <input type="hidden" class="form-control is-invalid" name="email" value="{{ $input['email'] }}" placeholder="email.address@example.fr">
                      </div>
                      <div class="col mb-2">
                      <label for="enquiry">Enquiry:</label><br>
                      <textarea name="enquiry" class="form-control form-control-lg bg-info text-white" rows="8" readonly>{{ $input['enquiry'] }}</textarea>
                      </div>
                    <div class="row">
                      <div class="col d-flex justify-content-center button-margin button-margin-top">
                        <button type="submit" name="return" class="btn btn-primary mt-3 col-3 mr-5" value="back">back</button>
                        <button type="submit" name="submit" class="btn btn-primary mt-3 col-3" value="submit">Confirm</button>
                      </div>
                  </div>
              </form>
              </article>
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