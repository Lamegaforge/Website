<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Gameforest - Gaming Theme HTML</title>
  <!-- vendor css -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/plugins/animate/animate.min.css">
  <!-- theme css -->
  <link rel="stylesheet" href="/css/theme.min.css">
  <link rel="stylesheet" href="/css/custom.css">
  <!-- plugins css -->
  <link href="plugins/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">  
<!--
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body class="fixed-header">
  <!-- header -->
  @include('layouts.partials.menu')
  <!-- /header -->

  <!-- main -->
  @yield('breadcrumbs')
  @yield('content')
  <!-- /main -->

  <!-- footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-5">
          <h4 class="footer-title">About Gameforest</h4>
          <p>Gameforest is a Bootstrap Gaming theme. Build your own gaming theme with gameforest and you will love to use it. Clean and pure coded HTML, CSS files what is included in your downloaded package.</p>
          <p>Attached more then 60+ HTML pages and customized elements. Copy and paste your favourite section or build your own so easily.</p>
        </div>
        <div class="col-sm-12 col-md-3">
          <h4 class="footer-title">Platform</h4>
          <div class="row">
            <div class="col">
              <ul>
                <li><a href="#">Playstation 4</a></li>
                <li><a href="#">Xbox One</a></li>
                <li><a href="#">PC</a></li>
                <li><a href="#">Steam</a></li>
              </ul>
            </div>
            <div class="col">
              <ul>
                <li><a href="games.html">Games</a></li>
                <li><a href="reviews.html">Reviews</a></li>
                <li><a href="videos.html">Videos</a></li>
                <li><a href="forums.html">Forums</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <h4 class="footer-title">Subscribe</h4>
          <p>Subscribe to our newsletter and get notification when new games are available.</p>
          <div class="input-group m-t-25">
            <input type="text" class="form-control" placeholder="Email">
            <span class="input-group-btn">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </span>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="footer-social">
          <a href="https://facebook.com/yakuthemes" target="_blank" data-toggle="tooltip" title="facebook"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com/yakuthemes" target="_blank" data-toggle="tooltip" title="twitter"><i class="fa fa-twitter"></i></a>
          <a href="https://steamcommunity.com/id/yakuzi" target="_blank" data-toggle="tooltip" title="steam"><i class="fa fa-steam"></i></a>
          <a href="https://www.twitch.tv/" target="_blank" data-toggle="tooltip" title="twitch"><i class="fa fa-twitch"></i></a>
          <a href="https://www.youtube.com/user/1YAKUZI" target="_blank" data-toggle="tooltip" title="youtube"><i class="fa fa-youtube"></i></a>
        </div>
        <p>Copyright &copy; 2017 <a href="https://themeforest.net/item/gameforest-responsive-gaming-html-theme/5007730" target="_blank">Gameforest</a>. All rights reserved.</p>
      </div>
    </div>
  </footer>
  <!-- /footer -->

  <!-- vendor js -->
  <script src="/plugins/jquery/jquery-3.2.1.min.js"></script>
  <script src="/plugins/popper/popper.min.js"></script>
  <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>

  <!-- theme js -->
  @yield('scripts')
  <script src="/js/theme.min.js"></script>
<!--   <script src="{{ asset('js/app.js') }}"></script>
 -->
</body>
</html>