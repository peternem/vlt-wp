<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 * Link Post Format
 */

wpex_hook_entry_before(); ?>

<article <?php post_class('loop-entry container'); ?>>
	<?php wpex_hook_entry_top(); ?>
	<?php wpex_entry_thumbnail(); ?>
	<h2><a href="<?php echo get_post_meta(get_the_ID(), 'wpex_post_url', true); ?>" title="<?php the_title(); ?>" target="_blank"><?php the_title(); ?></a></h2>
	<div class="entry-text">
		<?php if( $post->post_excerpt ) { the_excerpt(); } else { the_content(); } ?>
		<?php wpex_entry_meta(); ?>
	</div><!-- /entry-text -->
	<?php wpex_hook_entry_bottom(); ?>
</article><!-- /entry -->
<?php wpex_hook_entry_after(); ?>