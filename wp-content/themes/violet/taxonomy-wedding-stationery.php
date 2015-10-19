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
	    	 	<div class="col-md-7 col-lg-7">
				
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
							<div id="slider-prev"></div> 
						  	<div id="slider-next"></div>
						</div>
						
						<div id="bx-pager" class="col-md-12 col-lg-12 carousel-pager">
							 <div class="row">
							 	<?php $postx_counter = -1; ?>
								<?php
								 if( $allowed ) {
									foreach( $allowed as $xx ) { 
										$postx_counter++;
					      				echo "<div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 pager-col\">";
										$imageArray = get_field($xx); // Array returned by Advanced Custom Fields
										$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
										$imageURL = $imageArray['url']; // Grab the full size version
										$imageThumbURL = $imageArray['sizes']['bx-carousel-thumb']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
										?>
										<a data-slide-index="<?php echo $postx_counter ?>" href="" <?php if($postx_counter==0){echo 'class="active"';}?> >
											<div class="overlay">
												<i class="fa fa-circle"></i>
												<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="col"/>
											</div>
										</a>
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
				<div class="offset-gut col-md-5 col-lg-offset-1 col-lg-4 typography">
					<div class="col-md-12 col-lg-12 show-lg">
						<h2><?php echo $post->post_title; ?></h2>
						<h4>Wedding Stationery</h4>
						
					</div>
					<p class="mood"><?php echo get_the_term_list( $post->ID, 'style', '<b>Style:</b> ', ', ' ); ?></p>
	            	<p class="mood"><?php echo get_the_term_list( $post->ID, 'mood', '<b>Mood:</b>', ', ' ); ?></p>
	            	<div class="description"><?php the_field('stationery_suite_description'); ?></div>
	            	
	            	<div class="col-md-12 col-lg-12 motif-images">
						<p><b>Motif Options</b></p>
						<ul>
						<?php 
							$allowed = array("motif_image_1", "motif_image_2", "motif_image_3", "motif_image_4");
							if( $allowed ) {
								foreach( $allowed as $yy ) { 
									$imageArray = get_field($yy); // Array returned by Advanced Custom Fields
									$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
									$imageURL = $imageArray['url']; // Grab the full size version
									//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
									?>
									<li><a href="<?php echo $imageURL; ?>" rel="lightbox"> <img class="motif-image" src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a></li>
				      				<?php 
								}	
							} 
							?>
							</ul>
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
					<div class="col-md-12 col-lg-12 sm-palette-image">
						<?php
						$imageArray = get_field('small_palette_image'); // Array returned by Advanced Custom Fields
						$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 			$imageURL = $imageArray['url']; // Grab the full size version
						$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<img class="svg" src="/wp-content/uploads/2015/10/icon_add.svg" class="img-responsive create-image"/><span>Or choose your own colors</span>
					</div>
					<div class="col-md-12 col-lg-12 stat-info">
						<!-- App Link CTA -->
	            	<?php
					if(get_field('app_link_style_stationery')) { ?>
						<div>
							<a id="#CreateStyleGuide" href="<?php echo get_field('app_link_style_stationery');?>" class="btn btn-default" role="button" title="<?php echo get_field('app_link_style_stationery_label');?>"><span><?php echo get_field('app_link_style_stationery_label');?></span></a>
						</div>
					<?php } ?>
						
					</div>
				</div>
			</div>
		</section>    
		<section class="related-style">
			<div class="col-md-7 col-lg-7">
				<div class="row">
				<h4>Related Stationery Styles</h4>
				<?php 
				$curr_PostID = $post->ID;
				$current_page_term_slug = get_the_term_list( $post->ID, 'style');
				$post_type = 'wedding-styles';
				$tax = 'style';						
				$argsc = array( 
					'post_type' 		=> $post_type,
					'posts_per_page' 	=> -1,
					'order'             => 'DESC',
				 	'post_status' 		=> 'publish',
					'style'				=> $current_page_term_slug,
				);              
				$my_query = new WP_Query($argsc);
				while($my_query->have_posts()){
				$my_query->the_post();	
					if($post->ID != $curr_PostID) {  ?>
					<div class=" col-sm-4 col-md-4 col-lg-4">
						<div class="related-style-entry">
							<div class="related-img">
								<?php
								$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
								$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
					 			$imageURL = $imageArray['url']; // Grab the full size version
								$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
								?>
								<a href="/wedding-stationery/<?php echo $post->post_name?>" title="<?php echo $post->post_title;?>">
								<img src="<?php echo $imageURL;?>" class="img-responsive" alt="<?php echo $imageAlt; ?>">
								</a>  
							</div>
						</div>
					</div>
					<?php  } ?>
				<?php   } ?>
				<?php wp_reset_postdata(); ?>
				</div>
			</div>
			<div class="offset-gut col-md-5 col-lg-offset-1 col-lg-4">
				<div class="row">
					<div class="col-lg-12">
						<dl class="accordion">

						<dt><a href="">Details<i class="fa fa-chevron-down"></i></a></dt>
						<dd>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</dd>
						
						<dt><a href="">Pricing <span class="pdf">(Free PDF Download)</span><i class="fa fa-chevron-down"></i></a></dt>
						<dd>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</dd>
						
						<dt><a href="">Shipping<i class="fa fa-chevron-down"></i></a></dt>
						<dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</dd>
						
						</dl>
					</div>
				</div>
			</div>
		</section>	
		<section class="explore-styles1">
			<div class="col-lg-12">
				<h4>Explore More in This Stationery Styles</h4>
			</div>
		</section>
		<section class="explore-styles">
			<div class="col-sm-8 col-md-8 col-lg-8">
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
			<div class="col-sm-4 col-md-4 col-lg-4">
				<div class="row">
					<div class="col-lg-12 explore">
						<div class="inner">
							<p>Create a custom logo</p>
							<p>Choose your wedding colors</p>
							<p>Share your inspiration</p>
							<a href="/wedding-styles/<?php echo $post->post_name ?>/" title="Browse <?php the_title(); ?>"  class="btn btn-secondary" role="button">BROWSE THIS STYLE</span></a>
						</div>
					</div>
				</div>
			</div>
		</section>	
    </article>
    <article class="entry clearfix"> 
      <?php //the_content(); ?>
    </article>
    <!-- /entry -->
</div>
<!-- /post -->
<?php get_footer(); ?>
