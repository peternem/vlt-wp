<?php
/*
Template Name: wedding-stationery
*/

// Get template header
get_header();


// Start loop
if(have_posts()) : ?>

<div id="archive-wrap" class="clearfix">
	<div id="archive-entries-wrap" class="clearfix">
    <header id="page-heading">
    	<?php $obj = get_post_type_object( 'wedding-stationery' ); ?>
		<h1><?php echo $obj->labels->name; ?></h1>
      	<p><?php echo $obj->description;  ?></p>
	</header>
	<div class="browse-filters">
		<div class="btn-container">
			<a class="btn-link btn-link btn-filter" role="button" href="#">Filter by Style or Mood <i class="fa fa-angle-down"></i>
			</a>
		</div>
		<div class="filter-container">
			<div class="style-filters">
				<p><b>Style</b></p>
				<?php 
				//Get Styles
				$argsz = array('type' => 'wedding-styles','taxonomy'  => 'style');
				$mood = get_categories($argsz);
				?>
		      	<ul id="moodFilters" class="filters styles">
		      		<li><a href="#filter" class="selected" title="show all" data-filter="*"><span>show all</span></a></li>
					<?php foreach ($mood as $moody) { ?>
					<li><a href="#filter" data-filter=".style-<?php echo strtolower($moody->name);?>"  title="<?php echo $moody->name;?>"><span><?php echo $moody->name;?></a></li>
					<?php } ?>
				</ul>
			</div>
			<div class="mood-filters">
		      	<p><b>Mood</b></p>
		      	<?php 
		       	//Get Moods
				$argsz = array('type' => 'wedding-styles','taxonomy'  => 'mood');
				$mood = get_categories($argsz); ?>
		      	<ul id="moodFilters" class="filters moody">
		      		<li><a href="#filter" class="selected" title="show all" data-filter="*"><span>show all</span></a></li>
					<?php foreach ($mood as $moody) { ?>
					<li><a href="#mood-<?php echo strtolower($moody->name);?>" data-filter=".mood-<?php echo strtolower($moody->name);?>"  title="<?php echo $moody->name;?>"><span><?php echo $moody->name;?></span></a></li>
					<?php } ?>
				</ul>
			</div>		
		</div>
	</div>

   
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
				$allowed = array("suite_image", "stationary_suite_2_image", "stationery_suite_image_3", "stationary_suite_image_4");
				$allowed_yy = array("suite_image_label", "stationary_suite_2_image_label", "stationery_suite_image_3_label", "stationary_suite_image_4_label");
				$fields_xx = array_intersect_key($fields, array_flip($allowed));
				
				if( $fields_xx ) {
					foreach( $fields_xx as $field_name => $field ) {?>
						<article <?php post_class('grid-item '. $post->post_name.' item container' ); ?>>
							<?php wpex_hook_entry_top(); ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	        	     				<img src="<?php echo $field['value']['url']; ?>" alt="<?php echo $field['value']['alt']; ?>" class="img-responsive">
								</a>
								<div class="text">
									<?php 
									if($field['value']['caption']) {
										echo "<h3>".$post->post_title .": ".$field['value']['caption']."</h3>";
									} else {
										echo "<h3>".$post->post_title."</h3>";
									}
									?>
			        				<p><?php echo get_the_term_list( $post->ID, 'style', '<span class="label">Style:</span> ', ', ' ); ?></p>
			        				<p><?php echo get_the_term_list( $post->ID, 'mood', '<span class="label">Mood:</span> ', ', ' ); ?></p>
			     				</div>
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
  	<!-- /archive-entries-wrap --> 
  
</div>
<!-- /archive-wrap -->

<?php
// End loop
endif;

// Get template footer
get_footer(); ?>
