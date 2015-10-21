<?php
/**
 * Template Name: Home Page template
 *
 * @package WordPress
 * @subpackage Violet
 * 
 */

get_header(); ?>

<?php
//start page loop
if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="full-width-page" class="clearfix">
	<?php if(is_page('home')) {
		get_template_part('hero-banner-home' );
	} ?>
	<article class="container clearfix">
		<section id="createWeddingMonogram" class="innerbox">
			<header id="single-heading">
				<h2 class="text-center">Create Your Wedding Monogram</h2>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae erat ante.</p>
			</header>
			<div class="row style-grid">
	    	 	<!-- Left Col -->
	    	 	<div class="col-sm-3 col-md-3 col-lg-3">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=145x145&w=145&h=145" class="img-responsive center-block"/>
	    	 	</div>
	    	 	<!-- Left Mid Col -->
				<div class="col-sm-3 col-md-3 col-lg-3">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=145x145&w=145&h=145" class="img-responsive center-block"/>
	    	 	</div>
	    	 	<!-- Right Mid Col -->
				<div class="col-sm-3 col-md-3 col-lg-3">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=145x145&w=145&h=145" class="img-responsive center-block"/>
	    	 	</div>
				<!-- Right Col -->
				<div class="col-sm-3 col-md-3 col-lg-3">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=145x145&w=145&h=145" class="img-responsive center-block"/>
	    	 	</div>
	    	 </div>
			<div class="cta-link text-center"><a href="">Browse All Styles</a></div>
		</section>
		<section id="designWeddingStationary" class="innerbox">
			<header id="single-heading">
				<h2 class="text-center">Design Your Wedding Stationery</h2>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae erat ante.</p>
			</header>
			<div class="row style-grid">
	    	 	<!-- Left Col -->
	    	 	<div class="col-sm-3 col-md-3 col-lg-3">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive"/>
	    	 	</div>
	    	 	<!-- Left Mid Col -->
				<div class="col-sm-3 col-md-3 col-lg-3">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive"/>
	    	 	</div>
	    	 	<!-- Right Mid Col -->
				<div class="col-sm-3 col-md-3 col-lg-3">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive"/>
	    	 	</div>
				<!-- Right Col -->
				<div class="col-sm-3 col-md-3 col-lg-3">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive"/>
	    	 	</div>
	    	 </div>
			<div class="cta-link text-center"><a href="">Browse All Stationery</a></div>
		</section>
		<section id="easyTools" class="innerbox">
			<div class="row style-grid">
	    	 	<!-- Left Col -->
	    	 	<div class="col-sm-6 col-md-6 col-lg-6 text-col typography">
					<header id="single-heading">
						<h2 class="text-center">Easy To Use Tools</h2>
						<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae erat ante.</p>
						<a class="btn btn-default" href="#" role="button">Find Your Style</a>
					</header>
	    	 	</div>
	    	 	<div class="col-sm-6 col-md-6 col-lg-6">
	    	 		<img src="http://violetweddings.com/wp-content/uploads/2015/09/gardenParty-monogram-editor.jpg" class="img-responsive"/>
	    	 	</div>
	    	 </div>
			
		</section>
		<section id="yourWeddingStyle" class="innerbox">
			<header id="single-heading">
				<h2 class="text-center">What is your Wedding Style?</h2>
			</header>
			<div class="row style-grid">
	    	 	<!-- Left Col -->
	    	 	<div class="col-sm-3 col-md-3 col-lg-3">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive center-block"/>
	    	 	</div>
	    	 	<!-- Left Mid Col -->
				<div class="col-sm-3 col-md-3 col-lg-3">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive center-block"/>
	    	 	</div>
	    	 	<!-- Right Mid Col -->
				<div class="col-sm-3 col-md-3 col-lg-3">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive center-block"/>
	    	 	</div>
				<!-- Right Col -->
				<div class="col-sm-3 col-md-3 col-lg-3">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive center-block"/>
	    	 	</div>
	    	 </div>
		</section>
		<section id="asSeenIn" class="innerbox">
			<header id="single-heading">
				<h2 class="text-center">As Seen In</h2>
			</header>
			<div class="row style-grid">
	    	 	<!-- Left Col -->
	    	 	<div class="col-sm-2 col-md-2 col-lg-2">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive"/>
	    	 	</div>
	    	 	<!-- Left Mid Col -->
				<div class="col-sm-2 col-md-2 col-lg-2">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive"/>
	    	 	</div>
	    	 	<div class="col-sm-2 col-md-2 col-lg-2">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive"/>
	    	 	</div>
	    	 	<div class="col-sm-2 col-md-2 col-lg-2">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive"/>
	    	 	</div>
	    	 	<!-- Right Mid Col -->
				<div class="col-sm-2 col-md-2 col-lg-2">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive"/>
	    	 	</div>
				<!-- Right Col -->
				<div class="col-sm-2 col-md-2 col-lg-2">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=280%C3%97190&w=280&h=190" class="img-responsive"/>
	    	 	</div>
	    	 </div>
		</section>
	</article>
	<div class="container clearfix">
		<header id="single-heading">
			<h2><?php the_title(); ?></h2>
		</header>
		<!-- /single-heading -->
		<div class="entry">
			<?php the_content(); ?>
		</div><!-- /entry -->
	</div>
</div><!-- /full-width-page -->
<?php
//end page loop
endwhile; endif;

//get template footer
get_footer(); ?>
