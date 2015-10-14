<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 */

//get template header
get_header();

?>
<!-- <h2>Uses: taxonomy-wedding-stationery.php</h2> -->

<?php 
//$term =	$wp_query->queried_object;
//echo '<h1>'.$term->name.'</h1>';

//$terms = get_the_terms($post->id, 'wedding-stationery');
//echo "<pre>";
//print_r($post);
//echo "</pre>";
?>
<div id="post" class="clearfix">
    <!-- /single-media-wrap -->
    <article class="style-entry clearfix">
		<section class="stationery-detail">
	    	<div class="row style-grid">
	    		<!-- Page Title for mobile and tablets hidden on desktop -->
	    		<div class="col-lg-12 hidden-lg hide">
	    			<h2><?php echo $post->post_title; ?></h2>
					<h3>Wedding Stationery</h3>
	    		</div>
	    		<!-- Left Col -->
	    	 	<div class="col-lg-7 ">

					<div class="row">
						<div class="col-md-12 col-lg-12 carousel">
	    	 	
							<?php
							$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
							$imageURL = $imageArray['url']; // Grab the full size version
							//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>" class="col"> </a>
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<?php
							$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
				 			$imageURL = $imageArray['url']; // Grab the full size version
							$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img class="img-responsive" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>
							
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<?php
							$imageArray = get_field('stationary_suite_2_image'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
							$imageURL = $imageArray['url']; // Grab the full size version
							$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" rel="lightbox"><img class="img-responsive" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>
						
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<?php
							$imageArray = get_field('stationery_suite_image_3'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
							$imageURL = $imageArray['url']; // Grab the full size version
							$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" rel="lightbox"><img class="img-responsive" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>" class="col"></a>
							
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<?php
							$imageArray = get_field('stationary_suite_image_4'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
							$imageURL = $imageArray['url']; // Grab the full size version
							$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" rel="lightbox"><img class="img-responsive" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>" class="col"></a>
							
						</div>
					</div>
				</div>
				<!-- Right Col -->
				<div class="col-lg-offset-1 col-lg-4 typography">
					<div class="col-md-12 col-lg-12 show-lg">
						<h2><?php echo $post->post_title; ?></h2>
						<h4>Wedding Stationery</h4>
						
					</div>
					<p class="mood"><?php echo get_the_term_list( $post->ID, 'style', '<b>Style:</b> ', ', ' ); ?></p>
	            	<p class="mood"><?php echo get_the_term_list( $post->ID, 'mood', '<b>Mood:</b>', ', ' ); ?></p>
	            	<p class="description"><?php the_field('suite_description'); ?></p>
	            	
	            	<div class="col-md-12 col-lg-12 motif-images">
						<p><b>Motif Options</b></p>
						<?php
						$imageArray = get_field('motif_image_1'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 			$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img class="motif-image" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>  
						<?php
						$imageArray = get_field('motif_image_2'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 			$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img class="motif-image" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>  
						<?php
						$imageArray = get_field('motif_image_3'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 			$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img class="motif-image" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>  
						<?php
						$imageArray = get_field('motif_image_4'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 			$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img class="motif-image" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>  
					</div>
					<div class="col-md-12 col-lg-12 sm-palette-image">
						<p><b>Designer Colors</b></p>
						<?php
						$imageArray = get_field('small_palette_image'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 			$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img class="" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>
					</div>
					<div class="col-md-12 col-lg-12 stat-info">
						<p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"  class="btn btn-default" role="button">Make this yours</span></a></p>
						
					</div>
				</div>
			</div>
		</section>
		<section class="related-style">
		
			<div class="col-lg-7 pull-right">
				<div class="row">
				<h4>Related Stationery Styles</h4>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<?php
						$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 			$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img class="img-responsive" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>  
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<?php
						$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
						$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<a href="<?php echo $imageURL; ?>" rel="lightbox"><img class="img-responsive" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<?php
						$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
						$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<a href="<?php echo $imageURL; ?>" rel="lightbox"><img class="img-responsive" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>" class="col"></a>
					</div>
				</div>
			</div>
			<div class="col-lg-offset-1 col-lg-4 pull-left">
				<div class="row">
					<div class="col-lg-12">
						<p><b>Details- Slide Down UI Panels</b></p>
						<p><b>Pricing</b></p>
						<p><b>Shipping</b></p>
					</div>
				</div>
			</div>
		</section>	
		<section class="explore-styles">
			<div class="col-lg-7">
				<div class="row">
				<h4>Explore More in This Stationery Styles</h4>
				
					<div class="col-lg-12">
						<div class="row">
							<div class="col-sm-3 col-md-3 col-lg-3">
									<?php
								$imageArray = get_field('inspiration_1'); // Array returned by Advanced Custom Fields
								$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
								$imageURL = $imageArray['url']; // Grab the full size version
								$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
								?>
								<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="col img-responsive"> </a>
							</div>
							<div class="col-sm-3 col-md-3 col-lg-3">
							<?php
								$imageArray = get_field('logo_detail'); // Array returned by Advanced Custom Fields
								$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
								$imageURL = $imageArray['url']; // Grab the full size version
								$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
								?>
								<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="col img-responsive"> </a>
							</div>
							<div class="col-sm-3 col-md-3 col-lg-3">
								<?php
								$imageArray = get_field('inspiration_3'); // Array returned by Advanced Custom Fields
								$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
								$imageURL = $imageArray['url']; // Grab the full size version
								$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
								?>
								<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="col img-responsive"> </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-offset-1 col-lg-4">
				<div class="row">
					<div class="col-lg-12 explore">
						<p>Create a custom logo</p>
						<p>Choose your wedding colors</p>
						<p>Share your inspiration</p>
						<p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"  class="btn btn-secondary" role="button">Button Two</span></a></p>
					</div>
				</div>
			</div>
		</section>	

		
		<?php wp_reset_postdata(); ?>
    </article>
    <article class="entry clearfix"> 
      <?php //the_content(); ?>
    </article>
    <!-- /entry -->
</div>
<!-- /post -->

<?php


//get template footer
get_footer(); ?>
