<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 * This file is used for your archive pages
 */

// Get template header
get_header();

// Sidebar Wrap?
if( of_get_option( 'sidebar_homepage_archive' ) == '1' ) echo '<div id="post" class="home-sidebar">';

// Start loop
if(have_posts()) : ?>

<div id="archive-wrap" class="clearfix">
  <header id="page-heading">
    <h1>Wedding Styles</h1>
    <p>
      <?php $obj = get_post_type_object( 'wedding-styles' );
echo $obj->description; ?>
    </p>
    <fieldset class="filter">
      <legend class="symple-button">Filter by style &amp; mood</legend>
      <?php echo do_shortcode('[searchandfilter id="655"]'); ?>
    </fieldset>
  </header>
  <!-- /page-heading -->
  <div id="archive-entries-wrap" class="clearfix">
    <div class="grid-loader"><i class="icon-spinner icon-spin"></i></div>
    <?php
                if (have_posts()) { 
                    while (have_posts()) {
                        the_post( );
                        $format = get_post_format();
                        if ( false === $format ) $format = 'standard';
                        wpex_hook_entry_before(); ?>
    <article class="style-entry">
      <?php wpex_hook_entry_top(); ?>
      <div class="text">
        <p class="wedding-style">
          <?php $terms = get_the_terms( $post->ID , 'style' ); foreach ( $terms as $term ) {echo $term->name;}?>
          Wedding Style</p>
        <h2>
          <?php the_title(); ?>
        </h2>
        <p class="mood"><?php echo get_the_term_list( $post->ID, 'mood', '<span class="label">Mood:</span> ', ', ' ); ?></p>
        <p class="description">
          <?php the_field('suite_description'); ?>
        </p>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="symple-button">CTA</a> 
      </div>
      <div class="collage">
      
        <?php
 		$imageArray = get_field('inspiration_3'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['large']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <div class="col">
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
        </div>
        <div class="col">
          <?php
 		$imageArray = get_field('swatch_1'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
          <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
          <?php
 		$imageArray = get_field('swatch_2'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
          <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>"> 
        <?php
 		$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <div class="suite-image">
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
        </div>
        </div>
        <div class="col">
        <?php
 		$imageArray = get_field('inspiration_2'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="insp-2">
        <div class="img-group">
          <?php
 		$imageArray = get_field('logo_detail'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <div class="first">
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
        </div>
          <?php
 		$imageArray = get_field('inspiration_1'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <div>
          <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="insp-1"> 
          </div>
          </div>
          </div>
      </div>
      <!-- /entry-text -->
      <?php wpex_hook_entry_bottom(); ?>
    </article>
    <!-- /entry -->
    
    <?php wpex_hook_entry_after();
                    }
                }
                ?>
    
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

// Get template footer
get_footer(); ?>
