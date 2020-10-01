		<section class="bottom" id="bottom">
			<form action="<?php bloginfo('template_directory');?>/signup.php" method="post">
				<h2>Sign up for our Newsletter</h2>
				<p>Don’t miss out on special offers available through our newsletter only! Just enter your name and email below and you’re all set.</p>
				<div class="label-input">
					<label for="name">Name:</label>
					<input type="text" name="name" placeholder="" required class="textbox" id="name" />
				</div>
				<div class="label-input">
					<label for="email">Email:</label>
					<input type="text" name="email" placeholder="" required class="textbox" id="email" />
				</div>
				<input type="submit" value="Sign Up" class="register">			
			</form>
			<div class="contact">
				<div>
					<a href="tel:+9051234567">
						<img src="<?php bloginfo('template_directory');?>/pics/phone.svg" alt="phone number" />
						<p>(905) 123-4357</p>
					</a>
				</div>
				<div>
					<a href="mailto:eatatbanryu@gmail.com">
						<img src="<?php bloginfo('template_directory');?>/pics/email.svg" alt="email address" />
						<p>eatatbanryu@gmail.com</p>
					</a>
				</div>
				<div>
					<a href="https://www.google.fr/maps/place/Third+Line,+Oakville,+ON/@43.4283581,-79.7325537,17z/data=!3m1!4b1!4m5!3m4!1s0x882b5d927d75f21d:0x10b6916aaba10018!8m2!3d43.4283542!4d-79.730365" target="_blank">
						<img src="<?php bloginfo('template_directory');?>/pics/location.svg" alt="address" />
						<p>3rd Line, Oakville, ON</p>
					</a>
				</div>
			</div>
			<p class="legal">Copyright © 2020 Banryu Restaurant, All rights reserved.</p>
		</section>

		<?php wp_footer(); ?>
	
	</body>
</html>