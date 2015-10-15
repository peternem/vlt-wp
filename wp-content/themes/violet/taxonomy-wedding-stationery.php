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
				<style src="http://violetweddings.com/wp-content/themes/violet/css/jquery.bxslider.css"></style>
				<script src="http://violetweddings.com/wp-content/themes/violet/js/jquery.bxslider.js"></script>
				<script>
				jQuery(document).ready(function() {
					jQuery('.bxslider').bxSlider({
					  pagerCustom: '#bx-pager'
					});
				});
				</script>
					<div class="row">
						<div class="col-md-12 col-lg-12 carousel">
						<ul class="bxslider">
							<?php 
							$allowed = array("suite_image", "stationary_suite_2_image", "stationery_suite_image_3", "stationary_suite_image_4");
							if( $allowed ) {
								foreach( $allowed as $xx ) { 
				      				echo "<li>";
									$imageArray = get_field($xx); // Array returned by Advanced Custom Fields
									$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
									$imageURL = $imageArray['url']; // Grab the full size version
									//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
									?>
									<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>" class="col"> </a>
				      				<?php 
				      				echo "</li>";
								}	
							} 
							?>
							  
						</ul>
						</div>
						<div id="bx-pager" class="col-md-12 col-lg-12 carousel-pager">
							 <div class="row">
							 	<?php $postx_counter = -1; ?>
								<?php
								 if( $allowed ) {
									foreach( $allowed as $xx ) { 
										$postx_counter++;
					      				echo "<div class=\"col-sm-3 col-md-3 col-lg-3\">";
										$imageArray = get_field($xx); // Array returned by Advanced Custom Fields
										$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
										$imageURL = $imageArray['url']; // Grab the full size version
										//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
										?>
										<a data-slide-index="<?php echo $postx_counter ?>" href="" <?php if($postx_counter==0){echo 'class="active"';}?> ><div class="overlay"><img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>" class="col"></div></a>
					      				<?php 
					      				echo "</div>";
									}	
								} 
								?>
							</div>
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
	            	<div class="description"><?php the_field('stationery_suite_description'); ?></div>
	            	
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
						<!-- App Link CTA -->
	            	<?php
					if(get_field('app_link_style_stationery')) { ?>
						<p><a id="#CreateStyleGuide" href="<?php echo get_field('app_link_style_stationery');?>" class="btn btn-default" role="button" title="<?php echo get_field('app_link_style_stationery_label');?>"><span><?php echo get_field('app_link_style_stationery_label');?></span></a></p>
					<?php } ?>
						
					</div>
				</div>
			</div>
		</section>    
    
    
    
    
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
							<a href="<?php echo $imageURL; ?>"> <img class="img-responsive" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>
							
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<?php
							$imageArray = get_field('stationary_suite_2_image'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
							$imageURL = $imageArray['url']; // Grab the full size version
							$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>"><img class="img-responsive" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>
						
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<?php
							$imageArray = get_field('stationery_suite_image_3'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
							$imageURL = $imageArray['url']; // Grab the full size version
							$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>"><img class="img-responsive" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>" class="col"></a>
							
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<?php
							$imageArray = get_field('stationary_suite_image_4'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
							$imageURL = $imageArray['url']; // Grab the full size version
							$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" ><img class="img-responsive" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>" class="col"></a>
							
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
	            	<div class="description"><?php the_field('stationery_suite_description'); ?></div>
	            	
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
						<!-- App Link CTA -->
	            	<?php
					if(get_field('app_link_style_stationery')) { ?>
						<p><a id="#CreateStyleGuide" href="<?php echo get_field('app_link_style_stationery');?>" class="btn btn-default" role="button" title="<?php echo get_field('app_link_style_stationery_label');?>"><span><?php echo get_field('app_link_style_stationery_label');?></span></a></p>
					<?php } ?>
						
					</div>
				</div>
			</div>
		</section>
		<section class="related-style">
			<div class="col-lg-7">
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
			<div class="col-lg-offset-1 col-lg-4">
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
			<div class="col-lg-12">
						<h4>Explore More in This Stationery Styles</h4>
					</div>
			<div class="col-lg-7">
				<div class="row">
					
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-12">
									<?php
								$imageArray = get_field('see_more_image'); // Array returned by Advanced Custom Fields
								$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
								$imageURL = $imageArray['url']; // Grab the full size version
								$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
								?>
								<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>" class="col img-responsive"> </a>
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
						<p><a href="/wedding-styles/<?php echo $post->post_name ?>/" title="Browse <?php the_title(); ?>"  class="btn btn-secondary" role="button">BROWSE THIS STYLE</span></a></p>
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
