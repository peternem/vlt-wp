<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 * This file is used for your archive pages
 */

// Get template header
get_header();

if(have_posts()) : ?>
<div id="archive-wrap" class="clearfix">
	<header id="page-heading">
		<h1>Wedding Styles</h1>
	</header>
	<div id="archive-entries-wrap" class="clearfix">
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
	if (have_posts()) { 
		?>
		<div id="wpex-grid-wrap2" class="grid">
		<div class="gutter-sizer2"></div>
		<?php 
		while (have_posts()) {
			the_post( );
			$format = get_post_format();
			if ( false === $format ) $format = 'standard';
			wpex_hook_entry_before(); ?>
		<section <?php post_class('item grid-item2 wedding-style-archive'.$post->post_name); ?>>
			<article class="">
				<?php wpex_hook_entry_top(); ?>
				<div class="row style-grid">
					
					<!-- Left Col -->
					
					<div class="col-sm-6 col-md-3 col-lg-3 text-col typography">
					
						<p class="wedding-style"><?php $terms = get_the_terms( $post->ID , 'style' ); foreach ( $terms as $term ) {echo $term->name;}?> Wedding Style</p>
	        			<h2 class="grey-hr"><?php the_title(); ?></h2>
	        			<p class="mood"><?php echo get_the_term_list( $post->ID, 'mood', '<span class="label">Mood:</span> ', ', ' ); ?></p>
	        			<p class="mood"><?php echo get_the_term_list( $post->ID, 'style', '<span class="label">Style:</span> ', ', ' ); ?></p>
	        			<p class="description"><?php the_field('suite_description'); ?></p>
	        			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn-default" role="button"><span>Make It Yours</span></a> 
	      							
					</div>
					
					<!-- middle-left Col -->
					
					<div class="col-sm-6 col-md-3 col-lg-3 style-col middle-left">
						<div class="row">
							<div class="col-md-12 col-lg-12">
						<?php
				 		$imageArray = get_field('inspiration_3'); // Array returned by Advanced Custom Fields
				 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
				 		$imageThumbURL = $imageArray['url'];
				 		//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
				 		?>
				 		<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
				 			</div>
				 		</div>
		 			</div>
		 			
		 			<!-- middle-right Col -->
		 			
					<div class="col-sm-6 col-md-3 col-lg-3 style-col middle-right">
						
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<?php
						 		$imageArray = get_field('swatch_1'); // Array returned by Advanced Custom Fields
						 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
						 		$imageThumbURL = $imageArray['url']; //grab from the array, the 'url'
						 		//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						 		?>
						 		<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="swatch-1">
							</div>
							
							<div class="col-md-12 col-lg-12">
								<?php
						 		$imageArray = get_field('swatch_2'); // Array returned by Advanced Custom Fields
						 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
						 		$imageThumbURL = $imageArray['url']; //grab from the array, the 'url'
						 		//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						 		?>
				          		<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="swatch-2" />
							</div>
							
							<div class="col-md-12 col-lg-12">
								<?php
						 		$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
						 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
						 		$imageThumbURL = $imageArray['url']; //grab from the array, the 'url'
						 		//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						 		?>
			        			<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="suite-img"/>
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
						 		$imageThumbURL = $imageArray['url']; //grab from the array, the 'url'
						 		//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						 		?>
				        		<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="insp-2">
							</div>
							
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 logow">
				          		<?php
					 			$imageArray = get_field('logo_detail'); // Array returned by Advanced Custom Fields
					 			$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
					 			$imageThumbURL = $imageArray['url']; //grab from the array, the 'url'
					 			//$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
				 				?>
								<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>"  class="logo-detail">
							</div>
							
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						        <?php
						 		$imageArray = get_field('inspiration_1'); // Array returned by Advanced Custom Fields
						 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
						 		//$imageThumbURL = $imageArray['url']; //grab from the array, the 'url'
						 		$imageThumbURL = $imageArray['sizes']['insp-1-472x651']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
						 		
						 		?>
				          		<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="insp-1"> 
							</div>
						</div>
						
					</div>
				</div>
				<?php wpex_hook_entry_bottom(); ?>
			</article>  
		</section>
    	<?php wpex_hook_entry_after();
		}
		?>
		</div><!-- end isotope grid -->
		<?php 
	}
?>
    
    <!-- /wpex-grid-wrap -->
    <?php if( of_get_option( 'pagination_style', 'infinite_scroll' ) == 'infinite_scroll' ) { ?>
    <?php wpex_infinite_scroll(); ?>
    <?php } elseif( of_get_option( 'pagination_style', 'infinite_scroll' ) == 'load_more' ) { ?>
    <?php echo aq_load_more(); ?>
    <?php } else { ?>
    <?php wpex_paginate_pages(); ?>
    <?php } ?>


  </div>
  <!-- /archive-entries-wrap --> 
  
</div>
<!-- /archive-wrap -->
<?php
// End loop
endif;

// Get template footer
get_footer(); ?>
