	<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Videos | Magic and Illusions of George Diamond</title>
<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed|Boogaloo|Dancing+Script|Passion+One|Patua+One|Righteous|Roboto|Satisfy" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/css/tale.css">
</head>
<body>

<?php 
  require 'views/en/partials/navbar.view.php';
  // require 'page-header.view.php';
 ?>

<div id="videos-content">
<h3>Videos</h3>
<div class="container">

	<!-- 16:9 aspect ratio -->
	<div class="embed-responsive embed-responsive-16by9">
	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Asm9nud6S_o" allowfullscreen></iframe>
	</div>

	<!-- 4:3 aspect ratio -->
	<div class="embed-responsive embed-responsive-4by3">
	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Asm9nud6S_o" allowfullscreen></iframe>
	</div>


  <div class="buttons">
    <a href="/news/1" class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i>See all videos</a>
    <a href="/" class="btn"><strong>Explore</strong></a>
  </div>

</div> <!-- .container -->
</div> <!-- #videos-content -->

  

<?php require 'views/en/partials/footer.view.php'; ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.7.1/bodymovin.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/js/videos.js"></script>
</body>
</html>