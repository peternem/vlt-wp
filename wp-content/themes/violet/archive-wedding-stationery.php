<?php
/*
Template Name: wedding-stationery
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
      <h1>Wedding Stationery</h1>
      <p>
        <?php $obj = get_post_type_object( 'wedding-stationery' );
echo $obj->description; ?>
      </p>
      <fieldset class="filter">
        <legend class="symple-button">Filter by style &amp; mood</legend>
        <?php echo do_shortcode('[searchandfilter id="800"]'); ?>
      </fieldset>
      
      	 <h4>Style</h4>
      	    		<?php 
        	//Get Moods
			$argsz = array('type' => 'wedding-styles','taxonomy'  => 'style');
		    $mood = get_categories($argsz); ?>
      	<ul id="moodFilters" class="filters styles">
      		<li><a href="#Filter" class="selected" title="show all" data-filter="*">show all</a></li>
			<?php foreach ($mood as $moody) { ?>
			<li><a href="#filter" data-filter=".style-<?php echo strtolower($moody->name);?>"  title="<?php echo $moody->name;?>"><?php echo $moody->name;?></a></li>
			<?php } ?>
			
      	<h4>Mood</h4>
      	<?php 
        	//Get Moods
			$argsz = array('type' => 'wedding-styles','taxonomy'  => 'mood');
		    $mood = get_categories($argsz); ?>
      	<ul id="moodFilters" class="filters moody">
      		<li><a href="#Filter" class="selected" title="show all" data-filter="*">show all</a></li>
			<?php foreach ($mood as $moody) { ?>
			<li><a href="#filter" data-filter=".mood-<?php echo strtolower($moody->name);?>"  title="<?php echo $moody->name;?>"><?php echo $moody->name;?></a></li>
			<?php }
		//     echo "<pre>";
		//     print_r($Parent_categories);
		//     echo "</pre>";  
		    ?>
		</ul>
      
      
      
      
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
	<div id="wpex-grid-wrap2" class="grid">
		<div class="gutter-sizer"></div>
      	<?php while ( $loop->have_posts() ) : $loop->the_post();?>
      		<article <?php post_class('grid-item '. $post->post_name.' item loop-entry container' ); ?>>
        	<?php wpex_hook_entry_top(); ?>
        	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	        	<?php
		 		$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
		 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
		 		$imageThumbURL = $imageArray['sizes']['large']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
		 		?>
        		<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
        	</a>
        	<div class="text">
        	<h2><?php the_title(); ?></h2>
        	<p><?php echo get_the_term_list( $post->ID, 'style', '<span class="label">Style:</span> ', ', ' ); ?></p>
        	<p><?php echo get_the_term_list( $post->ID, 'mood', '<span class="label">Mood:</span> ', ', ' ); ?></p>
        </div>
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
