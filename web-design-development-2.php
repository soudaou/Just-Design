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
							<h2>Action Kids website</h2>
							<p>Adobe Illustrator</p>
							<p>This was part 2 for a group project where first we had to create a video commercial, then build an SEO website. My position was the web designer.</p>
							<a href=""> <img src="images/web-design-development/action-kids.png" alt=""></a>
						</div>
					</div>
					<div class="work">
						<div class="work-content">
							<h2>Striker Magazine</h2>
							<p class="program-used">Adobe Illustrator</p>
							<p>For this project, the task was to create a website protoype. The content was gathered after doing intensive research through different football magazines.</p>
						</div>
						<a href=""> <img src="images/web-design-development/striker-magazine.png" alt=""></a>
					</div>
			</div>
		</div>
	
	</div>
	
	<?php include 'includes/wrapper-bottom.php';?>