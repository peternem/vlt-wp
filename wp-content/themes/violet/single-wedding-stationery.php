<?php
/*
Template Name: wedding-stationery
*/

//get template header
get_header();

//start post loop
while (have_posts()) : the_post(); ?>

<div id="post" class="clearfix">
  <div class="container clearfix">
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
    
    <article class="entry clearfix"> 
      <!-- Inspiration Block -->
      <p>Single wedding stationery</p>
      <div>
        <?php the_field('slideshow_shortcode'); ?>
      </div>
      <section class="inspiration">
        <div class="inspiration-text">
          <p>
            <?php $terms = get_the_terms( $post->ID , 'style' ); foreach ( $terms as $term ) {echo $term->name;}?>
            Wedding Style</p>
          <h1>
            <?php the_title(); ?>
          </h1>
          <?php echo get_the_term_list( $post->ID, 'mood', 'Mood: ', ', ' ); ?>
          <p>
            <?php the_field('suite_description'); ?>
          </p>
        </div>
        <div class="inspiration-images">
          <?php
 		$imageArray = get_field('inspiration_1'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
          <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="insp-1">
          <?php
 		$imageArray = get_field('inspiration_2'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
          <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="insp-2">
          <?php
 		$imageArray = get_field('inspiration_3'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['thumbnail']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
          <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="insp-3">
          <?php
 		$imageArray = get_field('inspiration_4'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['thumbnail']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
          <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="insp-4">
          <?php
 		$imageArray = get_field('inspiration_5'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
          <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>"  class="insp-5"> </div>
      </section>
      
      <!-- Logos -->
      <section class="logos">
        <h2>Select a Wedding Logo</h2>
        <?php
 		$imageArray = get_field('logo_1'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['thumbnail']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
        <?php
 		$imageArray = get_field('logo_2'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['thumbnail']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
        <?php
 		$imageArray = get_field('logo_3'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['thumbnail']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
        <?php
 		$imageArray = get_field('logo_4'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['thumbnail']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>"> </section>
      
      <!-- Swatches -->
      <section class="swatches">
        <h2>Choose your colors</h2>
        <?php
 		$imageArray = get_field('swatch_1'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
        <?php
 		$imageArray = get_field('swatch_2'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
        <p>Or create your own</p>
        <?php
 		$imageArray = get_field('swatch_3'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
        <?php
 		$imageArray = get_field('swatch_4'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>"> </section>
      
      <!-- Suite Image and Text -->
      <section class="suite-info">
        <?php
 		$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="suite-image">
        <p>Text block here</p>
      </section>
      
      <!-- Sharing Section -->
      <section class="sharing-info">
        <p>Share text</p>
        <?php
 		$imageArray = get_field('sharing_image'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="sharing-image"> </section>
      <section>
        <h2>Be inspired and learn more</h2>
        <!-- Pinboard -->
        <aside class="pinboard">
          <h3>Get more inspiration from Pinterest</h3>
          <a data-pin-do="embedBoard" href="http://www.pinterest.com/violetwedding/<?php the_field('pinterest_board'); ?>/" data-pin-scale-width="80" data-pin-scale-height="320" data-pin-board-width="400">See on Pinterest</a> 
          <!-- Please call pinit.js only once per page --> 
          <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script> 
        </aside>
        <aside class="related-posts">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Aside Widget") ) : ?>
          <?php endif; ?>
        </aside>
      </section>
      <?php the_content(); ?>
    </article>
    <!-- /entry -->
    
    <?php wp_link_pages(' '); ?>
    <?php
		//share post
		wpex_social_share(); ?>
    <?php } ?>
  </div>
  <!-- /container -->
  
  <nav id="single-nav" class="clearfix">
    <?php next_post_link('<div id="single-nav-left">%link</div>', '<span class="fa fa-chevron-left"></span>'.__('Previous Post','wpex').'', false); ?>
    <?php previous_post_link('<div id="single-nav-right">%link</div>', ''.__('Next Post','wpex').'<span class="fa fa-chevron-right"></span>', false); ?>
  </nav>
  <!-- /single-nav --> 
  
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
