<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include_once $_SERVER['DOCUMENT_ROOT'] . ("/_title.php") ?>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,500,700,900,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css"> -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="shortcut icon" href="/favicon.ico" >
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<!-- <script src="/js/masonry.pkgd.min.js"></script> -->
	<!-- <script src="/js/script.js"></script> -->
</head>
<body>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . ("/_ga.php") ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . ("/_reinvigorate.php") ?>
<!-- Header -->
<header id="header" class="container">
	<div class="row">
		<div class="col-sm-8 col-md-8">
		<h1 class="brown"><a href="/">Ben Potter</a></h1>
		<?php include_once $_SERVER['DOCUMENT_ROOT'] . ("/_personal_desc.php") ?>
		</div>
		<div class="col-sm-4 col-md-4">
			<span class="linkedin visible-sm visible-md visible-lg"><a href="http://www.linkedin.com/in/benpotter"><img src="/img/linked-in.png"></a></span>
		</div>
	</div>
</header>
	
<!-- Posts -->

<section id="project" class="container">
	<div class="row promo-set">
		<div class="col-sm-4 col-md-4"><a href="/hp"><img class="thumb img-responsive" src="/img/promo-hp.jpg"></a>
			<h5 class="brown">Hewlett-Packard, HP Connected&reg;</h5>
		</div>
		<div class="col-sm-4 col-md-4"><a href="/webtrends-reinvigorate"><img class="thumb img-responsive" src="/img/promo-reinvigorate.jpg"></a>
			<h5 class="brown">Webtrends, Reinvigorate&trade;</h5>
		</div>
		<div class="col-sm-4 col-md-4"><a href="/webtrends-analytics-10"><img class="thumb img-responsive" src="/img/promo-webtrends.png"></a>
			<h5 class="brown">Webtrends, Analytics 10&trade;</h5>
		</div>
	</div>
	<div class="row promo-set">
		<div class="col-sm-4 col-md-4"><a href="/moneystrands"><img class="thumb img-responsive" src="/img/promo-moneystrands-webby.png"></a>
			<h5 class="brown">MoneyStrands&trade;</h5>
		</div>
		<div class="col-sm-4 col-md-4"><img class="thumb img-responsive inactive" src="/img/promo-septembeerfest.png">
			<h5 class="brown">Septembeerfest Beer Festival</h5>
		</div>
		<div class="col-sm-4 col-md-4"><img class="thumb img-responsive inactive" src="/img/promo-hp-lorax.png">
			<h5 class="brown">HP Printables App for Dreamworks&reg; The Lorax</h5>
		</div>
	</div>
</section>

<!-- Footer -->

<footer id="footer" class="container">
	<?php include_once $_SERVER['DOCUMENT_ROOT'] . ("/_footer.php") ?>
</footer>
	
	
	
</body>
</html>