<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>News | Magic and Illusions of George Diamond</title>
<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed|Boogaloo|Dancing+Script|Passion+One|Patua+One|Righteous|Roboto|Satisfy" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=$config['url']?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?=$config['url']?>css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?=$config['url']?>css/tale.css">
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
?>

<div id="news-content">
<!-- <h3>News</h3> -->
<h3>News</h3>



  <div class="container">
  <?php foreach ($displayedNews as $news) : ?>
    <section class="news-preview-box row">
      <article class="col-sm-6 col-md-8 col-sm-push-6 col-md-push-4 news-preview-article">
        <h4 class="news-preview-headline"><?= $news->getTitle(); ?></h4>
        <div class="news-preview-content">
          <span class="news-preview-date"><?= $news->getDate()->format('D, jS M Y'); ?> - </span>
          <?= $news->getContent(); ?>
        </div> <!-- .news-preview-content -->
      </article> <!-- news-article -->
      <div class="col-sm-6 col-md-4 col-sm-pull-6 col-md-pull-8 news-preview-misc">
        <div class="news-image-container">
          <img src="/images/news/<?= $news->getImgName(); ?>">
        </div>  <!-- news preview image container -->
        <div class="news-share">
          <p>Share this news:</p>
          <a href="http://www.facebook.com/share.php?u=<?= $config['url']?>news/article/<?=$news->getId();?>&title=<?=$news->getTitle() ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="http://twitter.com/intent/tweet?status=<?=$news->getTitle() ?>+<?= $config['url']?>news/article/<?=$news->getId();?>"><i class="fa fa-twitter fa" aria-hidden="true"></i></a>
          <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?= $config['url']?>news/article/<?=$news->getId();?>&title=<?=$news->getTitle() ?>&source=<?= $config['url']?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a href="whatsapp://send?text=<?=$news->getTitle() ?>" data-action="share/whatsapp/share" class="hidden-sm hidden-md hidden-lg"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
          <a href="viber://forward?text=<?=$news->getTitle() ?>" class="hidden-sm hidden-md hidden-lg"><img src="/images/viber_icon_white_small.png"></a>
        </div>  <!-- news share -->
          <a href="/news/article/<?=$news->getId();?>" class="btn btn-primary">Read full news</a>
      </div>  <!-- .news-preview-misc -->
    </section> <!-- news content, row -->
  <?php endforeach; ?>
  </div> <!-- container -->

<div class="container">

<nav aria-label="News navigation">
  <ul class="pagination">
    <li>
      <a href="1">First</a>
    </li>
    <li <?php echo (Request::newsId() == 1) ? 'class="hidden"' : ''; ?>>
      <a href="<?php echo Request::newsId() -1 ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li <?php echo (Request::newsId() == 1 || Request::newsId() == 2) ? 'class="hidden"' : ''; ?>>
      <a href="<?php echo Request::newsId() -2 ?>"><?php echo Request::newsId() -2 ?></a>
    </li>
    <li <?php echo (Request::newsId() == 1) ? 'class="hidden"' : ''; ?>>
      <a href="<?php echo Request::newsId() -1 ?>"><?php echo Request::newsId() -1 ?></a>
    </li>
    <li class="active">
      <a href=""><?php echo Request::newsId() ?></a>
    </li>
    <li <?php echo (($newsCount <= 15 && Request::newsId() > 2) || ((Request::newsId() + 1) * 5 - $newsCount > 5 )) ? 'class="hidden"' : ''; ?>>
      <a href="<?php echo Request::newsId() +1 ?>"><?php echo Request::newsId() +1 ?></a>
    </li>
    <li <?php echo (($newsCount <= 20 && Request::newsId() > 2) || ((Request::newsId() * + 2) * 5 - $newsCount > 5 && Request::newsId() > 3)) ? 'class="hidden"' : ''; ?>>
      <a href="<?php echo Request::newsId() +2 ?>"><?php echo Request::newsId() +2 ?></a>
    </li>
    <li <?php echo (($newsCount <= 15 && Request::newsId() > 2) || ((Request::newsId() + 1) * 5 - $newsCount > 5 )) ? 'class="hidden"' : ''; ?>>
      <a href="<?php echo Request::newsId() +1 ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <li>
      <a href="
        <?php 
          if ($newsCount % 5 > 0) {
            echo floor($newsCount / 5) + 1 ;
          } elseif ($newsCount % 5 == 0) {
            echo floor($newsCount / 5);
          }
        ?>">Last
      </a>
    </li>
  </ul>
</nav>

<!-- <div id="scrolltop-container"> -->
    <div class="scrolltop-button"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
<!-- </div> -->


</div> <!-- container -->


</div> <!-- content -->

  

<?php require 'views/en/partials/footer.view.php'; ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.7.1/bodymovin.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/js/news.js"></script>
</body>
</html>