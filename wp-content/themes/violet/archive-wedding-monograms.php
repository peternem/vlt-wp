<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 * This file is used for your archive pages
 */

// Get template header
get_header();

// Start loop
if(have_posts()) : ?>

<div id="archive-wrap" class="clearfix">
  <div id="archive-entries-wrap" class="clearfix">
    <header id="page-heading">
		<?php $obj = get_post_type_object( 'wedding-monograms' ); ?>
		<h1><?php echo $obj->labels->name; ?></h1>
      	<p><?php echo $obj->description;  ?></p>
<!--       	<fieldset class="filter"> -->
<!--         	<legend class="symple-button">Filter by style &amp; mood</legend> -->
        	<?php //echo do_shortcode('[searchandfilter id="802"]'); ?>
<!--         </fieldset> -->
        		<?php 
        	//Get Moods
			$argsz = array('type' => 'wedding-styles','taxonomy'  => 'style');
		    $mood = get_categories($argsz); ?>
		 <h4>Style</h4>
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
    'post_type' => 'wedding-styles',
    'order' => 'asc',
    'orderby' => 'title',
	'taxonomy'  	=> 'wedding-styles',
	'post_status' 		=> 'publish',
    'posts_per_page' => -1
);

$loop = new WP_Query( $args );?>
<div id="wpex-grid-wrap2" class="grid">
	<div class="gutter-sizer"></div>
	<?php while ( $loop->have_posts() ) : $loop->the_post();?>
	<?php 
	$fields = get_field_objects( $post->ID);
	$allowed = array("logo_1", "logo_2", "logo_3", "logo_4");
	$fields_xx = array_intersect_key($fields, array_flip($allowed));
	
	if( $fields_xx ) {
		foreach( $fields_xx as $field_name => $field ) {?>
			<article <?php post_class('grid-item '. $post->post_name.' item container' ); ?>>
				<?php wpex_hook_entry_top(); ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        	     	<img src="<?php echo $field['value']['url']; ?>" alt="<?php echo $field['value']['alt']; ?>" class="img-responsive">
				</a>
				<div class="text">
		        	<h3><?php the_title(); ?></h3>
		        	<p><?php echo get_the_term_list( $post->ID, 'style', '<span class="label">Style:</span> ', ', ' ); ?></p>
		        	<p><?php echo get_the_term_list( $post->ID, 'mood', '<span class="label">Mood:</span> ', ', ' ); ?></p>
		     	</div>
		     	<?php 

	?>
		     	<!-- /entry-text -->
        		<?php wpex_hook_entry_bottom(); ?>
      		</article>
      		<?php wpex_hook_entry_after(); ?>
		<?php } ?>
	<?php }?>
<?php endwhile; ?>
</div>
    <?php wp_reset_query(); ?>
  
</div>
<!-- /archive-wrap -->
<?php
// End loop
endif;

?>

<?php
// Get template footer
get_footer(); ?>

<?php 
// echo "<pre>";
// print_r($loop);
// echo "<pre>";
?>
