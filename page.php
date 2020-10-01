<?php

/*
	Template Name: Blank Template
*/

	//get header.php file
	get_header();
?>

    <?php
    // Start the loop.
    if (have_posts()) : while ( have_posts()) : the_post();

        // Include the page content template.
        the_content();

        // End of the loop.
    endwhile; endif
    ?>
 

<?php
	//get footer.php file
	get_footer();
?>