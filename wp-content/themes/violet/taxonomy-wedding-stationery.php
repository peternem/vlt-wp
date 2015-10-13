<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 */

//get template header
get_header();

//start post loop
while (have_posts()) : the_post(); ?>
<h2>Uses: taxonomy-wedding-stationery.php</h2>
<div id="post" class="clearfix">
    <!-- /single-media-wrap -->
    <article class="style-entry clearfix">
		<section class="style-inspiration">
	    	<div class="row style-grid">
	    		<!-- Left Col -->
	    	 	<div class="col-lg-7">
	    	 	
							<?php
							$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
							$imageURL = $imageArray['url']; // Grab the full size version
							//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>" class="col"> </a>

				</div>
				<!-- Right Col -->
				<div class="col-lg-offset-1 col-lg-4">
					<h2 class="grey-hr"><?php the_title(); ?></h2>
					<p class="mood"><?php echo get_the_term_list( $post->ID, 'style', 'Style: ', ', ' ); ?></p>
	            	<p class="mood"><?php echo get_the_term_list( $post->ID, 'mood', 'Mood: ', ', ' ); ?></p>
	            	<p class="description"><?php the_field('suite_description'); ?></p>
	            	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"  class="btn btn-default" role="button">Make this yours</span></a>
	            	<div class="col-md-12 col-lg-12 motif-images">
						<?php
						$imageArray = get_field('motif_image_1'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 			$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>  
						<?php
						$imageArray = get_field('motif_image_2'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 			$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>  
						<?php
						$imageArray = get_field('motif_image_3'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 			$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>  
						<?php
						$imageArray = get_field('motif_image_4'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 			$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>  
					</div>
					<div class="col-md-12 col-lg-12 motif-images">
						<?php
						$imageArray = get_field('swatch_1'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 			$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>
						<?php
						$imageArray = get_field('swatch_2'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 			$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>
						<?php
						$imageArray = get_field('swatch_3'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 			$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>
						<?php
						$imageArray = get_field('swatch_4'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 			$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>
					</div>
					<<div class="col-md-12 col-lg-12">
					<h4>Slide Down UI Panels</h4>
						<p><b>Details</b></p>
						<p><b>Pricing</b></p>
						<p><b>Shipping</b></p>
					</div>
				</div>
			</div>
		</section>
		<section class="related-styles">
		<h4>Related Stationery Styles</h4>
			<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-4">
							<?php
							$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
				 			$imageURL = $imageArray['url']; // Grab the full size version
							$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img class="img-responsive" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>  
						</div>
						<div class="col-lg-4">
							<?php
							$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
							$imageURL = $imageArray['url']; // Grab the full size version
							$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" rel="lightbox"><img class="img-responsive" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>
						</div>
						<div class="col-lg-4">
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
		</section>	
		<section class="explore-styles">
			<h4>Explore More in This Stationery Styles</h4>
			<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-4">
							<?php
							$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
				 			$imageURL = $imageArray['url']; // Grab the full size version
							$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img class="img-responsive" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>  
						</div>
						<div class="col-lg-4">
							<?php
							$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
							$imageURL = $imageArray['url']; // Grab the full size version
							$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" rel="lightbox"><img class="img-responsive" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>
						</div>
						<div class="col-lg-4">
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
		</section>	

		
		<?php wp_reset_postdata(); ?>
    </article>
    <article class="entry clearfix"> 
      <?php the_content(); ?>
    </article>
    <!-- /entry -->
</div>
<!-- /post -->

<?php
//end post loop
endwhile;

//get template footer
get_footer(); ?>
