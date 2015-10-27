<?php
/**
 * Template Name: Home Page template
 *
 * @package WordPress
 * @subpackage Violet
 * 
 */

get_header(); ?>

<?php
//start page loop
if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="full-width-page" class="clearfix">
	<?php if(is_page('home')) {
		get_template_part('hero-banner-home' );
	} ?>
	<article class="container clearfix">
		<section id="createWeddingMonogram" class="innerbox">
			<header id="single-heading">
				<h2 class="text-center">Create Your Wedding Monogram</h2>
				<p class="text-center">Start with a style you love and make a special mark just for your wedding.</p>
			</header>
			<div class="row style-grid">
<?php 
	$argsxx = array(
			'post_type' => 'wedding-styles',
			'meta_key'          => 'wedding_stationery_rank',
            'orderby'           => 'meta_value_num',
            'order'             => 'ASC',
			'post_status' 		=> 'publish',
			'posts_per_page' => 4,
			'taxonomy'=>'wedding-stationary',
	);
	$myquery1 = new WP_Query ($argsxx);
	
	
		while ($myquery1->have_posts()) : $myquery1->the_post();
	?>
	<?php 
					$fields = get_field_objects( $post->ID);
					$allowed = array("logo_1");
					$fields_xx = array_intersect_key($fields, array_flip($allowed));
					
					if( $fields_xx ) {
						foreach( $fields_xx as $field_name => $field ) {?>
						<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<?php 
        				$filter_name = strtok($post->post_name, '-');
        				$filter_name_a = ucwords($filter_name);
        				?>
						<article <?php post_class($post->post_name); ?>>
								<a href="/wedding-monograms/#filter=.style-<?php echo $filter_name; ?>">
	        	     				<img src="<?php echo $field['value']['url']; ?>" alt="<?php echo $field['value']['alt']; ?>" class="img-responsive center-block">
								</a>
			        			<h3 class="dsg-links text-center"><a href="/wedding-monograms/#filter=.style-<?php echo $filter_name; ?>"><?php echo $filter_name_a; ?> Wedding Suites</a></h3>
			        				<?php 
// 				        				echo "<pre style=\"font-size: 9px;\">";
// 				        				print_r($post);
// 				        				echo "<pre>";
				        				?>
	      				</article>
		      			</div>
					<?php } ?>
				<?php }?>
	<?php endwhile; // end of the loop.  ?>	   
	<?php wp_reset_postdata(); ?> 
	    	 </div>
			<div class="cta-link text-center">
				<?php
				if(get_field('create_monogram_link_url'))
				{
					?>
					<a href="<?php echo get_field('create_monogram_link_url'); ?>" role="button" title="<?php echo get_field('create_monogram_link_label'); ?>"><?php echo get_field('create_monogram_link_label'); ?></a>
					<?php
				}
				?>
			</div>
		</section>
		<section id="designWeddingStationary" class="innerbox">
			<header id="single-heading">
				<?php
				if(get_field('design_your_stationery')) {
					echo get_field('design_your_stationery');
				}
				?>
			</header>
	    	 <div class="row style-grid">
<?php 
	$args = array(
			'post_type' => 'wedding-styles',
			'meta_key'          => 'wedding_stationery_rank',
            'orderby'           => 'meta_value_num',
            'order'             => 'ASC',
			'post_status' 		=> 'publish',
			'posts_per_page' => 4,
			'taxonomy'=>'wedding-stationary',
	);
	$myquery = new WP_Query ($args);
	
	
		while ($myquery->have_posts()) : $myquery->the_post();
	?>
	<?php 
					$fields = get_field_objects( $post->ID);
					$allowed = array("suite_image");
					$fields_xx = array_intersect_key($fields, array_flip($allowed));
					
					if( $fields_xx ) {
						foreach( $fields_xx as $field_name => $field ) {?>
						<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<?php 
        				$filter_name = strtok($post->post_name, '-');
        				$filter_name_a = ucwords($filter_name);
        				?>
						<article <?php post_class($post->post_name); ?>>
								<a href="/<?php echo $post->post_type;?>/#filter=.style-<?php echo $filter_name; ?>">
	        	     				<img src="<?php echo $field['value']['url']; ?>" alt="<?php echo $field['value']['alt']; ?>" class="img-responsive">
								</a>
			        			<h3 class="dsg-links text-center"><a href="/<?php echo $post->post_type;?>/#filter=.style-<?php echo $filter_name; ?>"><?php echo $filter_name_a; ?> Wedding Suites</a></h3>
			        				<?php 
// 				        				echo "<pre style=\"font-size: 9px;\">";
// 				        				print_r($post);
// 				        				echo "<pre>";
				        				?>
	      				</article>
		      			</div>
					<?php } ?>
				<?php }?>
	<?php endwhile; // end of the loop.  ?>	   
	<?php wp_reset_postdata(); ?> 	 
	    	 </div>
			<div class="cta-link text-center">
				<?php
				if(get_field('design_your_stationary_link_url'))
				{
					?>
					<a href="<?php echo get_field('design_your_stationary_link_url'); ?>" role="button" title="<?php echo get_field('design_your_stationary_link_label'); ?>"><?php echo get_field('design_your_stationary_link_label'); ?></a>
					<?php
				}
				?>
			</div>
		</section>
		<section id="easyTools" class="innerbox">
			<div class="row style-grid">
	    	 	<!-- Left Col -->
	    	 	<div class="col-sm-6 col-md-6 col-lg-6 text-col typography">
					<header id="single-heading">
							<?php
							if(get_field('easy_to_use_tools'))
							{
								echo get_field('easy_to_use_tools');
								?>
								<a class="btn btn-default" href="<?php echo get_field('easy_to_use_cta_url'); ?>" role="button" title="<?php echo get_field('easy_to_use_cta_label'); ?>"><?php echo get_field('easy_to_use_cta_label'); ?></a>
								<?php
							}
							?>
						
					</header>
	    	 	</div>
	    	 	<div class="col-sm-6 col-md-6 col-lg-6">
	    	 	<?php 
	    	 	if(get_field('easy_to_use_image')) {
						$imageArray = get_field('easy_to_use_image'); // Array returned by Advanced Custom Fields
				 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
				 		$imageThumbURL = $imageArray['url'];
				 		?>
				 		<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="img-responsive">
	    	 	<?php } ?>
	    	 	</div>
	    	 </div>
			
		</section>
		<section id="yourWeddingStyle" class="innerbox">
			<header id="single-heading">
				<?php
				if(get_field('your_wedding-style')) {
					echo get_field('your_wedding-style');
				}
				?>
			</header>
	    	 <div class="row style-grid">
