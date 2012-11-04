<?php

//Home is capitalized for the users only
$title = 'Contact - ';
$page = 'contact';

require_once 'includes/form-processor.php';
include 'includes/wrapper-top.php';

?>
	<?php if ($thanks) : ?>
	<strong>Thank you for your message.</strong>
	<strong><a href="index.php">Back to Home</a></strong>
	<?php else : ?>
	
	<div id="content" role="main" id="main">
	
		<div id="sidepanel">
			<div class="contact-info">
				<h2>Contact me:</h2>
				<p>T: (514)512-7344</p>
				<p>E: souaddaou@gmail.com</p>
				
			</div>
			<div class="slogan">
				<img src="images/slogan.png" alt="">
			</div>
		</div>
		
		<div id="contact-form">
			<h1> Send me an email: </h1>
			<form method="post" action="contact.php">
				<div>
            		<label for="name">
						Name 
						<?php if (isset($errors['name'])): ?> 
						<strong class="error">is required</strong> 
						<?php endif; ?>
           			 </label>
            		<input id="name" name="name" required value="<?php echo $name; ?>">
        		</div>
				<div>
            		<label for="email">
						Email 
						<?php if (isset($errors['email'])): ?> 
						<strong class="error">is required</strong> 
						<?php endif; ?>
           			 </label>
            		<input id="email" name="email" required value="<?php echo $email; ?>">
       			</div>
				<div>
            		<label for="title">
						Subject 
						<?php if (isset($errors['title'])): ?> 
						<strong class="error">is required</strong> 
						<?php endif; ?>
           			 </label>
            		<input id="title" name="title" required value="<?php echo $title; ?>">
       			</div>
				<div>
					<label for="notes">
						Notes
						<?php if (isset($errors['notes'])): ?> 
						<strong class="error">must be between 5 and 200 characters</strong> 
						<?php endif; ?>
					</label>
					<textarea id="notes" name="notes"><?php echo $notes; ?></textarea>
        		</div>
				
				<button types="submit"> Send </button>
			</form>
		<?php endif; ?>
		</div>
	</div>
	
	<?php include 'includes/wrapper-bottom.php';?>
