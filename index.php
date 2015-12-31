<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Google Places Map</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!--Main styles-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--Adaptive styles-->
	<link rel="stylesheet" type="text/css" href="css/adaptive.css">
	<!--Swipe menu-->
	<link rel="stylesheet" type="text/css" href="css/pushy.css">
	<!--fonts-->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<!--animation css-->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Slider Revolution -->
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<link rel="icon" type="image/png" href="favicon.png"/>
	
</head>
<body onload="initialize()" class="inmap innerpage">
	<!-- Site Overlay -->
	<div class="site-overlay"></div>
	<div id="container">
		<!--Header-->
		<div class="container-fluid header inner_head">
			<div class="fixed_w">
				<div class="row">
					<div class="col-md-12"><a href="" style="font-size:35px; color:#FFF;"><i class="fa fa-home fa-4"></i></a></div>
				</div>
			</div>
		</div>

		<!--category menu-->
		<div class="container-fluid menu mobile">
			<div class="row">
				<div class="col-md-12">
					<span>CategorY menu</span>
					<i class="fa fa-times" id="close_menu"></i>
					<ul>
						<li><a href="javascript:toggleMarkers('Shop');" class="shop"><i class="fa fa-shopping-cart"></i></a></li>
						<li><a href="javascript:toggleMarkers('Cinema');" class="cinema"><i class="fa fa-film"></i></a></li>
						<li><a href="javascript:toggleMarkers('Club');" class="club"><i class="fa fa-beer"></i></a></li>
						<li><a href="javascript:toggleMarkers('Cafe');" class="cafe"><i class="fa fa-cutlery"></i></a></li>
						<li><a href="javascript:toggleMarkers('Sport');" class="sport"><i class="fa fa-futbol-o"></i></a></li>
						<li><a href="javascript:toggleMarkers('Port');" class="port"><i class="fa fa-life-ring"></i></a></li>
						<li><a href="javascript:toggleMarkers('Bank');" class="bank"><i class="fa fa-university"></i></a></li>
						<li><a href="javascript:toggleMarkers('Post');" class="post"><i class="fa fa-envelope-o"></i></a></li>
						<li><a href="javascript:toggleMarkers('Showplace');" class="showplace"><i class="fa fa-eye"></i></a></li>
						<li><a href="javascript:toggleMarkers('Park');" class="park"><i class="fa fa-leaf"></i></a></li>
						<li class="mobile_menu"><a href="#"><i class="fa fa-bars"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--map-->
	<div id="map" class="map"></div>
	<!--/map-->
	
	<!--
	#################################
	- SCRIPT FILES -
	#################################
	-->
	<!--Google maps API link-->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!--scroll animate block-->
	<script src="js/wow.min.js"></script>
	<!--Other main scripts-->
	<script src="js/app.js"></script>
	<!--Bootstrap js-->  
	<script src="js/bootstrap.min.js"></script>
	<!--Map js-->
	<script type="text/javascript" src="js/map.js"></script>
	<script type="text/javascript" src="js/infobox.js"></script>
	<!--Slider Revolution-->
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<!--Parallax-->
	<script type="text/javascript" src="js/jquery.parallax-0.2-min.js"></script>
</body>
</html>