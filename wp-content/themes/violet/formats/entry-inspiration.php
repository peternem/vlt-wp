<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 * Wedding Inspiration Posts Index
 */

wpex_hook_entry_before(); ?>

<article <?php post_class( 'loop-entry container' ); ?>>
	<?php wpex_hook_entry_top(); ?>
	<?php wpex_entry_thumbnail(); ?>
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<div class="entry-text">
		<p>Style: <?php
foreach((get_the_category()) as $childcat) {
if (cat_is_ancestor_of(186, $childcat)) {
echo '<a href="'.get_category_link($childcat->cat_ID).'">';
 echo $childcat->cat_name . '</a>';
}}
?></p>
        
        
        <p><?php the_tags( 'Mood: ', ', '); ?></p>
	</div><!-- /entry-text -->
	<?php wpex_hook_entry_bottom(); ?>
</article><!-- /entry -->

<?php wpex_hook_entry_after();