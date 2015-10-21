<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 * This file is used for your archive pages
 */

// Get template header
get_header();

// Sidebar Wrap?
//if( of_get_option( 'sidebar_homepage_archive' ) == '1' ) echo '<div id="post" class="home-sidebar">';

// Start loop
if(have_posts()) : ?>

<div id="archive-wrap" class="clearfix">
  <div id="archive-entries-wrap" class="clearfix">
    <header id="page-heading">
      <h1>Wedding Inspiration</h1>
      <p>
        <?php $obj = get_post_type_object( 'wedding-inspiration' );
echo $obj->description; ?>
      </p>
    </header>
    <div class="grid-loader"><i class="icon-spinner icon-spin"></i></div>
    <?php
$args = array(
    'post_type' => array( 'wedding-styles' ),
    'order' => 'asc',
    'orderby' => 'title',
    'posts_per_page' => -1
);

$loop = new WP_Query( $args );?>
    <div id="wpex-grid-wrap">
      <?php while ( $loop->have_posts() ) : $loop->the_post();?>
      <article <?php post_class( 'loop-entry container' ); ?>>
        <?php wpex_hook_entry_top(); ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php
 		$imageArray = get_field('inspiration_1'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
        </a>
        <h2>
          <?php the_title(); ?>
        </h2>
        <p><?php echo get_the_term_list( $post->ID, 'style', 'Style: ', ', ' ); ?></p>
        <p><?php echo get_the_term_list( $post->ID, 'mood', 'Mood: ', ', ' ); ?></p>
         
        <!-- /entry-text -->
        <?php wpex_hook_entry_bottom(); ?>
      </article>
      <?php wpex_hook_entry_after(); ?>
      <?php endwhile; ?>
    </div>
    <?php wp_reset_query(); ?>
    <!-- /wpex-grid-wrap -->
    <?php if( of_get_option( 'pagination_style', 'infinite_scroll' ) == 'infinite_scroll' ) { ?>
    <?php wpex_infinite_scroll(); ?>
    <?php } elseif( of_get_option( 'pagination_style', 'infinite_scroll' ) == 'load_more' ) { ?>
    <?php echo aq_load_more(); ?>
    <?php } else { ?>
    <?php wpex_paginate_pages(); ?>
    <?php } ?>
  </div>
  <!-- /archive-entries-wrap --> 
  
</div>
<!-- /archive-wrap -->
<?php
// End loop
endif;

// Get sidebar
if( of_get_option( 'sidebar_homepage_archive' ) == '1' ) {
	echo '</div>';
	get_sidebar();
}
// Get template footer
get_footer(); ?>
