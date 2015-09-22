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
      <p>single-wedding-styles.php template</p>
      <section class="style-inspiration">
        <div class="style-entry">
          <div class="text">
            <p>
              <?php $terms = get_the_terms( $post->ID , 'style' ); foreach ( $terms as $term ) {echo $term->name;}?>
              Wedding Style</p>
            <h2>
              <?php the_title(); ?>
            </h2>
            <p><?php echo get_the_term_list( $post->ID, 'mood', 'Mood: ', ', ' ); ?></p>
            <p>
              <?php the_field('suite_description'); ?>
            </p>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="symple-button black">Make this yours</span></a> </div>
          <div class="collage">
            <?php
 		$imageArray = get_field('inspiration_1'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
		$imageURL = $imageArray['url']; // Grab the full size version
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
            <a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="col"> </a>
            <div class="col">
              <?php
 		$imageArray = get_field('inspiration_2'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
		$imageURL = $imageArray['url']; // Grab the full size version
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
              <a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>"> </a>
              <div class="img-group">
                <?php
 		$imageArray = get_field('inspiration_3'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
		$imageURL = $imageArray['url']; // Grab the full size version
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
                <a href="<?php echo $imageURL; ?>" rel="lightbox"> <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>"></a>
                <?php
 		$imageArray = get_field('inspiration_4'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
		$imageURL = $imageArray['url']; // Grab the full size version
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
                <a href="<?php echo $imageURL; ?>" rel="lightbox"><img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>"> </a> </div>
            </div>
            <?php
 		$imageArray = get_field('inspiration_5'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
		$imageURL = $imageArray['url']; // Grab the full size version
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
            <a href="<?php echo $imageURL; ?>" rel="lightbox"><img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="col"></a> </div>
        </div>
        <p class="credit">Photo credit:
          <?php the_field('inspiration_1_credit'); ?>
        </p>
      </section>
      <section class="design-stationery">
        <?php
 		$imageArray = get_field('suite_image'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['large']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="suite-image">
        <div class="text">
          <h2>Design Your Stationery</h2>
          <p><em>Free PDF Download</em></p>
          <p>Static text in template here</p>
          <h3>Includes:</h3>
          <a class="symple-button black" href="">CTA</a> </div>
      </section>
      
      <!-- Swatches -->
      <section class="swatches">
        <div class="col">
          <h2>Choose your colors, share your vision</h2>
          <p>static text here</p>
          <a class="symple-button black" href="">CTA</a> </div>
        <div class="col">
          <p><em>Designer Color Palettes</em></p>
          <?php
 		$imageArray = get_field('swatch_1'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
          <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="swatch">
          <?php
 		$imageArray = get_field('swatch_2'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
          <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="swatch">
          <?php
 		$imageArray = get_field('swatch_3'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
          <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="swatch">
          <?php
 		$imageArray = get_field('swatch_4'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
          <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="swatch">
          <p><em>Or Create Your Own</em></p>
          <p>need empty swatch image here</p>
        </div>
        <?php
 		$imageArray = get_field('sharing_image'); // Array returned by Advanced Custom Fields
 		$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 		$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 		?>
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="col sharing-image"> </section>
      
      <!-- Logos -->
      <section class="logos">
        <div class="col">
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
          <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
          <p>Logos in this style</p>
        </div>
        <p class="col">Need tablet and phone image for this spot</p>
        <div class="col">
          <h2>Create a Custom Wedding Logo</h2>
          <p>Static text here</p>
          <a class="symple-button black" href="">CTA</a> </div>
      </section>
      
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
  <!-- /container --> 
  
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
