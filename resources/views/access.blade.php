<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="{{ asset('/js/app.js') }}"></script>
        <title>{{ config('app.name') }}</title>

    </head>
    <body>
      <div class="site-body-container">
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
          <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
              <a class="navbar-brand" href="./">Hoque's restaurant</a>
              <div class="navbar-collapse globalMenuSp" id="navbarText">
                  <ul class="navbar-nav mr-auto d-flex justify-content-end">
                  <li class="nav-item">
                    <a class="nav-link" href="./">TOP</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./menu">Menu</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./booking">Booking</a>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./contact">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./access">Access</a>
                  </li>
                </ul>
              </div>
            </nav>

            <aside class="container access-padding d-flex flex-column mb-5 ">
                  <h1 class="mt-5 mb-4 title-color text-center mb-5">How to get to us</h1>
                <div class="car-access d-flex flex-column align-items-center mb-5">
                  <h3 class="font-weight-bold">By car</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sint nihil pariatur aut consequatur a fugiat asperiores officiis aspernatur molestias, vel, suscipit autem id, non distinctio. Expedita ducimus veritatis minus.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste eius reiciendis dolore eveniet labore, dolores ipsum sed minima incidunt quidem, quos in, voluptas veritatis consequuntur porro fugit eligendi magni commodi.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique qui corrupti voluptatum delectus et, officia odio vero quod ex neque autem tempore doloribus iste, distinctio ad consequuntur iusto est fugiat?</p>
                </div>
                <div class="public-transport d-flex flex-column align-items-center mb-5">
                  <h3 class="font-weight-bold">By public transport</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, dolore. Eius similique error explicabo, repellendus atque suscipit hic harum adipisci autem nesciunt aspernatur commodi esse sint minus veniam aut quod?</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur accusamus cum commodi mollitia, eius corporis debitis doloribus earum voluptatibus! Vitae repellat delectus rem distinctio nihil nostrum molestias voluptatibus eum adipisci.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim natus ducimus alias laborum, aspernatur temporibus asperiores non deserunt velit excepturi praesentium dolorum labore omnis quas doloribus! Doloribus corporis ducimus similique.</p>
                </div>
                <div class="map-and-info d-flex flex-column align-items-center">
                  <h3 class="font-weight-bold">MAP: </h3>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d44994.27278371845!2d5.680523!3d45.1842207!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478af4f4b38dff7d%3A0xdd66c42bbf04a627!2sMus%C3%A9e%20de%20Grenoble!5e0!3m2!1sfr!2sjp!4v1601459976596!5m2!1sfr!2sjp" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </aside>
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
                  <p><a href="./">TOP ｜</a></p>
                  <p><a href="/menu">Menu ｜</a></p>
                  <p><a href="/booking">Booking ｜</a></p>
                  <p><a href="/contact">Contact ｜</a></p>
                  <p><a href="/access">Access</a></p>
                </div>

                <div class="footer-logo">
                  <p>© All rights reserved by Sanae.</p>
                </div>
              </div>
        </footer>
</body>
</html>