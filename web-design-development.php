<?php

//Home is capitalized for the users only
$title = 'Web - ';
$page = 'web';

include 'includes/wrapper-top.php';

?>
	
	<div id="content" role="main" id="main">
	
		<div id="work-sidepanel">
			<div class="work-nav">
				<div id="sidepanel-nav">
					<ul>
						<li<?php if ($page == 'web') { ?> class="current" <?php } ?>><a href="web-design-development.php"> Web Design & Development </a></li>
						<div class="page-nav">
							<p><a href="web-design-development.php">Page 1</a></p>
							<p><a href="web-design-development-2.php">Page 2</a></p>
						</div>
						<li<?php if ($page == 'graphic') { ?> class="current" <?php } ?>><a href="graphic-design.php"> Graphic Design </a></li>
						<li<?php if ($page == 'motion') { ?> class="current" <?php } ?>><a href="motion-graphics.php">  Motion Graphics </a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div id="thumb-work">
			<h1> Web Design & Development </h1>
			
			<div class="work-wrapper">
					<div class="work">
						<div class="work-content">
							<h2>Capital Chordettes</h2>
							<p class="program-used">HTML, CSS</p>
							<p>My position in this client project was the HTML and CSS designer. The clients had requested the website to be responsive.</p>
						</div>
						<a href=""> <img src="images/web-design-development/capital-chordettes.png" alt=""></a>
					</div>
					<div class="work">
						<div class="work-content">
								<h2>Galore Cafe</h2>
								<p class="program-used">HTML, CSS, PHP, WordPress</p>
								<p>The task for this project was to build a website a logo for a coffee shop. I created the prototype in Adobe Illustrator, then coded the website in Dreamweaver.</p>
							</div>
						<a href=""> <img src="images/web-design-development/galore-cafe.png" alt="Galore Cafe"></a>
					</div>
					<div class="work">
						<div class="work-content">
							<h2>My Cupcakes</h2>
							<p class="program-used">HTML, CSS, Ajax, JQuery</p>
							<p>For this assignment, the task was to build a tabbed interface that dynamically load each tab’s content when clicked, using AJAX.</p>
							<a href=""> <img src="images/web-design-development/my-cupcakes.png" alt=""></a>
						</div>
					</div>
					
			</div>
		</div>
	
	</div>
	
	<?php include 'includes/wrapper-bottom.php';?>