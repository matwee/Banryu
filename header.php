<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

		
		<?php wp_head();?>

	</head>
	<body>
		<nav class="nav-wrapper">			
			<?php
				if (function_exists('the_custom_logo')){
					the_custom_logo();
				}else{
					bloginfo('name');
				}
			?>
			<button  class="btn-nav eventZone">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</button>
			<ul class="main-nav eventZone" id="main-nav">
				<li><a href="#about" tabindex="0">About</a></li>
				<li><a href="#menu" tabindex="0">Menu</a></li>
				<li><a href="#name" tabindex="0">Newsletter Sign Up</a></li>
				<li><a href="#bottom" tabindex="0">Contact</a></li>
			</ul>	
		</nav>
