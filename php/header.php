	<!DOCTYPE html>
	<html lang="en">
	<head>
<!--
	<PageMap>
		<DataObject type="thumbnail">
			<Attribute name="src" value="<?php echo $page_icon; ?>"/>
		</DataObject>
  </PageMap>
-->
	<meta property="og:image" itemprop="image" content="<?php echo $page_icon; ?>" />
	<meta property="og:image:secure_url" itemprop="image" content="<?php echo $page_icon; ?>" />
	<meta name="thumbnail" content="<?php echo $page_icon; ?>" />
	<div style="display:none;">Designed and coded by Hans Ramzan... Yes, that's right - This is my poor attempt at coding! Check it out!</div>

<!--STANDARDS-->
		<title><?php echo $page_title; ?> - Hans Ramzan | Industrial Product Designer</title>
		<meta name="description" content="<?php echo $page_description; ?>">
		<link rel="stylesheet" href="/css/styles.css">
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

<!--OPENGRAPH-->
		<meta property="og:url" content="<?php echo $page_url; ?>" />
		<meta property="og:title" content="<?php echo $page_title; ?> - Hans Ramzan" />
		<meta property="og:description" content="<?php echo $page_description; ?>" />
		<meta property="og:locale" content="en_GB" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?php echo $page_title; ?> - Hans Ramzan" />

<!--STANDARDS CONTINUED-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://unpkg.com/scrollreveal"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="canonical" href="<?php echo $page_url; ?>" />
		<meta charset="utf-8">
		<meta name="keywords" content="<?php echo $metatags; ?>, hans ramzan, product designer, industrial designer, designer, hans, ramzan, smart designer, smart designs, student design, design inspiration, intelligent design, outside the box, design, logical thinking, unorthodox design, cool design, social design, birmingham city university, birmingham institute of art and design, biad, the biad, university of central england, product design ba, bachelor of arts, hans razman, hans ramzen, hanz, razman">
		<meta name="author" content="Hans Ramzan">
		
		<link rel="shortcut icon" href="../favicon.ico"/>
		<meta name="theme-color" content="#D2691E" />

<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123000674-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-123000674-1');
			gtag('set', {'user_id': 'USER_ID'});
		</script>


<!-- PINTEREST -->
		<meta name="p:domain_verify" content="bb105913b805fdb5136793cc449c9cc3"/>
		
	</head>
	<body>
		<header id="navbar">
			<div class="container">
				<div id="logo">
					<a href="/index.php">Hans Ramzan</a>
					<p>Industrial Product Designer</p>
				</div>
			<!-- NAVIGATION -->
				<nav>
					<label for="toggle" onclick="openNav()">
						<div class="bar1"></div>
						<div class="bar2"></div>
						<div class="bar3"></div>
					</label>
					<input type="checkbox" id="toggle"/>
					<ul id="nav_menu">
						<li class="closebtn"><a href="javascript:void(0)" onclick="closeNav()">&times;</a></li>
						<li><a href="/index.php">Portfolio</a></li>
						<li><a href="/press.php">Press</a></li>
						<li><a href="/about.php">About</a></li>
						<li><a href="/about.php#contact">Contact</a></li>
					</ul>
				</nav>
			</div>
		</header>
		
		<div class=headerspacer>
		</div>