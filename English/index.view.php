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
<h3>Latest news</h3>
<div class="container">
<div id="top-news-image" class="hidden-xs">
  <span class="helper"></span><img src="../images/news-default.png">
</div>
<div id="top-news">
  <div class="top-news-article">
    <h4 class="top-news-headline"><?= $third->getTitle(); ?></h4>
    <div class="news-body">
      <span class="news-date"><?=$third->getDate()->format('jS M Y');?></span>
      <?= $third->getContent();?>
      </div> <!-- news body -->
  </div> <!-- news article -->
  
  <div class="top-news-article">
    <h4 class="top-news-headline">George Diamond in the Superfinals of Serbia's Got Talent TV Show!</h4>
    <div class="news-body">
    <p><span class="news-date">8th June 2017 - </span>Months of hard work and preparation have worked in George's favor, as he entered the Superfinals of the Serbia's Got Talent contest! Being chosen as one of the superfinalists of the show by the TV audience's SMS votes has proven that not only he is a top notch illusionist, but also an entertainer with a great energy and charisma! The illusion he chose to present at the Superfinals, which was broadcasted live in Serbia, as well as in several neighboring countries, is his version of the famous Metamorphosis, invented and performed by legendary Houdini - the most famous magician ever! George's gorgeous assistant is handcuffed, placed in a bag, and locked in a box on stage. George steps on the lid of the box, covers himself for a brief second, and instantly a miracle happens - the girl is now on top of the box instead of George, who is later found locked and handcuffed in the box! The judges commented that his act was absolutely stunning, and that his performance was on the highest level! Click on image to watch the video!</p>
    <p>Morbi pretium hendrerit tincidunt. Donec aliquet, tortor vel feugiat feugiat, orci dolor luctus ante, at laoreet tortor libero eu nunc. Praesent ut tellus volutpat, facilisis lacus in, ultrices dolor. Nam interdum est a arcu luctus, et ultrices augue venenatis. Fusce nec nisl id nisi lacinia congue non aliquet orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum id elit sit amet leo ullamcorper varius.</p>
   </div> <!-- news body -->
  </div> <!-- news article -->
  
  <div class="top-news-article">
    <h4 class="top-news-headline">Another show at Crowne Plaza</h4>
    <div class="news-body">
    <p><span class="news-date">June 04 2017 - </span>George and his team performed their show at a big international event that took place at Crowne Plaza Hotel in Belgrade. The guests were absolutely thrilled, and impressed as George and his lovely assistants performed their spectacular illusions. After the show they joined the guests at the event, and spent an unforgettable evening with them.George and his team performed their show at a big international event that took place at Crowne Plaza Hotel in Belgrade. The guests were absolutely thrilled, and impressed as George and his lovely assistants performed their spectacular illusions. After the show they joined the guests at the event, and spent an unforgettable evening with them.</p>
    <p>Quisque ante ex, porttitor a rhoncus at, venenatis sed tortor. Nunc elementum sem at neque ultrices placerat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse porttitor urna at viverra faucibus. Cras posuere accumsan magna imperdiet tempus. Mauris dictum dolor vel facilisis blandit. Cras semper fermentum ante, quis tincidunt urna bibendum in. Praesent faucibus elit sed aliquet suscipit. Etiam nec convallis magna. Aenean lacinia nunc cursus felis gravida interdum. Nullam vitae ipsum eget dui laoreet iaculis.
    </p>
    </div> <!-- news body -->
  </div> <!-- news article -->
</div> <!-- top news -->
</div> <!-- top news container -->
<div class="container">
  <div id="booking-box" class="jumbotron">
    <div>
      <h3>Making your event magical!</h3>
      <p>George Diamond is a world class entertainer presenting shows that everyone will enjoy. He will turn your special event into a memorable illusionary journey to the world of impossible, and his lavish Vegas style shows will be an experience your guests will remember for a very long time!</p>
    </div>
    <hr>
    <div id="amazing-shows">
      <p>Check out some of George's amazing shows:</p>
      <ul id="amazing-shows-list">
        <li>amazing grand illusions</li>
        <li>breathtaking quick costume changes</li>
        <li>exotic mysteries of Chinese masks</li>
        <li>hilarious comedy magic</li>
        <li>classy stage magic</li>
        <li>telepathy and mentalism</li>
      </ul>
      <a href="#" type="button" class="btn btn-default">Click here to find out more!</a>
      <img src="../images/jumbotron-img.png" alt="jumbotron image" class="hidden-xs">
    </div>
  </div>  <!-- jumbotron -->
</div>  <!-- jumbotron container -->
</div> <!-- content -->

<?php require 'footer.view.php'; ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/index.js"></script>
</body>
</html>