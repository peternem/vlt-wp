<?php
/**
 * Template Name: Page - Stationary Page Template
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<div id="archive-wrap" class="clearfix">
	<header id="page-heading">
		<h1><?php echo the_title(); ?></h1>
		<?php echo the_content(); ?>
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
	<div id="wpex-grid-wrap2" class="grid">
		<div class="gutter-sizer"></div>
	<?php 
	$args = array(
			'post_type' => 'wedding-styles',
			'order' => 'asc',
			'orderby' => 'title',
			'post_status' 		=> 'publish',
			'posts_per_page' => -1,
			'taxonomy'=>'wedding-stationary',
	);
	$myquery = new WP_Query ($args);
	
	
		while ($myquery->have_posts()) : $myquery->the_post();
	?>
	<?php 
					$fields = get_field_objects( $post->ID);
					$allowed = array("suite_image", "stationary_suite_2_image", "stationery_suite_image_3", "stationary_suite_image_4");
					$fields_xx = array_intersect_key($fields, array_flip($allowed));
					
					if( $fields_xx ) {
						foreach( $fields_xx as $field_name => $field ) {?>
							<article <?php post_class('grid-item '. $post->post_name.' item container' ); ?>>
								<?php wpex_hook_entry_top(); ?>
									<a href="<?php echo "/wedding-stationery/".$post->post_name;?>/" title="<?php the_title(); ?>">
		        	     				<img src="<?php echo $field['value']['url']; ?>" alt="<?php echo $field['value']['alt']; ?>" class="img-responsive">
									</a>
									<div class="text">
										<?php 
										if($field['value']['caption']) {
											echo '<h3><a href="/wedding-stationery/'.$post->post_name.'">'.$post->post_title .': '.$field['value']['caption'].'</a></h3>';
										} else {
											echo '<h3><a href="/wedding-stationery/'.$post->post_name.'">'.$post->post_title.'</a></h3>';
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
	<?php
		endwhile; // end of the loop. 
	// echo "<pre>";
	// print_r($myquery);
	// echo "<pre>";
	?>
	
	</div>
</div>
<?php get_footer(); ?>