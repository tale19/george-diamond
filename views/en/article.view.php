<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $article->getTitle(); ?></title>
<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed|Boogaloo|Dancing+Script|Passion+One|Patua+One|Righteous|Roboto|Satisfy" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=$config['url']?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?=$config['url']?>css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?=$config['url']?>css/tale.css">
</head>
<body>
<?php 
  require 'views/en/partials/navbar.view.php';
  // require 'page-header.view.php';
 ?>

<div id="article-content">

<div class="container">

  <div class="news-article-box row">
  <h3><?= $article->getTitle(); ?></h3>
    <article class="col-sm-6 col-md-8 col-sm-push-6 col-md-push-4 news-article">
      <div class="news-content">
        <p class="news-date"><?= $article->getDate()->format('D, jS M Y'); ?></p>
        <?= $article->getContent(); ?>
      </div> <!-- news body -->
      <div class="news-share">
        <span>Share this news</span> <span>FB</span>
        <span>Tw</span>
        <span>viber</span>
        <span>wtsapp</span>
      </div> <!-- .news-share -->
    </article> <!-- news-article -->
    <div class="col-sm-6 col-md-4 col-sm-pull-6 col-md-pull-8 news-misc">
      <div class="news-image-container">
        <img src="images/news/<?= $article->getImgName() ?>">
      </div>
    </div>
  </div>  <!-- .news-content.row -->

  <div id="back-to-news">
    <a href="news" class="btn-lg btn-primary">Back to all news</a>
  </div>
</div> <!-- .container -->

<div style="bottom:0; margin-top:50px; text-align: center; background-color: red;">Comment box</div>

</div> <!-- #article-content -->


  

<?php require 'views/en/partials/footer.view.php'; ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.7.1/bodymovin.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/news.js"></script>
</body>
</html>