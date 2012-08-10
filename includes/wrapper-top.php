<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<link href="css/general.css" rel="stylesheet">
<title><?php echo $title;?> JUST Design</title>
</head>

<body>
		<ul class="skiplinks">
			<li><a href="#main">Skip to main content</a></li>
			<li><a href="#sidebar">Skip to secondary content</a></li>
			<li><a href="#primenav">Skip to primary navigation</a></li>
		</ul>

	<header role="banner" id="top">
		<div id="top-nav">
		
			<div class="logo">
				<a href="index.php"><img src="images/website-logo.png" alt="Just Design logo"></a>
			</div>
			
			<div class="main-nav" role="navigation" id="primenav">
				<nav>
					<ul>
						<li<?php if ($page == 'home') { ?> class="current" <?php } ?>><a href="index.php"> <strong> Home </strong></a></li>
						<li<?php if ($page == 'about') { ?> class="current" <?php } ?>><a href="about.php"> <strong> About</strong> </a></li>
						<li<?php if ($page == 'work') { ?> class="current" <?php } ?>><a href="work.php"> <strong> Work </strong></a></li>
						<li<?php if ($page == 'contact') { ?> class="current" <?php } ?>><a href="contact.php"> <strong> Contact </strong></a></li>
					</ul>
				</nav>
			</div>
			
		</div>
	</header>