<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 * This file is used for your archive pages
 */

// Get template header
get_header();

// Sidebar Wrap?
if( of_get_option( 'sidebar_homepage_archive' ) == '1' ) echo '<div id="post" class="home-sidebar">';

// Start loop
if(have_posts()) : ?>

<div id="archive-wrap" class="clearfix">
  <header id="page-heading">
    <h1>Wedding Styles weddingstyles-php</h1>
    <p>
      <?php $obj = get_post_type_object( 'wedding-styles' );
echo $obj->description; ?>
    </p>
    <fieldset class="filter">
      <legend class="symple-button">Filter by style &amp; mood</legend>
      <?php echo do_shortcode('[searchandfilter id="655"]'); ?>
    </fieldset>
  </header>
<div id="archive-entries-wrap" class="clearfix">

		<article class="style-entry">
		  	<div class="row style-grid">
				<div class="col-sm-6 col-md-3 col-lg-3 text-col">
					<h2>Duis id justo </h2>
					<h3>ac enim accumsan maximus ac et mauris.</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu congue justo. Suspendisse pretium purus eros, id ornare erat placerat ut. 
					Maecenas porttitor neque erat, a tristique lectus ullamcorper et. Ut vehicula mauris quis leo lacinia, ut ultrices purus maximus. Lorem 
					ipsum dolor sit amet, consectetur adipiscing elit. Ut vel arcu urna. Donec id vestibulum nulla. Fusce in mi sed turpis convallis consequat. </p>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 style-col middle-left">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<img src="https://placeholdit.imgix.net/~text?txtsize=43&bg=333333&txtclr=ffffff&txt=inspiration-3-img-500%C3%97779&w=500&h=779" alt="" class="insp-3"/>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 style-col middle-right">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<img src="https://placeholdit.imgix.net/~text?txtsize=23&bg=8a8a8a&txtclr=ffffff&txt=swatch-1-final-img-500%C3%97213&w=500&h=213" alt="" class="swatch-1"/>
						</div>
						<div class="col-md-12 col-lg-12">
							<img src="https://placeholdit.imgix.net/~text?txtsize=23&bg=8a8a8a&txtclr=ffffff&txt=swatch-1-final-img-500%C3%97213&w=500&h=213" alt="" class="swatch-2"/>
						</div>
						<div class="col-md-12 col-lg-12">
							<img src="https://placeholdit.imgix.net/~text?txtsize=43&bg=222222&txtclr=ffffff&txt=suite-overview-final-img-500%C3%97339&w=500&h=339" alt="" class="suite-img"/>
						</div>			
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 style-col far-right">
					<div class="row ">
						<div class="col-md-12 col-lg-12">
							<img src="https://placeholdit.imgix.net/~text?txtsize=43&bg=222222&txtclr=ffffff&txt=inspiration-2-img-500%C3%97432&w=500&h=432" alt="" class="insp-2"/>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 logow">
							<img src="https://placeholdit.imgix.net/~text?txtsize=43&bg=222222&txtclr=ffffff&txt=logo-detail-img-250%C3%97345&w=250&h=345" alt="" class="logo-detail"/>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<img src="https://placeholdit.imgix.net/~text?txtsize=43&bg=7a7a7a&txtclr=ffffff&txt=inspiration-1-img-250%C3%97342&w=250&h=342" alt="" class="insp-1"/>
						</div>
					</div>
				</div>
			</div>
		</article>

</div>
<br/>
<br/>
  <!-- /page-heading -->
  <div id="archive-entries-wrap" class="clearfix">

    <div class="grid-loader"><i class="icon-spinner icon-spin"></i></div>

    <?php
	if (have_posts()) { 
		while (have_posts()) {
			the_post( );
			$format = get_post_format();
			if ( false === $format ) $format = 'standard';
			wpex_hook_entry_before(); ?>
	
		<article class="style-entry">
			<?php wpex_hook_entry_top(); ?>
			<div class="row style-grid">
				
				<!-- Left Col -->
				
				<div class="col-sm-6 col-md-3 col-lg-3 text-col">
				
					<p class="wedding-style"><?php $terms = get_the_terms( $post->ID , 'style' ); foreach ( $terms as $term ) {echo $term->name;}?> Wedding Style</p>
        			<h2><?php the_title(); ?></h2>
        			<p class="mood"><?php echo get_the_term_list( $post->ID, 'mood', '<span class="label">Mood:</span> ', ', ' ); ?></p>
        			<p class="description"><?php the_field('suite_description'); ?></p>
        			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="symple-button">CTA</a> 
      							
				</div>
				
				<div class="col-sm-6 col-md-3 col-lg-3 style-col middle-left">
				
					<?php
			 		$imageArray = get_field('inspiration_3'); // Array returned by Advanced Custom Fields
			 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
			 		$imageThumbURL = $imageArray['sizes']['large']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
			 		?>
			 		<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
			 		
	 			</div>
	 			
	 			<!-- Center Col -->
	 			
				<div class="col-sm-6 col-md-3 col-lg-3 style-col middle-right">
					
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<?php
					 		$imageArray = get_field('swatch_1'); // Array returned by Advanced Custom Fields
					 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
					 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
					 		?>
					 		<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="swatch-1">
						</div>
						
						<div class="col-md-12 col-lg-12">
							<?php
					 		$imageArray = get_field('swatch_2'); // Array returned by Advanced Custom Fields
					 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
					 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
					 		?>
			          		<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="swatch-2" />
						</div>
						
						<div class="col-md-12 col-lg-12">
							<?php
					 		$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
					 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
					 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
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
					 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
					 		?>
			        		<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="insp-2">
						</div>
						
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			          		<?php
				 			$imageArray = get_field('logo_detail'); // Array returned by Advanced Custom Fields
				 			$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
				 			$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
			 				?>
							<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>"  class="logo-detail">
						</div>
						
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					        <?php
					 		$imageArray = get_field('inspiration_1'); // Array returned by Advanced Custom Fields
					 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
					 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
					 		?>
			          		<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="insp-1"> 
						</div>
					</div>
					
				</div>
			</div>
			<?php wpex_hook_entry_bottom(); ?>
		</article>   
    	<?php wpex_hook_entry_after();
		}
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
