<?php
/**
 * @package WordPress
 * @subpackage Fashionista WordPress Theme
 * Template Name: Full Width
 */

//get template header
get_header();

//start page loop
if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="full-width-page" class="clearfix">
	<div class="container clearfix">
		<header id="single-heading">
			<h1><?php the_title(); ?></h1>
		</header>
		<!-- /single-heading -->
		<div class="entry">
			<?php the_content(); ?>
		</div><!-- /entry -->
	</div>
	<?php if( of_get_option( 'page_comments', '1' ) ) {
		comments_template();
	} ?>
</div><!-- /full-width-page -->
<?php
//end page loop
endwhile; endif;

//get template footer
get_footer(); ?>