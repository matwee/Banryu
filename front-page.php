<?php
	/* Template Name: Front-Page*/	
	get_header();
?>

		<a class="anchor" id="banner"></a>
		<section class="banner" id="banner">
			<div class="welcome-text">
				<h1>Experience the taste of Japan at Banryu's Grand Opening on 7/15/20</h1>
				<p>Enjoy classic Japanese cuisine that not only tastes great, but is sustainably sourced and won’t break the bank</p>
				<a href="#name" class="btn-sign-up">
					Sign up for exclusive offers
				</a>
			</div>
		</section>
		<!-- anchor used for navbar offset -->
		<a class="anchor" id="about"></a> 
		<section class="about">
			<h2>What We're About</h2>
			<p class="about-text">Here at Banryu, we strive to provide our customers with only the best dining experience possible. We do this through multiple methods to ensure your satisfaction.</p>
			<div class="about-wrapper">
				<div class="genuine">
					<img src="<?php bloginfo('template_directory');?>/pics/sushi.svg" height="90" width="90" alt="Sushi"/>
					<h3>Genuine Japanese Cuisine</h3>
					<p>Born and raised in Japan, our head chef has over 15 years of Japanese culinary experience, ensuring you that your meals are always authentic</p>
				</div>
				<div class="sustainable">
					<img src="<?php bloginfo('template_directory');?>/pics/green.svg" height="90" width="90" alt="Earth"/>
					<h3>Sustainably Sourced Ingredients</h3>
					<p>We at Banryu believe in taking care of our environment, so we make sure to acquire our ingrediants as sustainably fashioned as possible</p>
				</div>
				<div class="affordable">
					<img src="<?php bloginfo('template_directory');?>/pics/money.svg" height="90" width="90"
					alt="Money"/>
					<h3>Quality on a Budget</h3>
					<p>By fine tuning our menu and ingredients, we have created dishes that we are proud to serve and are affordable for everyone</p>
				</div>
			</div>
		</section>
		<a class="anchor" id="menu"></a>
		<section class="menu">
			<h2>Menu</h2>
			<div class="menu-wrapper-1">	
				<div class="menu-wrapper-2">
					<div class="appetizers">
						<h3>Appetizers</h3>
						<!-- app. menu -->
						<!-- creates an array of all blocks on the home page, allows them to be accessed individually-->
						<?php
							$post = get_post(); 
							if ( has_blocks( $post->post_content ) ) {
							    $blocks = parse_blocks( $post->post_content );
							    echo render_block( $blocks[2] );
							}
						?>
						<!-- app. prices -->
						<?php
							$post = get_post(); 
							if ( has_blocks( $post->post_content ) ) {
							    $blocks = parse_blocks( $post->post_content );
							    echo render_block( $blocks[4] );
							}
						?>
					</div>
					<div class="main">
						<h3>Main Menu</h3>
						<!-- main menu items -->
						<?php
							$post = get_post(); 
							if ( has_blocks( $post->post_content ) ) {
							    $blocks = parse_blocks( $post->post_content );
							    echo render_block( $blocks[8] );
							}
						?>
						<!-- main menu prices -->
						<?php
							$post = get_post(); 
							if ( has_blocks( $post->post_content ) ) {
							    $blocks = parse_blocks( $post->post_content );
							    echo render_block( $blocks[10] );
							}
						?>
					</div>
					<div class="dessert">
						<h3>Desserts</h3>
						<!-- dessert items -->
						<?php
							$post = get_post(); 
							if ( has_blocks( $post->post_content ) ) {
							    $blocks = parse_blocks( $post->post_content );
							    echo render_block( $blocks[14] );
							}
						?>
						<!-- dessert prices -->
						<?php
							$post = get_post(); 
							if ( has_blocks( $post->post_content ) ) {
							    $blocks = parse_blocks( $post->post_content );
							    echo render_block( $blocks[16] );
							}
						?>
					</div>
				</div>
				<div class="gallery">
					<div class='btn-close'></div>
					<img src="<?php bloginfo('template_directory');?>/pics/sushi.jpg" alt="sushi" width="167" height="112" tabindex="0" alt="Sushi"/>
					<img src="<?php bloginfo('template_directory');?>/pics/yakitori.jpg" alt="yakitori" width="167" height="112" tabindex="0" alt="Yakitori"/>
					<img src="<?php bloginfo('template_directory');?>/pics/tonkatsu.jpg" alt="tonkatsu" width="167" height="112" tabindex="0" alt="Tonkatsu"/>
					<img src="<?php bloginfo('template_directory');?>/pics/ramen.jpg" alt="ramen" width="167" height="112" tabindex="0" alt="Ramen"/>
				</div>
			</div>
		</section>

<?php
	get_footer();
?>