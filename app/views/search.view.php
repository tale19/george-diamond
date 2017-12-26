<?php use App\Core\App; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>News | Magic and Illusions of George Diamond</title>
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
require 'app/views/partials/navbar.view.php';
?>

<div id="search-content">

<h3>Search results</h3>



  <div class="container">

  <?php echo (empty($searchResults)) ? '<h4 class="no-results"> No results Found.</h4>' : '' ?>

      <div class="searchbox">
          <form class="input-group" method="GET" action="/search">
              <input id="inputName" name="q" type="text" class="form-control" placeholder="Search the news">
              <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Go!</button>
      </span>
          </form><!-- /input-group -->
      </div>


  <?php foreach ($searchResults as $searchResult) : ?>
    <section class="news-preview-box row">
      <article class="col-sm-6 col-md-8 col-sm-push-6 col-md-push-4 news-preview-article">
        <h4 class="news-preview-headline"><?= $searchResult->getTitle(); ?></h4>
        <div class="news-preview-content">
          <span class="news-preview-date"><?= $searchResult->getDate()->format('D, jS M Y'); ?> - </span>
          <?= $searchResult->getContent(); ?>
        </div> <!-- .news-preview-content -->
      </article> <!-- news-article -->
      <div class="col-sm-6 col-md-4 col-sm-pull-6 col-md-pull-8 news-preview-misc">
        <div class="news-image-container">
          <img src="/images/news/<?= $searchResult->getImgName(); ?>">
        </div>  <!-- news preview image container -->
        <div class="news-share">
          <p>Share this news:</p>
          <a href="http://www.facebook.com/share.php?u=<?= App::use('url')?>news/article/<?=$searchResult->getId();?>&title=<?=$searchResult->getTitle() ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="http://twitter.com/intent/tweet?status=<?=$searchResult->getTitle() ?>+<?= App::use('url')?>news/article/<?=$searchResult->getId();?>"><i class="fa fa-twitter fa" aria-hidden="true"></i></a>
          <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?= App::use('url')?>news/article/<?=$searchResult->getId();?>&title=<?=$searchResult->getTitle() ?>&source=<?= App::use('url')?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a href="whatsapp://send?text=<?=$searchResult->getTitle() ?>" data-action="share/whatsapp/share" class="hidden-sm hidden-md hidden-lg"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
          <a href="viber://forward?text=<?=$searchResult->getTitle() ?>" class="hidden-sm hidden-md hidden-lg"><img src="/images/viber_icon_white_small.png"></a>
        </div>  <!-- news share -->
          <a href="/news/article/<?=$searchResult->getId();?>" class="btn btn-primary">Read full news</a>
      </div>  <!-- .news-preview-misc -->
    </section> <!-- news content, row -->
  <?php endforeach; ?>

  <div class="buttons">
      <a href="/news/1" class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back to all news</a>
  </div>
  </div> <!-- container -->

    <div class="container">



<!-- <div id="scrolltop-container"> -->
    <div class="scrolltop-button"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
    <!-- </div> -->


</div> <!-- container -->


</div> <!-- content -->

  

<?php require 'app/views/partials/footer.view.php'; ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.7.1/bodymovin.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/js/news.js"></script>
</body>
</html>