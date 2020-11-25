<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Thank you for your Contact!</title>
</head>

<body>
  <header>
    <img src="{{ asset('images/header_restaurant.jpeg') }}" style="text-align:center; width:100%; height:auto;" alt="restaurant logo">
  </header>
  <div style="text-align:center;">
    <h1>You have a enquiry message!</h1>
    <p>Enquiry context</p>
    <ul>
      <p>First Name: {{ $first_name }}</p>
      <p>Last Name: {{ $last_name }}</p>
      <p>Tel: {{ $tel }}</p>
      <p>Email: {{ $email }}</p>
      <p>Enquiry: {{ $enquiry }}</p>
    </ul>
  </div>
  <footer>
    <div class="footer-menu">
      <p>home ｜</p>
      <p>about ｜</p>
      <p>service ｜</p>
      <p>Contact Us</p>
    </div>
    <div class="footer-logo">
      <p>© All rights reserved by webcampnavi.</p>
    </div>
    <aside class="easy-contact">
      <p>TEL: ○○○-○○○○-○○○○</p>
      <p>営業時間: ○○:○○~○○:○○</p>
    </aside>
  </footer>
</body>
</html>