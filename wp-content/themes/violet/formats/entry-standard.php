<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 * Standard Post Format
 */

wpex_hook_entry_before(); ?>
<h2>formats/entry-standard.php</h2>
<article <?php post_class( 'loop-entry container' ); ?>>
	<?php wpex_hook_entry_top(); ?>
	<?php wpex_entry_thumbnail(); ?>
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<div class="entry-text">
		<?php the_excerpt();?>
		<?php wpex_entry_meta(); ?>
	</div><!-- /entry-text -->
	<?php wpex_hook_entry_bottom(); ?>
</article><!-- /entry -->

<?php wpex_hook_entry_after();