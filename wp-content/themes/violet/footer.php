<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 * This file outputs your footer content including your footer widgets and copyright info
 */
?>

<div class="clear"></div>
<?php wpex_hook_content_bottom(); ?>
</div>
<!-- /main-content -->
<?php wpex_hook_content_after(); ?>
</div>
<!-- /wrap -->

<?php wpex_hook_footer_before(); ?>
<footer id="footer" class="outerbox">
  <?php wpex_hook_footer_top(); ?>
  <?php
	//show widgetized footer if enabled
	if(of_get_option('widgetized_footer')) { ?>
  <div id="footer-widgets" class="clearfix"> 
    <!-- /footer-one -->
    <div class="footer-box logo">
      <?php
					//show custom image logo if defined in the admin
					if( of_get_option('custom_logo','') !== '' ) { ?>
						<img src="<?php echo esc_url(of_get_option('custom_logo')); ?>" alt="<?php get_bloginfo( 'name' ) ?>" />
					<?php }
					//no custom img logo - show text logo
						else { ?>
						 <h2><?php echo get_bloginfo( 'name' ); ?></h2>
					<?php } //end logo check ?>
    </div>
    <!-- /footer-two -->
    <div class="footer-box menus">
      <?php wp_nav_menu( array(
				'container'			=> 'ul',
				'menu_class'		=> 'footer-menu',
				'theme_location'	=> 'footer_menu',
				'sort_column'		=> 'menu_order',
				'fallback_cb'		=> ''
			)); ?>
      <?php wp_nav_menu( array(
				'container'			=> 'ul',
				'menu_class'		=> 'footer-menu',
				'theme_location'	=> 'footer_menu_two',
				'sort_column'		=> 'menu_order',
				'fallback_cb'		=> ''
			)); ?>
       <?php wp_nav_menu( array(
				'container'			=> 'ul',
				'menu_class'		=> 'footer-menu',
				'theme_location'	=> 'footer_menu_three',
				'sort_column'		=> 'menu_order',
				'fallback_cb'		=> ''
			)); ?>
    </div>
    <!-- /footer-three -->
    
    <div class="footer-box social remove-margin">
      <?php dynamic_sidebar('footer-three'); ?>
    </div>
  </div>
  <!-- /footer-widgets -->
  
  <?php } //widgetized footer disabled ?>
  <div id="copyright">
  <p>&copy;
    <?php echo date('Y'); ?> Violet. All rights reserved.</p>
    <?php wp_nav_menu( array(
				'container'			=> 'ul',
				'menu_class'		=> 'footer-terms',
				'theme_location'	=> 'footer_menu_four',
				'sort_column'		=> 'menu_order',
				'fallback_cb'		=> ''
			)); ?>
  <!-- /copyright -->
  </div>
  <?php wpex_hook_footer_bottom(); ?>
</footer>
<!-- /footer -->
<?php wpex_hook_footer_after(); ?>
<a href="#toplink" id="toplink"><span class="fa fa-chevron-up"></span></a>
<?php wp_footer(); ?>
</body></html>