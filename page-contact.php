<?php get_header(); ?>
<div class="contact-form">
<img src="<?php the_post_thumbnail( 'full', attr ); ?>
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here

    
      echo the_content();	
    	//
	} // end while
} // end if
?>
</div>
<?php get_footer(); ?>