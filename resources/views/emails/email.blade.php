<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Thank you for your Reservation!</title>
</head>
<body>
  <h1>Thank you for your Booking!</h1>
  <p>Booking Information</p>
  <ul>
    <p>Date: {{ $date }}</p>
    <p>Time: {{ $time }}</p>
    <p>Number of People: {{ $people }}</p>
    <p>First Name: {{ $first_name }}</p>
    <p>Last Name: {{ $last_name }}</p>
    <p>Tel: {{ $tel }}</p>
    <p>Email: {{ $email }}</p>
    <p>Comment: {{ $comment }}</p>
  </ul>
</body>
</html>