<?php 
	$argsyy = array(
			'post_type' => 'wedding-styles',
			'meta_key'          => 'wedding_stationery_rank',
            'orderby'           => 'meta_value_num',
            'order'             => 'ASC',
			'post_status' 		=> 'publish',
			'posts_per_page' => 4,
			'taxonomy'=>'wedding-stationary',
	);
	$myquery2 = new WP_Query ($argsyy);
	
	
		while ($myquery2->have_posts()) : $myquery2->the_post();
	?>
	<?php 
					$fields = get_field_objects( $post->ID);
					$allowed = array("your_wedding_style_image");
					$fields_xx = array_intersect_key($fields, array_flip($allowed));
					
					if( $fields_xx ) {
						foreach( $fields_xx as $field_name => $field ) {?>
						<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<?php 
        				$filter_name = strtok($post->post_name, '-');
        				$filter_name_a = ucwords($filter_name);
        				?>
						<article <?php post_class($post->post_name); ?>>
								<a href="/wedding-monograms/#filter=.style-<?php echo $filter_name; ?>">
	        	     				<img src="<?php echo $field['value']['url']; ?>" alt="<?php echo $field['value']['alt']; ?>" class="img-responsive center-block">
								</a>
			        			<h3 class="dsg-links text-center"><a href="/wedding-monograms/#filter=.style-<?php echo $filter_name; ?>"><?php echo $filter_name_a; ?> Wedding Suites</a></h3>
			        				<?php 
// 				        				echo "<pre style=\"font-size: 9px;\">";
// 				        				print_r($post);
// 				        				echo "<pre>";
				        				?>
	      				</article>
		      			</div>
					<?php } ?>
				<?php }?>
	<?php endwhile; // end of the loop.  ?>	   
	<?php wp_reset_postdata(); ?> 
	    	 </div>
		</section>
		<section id="asSeenIn" class="innerbox">
			<header id="single-heading">
				<?php
				if(get_field('as_seen_in')) {
					echo get_field('as_seen_in');
				}
				?>
				
			</header>
			<div class="row style-grid">
	    	 	<!-- Left Col -->
	    	 	<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive"/>
	    	 	</div>
	    	 	<!-- Left Mid Col -->
				<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive"/>
	    	 	</div>
	    	 	<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive"/>
	    	 	</div>
	    	 	
	    	 	<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive"/>
	    	 	</div>
	    	 	<!-- Right Mid Col -->
				<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive"/>
	    	 	</div>
				<!-- Right Col -->
				<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive"/>
	    	 	</div>
			</div>
	    	 <div class="row style-grid">
<?php 
	$argsyy = array(
			'post_type' => 'wedding-styles',
			'meta_key'          => 'wedding_stationery_rank',
            'orderby'           => 'meta_value_num',
            'order'             => 'ASC',
			'post_status' 		=> 'publish',
			'posts_per_page' => 4,
			'taxonomy'=>'wedding-stationary',
	);
	$myquery2 = new WP_Query ($argsyy);
	
	
		while ($myquery2->have_posts()) : $myquery2->the_post();
	?>
	<?php 
					$fields = get_field_objects( $post->ID);
					$allowed = array("your_wedding_style_image");
					$fields_xx = array_intersect_key($fields, array_flip($allowed));
					
					if( $fields_xx ) {
						foreach( $fields_xx as $field_name => $field ) {?>
						<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
						<?php 
        				$filter_name = strtok($post->post_name, '-');
        				$filter_name_a = ucwords($filter_name);
        				?>
						<article <?php post_class($post->post_name); ?>>
								<a href="/wedding-monograms/#filter=.style-<?php echo $filter_name; ?>">
	        	     				<img src="<?php echo $field['value']['url']; ?>" alt="<?php echo $field['value']['alt']; ?>" class="img-responsive center-block">
								</a>
			        				<?php 
// 				        				echo "<pre style=\"font-size: 9px;\">";
// 				        				print_r($post);
// 				        				echo "<pre>";
				        				?>
	      				</article>
		      			</div>
					<?php } ?>
				<?php }?>
	<?php endwhile; // end of the loop.  ?>	   
	<?php wp_reset_postdata(); ?> 
	    	 </div>
		</section>
	</article>
</div><!-- /full-width-page -->
<?php
//end page loop
endwhile; endif;

//get template footer
get_footer(); ?>
