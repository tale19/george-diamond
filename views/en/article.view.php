<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $article->getTitle(); ?></title>
<meta property="og:title" content="<?= $article->getTitle() ?>">
<meta property="og:type" content="blog">
<meta property="og:url" content="<?= $article->getTitle() ?>">
<meta property="og:image" content="/images/news/<?= $article->getImgName() ?>">
<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed|Boogaloo|Dancing+Script|Passion+One|Patua+One|Righteous|Roboto|Satisfy" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/css/tale.css">
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<?php 
  require 'views/en/partials/navbar.view.php';
  // require 'page-header.view.php';
 ?>

<div id="article-content">

<div class="container">

  <div class="news-article-box row">
    <article class="col-sm-6 col-md-8 col-sm-push-6 col-md-push-4 news-article">
      <h3><?= $article->getTitle(); ?></h3>
      <div class="news-content">
        <span class="news-date"><?= $article->getDate()->format('D, jS M Y'); ?> - </span>
        <?= $article->getContent(); ?>
      </div> <!-- news body -->
      <div class="news-share">
        <p>Share this news:</p>
        <a href="http://www.facebook.com/share.php?u=<?= App::use('url')?>news/article/<?=$article->getId();?>&title=<?=$article->getTitle() ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="http://twitter.com/intent/tweet?status=<?=$article->getTitle() ?>+<?= App::use('url')?>news/article/<?=$article->getId();?>"><i class="fa fa-twitter fa" aria-hidden="true"></i></a>
        <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?= App::use('url')?>news/article/<?=$article->getId();?>&title=<?=$article->getTitle() ?>&source=<?= App::use('url')?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="whatsapp://send?text=<?=$article->getTitle() ?>" data-action="share/whatsapp/share" class="hidden-sm hidden-md hidden-lg"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
        <a href="viber://forward?text=<?=$article->getTitle() ?>" class="hidden-sm hidden-md hidden-lg"><img src="/images/viber_icon_white_small.png"></a>
      </div> <!-- .news-share -->
    </article> <!-- news-article -->
    <div class="col-sm-6 col-md-4 col-sm-pull-6 col-md-pull-8 news-misc">
      <div class="news-image-container">
        <img src="/images/news/<?= $article->getImgName() ?>">
      </div>
    </div>
  </div>  <!-- .news-article-box.row -->

  <div class="buttons">
    <a href="/news/1" class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back to all news</a>
    <a href="/" class="btn"><strong>Explore</strong></a>
  </div>

<!-- <div style="bottom:0; margin-top:50px; text-align: center; background-color: red;">Comment box</div> -->

  <div class="fb-comments" data-href="<?=App::use('url'); ?>news/article/<?= Request::articleId(); ?>" data-numposts="5"></div>

</div> <!-- .container -->
</div> <!-- #article-content -->

  

<?php require 'views/en/partials/footer.view.php'; ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.7.1/bodymovin.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/js/news.js"></script>
</body>
</html>