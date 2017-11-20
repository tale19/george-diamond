<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home | Magic and Illusions of George Diamond</title>
<link href="https://fonts.googleapis.com/css?family=Boogaloo|Dancing+Script|Passion+One|Patua+One|Righteous|Roboto|Satisfy" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=$config['url']?>css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?=$config['url']?>css/tale.css">

</head>

<body>
<?php 
  require 'views/en/partials/navbar.view.php';
  require 'views/en/partials/page-header.view.php';
 ?>
<div id="intro">
  <h3>WHO IS GEORGE DIAMOND?</h3>
</div>
  <!-- <hr> -->
<!-- <div class="separator">
  <img src="images/row-separator.png">
</div> -->
<section class="container-fluid">
  <div class="container">
    <span>George Diamond is a professional illusionist, magician and quick change artist, specializing in grand illusion, quick costume changes, stage magic, comedy magic and mentalism. Years of experience, a very specific performance style, as well as wide repertoire and unique choice of magic and illusions make his shows dazzling and entertaining for audiences of all ages, interests and countries.</span>
  </div>
</section>

<div id="numbers" class="container-fluid">
  <div class="container">  
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="number">Eight</div>
        <div class="text">forms of magic to suit your needs</div>
        <div class="image"><img src="images/magician-yellow.png"></div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="number">Dozens</div>
        <div class="text">of countries toured</div>
        <div class="image"><img src="images/cruiser.png"></div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="number">Hundreds</div>
        <div class="text">of international shows</div>
        <div class="image"><img src="images/world-720.png"></div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="number">Thousands</div>
        <div class="text">of satisfied spectators</div>
        <div class="image"><img src="images/magician-bow-orange.png"></div>
      </div>
    </div> <!-- #numbers.row -->
  </div> <!-- .container -->
</div> <!-- .container-fluid -->

<div id="index-content" class="container-fluid">

<div class="container">
  <div id="booking-box" class="jumbotron">
    <div>
      <h1>Making your event magical!</h1>
      <p>George Diamond is a world class entertainer presenting shows that everyone will enjoy. From small shows, ideal for private parties, to big stage grandiose events for hundreds of guests, he will turn your special event into a memorable illusionary journey to a world of the impossible, and his lavish Vegas-style shows will be an experience your guests will remember for a very long time!</p>
    </div>
    <hr>
    <div id="amazing-shows">
      <p>Check out some of George's fascinating shows:</p>
      <ul id="amazing-shows-list">
        <li><a href="#" class="amazing-show">amazing grand illusions</a></li>
        <li><a href="#" class="amazing-show">breathtaking quick costume changes</a></li>
        <li><a href="#" class="amazing-show">exotic mysteries of Chinese masks</a></li>
        <li><a href="#" class="amazing-show">hilarious comedy magic</a></li>
        <li><a href="#" class="amazing-show">classy stage magic</a></li>
        <li><a href="#" class="amazing-show">telepathy and mentalism</a></li>
      </ul>
      <a href="#" type="button" class="btn btn-info">Find out more</a>
      <a href="contact" type="button" class="btn btn-success">Book your show!</a>
      <img src="images/jumbotron-img.png" alt="jumbotron image" class="hidden-xs">
    </div> <!-- #amazing shows -->
  </div>  <!-- jumbotron -->
</div>  <!-- jumbotron container -->
  
</div> <!-- #content -->

<?php require 'views/en/partials/footer.view.php'; ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>