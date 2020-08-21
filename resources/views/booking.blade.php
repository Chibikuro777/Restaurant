<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant Booking Page</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="">
        <title>Restaurant Name</title>

    </head>
    <body>
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
                    <a class="nav-link" href="./contact">お問い合わせ</a>
                  </li>
              </ul>
            </div>
          </nav>

          <div class="container">
            <h1 class="mt-5 mb-4 title-color">Booking Page</h1>
            
            <caption>
              <a href="?ym={{ $prev }}">&lt;</a>
                <span class="month">{{ $month }}</span>
              <a href="?ym={{ $next }}">&gt;</a>
            </caption>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col" class="text-danger">日</th>
                  <th scope="col">月</th>
                  <th scope="col">火</th>
                  <th scope="col">水</th>
                  <th scope="col">木</th>
                  <th scope="col">金</th>
                  <th scope="col" class="text-danger">土</th>
                </tr>
              </thead>
                @foreach ($weeks as $week)
                  {!! $week !!}
                @endforeach
                
            </table>

            <div class="booking-status">
              <p>※予約状況○△×</p>
            </div>

            <aside class="easy-contact">
              <p>TEL: ○○○-○○○○-○○○○</p>
              <p>営業時間: ○○:○○~○○:○○</p>
            </aside>
          </div>
</body>
</html>