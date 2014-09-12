<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8 />
		<title>3D Image Transitions</title>
		<!--[if lte IE 8]>
 			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<link href='http://fonts.googleapis.com/css?family=Antic+Slab' rel='stylesheet' type='text/css'>
		
		<!-- Use jQuery for best compatibility with other CSS3 enabled browsers -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		
		<script src="js/flux.js" type="text/javascript" charset="utf-8"></script>
		
		<script type="text/javascript" charset="utf-8">
			$(function(){
				if(!flux.browser.supportsTransitions)
					alert("Flux Slider requires a browser that supports CSS3 transitions");
					
				window.f = new flux.slider('#slider', {
					pagination: false,
					controls: false,
					transitions: ['explode', 'tiles3d', 'bars3d', 'cube', 'turn'],
					autoplay: false
				});
				
				$('.transitions').click(function(event){
					event.preventDefault();
					window.f.next($(event.target).data('transition'), $(event.target).data('params'));
				});
			});
		</script>
	</head>
	<body>
		<section class="container">
			<h1>3D GALLERY</h1>
			<h2>EAGE ISM</h2>
			<div id="slider">
			
				<img src="imgs/1.jpg" alt="" />
				<img src="imgs/2.jpg" alt="" />
                <img src="imgs/3.jpg" alt="" />
				<img src="imgs/4.jpg" alt="" />
				<img src="imgs/5.jpg" alt="" />
			</div>
			<ul class="transitions">
				<li><button type="button" data-transition="explode" data-params='{"rows": 4}'>Explode</button></li>
				<li><button type="button" data-transition="tiles3d" data-params='{"columns": 6}'>Tile</button></li>
				<li><button type="button" data-transition="bars3d">Bars</button></li>
				<li><button type="button" data-transition="cube">Cube</button></li>
				<li><button type="button" data-transition="turn">Turn</button></li>
			</ul>
			<footer>
				<p>DESIGNED by DILIP REDDY</a></p>
				
			</footer>
		</section>
	</body>
</html>