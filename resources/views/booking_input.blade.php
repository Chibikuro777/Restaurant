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
        <title>Booking Page</title>

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
                  <a class="nav-link" href="./menu">メニュー</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./booking">予約する</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./contact">お問い合わせ</a>
                  </li>
              </ul>
            </div>
          </nav>

          <div class="container">
            <h1 class="mt-5 mb-4 title-color">Booking Page</h1>
            
            <form action="" method="POST">
            <label for="">Date:</label><input type="text" name="date" value="{{Carbon::now()->format('d/m/Y')}}">
                <input type="time" value="19:00" name="time"><br>
                <label for="">First Name:</label><input type="text" name="first_name" placeholder="First Name"><br>
                <label for="">Last Name:</label><input type="text" name="last_name" Placeholder="Last Name"><br>
                <label for="">Tel#:</label><input type="text" name="tel" placeholder="01 23 45 67 89"><br>
                <label for="">Email:</label><input type="email" name="email" placeholder="email.address@example.fr"><br>
                <label for="">Number of People:</label>
                <select name="people_number" id="">
                  <option value="1">1</option>
                  <option value="2">2</option>
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
                </select>
            </form>

            <aside class="easy-contact">
              <p>TEL: ○○○-○○○○-○○○○</p>
              <p>営業時間: ○○:○○~○○:○○</p>
            </aside>
        </div>
</body>
</html>