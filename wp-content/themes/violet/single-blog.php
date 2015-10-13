<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 */

//get template header
get_header();

//start post loop
while (have_posts()) : the_post(); ?>
<h2>single-blog.php</h2>
<div id="post" class="clearfix">
	<div class="container clearfix">
		
		
		
		<header id="single-heading">
			<h1><?php the_title(); ?></h1>
			<?php wpex_post_meta(); ?>
		</header><!-- /single-meta -->
		
		<article class="entry clearfix">
			<?php the_content(); ?>
            <p><?php echo get_the_term_list( $post->ID, 'style', 'Style: ', ', ' ); ?></p>
        <p><?php echo get_the_term_list( $post->ID, 'mood', 'Mood: ', ', ' ); ?></p>
        <p><?php echo get_the_term_list( $post->ID, 'suite', 'Suite: ', ', ' ); ?></p>
		</article><!-- /entry -->
		
		<?php wp_link_pages(' '); ?>
		
		<?php
		//post tags
		if(of_get_option('blog_tags') =='1') {
			the_tags('<div class="post-tags clearfix">','','</div>');
		}
		?>
		
		<?php
		//author bio
		if(of_get_option('blog_bio') == '1') { ?>
		<div id="single-author" class="clearfix">
			<div id="author-image">
				<?php echo get_avatar( get_the_author_meta('user_email'), '60', '' ); ?>
			</div><!-- author-image --> 
			<div id="author-bio">
				<h4><?php the_author_posts_link(); ?></h4>
				<p><?php the_author_meta('description'); ?></p>
			</div><!-- author-bio -->
		</div><!-- /single-author -->
		<?php } ?>
		
		<?php
		//share post
		wpex_social_share(); ?>
		
	
		
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