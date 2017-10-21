<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>News | Magic and Illusions of George Diamond</title>
<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/tale.css">
</head>

<body>
<?php 
require 'page-header.view.php';
require 'navbar.view.php'; 
?>

<div id="content">
<h3>News</h3>

<div class="container">

  <div class="news-content row">
    <article class="col-sm-6 col-md-8 col-sm-push-6 col-md-push-4 news-article">
      <h4 class="news-headline">The article on TV Pink's internet portal</h4>
      <div class="news-body">
        <p><span class="news-date">2nd June 2017</span></p>
        <p>Amazingly well done! George Diamond surpasses all his previous performances leaving judges in amazement! - says the title of the article published on TV Pink's internet portal. The article describes the shock and disbelief among the judges  upon seeing George's act calling him one of the most talented illusionists in the whole region who has managed to shock millions of TV viewers again and stating that his performances are talked about weeks after each episode he took part in!  Click HERE to read the article, or click on the photo on the left to see it as PDF.</p>
      </div> <!-- news body -->
        <a href="/articles/full-news.php?id=" class="news-preview-expander"><span>Read full article</span></a>
    </article> <!-- news-article -->
    <div class="col-sm-6 col-md-4 col-sm-pull-6 col-md-pull-8 news-misc">
      <div class="news-preview-image-container">
        <img src="../images/news-dummy-1.webp">
        <span class="news-preview-image-caption">Caption caption caption<span>
      </div>
      <div class="news-share">
        <span>Share this news</span> <span>FB</span>
        <span>Tw</span>
        <span>viber</span>
        <span>wtsapp</span>
      </div>
    </div>
  </div> <!-- news content, row -->

  <?php foreach ($allNews as $news) : ?>
  <div class="news-content row">
    <article class="col-sm-6 col-md-8 col-sm-push-6 col-md-push-4 news-article">
      <h4 class="news-headline"><?= $news->__get('title'); ?></h4>
      <div class="news-body">
        <p><span class="news-date"><?= $news->getDate()->format('D, jS M Y'); ?></span></p>
        <?= $news->__get('content'); ?>
      </div> <!-- news body -->
        <a href="/articles/full-news.php?id=" class="news-preview-expander"><span>Read full article</span></a>
    </article> <!-- news-article -->
    <div class="col-sm-6 col-md-4 col-sm-pull-6 col-md-pull-8 news-misc">
      <div class="news-preview-image-container">
        <img src="../images/news-dummy-2.webp">
        <span class="news-preview-image-caption">Caption caption caption<span>
      </div>
      <div class="news-share">
        <span>Share this news</span> <span>FB</span>
        <span>Tw</span>
        <span>viber</span>
        <span>wtsapp</span>
      </div>
    </div>
  </div> <!-- news content, row -->
  <?php endforeach; ?>



<div style="bottom:0; margin-top:50px; text-align: center; background-color: red;">PAGINATOR</div>

</div> <!-- container-fluid -->


  

<?php require 'footer.view.php'; ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.7.1/bodymovin.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>