<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Şhows | George Diamond</title>
<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed|Boogaloo|Dancing+Script|Passion+One|Patua+One|Righteous|Roboto|Satisfy" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=$config['url']?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?=$config['url']?>css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?=$config['url']?>css/tale.css">
</head>
<body>
<?php
	require 'views/en/partials/navbar.view.php';
?>
<div id="shows-content">
	<h3>Shows</h3>
	<div class="container">	
		<div class="jumbotron">
			<p>George Diamond's shows and specialty acts have been designed and structured to deliver an unforgettable magical entertainment by the highest standards of the entertainment industry. His performances are family oriented, and they appeal to audiences of different nationalities, age, and interest groups worldwide. George's pricing structure will also ensure you get the highest value for money possible with this level and quality of entertainment!</p>
			<hr>
			<p>The shows George performs come in the following formats:​​</p>
			<ul id="shows-full-list">
		        <li><a href="#" id="shows-illusion-shortcut" data-target="shows-illusion" class="shows-full-list-item">full scale illusion shows</a></li>
		        <li><a href="#" id="shows-stage-shortcut" data-target="shows-stage" class="shows-full-list-item">smaller scale stage shows</a></li>
		        <li><a href="#" id="shows-private-shortcut" data-target="shows-private" class="shows-full-list-item">corporate &amp; private events shows</a></li>
		        <li><a href="#" id="shows-quickchange-shortcut" data-target="shows-quickchange" class="shows-full-list-item">quickchange act</a></li>
		        <li><a href="#" id="shows-chinese-shortcut" data-target="shows-chinese" class="shows-full-list-item">chinese mask change act</a></li>
		        <li><a href="#" id="shows-short-shortcut" data-target="shows-short" class="shows-full-list-item">various short acts</a></li>
		        <li><a href="#" id="shows-parlor-shortcut" data-target="shows-parlor" class="shows-full-list-item">parlor magic</a></li>
		        <li><a href="#" id="shows-kids-shortcut" data-target="shows-kids" class="shows-full-list-item">magic for kids</a></li>
	      </ul>
		</div> <!-- .jumbotron -->
	</div> <!-- .container -->
	
	<!-- Modal -->
	<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
				<div class="modal-body">
					<!-- 16:9 aspect ratio -->
					<div class="embed-responsive embed-responsive-16by9">
					  <iframe id="iframeYT" class="embed-responsive-item" allowfullscreen></iframe>
					</div>
				</div> <!-- .modal-body -->
				<div class="modal-footer">
					<button id="panel-toggler" class="toggle btn btn-default">
						<input type="checkbox">
						<div class="toggle-group">
							<label class="btn btn-secondary toggle-on">See more Videos</label>
							<label class="btn btn-default toggle-off">Hide Videos</label>
							<span class="slider btn btn-default"></span>
						</div> <!-- .toggle-group -->
					</button>
			        <div class="panel panel-default collapse">
						<div class="panel-body">
							<!-- <a>Basic panel example</a> -->
							<ul>
								
							</ul>
						</div>
					</div> <!-- .panel.panel-default -->
					<a href="/videos" class="btn btn-default btn-talent">Serbia's got talent videos</a>
			        <button id="modal-killer" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div> <!-- .modal-footer -->
			</div> <!-- .modal-content -->
  		</div> <!-- .modal-dialog -->
	</div> <!-- .modal -->


	<div class="container-fluid show-box">
		<div class="container">
			<div id="shows-illusion" class="row">
				<div class="col-sm-6 show-article odd">
					<h4>Full Scale Illusion Shows</h4>
					<div class="paragraph">
						<p>These shows have will provide up to 2 hours of action packed illusionary entertainment. Performed with one or both of George's beautiful assistant showgirls, these shows can include the quickchange act, Chinese mask change act, a variety of grand illusions, as well as elegant stage magic and hilarious comedy magic with audience interaction. Although it is designed as a spectacular breathtaking Vegas style theatrical show, it can still be adapted and presented in various non-theatrical venues. </p>
						<p>George is often touring with one of his full scale illusion shows, presenting them in theaters, cruise ships, theme parks, and other venues. Check the NEWS page to see if he will be performing in a theater near you!</p>
					</div>
				</div>
				<div class="col-sm-6 shows-misc odd">
					<img src="images/shows-illusion.webp">
					<button data-target="#videoModal" data-toggle="modal" data-video='["Asm9nud6S_o", "m740oo3hK3U"]' class="play-video btn-lg btn-default">Watch video</button>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .container-fluid -->

	<div class="container-fluid show-box">
		<div class="container">
			<div id="shows-stage" class="row">
				<div class="col-sm-6 col-sm-push-6 show-article even">
					<h4>Smaller Scale Stage Shows</h4>
					<div class="paragraph">
						<p>These shows are very colorful and visual shows of up to 1 hour in length, performed as a duo or as a trio. This show normally includes George's signature Quickchange Act (or the Chinese mask change act), as well as many interactive stage/comedy magic routines, all blended into a performance that is adaptable for any kind of venue - from professional stages in theaters to lobbies, dining venues, or shopping malls. The length of this show depends on Clients needs. This show is designed in such way that it packs small and plays big on stage. The effects we perform in it are very visual, especially the Quickchange Act, which often gets a standing ovation. It is also possible to have one or more big stage illusions added to this show, should the Client wish so.</p>
					</div>
				</div>
				<div class="col-sm-6 col-sm-pull-6 shows-misc even">
					<img src="images/shows-stage.webp">
					<button data-target="#videoModal" data-toggle="modal" data-video='["iD-cTwMkr_8", "m740oo3hK3U", "m740oo3hK3U"]' class="play-video btn-lg btn-success">Watch video</button>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .container-fluid -->

	<div class="container-fluid show-box">
		<div class="container">
			<div id="shows-private" class="row">
				<div class="col-sm-6 show-article odd">
					<h4>Corporate &amp; Private Events Shows</h4>
					<div class="paragraph">
						<p>Tailored especially for entertainment at your Company's event, these shows will bring the highest level of magical entertainment that will be remembered for a long time. Whether it is an opening of the Company's new branch, an anniversary, a product launch, a function for Clients, a regional executive meeting, office party, banquet or team building event you can rest assured that George's performance will be an ideal way to make your Company stand out. The Art of Magic can also be an ideal way to communicate your corporate message. Carefully choosing and combining the performance material to tailor the show to your event's needs, as well as having the possibility to add elements of your Company's visual identity, logo, and also to incorporate your product in the show or even make a CEO appear on stage, George brings not only to the entertainment value to your corporate event, but can also help you create powerful advertising.</p>
						<p>George Diamond is also often booked to perform at a large number of private events such as weddings, anniversaries, different kinds of functions and parties. You can always be sure that his performance will be custom tailored to best fit the occasion, and that your guests will have an wonderful time while watching his unbelievable feats. Depending on the size of the venue, George can arrange his own backdrop and theatrical lighting, which will enhance the show by turning the place into a theater! Bringing an illusionist to your event is a great way to amuse and surprise your guests in an original and most amazing way, and having George and his team perform their full show, or one of George's mind blowing acts will turn your event into an unforgettable one!</p>
					</div>
				</div>
				<div class="col-sm-6 shows-misc odd">
					<img src="images/shows-private.webp">
					<button data-target="#videoModal" data-toggle="modal" data-video='["2VvxZqAdrvk"]' class="play-video btn-lg btn-warning">Watch video</button>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .container-fluid -->

	<div class="container-fluid show-box">
		<div class="container">
			<div id="shows-quickchange" class="row">
				<div class="col-sm-6 col-sm-push-6 show-article even">
					<h4>Quickchange act</h4>
					<div class="paragraph">
						<p>Qickchange act has been George's signature act since 2001.This is definitely the most sought for act from his vast repertoire, bringing him numerous bookings worldwide. While his costumes and his assistant’s lovely dresses change rapidly on stage, often without any cover, the audience witnesses an explosion of colors, glitz and glamour! George Diamond  and his assistant can magically change up to 13 different costumes in just a few minutes. The spectacular finale in which the lovely assistant's dress changes from short dress into a long ball gown under the shower of silver confetti often results in a standing ovation! This act is an ideal choice for various galas, and special occasions such as corporate banquets and weddings.</p>
					</div>
				</div>
				<div class="col-sm-6 col-sm-pull-6 shows-misc even">
					<img src="images/shows-quickchange.webp">
					<button data-target="#videoModal" data-toggle="modal" data-video='["taO6lPdo7Rc", "m740oo3hK3U"]' class="play-video btn-lg btn-default">Watch video</button>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .container-fluid -->

	<div class="container-fluid show-box">
		<div class="container">
			<div id="shows-chinese" class="row">
				<div class="col-sm-6 show-article odd">
					<h4>Chinese Maske Change Act</h4>
					<div class="paragraph">
						<p>Chinese mask change act has been considered to be a jewel in the crown of Oriental magic. The act, in which the vividly colored masks on performer's face change faster than a blink of an eye, has its origins in Sichuan opera, and has puzzled both laymen and magicians for more than two centuries. In fact, the technique of this act has been kept as a closely guarded secret, which has been passed on from generation to generation within families of performers from Sichuan. In modern China, the secret was treasured to such an extent, that it was labeled as state secret! George was lucky enough to become one of the very few non Chinese performers in the world to master the secret technique of this act, and he has performed it in many countries with a great success. He performs this breathtaking act in a beautiful colorful traditional Sichuan opera costume, with colorful masks depicting various ancient opera characters. He has designed this exclusive act in such way that many elements of the traditional choreography were kept, the custom-composed music based on traditional Chinese themes was added, while the very form of the act has been stylized in such way that it appeals to both Western and Asian spectators. Also, the mask changing routine has been enriched by adding moments during which George's masked character interacts with the audience, causing the masks to magically change just a few inches away from their eyes.</p>
					</div>
				</div>
				<div class="col-sm-6 shows-misc odd">
					<img src="images/shows-chinese.webp">
					<button data-target="#videoModal" data-toggle="modal" data-video='["U-dSswmewdo", "m740oo3hK3U"]' class="play-video btn-lg btn-default">Watch video</button>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .container-fluid -->

	<div class="container-fluid show-box">
		<div class="container">
			<div id="shows-short" class="row">
				<div class="col-sm-6 col-sm-push-6 show-article even">
					<h4>Various Short Acts</h4>
					<div class="paragraph">
						<p>Besides his Quickchange Act and Chinese Mask Change Act, George performs a large number of different short acts, ranging in length from 5 to 15 minutes. Some of these acts are performed as a duo, while others are performed by George solo. Also, these acts belong to different genres of magic. Some of these acts are elegant stage magic acts, while some others are hilarious comedy magic acts, often involving audience participation. George often interacts with audience and invites spectators on stage making their magic experience a special one. This way, the spectators also become stars of the show, and their own journey into the world of mysterious becomes something they will remember for a very long time. George also performs several stunning mind reading and mentalism acts which lead spectators into the dimension of psychological illusion.</p>
					</div>
				</div>
				<div class="col-sm-6 col-sm-pull-6 shows-misc even">
					<img src="images/shows-short.webp">
					<button data-target="#videoModal" data-toggle="modal" data-video='["iqzUhXzsHYc", "m740oo3hK3U"]' class="play-video btn-lg btn-default">Watch video</button>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .container-fluid -->

	<div class="container-fluid show-box">
		<div class="container">
			<div id="shows-parlor" class="row">
				<div class="col-sm-6 show-article odd">
					<h4>Parlor Magic</h4>
					<div class="paragraph">
						<p>Althoough George performs on big stages in state of the Art theaters, concert halls, festivals, as well as in banquet halls, lobbies or shopping malls, he still has a lot of short acts and several shows for smaller, more intimate venues. This segment of George's work was designed having in mind space limitations, often a lack of raised stage, and unpredictable performance conditions. Having in mind these factors, he has come up with many amazing acts that can be performed virtually anywhere, and that are attention catching, amazing and  entertaining. From small restaurants, bars and cafes, to offices and classrooms, apartments, and even a hair salon, these performances are equally as interesting as his big shows, with one important factor - the audience members can witness magic happen right before their eyes. With intensive audience interaction, where spectators are involved in a show, becoming a part of it, and inexplicable things happening often inches away from them, these shows often become the talk of the town! If the size of the venue permits, George can arrange his portable backdrop, as well as lighting system, which can turn the room into a small intimate theater! These shows are also a great opportunity for small dining and nightlife places - restaurants, bars and small nightclubs to offer a new and unique kind of entertainment to their guests, as well as a great way to add something magical to parties and family celebrations. (Photo by Aleksandar Zec)</p>
					</div>
				</div>
				<div class="col-sm-6 shows-misc odd">
					<img src="images/shows-parlor.webp">
					<button data-target="#videoModal" data-toggle="modal" data-video='["udLmIeAQ4qQ", "m740oo3hK3U"]' class="play-video btn-lg btn-default">Watch video</button>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .container-fluid -->

	<div class="container-fluid show-box">
		<div class="container">
			<div id="shows-kids" class="row">
				<div class="col-sm-6 col-sm-push-6 show-article even">
					<h4>Magic For Kids</h4>
					<div class="paragraph">
						<p>Being a magician who has great shows for every kind of event and occasion, George Diamond also has a show created especially for the youngest! A show full of colorful visual miracles, a lot of funny moments, a show where amazement is combined with joy and laughter. George interacts with the children during the whole show, which can be 35-45 minutes long. The attention of the young spectators is focused right from the beginning till the spectacular end of it, and although it has been designed for the kids, you can be sure that it will also amaze and entertain all the parents and other grown ups present, bringing them back to their own childhood! This show is ideal for different festivities for the youngest ones, such as birthday parties, holiday season events for children, as well as for schools, kindergartens, playrooms, children's' holiday camps, etc.</p>
					</div>
				</div>
				<div class="col-sm-6 col-sm-pull-6 shows-misc even">
					<img src="images/shows-kids.webp">
					<button data-target="#videoModal" data-toggle="modal" data-video='["Asm9nud6S_o", "m740oo3hK3U"]' class="play-video btn-lg btn-warning">Watch video</button>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .container-fluid -->


 <div class="scrolltop-button"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>

</div> <!-- #contact-content -->

<?php 
	require 'views/en/partials/footer.view.php';
 ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/shows.js"></script>

</body>
</html>