<?php use App\Core\Request; ?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a id="navbar-logo" class="navbar-brand navbar-btn" href="/"><img src="/images/GeorgeDiamondLogo.png" height="50"></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h1 class="visible-xs">Magic of George Diamond</h1>
      <!-- <a href="tel:+381641969699" type="button" id="book-now-xs" class="btn btn-primary navbar-btn visible-xs">Call now!</a> -->
    </div>  <!-- navbar-header -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php echo (Request::uri() == 'home' || Request::uri() == '') ? 'class="active"' : ''; ?> ><a href="/" class="navbar-btn">Home</a></li>
        <li <?php echo (Request::uri() == 'bio') ? 'class="active"' : ''; ?> ><a href="/bio" class="navbar-btn">Bio</a></li>
        <li <?php echo (Request::uri() == 'shows') ? 'class="active"' : ''; ?> ><a href="/shows" class="navbar-btn">Shows</a></li>
        <li <?php echo (substr(Request::uri(), 0, 4) == 'news' || Request::uri() == 'search') ? 'class="active"' : ''; ?> ><a href="/news/1" class="navbar-btn">News</a></li>
        <li <?php echo (Request::uri() == 'photos' || Request::uri() == 'videos') ? 'class="active"' : ''; ?>  class="dropdown">
          <a href="#" class="dropdown-toggle navbar-btn" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/photos" class="navbar-btn">Photos</a></li>
            <li><a href="/videos" class="navbar-btn">Videos</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="index.html" type="button" class="btn navbar-btn">Srpski</a></li> -->
        <!-- <li><a href="index.php" type="button" class="btn navbar-btn">English</a></li> -->
        <li><a href="contact" type="button" id="book-now-lg" class="navbar-btn btn btn-primary">Contact</a></li>
      </ul>
    </div>  <!-- .navbar-collapse -->
  </div>  <!-- .container -->
</nav> <!-- navbar -->