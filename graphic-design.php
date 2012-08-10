<?php

//Home is capitalized for the users only
$title = 'Graphic';
$page = 'graphic';

include 'includes/wrapper-top.php';

?>
	
	<div id="content" role="main" id="main">
	
		<div id="work-sidepanel">
			<div class="work-nav">
				<div id="sidepanel-nav">
					<ul>
						<li<?php if ($page == 'web') { ?> class="current" <?php } ?>><a href="web-design-development.php"> Web Design & Development </a></li>
						<li<?php if ($page == 'graphic') { ?> class="current" <?php } ?>><a href="graphic-design.php"> Graphic Design </a></li>
						<li<?php if ($page == 'motion') { ?> class="current" <?php } ?>><a href="motion-graphics.php">  Motion Graphics </a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div id="thumb-work">
			<h1> Graphic Design </h1>
			
			<div class="work-wrapper">
					<div class="work">
						<div class="work-content">
							<h2>Game website- Bubble Burst</h2>
							<p class="program-used">Adobe Illustrator, HTML, CSS</p>
							<p>As the graphic designer for this group project, I had to use one of the games previously developed, then design and code (HTML & CSS) a login and score page. I used Adobe Illustrator, and Dreamweaver.</p>
						</div>
						<a href=""> <img src="images/graphic-design/bubble-burst.jpg" alt="Galore Cafe"></a>
					</div>
					<div class="work">
						<div class="work-content">
							<h2>Capital Chordettes Logo</h2>
							<p class="program-used">Adobe Illustrator</p>
							<p>Based on the clients request, I created this logo that simbilizes the business.</p>
						</div>
						<a href=""> <img src="images/graphic-design/capital-hordettes-logo.jpg" alt=""></a>
					</div>
					<div class="work">
						<div class="work-content">
							<h2>Action Kids Logo</h2>
							<p class="program-used">Adobe Illustrator</p>
							<p>Based on a video commercial that I had contributed to create, I developed a logo and a prototype for a SEO website thats hosts the video.</p>
						</div>
						<a href=""> <img src="images/graphic-design/action-kids-logo.jpg" alt=""></a>
					</div>
					
			</div>
		</div>
	
	</div>
	
<?php include 'includes/wrapper-bottom.php';?>
