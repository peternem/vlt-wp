<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 * Video Post Format
 */

wpex_hook_entry_before(); ?>
 
<article <?php post_class('loop-entry container'); ?>> 
	<?php wpex_hook_entry_top();
	
	// Display video
	if( get_post_meta(get_the_ID(), 'wpex_post_video_oembed', true) !== '') { ?>
		<div class="post-video clearfix">
			<div class="responsive-video-wrap">
				<?php echo wp_oembed_get( get_post_meta( get_the_ID(), 'wpex_post_video_oembed', true ) ); ?>
			</div>
		</div>
	<?php } elseif( get_post_meta(get_the_ID(), 'wpex_post_video', true) !== '') { ?>
		<div class="post-video clearfix">
			<div class="responsive-video-wrap">
				<?php echo do_shortcode( get_post_meta(get_the_ID(), 'wpex_post_video', true) ); ?>
			</div>
		</div>
	<?php } ?>
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<div class="entry-text">
		<?php the_excerpt(); ?>
		<?php wpex_entry_meta(); ?>
		</div><!-- /entry-text -->
	<?php wpex_hook_entry_bottom(); ?>
</article><!-- /loop-entry -->

<?php wpex_hook_entry_after();