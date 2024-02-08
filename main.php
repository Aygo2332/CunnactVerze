<?php
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    		<meta charset="utf-8">
    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1">
    		<title>CunnactVerze - A Social Media Website</title>
    		<link href="css/bootstrap.min.css" rel="stylesheet">
    		<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>  
	 	<link href="index.css" rel="stylesheet">
  	</head>
  	<body>
    		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/hi_IN/sdk.js#xfbml=1&version=v18.0" nonce="XqL1Lgbr"></script>
      		<div class="jumbotron">
        		<div class="container-fluid">
		              	<h1>Join us and build Freedom</h1>
		              	<p>We make freedom, we love freedom, we spread freedom.</p>
          		</div>
          		<form class="form-horizontal">
              		<div class="form-group">
                  		<div class="col-xs-offset-2 col-xs-8">
                      			<input type="email" id="email" placeholder="Your Email" class="form-control">
                  		</div>
              		</div>
	              	<div class="form-group">
	                  	<div class="col-xs-offset-3 col-xs-6">
	                      		<input type="submit" id="submit" value="Subscribe" class="btn btn-info btn-lg">
	                  	</div>
	              	</div>
	          	</form>
	          	<div class="row">
	              		<div class="col-sm-offset-3 col-sm-2">
	                  		<div class="fb-like" data-href="https://cunnact-verze.vercel.app/" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
	              		</div>
	              		<div class="col-sm-2">
	               			<div class="g-plusone" data-size="medium"></div>    
	              		</div>
	              		<div class="col-sm-2">
	                  		<a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Hello%20world">Tweet</a>
	              		</div>
	          	</div>
	          	<div>
	               		<a class="twitter-timeline" href="https://twitter.com/Learn_OpenDoors" data-widget-id="659188207645495297" data-chrome="nofooter noborders" data-tweet-limit="3">Tweets by @Learn_OpenDoors</a>
	          	</div>
      		</div>
      		<script src="https://apis.google.com/js/platform.js" async defer></script>
      		<script>window.twttr = (function(d, s, id) {
  			var js, fjs = d.getElementsByTagName(s)[0], t = window.twttr || {};
  			if (d.getElementById(id))
				return t;
  			js = d.createElement(s);
  			js.id = id;
  			js.src = "https://platform.twitter.com/widgets.js";
  			fjs.parentNode.insertBefore(js, fjs);
  			t._e = [];
  			t.ready = function(f) {
    			t._e.push(f);
  			};
  			return t;
		}(document, "script", "twitter-wjs"));</script>
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
