<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="">
        <title>{{ config('app.name') }}</title>

    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
          <a class="navbar-brand" href="./">Hoque's restaurant</a>
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
          <h1 class="mt-5 mb-4 title-color">Menu</h1>
            <div class="p-3 mb-2 bg-primary text-white">Ramen Menu</div>
            <div class="row row-cols-1 row-cols-md-3">
              <div class="col mb-4">
                <div class="card">
                <img src="{{ asset('images/ramen.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                <img src="{{ asset('images/ramen2.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-3 mb-2 bg-primary text-white">Sushi Menu</div>
            <div class="row row-cols-1 row-cols-md-3">
              <div class="col mb-4">
                <div class="card">
                <img src="{{ asset('images/sushi.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                <img src="{{ asset('images/sushi1.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                <img src="{{ asset('images/sushi2.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                <img src="{{ asset('images/sushi3.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                <img src="{{ asset('images/sushi4.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                <img src="{{ asset('images/sushi5.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                <img src="{{ asset('images/sushi6.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                <img src="{{ asset('images/sushi7.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                <img src="{{ asset('images/sushi8.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                <img src="{{ asset('images/sushi9.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                <img src="{{ asset('images/sushi10.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                <img src="{{ asset('images/sushi11.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-3 mb-2 bg-primary text-white">Curry Menu</div>
            <div class="row row-cols-1 row-cols-md-3">
              <div class="col mb-4">
                <div class="card">
                <img src="{{ asset('images/curry.jpg') }}" width="200px" height="400px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                <img src="{{ asset('images/curry1.jpg') }}" width="200px" height="400px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-3 mb-2 bg-primary text-white">Other Menu</div>
              <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                  <div class="card">
                  <img src="{{ asset('images/yakisoba.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card">
                  <img src="{{ asset('images/tebasaki.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card">
                  <img src="{{ asset('images/takorice.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card">
                    <img src="{{ asset('images/sushidon.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card">
                    <img src="{{ asset('images/sashimi.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card">
                    <img src="{{ asset('images/roastbeefdon.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card">
                    <img src="{{ asset('images/karaage.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card">
                    <img src="{{ asset('images/beefitame.jpg') }}" width="200px" height="300px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                  </div>
                </div>
              </div>
        </div>
    </body>
</html>