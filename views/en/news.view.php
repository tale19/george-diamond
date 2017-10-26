<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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

  <?php foreach ($allNews as $news) : ?>
  <div class="news-preview-box row">
    <article class="col-sm-6 col-md-8 col-sm-push-6 col-md-push-4 news-preview-article">
      <h4 class="news-preview-headline"><?= $news->__get('title'); ?></h4>
      <span class="news-preview-date"><?= $news->getDate()->format('D, jS M Y'); ?></span>
      <div class="news-share">
        <span>Share this news</span> <span>FB</span>
        <span>Tw</span>
        <span>viber</span>
        <span>wtsapp</span>
      </div>  <!-- news share -->
      <div class="news-image-container visible-xs">
        <img src="../images/news/<?= $news->__get('imgname'); ?>">
        <span class="news-preview-image-caption"><?= $news->__get('caption'); ?></span>
      </div>  <!-- news preview image conatainer -->
      <div class="news-preview-content">
        <?= $news->__get('content'); ?>
      </div> <!-- .news-preview-content -->
      <a href="article.php?id=<?=$news->__get('id'); ?>" class="news-preview-expander btn btn-default btn-primary"><span>Read full article</span></a>
    </article> <!-- news-article -->
    <div class="col-sm-6 col-md-4 col-sm-pull-6 col-md-pull-8 news-preview-misc">
      <div class="news-image-container hidden-xs">
        <img src="../images/news/<?= $news->__get('imgname'); ?>">
        <span class="news-preview-image-caption"><?= $news->__get('caption'); ?></span>
      </div>  <!-- news preview image conatainer -->
    </div>  <!-- .news-preview-misc -->
  </div> <!-- news content, row -->
  <?php endforeach; ?>



<div style="bottom:0; margin-top:50px; text-align: center; background-color: red;">PAGINATOR</div>

</div> <!-- container-fluid -->

</div> <!-- content -->

  

<?php require 'footer.view.php'; ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.7.1/bodymovin.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<!-- <script type="text/javascript" src="../js/news.js"></script> -->
</body>
</html>