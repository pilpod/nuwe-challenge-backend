<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body class="antialiased">
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('home') }}">Perseo</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                </ul>
                <ul class="nav navbar-nav">
                  @if (Route::has('login'))
                        @auth
                            <li class="nav-item nav-link">
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline" >Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item nav-link">
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                            </li>

                            @if (Route::has('register'))
                            <li class="nav-item nav-link">
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline" >Register</a>
                            </li>
                            @endif
                        @endauth
                  @endif
                </ul>
              </div>
            </div>
        </nav>

        <main>
            <section id="carousel">
                <div id="carouselSlide" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="http://placeimg.com/640/480/people" class="d-block w-100" alt="img1">
                      </div>
                      <div class="carousel-item">
                        <img src="http://placeimg.com/640/480/nature" class="d-block w-100" alt="img2">
                      </div>
                      <div class="carousel-item">
                        <img src="http://placeimg.com/640/480/tech" class="d-block w-100" alt="img3">
                      </div>
                    </div>
                </div>
            </section>

            <section id="basic_info" class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light">Lorem ipsum</h1>
                        <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse quae veniam accusamus obcaecati. Cum unde dolorum officia similique mollitia, hic doloremque quasi, deserunt officiis sed laboriosam, in iure et repudiandae!</p>
                    </div>
                </div>
            </section>

            <hr>

            <section id="users">
                <div class="row justify-content-center title-section-users">
                    <h1>Current Users</h1>
                </div>

                <div class="row justify-content-center">
                    @foreach ($users as $user)
                        <div class="col-md-3 col-lg-2 user-card">
                            <div>
                                <img class="bd-placeholder-img rounded-circle user-photo" src="http://placeimg.com/640/480/people" alt="">
                                <h2>{{ $user->name }}</h2>
                            </div>
                        </div>    
                    @endforeach
                </div>
            </section>

            
            <footer id="footer">
                <div class="footer_items">
                    <div>
                        <span><i class="far fa-copyright"></i> Perseo</span>
                    </div>
                    <div class="social_media">
                        <a href="#"><i class="fab fa-twitter-square fa-2x"></i></a>
                        <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                        <a href="#"><i class="fab fa-instagram-square fa-2x"></i></a>
                    </div>
                </div>
            </footer>
        </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
