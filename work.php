<?php

//Home is capitalized for the users only
$title = 'Work - ';
$page = 'work';

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
		
		<div id="list-work">
			<h1>My Work </h1>
			<p>Over the course of my education I have learned to appreciate the art behind multimedia productions, and the importance of creating balance between beauty, usability, client’s needs and technology issues. This is what I would like to showcase through this portfolio.</p>
			<p>My experience includes managing team-designed projects through the different stages, from the creation according to client’s needs and requirements to the publishing of the final visual product.</p>
			
		</div>
	
	</div>
	
	<?php include 'includes/wrapper-bottom.php';?>
