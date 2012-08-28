<?php

//Home is capitalized for the users only
$title = 'Home - ';
$page = 'home';

include 'includes/wrapper-top.php';

?>
	
	<div id="content" role="main" id="main">
	
		<div id="sidepanel" role="complementary" id="sidebar">
		<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
		
		<div class="about-me">
				<p>Hi, My name is 
				Souad Daou.
				I’m a multimedia 
				designer focusing 
				on web design
				and motion graphics.
				</p>
			</div>
			<div class="slogan">
				<img src="images/slogan.png" alt="">
			</div>
		</div>
		
		<div id="latest-work">
			<h1> Latest Work </h1>
			<div class="slides-wrapper">
			<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="488" height="326" id="FLVPlayer">
				<param name="movie" value="FLVPlayer_Progressive.swf" />
				<param name="quality" value="high" />
				<param name="wmode" value="opaque" />
				<param name="scale" value="noscale" />
				<param name="salign" value="lt" />
				<param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=videos/demo_reel_web_resized&amp;autoPlay=false&amp;autoRewind=false" />
				<param name="swfversion" value="8,0,0,0" />
				<!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
				<param name="expressinstall" value="Scripts/expressInstall.swf" />
				<!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="488" height="326">
					<!--<![endif]-->
					<param name="quality" value="high" />
					<param name="wmode" value="opaque" />
					<param name="scale" value="noscale" />
					<param name="salign" value="lt" />
					<param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=videos/demo_reel_web_resized&amp;autoPlay=false&amp;autoRewind=false" />
					<param name="swfversion" value="8,0,0,0" />
					<param name="expressinstall" value="Scripts/expressInstall.swf" />
					<!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
					<div>
						<h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
						<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
					</div>
					<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
			<!--<div class="slideshow">
					<div class="slides">
						<div class="slide"><a href="motion-graphics.php"><img src="images/slides/slide-1.png" alt=""></a></div>
						<div class="slide"><a href="motion-graphics.php"><img src="images/slides/slide-2.png" alt=""></a></div>
						<div class="slide"><a href="web-design-development.php"><img src="images/slides/slide-3.png" alt=""></a></div>
					</div>
				</div>-->
			</div>
		</div>
	
	</div>
	
<?php include 'includes/wrapper-bottom.php';?>

