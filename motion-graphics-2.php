<?php

//Home is capitalized for the users only
$title = 'Motion - ';
$page = 'motion';

include 'includes/wrapper-top.php';

?>
	
	<div id="content" role="main" id="main">
	<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
	
	
		<div id="work-sidepanel">
			<div class="work-nav">
				<div id="sidepanel-nav">
					<ul>
						<li<?php if ($page == 'web') { ?> class="current" <?php } ?>><a href="web-design-development.php"> Web Design & Development </a></li>
						<li<?php if ($page == 'graphic') { ?> class="current" <?php } ?>><a href="graphic-design.php"> Graphic Design </a></li>
						<li<?php if ($page == 'motion') { ?> class="current" <?php } ?>><a href="motion-graphics.php">  Motion Graphics </a></li>
						<div class="page-nav">
							<p><a href="motion-graphics.php">Page 1</a></p>
							<p><a href="motion-graphics-2.php">Page 2</a></p>
						</div>
					</ul>
				</div>
			</div>
		</div>
		
		<div id="thumb-work">
			<h1> Motion Graphics </h1>
			<div class="work-wrapper">
				<div class="work">
						<div class="work-content">
							<h2>Video Promo</h2>
							<p class="program-used">Adobe Illustrator, After Effect</p>
							<p>For this project, the task was to create a promo video for a website, as well as the branding package (colors, logo, look and feel) for the business.</p>
						</div>
						<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="640" height="480" id="FLVPlayer4">
							<param name="movie" value="FLVPlayer_Progressive.swf" />
							<param name="quality" value="high">
							<param name="wmode" value="opaque">
							<param name="scale" value="noscale">
							<param name="salign" value="lt">
							<param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=videos/souad_daou_assignment3-websitepromo&amp;autoPlay=false&amp;autoRewind=false" />
							<param name="swfversion" value="8,0,0,0">
							<!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
							<param name="expressinstall" value="Scripts/expressInstall.swf">
							<!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
							<!--[if !IE]>-->
							<object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="400" height="300">
								<!--<![endif]-->
								<param name="quality" value="high">
								<param name="wmode" value="opaque">
								<param name="scale" value="noscale">
								<param name="salign" value="lt">
								<param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=videos/souad_daou_assignment3-websitepromo&amp;autoPlay=false&amp;autoRewind=false" />
								<param name="swfversion" value="8,0,0,0">
								<param name="expressinstall" value="Scripts/expressInstall.swf">
								<!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
								<div>
									<h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
									<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
								</div>
								<!--[if !IE]>-->
							</object>
							<!--<![endif]-->
						</object>
				</div>
				<div class="work">
					<div class="work-content">
						<h2>Music Video Rabiosa - Shakira</h2>
						<p class="program-used">Adobe Illustrator, Adobe Flash</p>
						<p>The objective for this group project was to create a music video using Adobe Flash. My task was to create the graphics and animate the characters.</p>
					</div>
					<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="800" height="600" id="FlashID" title="Rabiosa-Shakira music video">
						<param name="movie" value="videos/rabiosa.swf" />
						<param name="quality" value="high" />
						<param name="wmode" value="opaque" />
						<param name="swfversion" value="10.2.0.0" />
						<!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
						<param name="expressinstall" value="Scripts/expressInstall.swf" />
						<!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
						<!--[if !IE]>-->
						<object type="application/x-shockwave-flash" data="videos/rabiosa.swf" width="400" height="300">
							<!--<![endif]-->
							<param name="quality" value="high" />
							<param name="wmode" value="opaque" />
							<param name="swfversion" value="10.2.0.0" />
							<param name="expressinstall" value="Scripts/expressInstall.swf" />
							<!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
							<div>
								<h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
								<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
							</div>
							<!--[if !IE]>-->
						</object>
						<!--<![endif]-->
					</object>
				</div>
				
			</div>
		</div>
	
	</div>
	
<?php include 'includes/wrapper-bottom.php';?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
	<script src="<?php sd(); ?>/js/jquery.centredscroller.min.js"></script>
<script>
$('.slideshow').centredScroller({autoAdvance:3000});
swfobject.registerObject("FLVPlayer");
swfobject.registerObject("FLVPlayer4");
</script>

