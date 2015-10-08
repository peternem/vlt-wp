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
  <div id="archive-entries-wrap" class="clearfix">
    <header id="page-heading">
      <h1>Violet Blog</h1>
      <p>
        <?php $obj = get_post_type_object( 'blog' );
echo $obj->description; ?></p>
      <fieldset class="filter">
        <legend class="symple-button">Filter by style &amp; mood</legend>
        <?php echo do_shortcode('[searchandfilter id="583"]'); ?>
      </fieldset>
    </header>
    <div class="grid-loader"><i class="icon-spinner icon-spin"></i></div>
    <div id="wpex-grid-wrap">
      <?php
                if (have_posts()) { 
                    while (have_posts()) {
                        the_post( );
                        $format = get_post_format();
                        if ( false === $format ) $format = 'standard';
                        get_template_part( '/formats/entry', $format );
                    }
                }
                ?>
    </div>
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
