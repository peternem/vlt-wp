<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Fashionista
 * @since Fashionista 1.0
 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php wpex_hook_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php
	//add viewport meta if responsive enabled
	if(of_get_option('responsive')) { ?>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
<?php } ?>
<!-- Title Tag -->
<title><?php bloginfo('name'); ?> - <?php wp_title(); ?></title>
<?php
	//set favicon if defined in admin
	if(of_get_option('custom_favicon')) { ?>
<link rel="icon" type="image/png" href="<?php echo of_get_option('custom_favicon'); ?>" />
<?php } ?>
<!-- Browser dependent stylesheets -->
<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8.css" media="screen" />
	<![endif]-->
<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7.css" media="screen" />
	<![endif]-->
<?php
	//WordPress head hook <== DO NOT DELETE ME
	wp_head(); ?>
<?php wpex_hook_head_bottom(); ?>


</head>
<!-- /end head -->

<!-- Begin Body -->

<?php $no_sidebar = ( of_get_option('sidebar_layout') == 'none' && is_singular() ) ? 'no-sidebar' : ''; ?>
<body <?php body_class('body '. $no_sidebar .''); ?>>
<?php get_template_part('google-tag-manager'); ?> 
<?php wpex_hook_header_before(); ?>
	<header id="header" class="navbar clearfix fixed-header">
    	<?php wpex_hook_header_top(); ?>
    	<nav id="navigation" class="navbar-collapse clearfix">
    	<?php wpex_mobile_menu(); ?>	
			<div class="logo-container">
				<a id="logo" class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo get_bloginfo( 'name' ); ?>" rel="home">
			    <?php
				//show custom image logo if defined in the admin
				if( of_get_option('custom_logo','') !== '' ) { ?>
				<img src="<?php echo esc_url(of_get_option('custom_logo')); ?>" alt="<?php get_bloginfo( 'name' ) ?>" />
			    <?php } else { ?>
			    <h2><?php echo get_bloginfo( 'name' ); ?></h2>
		    	<?php } ?>
				</a>
			</div>
			
		      <?php
				// Main Navigation menu
				wp_nav_menu( array(
					'theme_location'	=> 'main_menu',
					'sort_column'		=> 'menu_order',
					'menu_class'		=> 'sf-menu',
					'fallback_cb'		=> false
				)); ?>
	      		<?php
				// Sub Navigation menu
				wp_nav_menu( array(
					'theme_location'	=> 'sub_menu',
					'sort_column'		=> 'menu_order',
					'menu_class'		=> 'sub-menu',
					'fallback_cb'		=> false
				)); ?>
      		<!--?php get_search_form(); ?--> 
    		</nav>
    <!-- /navigation -->
    <?php wpex_hook_header_bottom(); ?>
  </header>
  <!-- /header --> 

<!-- /header-wrap -->
<?php wpex_hook_header_after(); ?>
<div id="wrap">
<?php wpex_hook_content_before(); ?>
<div id="main-content" class="outerbox clearfix <?php if( of_get_option( 'pagination_style', 'infinite_scroll' ) == 'infinite_scroll' ) { echo 'infinite-scroll-enabled'; } ?>">
<?php wpex_hook_content_top(); ?>
<?php
	//run code only on pages
	if(is_page() && !is_attachment()) {
		
		//show large featured images on pages
		if( has_post_thumbnail() ) { echo '<div id="page-featured-img" class="container"><img src="'. wp_get_attachment_url( get_post_thumbnail_id() ) .'" alt="'. get_the_title() .'" /></div>'; }
	} ?>
