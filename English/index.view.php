<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home | Magic and Illusions of George Diamond</title>
<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="../css/tale.css">
<link rel="stylesheet" type="text/css" href="../css/navbar.css">

</head>

<body>
<?php 
  require 'navbar.view.php';
  require 'page-header.view.php';
 ?>

<div id="content">

<div class="container">
  <div id="booking-box" class="jumbotron">
    <div>
      <h3>Making your event magical!</h3>
      <p>George Diamond is a world class entertainer presenting shows that everyone will enjoy. He will turn your special event into a memorable illusionary journey to the world of impossible, and his lavish Vegas style shows will be an experience your guests will remember for a very long time!</p>
    </div>
    <hr>
    <div id="amazing-shows">
      <p>Some of George's fascinating shows:</p>
      <ul id="amazing-shows-list">
        <li>amazing grand illusions</li>
        <li>breathtaking quick costume changes</li>
        <li>exotic mysteries of Chinese masks</li>
        <li>hilarious comedy magic</li>
        <li>classy stage magic</li>
        <li>telepathy and mentalism</li>
      </ul>
      <a href="#" type="button" class="btn btn-default">Find out more</a>
      <a href="#" type="button" class="btn btn-default btn-primary">Book your show!</a>
      <img src="../images/jumbotron-img.png" alt="jumbotron image" class="hidden-xs">
    </div>
  </div>  <!-- jumbotron -->
</div>  <!-- jumbotron container -->

<h3>Latest news</h3>
<div class="container">
<div id="top-news-image" class="hidden-xs">
  <span class="helper"></span><img src="../images/news-default.png">
</div>
<div id="top-news">
  <div class="top-news-article">
    <h4 class="top-news-headline"><?= $topNews[0]->__get('title'); ?></h4> <!-- instead of magic method, "ordinary" getter method is also valid: $third->getId(); -->
    <div class="news-body">
      <span class="news-date"><?=$topNews[0]->getDate()->format('jS M Y');?></span>
      <?= $topNews[0]->getContent();?>
      </div> <!-- news body -->
  </div> <!-- news article -->
  
  <div class="top-news-article">
    <h4 class="top-news-headline"><?= $topNews[1]->__get('title'); ?></h4> <!-- instead of magic method, "ordinary" getter method is also valid: $third->getId(); -->
    <div class="news-body">
      <span class="news-date"><?=$topNews[1]->getDate()->format('jS M Y');?></span>
      <?= $topNews[1]->getContent();?>
      </div> <!-- news body -->
  </div> <!-- news article -->
  
  <div class="top-news-article">
    <h4 class="top-news-headline"><?= $topNews[2]->__get('title'); ?></h4> <!-- instead of magic method, "ordinary" getter method is also valid: $third->getId(); -->
    <div class="news-body">
      <span class="news-date"><?=$topNews[2]->getDate()->format('jS M Y');?></span>
      <?= $topNews[2]->getContent();?>
      </div> <!-- news body -->
  </div> <!-- news article -->
  
</div> <!-- top news -->
</div> <!-- top news container -->

</div> <!-- content -->

<?php require 'footer.view.php'; ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/index.js"></script>
</body>
</html>