<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 */

//get template header
get_header();

//start post loop
while (have_posts()) : the_post(); ?>
<h2>Uses: taxonomy-wedding-styles.php</h2>
<div id="post" class="clearfix">
    <!-- /single-media-wrap -->
    <article class="style-entry clearfix">
		<section class="style-inspiration">
	    	<div class="row style-grid">
	    	 	<!-- Left Col -->
	    	 	<div class="col-sm-6 col-md-3 col-lg-3 text-col typography">
					<p class="wedding-style">
						<?php 
						//Used later in the Blog section at bottom of page 
						$curr_PostID = $post->ID;
						$curr_PostSLug = $term->slug;
						
						?>
						
						<?php $terms = get_the_terms( $post->ID , 'style' ); 
						foreach ( $terms as $term ) {
							echo $term->name. " Wedding Style";
							// Used in blog section
							$current_page_term_slug =  $term->slug;
						}?>
					</p>
	            	<h2 class="grey-hr"><?php the_title(); ?></h2>
	            	<p class="mood"><?php echo get_the_term_list( $post->ID, 'mood', 'Mood: ', ', ' ); ?></p>
	            	<p class="description"><?php the_field('suite_description'); ?></p>
	            	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"  class="btn btn-default" role="button">Make this yours</span></a>
	    	 	</div>
	    	 	
	    	 	<!-- middle-left Col -->
	    	 	
	    	 	<div class="col-sm-6 col-md-3 col-lg-3 style-col middle-left">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<?php
							$imageArray = get_field('inspiration_1'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
							$imageURL = $imageArray['url']; // Grab the full size version
							$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>" class="col"> </a>
						</div>
					</div>
				</div>
				
				<!-- Right Col -->
				
				<div class="col-sm-6 col-md-3 col-lg-3 style-col far-right">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<?php
							$imageArray = get_field('inspiration_2'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
				 			$imageURL = $imageArray['url']; // Grab the full size version
							$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>  
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 logow">
							<?php
							$imageArray = get_field('inspiration_4'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
							$imageURL = $imageArray['url']; // Grab the full size version
							$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" rel="lightbox"><img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>"> </a>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<?php
							$imageArray = get_field('inspiration_5'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
							$imageURL = $imageArray['url']; // Grab the full size version
							$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" rel="lightbox"><img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>" class="col"></a>
						</div>
					</div>
				</div>
				
				<!-- middle-right Col -->
				
				<div class="col-sm-6 col-md-3 col-lg-3 style-col middle-right">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<?php
							$imageArray = get_field('inspiration_3'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
							$imageURL = $imageArray['url']; // Grab the full size version
							$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>" class="col"> </a>
						</div>
					</div>
				</div>
	    	</div>
	    	<div class="row photo-credits">
	    		<div class="col-lg-12">
					<?php
						if(get_field('inspiration_1_credit')) {
							echo '<p class="credit">Photo credit:' . get_field('inspiration_1_credit') . '</p>';
						}
					?>
				</div>
	    	</div>
    	</section>
    	<section class="design-stationery">
    		<div class="row design-grid">
	    	 	<!-- Left Col -->
	    	 	
	    	 	<div class="col-sm-7 col-md-7 col-lg-7">
				    <?php
			 		$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
			 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 		$imageThumbURL = $imageArray['url']; //grab from the array, the 'url'
			 		//$imageThumbURL = $imageArray['sizes']['large']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
			 		?>
			        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="img-responsive suite-image">
	    	 	</div>
	    	 	
	    	 	<!-- right Col -->
	    	 	<div class="col-sm-5 col-md-5 col-lg-5 text-col typography">
					<?php
					$my_query = new WP_Query('name=design-your-stationery');
					while($my_query->have_posts()){
						$my_query->the_post();
					?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2><?php the_title() ?></h2>
						<?php
						if(get_field('post_subtitle'))
						{
							echo '<h4>' . get_field('post_subtitle') . '</h4>';
						}
						?>
						<?php the_content(); ?>
						</article>
					<?php } ?>
					<?php wp_reset_postdata(); ?>
					<p><strong>Includes:</strong></p>
					<ul class="items-list">
						<li>Quisque et gravida nisl</li>
						<li>Vestibulum pellentesque</li>
						<li>Commodo libero vitae</li>
						<li>LZacus tempor</li>
						<li>Consectetur eros in</li>
						<li>Sapien pretium et</li>
					</ul>
					
					<a href="/suite/fifth-avenue/" class="btn btn-default" role="button" >Style Detail Page</a>
				</div>
	    	 </div>
    	</section>
    	<hr>
    	<section class="design-vision">
			<div class="row style-grid">
	    	 	<!-- Left Col -->
	    	 	
	    	 	<div class="col-sm-12 col-md-12 col-lg-3 text-col typography">
	    	 	
					<?php
					$my_query = new WP_Query('name=choose-your-colors-share-your-vision');
					while($my_query->have_posts()){
						$my_query->the_post();
					?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2><?php the_title() ?></h2>
						<?php
						if(get_field('post_subtitle'))
						{
							echo '<h4>' . get_field('post_subtitle') . '</h4>';
						}
						?>
						<?php the_content(); ?>
						</article>
					<?php } ?>
					<?php wp_reset_postdata(); ?>
					<a href="#" class="btn btn-default" role="button" >CREATE STYLE GUIDE</a>
				</div>
	    	 	
	    	 	<!-- middle-left Col -->
	    	 	
	    	 	<div class="col-sm-12 col-md-12 col-lg-6 style-col middle-col">
	    	 	
					
					<div class="row">
						<div class="col-md-12">
							<h4 class="text-center">Designer Color Palettes</h4>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6">
							
						  	<?php
					 		$imageArray = get_field('swatch_1'); // Array returned by Advanced Custom Fields
					 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
					 		$imageThumbURL = $imageArray['url'];
					 		//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
					 		?>
	 		          		<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="img-responsive swatch">
	 		          		
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6">
								
							<?php
					 		$imageArray = get_field('swatch_2'); // Array returned by Advanced Custom Fields
					 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
					 		$imageThumbURL = $imageArray['url'];
					 		//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
					 		?>
 		          			<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="img-responsive swatch">
	
						</div>
					
					</div>
						
					<div class="row">
						
						<div class="col-sm-6 col-md-6 col-lg-6">

						  	<?php
					 		$imageArray = get_field('swatch_3'); // Array returned by Advanced Custom Fields
					 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
					 		$imageThumbURL = $imageArray['url'];
					 		//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
					 		?>
 		          			<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="ing-responsive swatch">
 		          			
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6">
							<?php
					 		$imageArray = get_field('swatch_4'); // Array returned by Advanced Custom Fields
					 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
					 		$imageThumbURL = $imageArray['url'];
					 		//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
					 		?>
	 		          		<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="img-responsive swatch">
	 		          		
						</div>							
					</div>
					<div class="row">
						<div class="col-md-12">
							<h4 class="text-center">Or Create Your Own</h4>
						 	<img src="/wp-content/uploads/2015/10/styledetail_palette_empty.png" class="img-responsive create-image"/>
						</div>
					</div>
				</div>
				
				<!-- middle-right Col -->
				
				<div class="col-sm-12 col-md-12 col-lg-3 style-col right-col">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							 <?php
						 		$imageArray = get_field('sharing_image'); // Array returned by Advanced Custom Fields
						 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
						 		$imageThumbURL = $imageArray['url'];
						 		//$imageThumbURL = $imageArray['sizes']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						 		?>
						 		
						        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="img-responsive sharing-image">
						</div>
					</div>
				</div>
			</div>
    	</section>
    	
    	<hr>
    	
    	<section class="custom-monogram">
			<div class="row style-grid">
				<!-- left Col -->
	    	 	<div class="col-sm-12 col-md-12 col-lg-4 style-col left-col">
	    	 		<div class="row">
	    	 			<div class="col-sm-6 col-md-6 col-lg-6">
							
							<?php
					 		$imageArray = get_field('logo_1'); // Array returned by Advanced Custom Fields
					 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
					 		$imageThumbURL = $imageArray['url'];
					 		//$imageThumbURL = $imageArray['sizes']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
					 		?>
					 		
					        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="img-responsive monogram-svg">

						</div>
	    	 			<div class="col-sm-6 col-md-6 col-lg-6">
	    	 			
	    	 				<?php
					 		$imageArray = get_field('logo_2'); // Array returned by Advanced Custom Fields
					 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
					 		$imageThumbURL = $imageArray['url'];
					 		//$imageThumbURL = $imageArray['sizes']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
					 		?>
						 		
						    <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="img-responsive monogram-svg">
	    	 			
	    	 			</div>
	    	 			<div class="col-sm-6 col-md-6 col-lg-6">
	    	 			
	    	 				<?php
					 		$imageArray = get_field('logo_3'); // Array returned by Advanced Custom Fields
					 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
					 		$imageThumbURL = $imageArray['url'];
					 		//$imageThumbURL = $imageArray['sizes']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
					 		?>
						 		
						    <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="img-responsive monogram-svg">
	    	 			
	    	 			</div>
	    	 			<div class="col-sm-6 col-md-6 col-lg-6">
	    	 			
	    	 				<?php
					 		$imageArray = get_field('logo_4'); // Array returned by Advanced Custom Fields
					 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
					 		$imageThumbURL = $imageArray['url'];
					 		//$imageThumbURL = $imageArray['sizes']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
					 		?>
						 		
						    <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="img-responsive monogram-svg">
	    	 				
	    	 			</div>
	    	 			<div class="col-md-12 col-lg-12">
							<h4 class="text-center">Logos in This Style</h4>
		    	 		</div>	
		    	 	</div>
		    	 </div>
	    	 	<!-- middle-right Col -->
				
				<div class="col-sm-6 col-md-3 col-lg-4 style-col middle-right">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<?php
							$imageArray = get_field('monogram_editor_image'); // Array returned by Advanced Custom Fields
							$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
							$imageURL = $imageArray['url']; // Grab the full size version
							//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>" class="img-responsive"> </a>
						</div>
					</div>
				</div>
	    	 	<!-- right Col -->
	    	 	
	    	 	<div class="col-sm-12 col-md-12 col-lg-4 text-col typography">
					<?php
					$my_query = new WP_Query('name=create-a-custom-wedding-monograms');
					while($my_query->have_posts()){
						$my_query->the_post();
					?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2><?php the_title() ?></h2>
						<?php
						if(get_field('post_subtitle'))
						{
							echo '<h4>' . get_field('post_subtitle') . '</h4>';
						}
						?>
						<?php the_content(); ?>
						</article>
					<?php } ?>
					<?php wp_reset_postdata(); ?>
					<a href="#" class="btn btn-default" role="button" >Design Monogram</a>
				</div>
		</section>
		
    	<hr>
    	
		<section class="sharing-styles">
			<!-- left Col -->
	    	 	<div class="col-sm-12 col-md-12 col-lg-6">
	    	 		<div class="row">
	    	 			<div class="col-lg-12">
	    	 				<h3>What We're Pinning</h3>
	    	 				<!-- Pinboard -->
	    	 				<aside class="pinboard">
								<a data-pin-do="embedBoard" href="http://www.pinterest.com/violetwedding/<?php the_field('pinterest_board'); ?>/" data-pin-scale-width="80" data-pin-scale-height="320" data-pin-board-width="400">See on Pinterest</a> 
          						<!-- Please call pinit.js only once per page --> 
								<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script> 
							</aside>
	    	 			</div>
	    	 		</div>
	    	 	</div>
	    	 	<div class="col-sm-12 col-md-12 col-lg-6">
	    	 		<div class="row">
	    	 			<div class="col-lg-12">
	    	 			<h3>From The Blog</h3>
	    	 			
	    	 			<?php 
	    	 			$terms = get_terms('style');
	    	 			foreach ($terms as $term) {
	    	 				$wpq = array ('taxonomy'=>'style','term'=>$term->slug, 'posts_per_page' 	=> 6,);
	    	 				$myquery = new WP_Query ($wpq);
	    	 				$article_count = $myquery->post_count;
	    	 				
	    	 				if($term->slug == $current_page_term_slug) {
	    	 					//echo "<h3 class=\"term-heading\" id=\"".$term->slug."\">Blog Posts By Wedding Style: ".$term->name."</h3>";
	    	 					if ($article_count) {
		    	 						echo "<ul>";
		    	 						
		    	 						while ($myquery->have_posts()) : $myquery->the_post();
		    	 						
		    	 						if($post->ID != $curr_PostID) { ?>
		    	 							<li class="blog-container">
		    	 							<div class="blog-img">
												<?php the_post_thumbnail('thumbnail', array( 'class' => 'aga-img img-responsive' )); ?> 
											</div>
											<div class="blog-post">
												<h4><a href="<?php echo $post->post_name; ?>"><?php echo $post->post_title; ?></a></h4>
												<?php the_excerpt(); ?>
		    	 								<?php echo get_the_term_list( $post->ID, 'style','<b>Related Styles:</b> ', ', ' )."<br/>"; ?>
												<?php //echo get_the_term_list( $post->ID, 'suite', '<b>Suite:</b> ', ', ' ); ?>
		    	 							</div>
		    	 							</li>
		    	 						
		    	 						<?php }  
		    	 						endwhile; 
		    	 						echo "</ul>";
		    	 					}
	    	 					
	    	 				}
	    	 			}
	    	 			
	    	 			?>

						<?php wp_reset_postdata(); ?>
	    	 			</div>
	    	 		</div>
	    	 	</div>
		</section>
		
		<hr>
		
		<section class="related-styles">
					<div class="row">
						<div class="col-lg-12">
							<h3>Related <?php echo ucwords($current_page_term_slug); ?> Styles</h3>
						</div>
					</div>
					<div class="row">
						<?php 
						//for a given post type, return all
						//echo "current page style name: ".$current_page_term_slug;
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
						?>
						
						<?php 
						while($my_query->have_posts()){
							$my_query->the_post();
						?>
							<?php if($post->ID != $curr_PostID) {  ?>
							<div class=" col-sm-4 col-md-4 col-lg-4">
								<div class="related-style-entry">
									<div class="related-img">
										<?php
										$imageArray = get_field('inspiration_2'); // Array returned by Advanced Custom Fields
										$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
							 			$imageURL = $imageArray['url']; // Grab the full size version
										$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
										?>
										<a href="<?php echo $imageURL; ?>" rel="lightbox">
										<img src="<?php echo $imageURL;?>" class="img-responsive" alt="<?php echo $imageAlt; ?>">
										</a>  
									</div>
									<div class="related-text">
										<h3><?php the_title() ?></h3>
										<?php echo get_the_term_list( $post->ID, 'mood','<b>Mood:</b> ', ', ' )."<br/>"; ?>
										<?php echo get_the_term_list( $post->ID, 'style','<b>Style:</b> ', ', ' )."<br/>"; ?>
										<?php echo get_the_term_list( $post->ID, 'suite', '<b>Suite:</b> ', ', ' ); ?>
									</div>
								</div>
							</div>
							<?php  } ?>
						<?php   } ?>
						<?php wp_reset_postdata(); ?>						
					</div>
    	 		</div>
		</section>
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
