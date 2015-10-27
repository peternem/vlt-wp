<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 */

//get template header
get_header();

//start post loop
while (have_posts()) : the_post(); ?>
<div id="post" class="clearfix">
    <!-- /single-media-wrap -->
    <article class="style-entry clearfix">
		<section class="style-inspiration">
	    	<div class="row style-grid">
	    	 	<!-- Left Col -->
	    	 	<div class="col-sm-6 col-md-3 col-lg-3 text-col typography">
					<h4 class="wedding-style">
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
					</h4>
	            	<h1 class="grey-hr"><?php the_title(); ?></h1>
	            	<p class="mood"><?php echo get_the_term_list( $post->ID, 'mood', '<b>Mood:</b> ', ', ' ); ?></p>
	            	<p class="description"><?php the_field('suite_description'); ?></p>
	            	<!-- App Link CTA -->
	            	<?php
					if(get_field('app_link_dashboard')) { ?>
						<a id="#MakeItYours" href="<?php echo get_field('app_link_dashboard');?>" title="<?php echo get_field('app_link_dashboard_label');?>" class="btn btn-default" role="button"><?php echo get_field('app_link_dashboard_label');?></span></a>
					<?php } 
					?>
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
					<?php
						if(get_field('wedding_suite_includes')) {
							echo '<div class="wedding-includes">';
							echo '<p><strong>' . get_field('wedding_suite_includes_label') . '</strong></p>';
							echo get_field('wedding_suite_includes');
							echo '</div>';
						}
					?>
					<a href="/wedding-stationery/<?php echo $post->post_name ?>/" title="Design This Suite" class="btn btn-default" role="button" >DESIGN THIS SUITE</a>
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
					<!-- App Link CTA -->
	            	<?php
					if(get_field('app_link_style_guide')) { ?>
						<a id="#CreateStyleGuide" href="<?php echo get_field('app_link_style_guide');?>" class="btn btn-default" role="button" title="<?php echo get_field('app_link_style_guide_label');?>"><span><?php echo get_field('app_link_style_guide_label');?></span></a>
					<?php } 
					?>
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
 		          			<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="img-responsive swatch">
 		          			
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
						 	<img src="/wp-content/uploads/2015/10/icon_add.svg" class="img-responsive create-image"/>
						</div>
					</div>
				</div>
				
				<!-- middle-right Col -->
				
				<div class="col-sm-12 col-md-12 col-lg-3 style-col right-col">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							 <?php
						 		$imageArrayX = get_field('sharing_image'); // Array returned by Advanced Custom Fields
						 		$imageAlt = $imageArrayX['alt']; // Grab, from the array, the 'alt'
						 		$imageThumbURL = $imageArrayX['url'];
						 		//$imageThumbURL = $imageArray['sizes']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						 		?>
						        <a href="<?php echo $imageThumbURL; ?>" rel="lightbox"> <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="col mg-responsive sharing-image"> </a>
						</div>
					</div>
				</div>
			</div>
    	</section>
    	
    	<hr>
    	
    	<section class="custom-monogram">
			<div class="row style-grid">
				<!-- left Col -->
	    	 	<div class="col-sm-12 col-md-12 col-lg-3 style-col left-col">
	    	 		<div class="row">
	    	 			<?php 
							$allowed = array("logo_1", "logo_2", "logo_3", "logo_4");
							if( $allowed ) {
								foreach( $allowed as $xx ) { 
				      				echo '<div class="col-sm-6 col-md-6 col-lg-6">';
									$imageArray = get_field($xx); // Array returned by Advanced Custom Fields
									$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
									$imageURL = $imageArray['url']; // Grab the full size version
									//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
									?>
									<a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>" class="col svg"> </a>
				      				<?php 
				      				echo "</div>";
								}	
							} 
						?>
	    	 			<div class="col-md-12 col-lg-12">
							<h4 class="text-center">Logos in this style</h4>
		    	 		</div>	
		    	 	</div>
		    	 </div>
	    	 	<!-- middle-right Col -->
				
				<div class="col-sm-6 col-md-3 col-lg-6 style-col middle-right">
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
	    	 	
	    	 	<div class="col-sm-12 col-md-12 col-lg-3 text-col typography">
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
					
					<!-- App Link Monogram CTA -->
	            	<?php
					if(get_field('app_link_monogram')) { ?>
						<a id="#DesignMonogram" href="<?php echo get_field('app_link_monogram');?>" class="btn btn-default" role="button" title="<?php echo get_field('app_link_monogram_label');?>"><span><?php echo get_field('app_link_monogram_label');?></span></a>
					<?php } 
					?>
				</div>
		</section>
		
    	<hr>
    	
		<section class="sharing-styles">
			<div class="row style-grid">
			<!-- left Col -->
	    	 	<div class="col-sm-12 col-md-12 col-lg-6">
	    	 		<div class="pinterest">
	    	 				<h3>What We're Pinning</h3>
	    	 				<!-- Pinboard -->
	    	 				<aside class="pinboard">
								<a data-pin-do="embedBoard" href="http://www.pinterest.com/violetwedding/<?php the_field('pinterest_board'); ?>/" data-pin-scale-width="80" data-pin-scale-height="320" data-pin-board-width="500">See on Pinterest</a> 
          						<!-- Please call pinit.js only once per page --> 
								<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script> 
							</aside>
	    	 		</div>
	    	 	</div>
	    	 	<div class="col-sm-12 col-md-12 col-lg-6">
	    	 		<div class="blogroll">
	    	 			
	    	 			<h3>From Our Blog</h3>
	    	 			
	    	 			<?php 
	    	 			$terms = get_terms('style');
	    	 			foreach ($terms as $term) {
	    	 				$wpq = array ('taxonomy'=>'style','term'=>$term->slug, 'posts_per_page' 	=> 3,);
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
												<a href="<?php echo $post->post_name; ?>"><?php the_post_thumbnail('thumbnail', array( 'class' => 'aga-img img-responsive' )); ?></a>
											</div>
											<div class="blog-post">
												<h4><a href="<?php echo $post->post_name; ?>"><?php echo $post->post_title; ?></a></h4>
												<?php the_excerpt(); ?>
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
										<a href="/wedding-stationery/<?php echo $post->post_name?>" title="<?php echo $post->post_title;?>">
										<img src="<?php echo $imageURL;?>" class="img-responsive" alt="<?php echo $imageAlt; ?>">
										</a>  
									</div>
									<div class="related-text">
										<h3><a href="/wedding-stationery/<?php echo $post->post_name?>" title="<?php echo $post->post_title;?>"><?php the_title() ?></a></h3>
										<?php echo get_the_term_list( $post->ID, 'style','<b>Style:</b> ', ', ' )."<br/>"; ?>
										<?php echo get_the_term_list( $post->ID, 'mood','<b>Mood:</b> ', ', ' )."<br/>"; ?>
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
      <?php //the_content(); ?>
    </article>
    <!-- /entry -->
</div>
<!-- /post -->

<?php
//end post loop
endwhile;

//get template footer
get_footer(); ?>
