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
    <?php
		$format = get_post_format();
		if ( false === $format ) {
			$format = 'standard';
		}
		if($format == 'quote') { ?>
    <div id="single-quote">
      <?php the_content(); ?>
      <div class="entry-quote-author">-
        <?php the_title(); ?>
        -</div>
    </div>
    <?php } elseif($format == 'link'){
			$post_url = get_post_meta(get_the_ID(), 'wpex_post_url', true); ?>
    <div id="single-media-wrap">
      <?php get_template_part( '/formats/single', $format ); ?>
    </div>
    <!-- /single-media-wrap -->
    <div id="single-link">
      <header id="single-heading">
        <h1><a href="<?php echo $post_url; ?>" title="<?php the_title(); ?>" target="_blank">
          <?php the_title(); ?>
          </a></h1>
      </header>
      <!-- /single-meta -->
      <article class="entry clearfix">
        <?php the_content(); ?>
        <a href="<?php echo $post_url; ?>" title="<?php the_title(); ?>" target="_blank"><span class="fa fa-link"></span><?php echo $post_url; ?></a> </article>
      <!-- /entry --> 
    </div>
    <!-- /single-link -->
    <?php } else { ?>
    <div id="single-media-wrap">
      <?php get_template_part( '/formats/single', $format ); ?>
    </div>
    
    <!-- /single-media-wrap -->
    <article class="style-entry clearfix">
		<section class="style-inspiration">
	    	<div class="row style-grid">
	    	 	<!-- Left Col -->
	    	 	
	    	 	<div class="col-sm-6 col-md-3 col-lg-3 text-col typography">
					<p class="wedding-style">
						<?php $terms = get_the_terms( $post->ID , 'style' ); 
						foreach ( $terms as $term ) {
							echo $term->name. "Wedding Style";
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
					<h2>Design Your Stationery</h2>
					<h4>Free PDF Download</h4>
					<p>Quisque et gravida nisl. Vestibulum pellentesque urna augue, quis tristique 
					sapien pretium et. Phasellus commodo libero vitae euismod pellentesque. Vestibulum 
					consectetur eros in lacus tempor commodo.</p>
					<p><strong>Includes:</strong></p>
					<ul class="items-list">
						<li>Quisque et gravida nisl</li>
						<li>Vestibulum pellentesque</li>
						<li>Commodo libero vitae</li>
						<li>LZacus tempor</li>
						<li>Consectetur eros in</li>
						<li>Sapien pretium et</li>
					</ul>
					<a href="#" class="btn btn-default" role="button" >CTA</a>
				</div>
	    	 </div>
    	</section>
    	<hr>
    	<section class="design-vision">
			<div class="row style-grid">
	    	 	<!-- Left Col -->
	    	 	
	    	 	<div class="col-sm-12 col-md-12 col-lg-3 text-col typography">
	    	 		<h2>Choose your colors, share your vision</h2>
	    	 		<p>Quisque et gravida nisl. Vestibulum pellentesque urna augue, quis tristique 
					sapien pretium et. Phasellus commodo libero vitae euismod pellentesque. Vestibulum 
					consectetur eros in lacus tempor commodo.</p>
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
				<!-- middle-left Col -->
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
	    	 		<h2>Create a Custom Wedding Monograms</h2>
	    	 		<p>Quisque et gravida nisl. Vestibulum pellentesque urna augue, quis tristique 
					sapien pretium et. Phasellus commodo libero vitae euismod pellentesque. Vestibulum 
					consectetur eros in lacus tempor commodo.</p>
					<a href="#" class="btn btn-default" role="button" >Design Monogram</a>
				</div>
		</section>
    </article>
    

    
    <article class="entry clearfix"> 
      <!-- Sharing Section -->
      
      <section> 
        
        <!-- Pinboard -->
        <aside class="pinboard">
          <h3>What We're Pinning</h3>
          <a data-pin-do="embedBoard" href="http://www.pinterest.com/violetwedding/<?php the_field('pinterest_board'); ?>/" data-pin-scale-width="80" data-pin-scale-height="320" data-pin-board-width="400">See on Pinterest</a> 
          <!-- Please call pinit.js only once per page --> 
          <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script> 
        </aside>
        <aside class="related-posts">
          <ul>
            <?php dynamic_sidebar( 'Aside Widget' ); ?>
          </ul>
        </aside>
      </section>
      <section>
        <h2>Related Styles</h2>
        <p>how do we do this?</p>
      </section>
      <?php the_content(); ?>
    </article>
    <!-- /entry -->
    
    <?php
		//share post
		 ?>
    <?php } ?>

  
</div>
<!-- /post -->

<?php
//end post loop
endwhile;

//get template sidebar
get_sidebar(); ?>
<?php
//get template footer
get_footer(); ?>
