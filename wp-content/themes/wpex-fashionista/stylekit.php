<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 * WP Post Template: Stylekit
 */

//get template header
get_header();

//start post loop
while (have_posts()) : the_post(); ?>

<div id="post" class="clearfix">
	<div class="container clearfix">
		<?php
		$format = get_post_format();
		if ( false === $format ) {
			$format = 'standard';
		}
		if($format == 'quote') { ?>
			<div id="single-quote"><?php the_content(); ?><div class="entry-quote-author">- <?php the_title(); ?> -</div></div>
		<?php } elseif($format == 'link'){
			$post_url = get_post_meta(get_the_ID(), 'wpex_post_url', true); ?>
			<div id="single-media-wrap">
				<?php get_template_part( '/formats/single', $format ); ?>
			</div><!-- /single-media-wrap -->
			<div id="single-link">
				<header id="single-heading">
				<h1><a href="<?php echo $post_url; ?>" title="<?php the_title(); ?>" target="_blank"><?php the_title(); ?></a></h1>
			</header><!-- /single-meta -->
			<article class="entry clearfix">
				<?php the_content(); ?>
				<a href="<?php echo $post_url; ?>" title="<?php the_title(); ?>" target="_blank"><span class="fa fa-link"></span><?php echo $post_url; ?></a>
			</article><!-- /entry -->
			</div><!-- /single-link -->
		<?php } else { ?>
		<div id="single-media-wrap">
			<?php get_template_part( '/formats/single', $format ); ?>
		</div><!-- /single-media-wrap -->
		
		<header id="single-heading">
			<h1><?php the_title(); ?></h1>
			
		</header><!-- /single-meta -->
		
		<article class="entry clearfix">
        <p>stylekit test</p>
			<?php the_content(); ?>
		</article><!-- /entry -->
		
		<?php wp_link_pages(' '); ?>
		
		<?php
		//post tags
		if(of_get_option('blog_tags') =='1') {
			the_tags('<div class="post-tags clearfix">','','</div>');
		}
		?>
		
		<?php
		//share post
		wpex_social_share(); ?>
		
	<?php } ?>
		
	</div><!-- /container -->
		
		<nav id="single-nav" class="clearfix"> 
			<?php next_post_link('<div id="single-nav-left">%link</div>', '<span class="fa fa-chevron-left"></span>'.__('Previous Post','wpex').'', false); ?>
			<?php previous_post_link('<div id="single-nav-right">%link</div>', ''.__('Next Post','wpex').'<span class="fa fa-chevron-right"></span>', false); ?>
		</nav><!-- /single-nav -->
		
		<?php
		//show comments if not disabled
		if(of_get_option('blog_comments','1')) {
			comments_template();
		} ?>
		
</div><!-- /post -->

<?php
//end post loop
endwhile;

//get template sidebar
get_sidebar(); ?>

	<?php if(of_get_option('related_random_show') =='1') { ?>
		<?php get_template_part( 'content', 'related' ); ?>
	<?php } ?>

<?php
//get template footer
get_footer(); ?>