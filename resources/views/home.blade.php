<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <title>Comix-laravel</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <img src="{{ asset("images/dc-logo.png") }}" alt="Logo DC">
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="/">Characters</a>
                        </li>
                        <li>
                            <a href="/">Comix</a>
                        </li>
                        <li>
                            <a href="/">Movies</a>
                        </li>
                        <li>
                            <a href="/">Tv</a>
                        </li>
                        <li>
                            <a href="/">Collectibles</a>
                        </li>
                        <li>
                            <a href="/">Videos</a>
                        </li>
                        <li>
                            <a href="/">Fans</a>
                        </li>
                        <li>
                            <a href="/">News</a>
                        </li>
                        <li>
                            <a href="/">Shop</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="jumbotron">
            <img src="{{ asset("images/jumbotron.jpg") }}" alt="Jumbotron">
        </div>
        <main>
            <div class="container">
                <div class="content">
                    @foreach ($comics as $comic)
                    <div class="card">
                        <img src="{{ $comic["thumb"] }}" alt="{{ $comic["series"] }}">
                        <h4>{{ $comic["series"] }}</h4>
                    </div>
                    @endforeach
                </div>
        </main>
        <footer>
            <div class="footer_bottom">
                <div class="container">
                      <div class="button">
                          <a href="#">sign-up now!</a>
                      </div>
                      <div class="social">
                          <ul>
                              <li>
                                  <a class="follow" href="#">FOLLOW US</a>
                              </li>
                              <li>
                                  <a href="#">
                                      <img src="{{ asset("images/footer-facebook.png") }}" alt="fb">
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      <img src="{{ asset("images/footer-twitter.png") }}" alt="twitter">
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      <img src="{{ asset("images/footer-youtube.png") }}" alt="yt">
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      <img src="{{ asset("images/footer-pinterest.png") }}" alt="pinterest">
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      <img src="{{ asset("images/footer-periscope.png") }}" alt="periscope">
                                  </a>
                              </li>
                          </ul>
                      </div>
                </div>
              </div>
        </footer>
    </body>
</html>