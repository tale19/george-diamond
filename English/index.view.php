<!DOCTYPE html>
<html lang="en">
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

  <div id="top-news-image-container" class="hidden-xs">
    <span class="helper"></span><img src="../images/news-default.png">
  </div>


  <div id="top-news">

  <?php foreach ($topNews as $topNewsPreview) : ?>
    <article class="top-news-article">
      <h4 class="top-news-headline"><?= $topNewsPreview->__get('title'); ?></h4> <!-- "ordinary" getter is also valid: $topNewsPreview->getId(); -->
      <span class="top-news-date"><?=$topNewsPreview->getDate()->format('jS M Y');?></span>
      <div class="top-news-content">
        <?= $topNewsPreview->getContent();?>
      </div> <!-- .top-news-content -->
      <a href="article.php?id=<?=$topNewsPreview->__get('id'); ?>" class="news-preview-expander btn btn-default btn-primary"><span>Read full article</span></a>
    </article> <!-- top-news-article -->
  <?php endforeach; ?>
      
  </div> <!-- #top-news -->

</div> <!-- .container -->

</div> <!-- #content -->

<?php require 'footer.view.php'; ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/index.js"></script>
</body>
</html>