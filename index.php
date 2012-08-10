<?php

//Home is capitalized for the users only
$title = 'Home - ';
$page = 'home';

include 'includes/wrapper-top.php';

?>
	
	<div id="content" role="main" id="main">
	
		<div id="sidepanel" role="complementary" id="sidebar">
			<div class="about-me">
				<p>Hi, My name is 
				Souad Daou.
				I’m a multimedia 
				designer focusing 
				on web design & 
				developer and animation.
				</p>
			</div>
			<div class="slogan">
				<img src="images/slogan.png" alt="">
			</div>
		</div>
		
		<div id="latest-work">
			<h1> Latest Work </h1>
			<div class="slides-wrapper">
				<div class="slideshow">
					<div class="slides">
						<div class="slide"><a href="motion-graphics.php"><img src="images/slides/slide-1.png" alt=""></a></div>
						<div class="slide"><a href="motion-graphics.php"><img src="images/slides/slide-2.png" alt=""></a></div>
						<div class="slide"><a href="web-design-development.php"><img src="images/slides/slide-3.png" alt=""></a></div>
					</div>
				</div>
			</div>
		</div>
	
	</div>
	
<?php include 'includes/wrapper-bottom.php';?>

