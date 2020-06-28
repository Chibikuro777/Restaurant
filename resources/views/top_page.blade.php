<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Restaurant Name</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <style>
            .title{
                font-size: 70px;
                margin-top: 20%;
            }

            body{
                height: 100vh;
                width: 100vw;
                background-color: rgb(251, 212, 219);
            }
        </style>
    </head>
    <body>
        <div class="justify-content-center d-flex align-items-center">
            <div class="title m-b-md font-italic font-weight-lighter text-primary">
            <h1><a href="">Welcome to our {{ $restaurant_name }}</a></h1>
                {{-- <ul>
                    @foreach ($list as $item)
                    <li>{{ $item->detail }}</li>
                    @endforeach
                </ul> --}}
        </div>
        </div>
    </body>
</html>
