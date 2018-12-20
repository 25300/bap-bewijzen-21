<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Mediacollege Amsterdam - @yield('title')</title>
  </head>
  <body>
    <div class="container">
        <header class="header">
            <nav class="nav">
                <ul class="nav__items">
                    <li class="nav__item">
                        <a class="nav__link" href="{{ route('home') }}"><img class="nav__logo" src="{{ asset('css/img/auroralogo.png') }}" alt=""></a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="{{ route('live') }}">Live</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="{{ route('photos') }}">Photos</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="{{ route('news') }}">News</a>
                    </li>
                </ul>
            </nav>
            @yield('page_title')
        </header>
        <main>
            @section('content')
            @show
        </main>
        <footer class="footer">
            <div class="footer__description">
                <p class="footer__copyright"> &copy; Alisha van Caspel 2018</p>
                <p class="footer__project">Laravel project, Mediacollege Amsterdam</p>
            </div>
        </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
<!--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
  </body>
</html>
