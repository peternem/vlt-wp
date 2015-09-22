<?php
/**
 * @package WordPress
 * @subpackage Fashionista WordPress Theme
 */

//get template header
get_header();

//start post loop
if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
	
<article id="post" class="clearfix">
	<div class="container clearfix">
		<header id="single-heading">
			<h1><?php the_title(); ?></h1>
		</header><!-- /single-heading -->
		<div class="entry clearfix">
			<?php the_content(); ?>
		</div><!-- /entry -->
	</div>
	<?php if( of_get_option( 'page_comments', '1' ) ) {
		comments_template();
	} ?>
</article><!-- /post -->

<?php
//end post loop
endwhile; endif;

//get sidebar template
get_sidebar();

//get footer template
get_footer(); ?>