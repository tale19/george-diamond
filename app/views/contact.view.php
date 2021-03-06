<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact | George Diamond</title>
<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed|Boogaloo|Dancing+Script|Passion+One|Patua+One|Righteous|Roboto|Satisfy" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/css/tale.css">
</head>
<body>
<?php
	require 'app/views/partials/navbar.view.php';
?>
<div id="contact-content">
<div class="container">	
	<div class="jumbotron">
		<h3>Contact George Diamond</h3>
		<div>
			<!-- <h4>Fill out the form</h4> -->
			<!-- <div id="contact-form" style="background-color: yellow;">form goes here</div>  -->
			<form>
		 	   <div class="form-group">
			      <!-- <label for="visitor-email">Your email address:</label> -->
			      <input type="email" class="form-control" id="visitor-email" placeholder="Your email address">
			    </div>
			    <div class="form-group">
 					<!-- <label for="comment">Type your message here:</label> -->
					<textarea class="form-control" rows="5" id="comment" placeholder="Type your message here"></textarea>
				</div>
				<button type="submit" class="btn btn-default">Send</button>
			</form>
			<!-- <span>OR</span>  -->
			<h4>Or send your inqueries directly via email:</h4>
			<a href="mailto:george.kaurin@gmail.com"><span>george.kaurin@gmail.com</span></a>
		</div>
	</div> <!-- .jumbotron -->
</div> <!-- .container -->
</div> <!-- #contact-content -->

<?php 
	require 'app/views/partials/footer.view.php';
 ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>