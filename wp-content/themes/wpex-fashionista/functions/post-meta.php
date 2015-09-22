<?php
/**
 * @package WordPress
 * @subpackage Fashionista WordPress Theme
 */


if( ! function_exists( 'wpex_post_meta' ) ) {
	function wpex_post_meta() { ?>
		<section class="meta clearfix" id="single-meta">
			<ul>
				<li class="meta-single-date"><span class="fa fa-calendar"></span><?php the_date(); ?></li>
				
				<?php if( comments_open() ) { ?>
					<li class="comment-scroll meta-single-comments"><span class="fa fa-comment"></span> <?php comments_popup_link(__('Leave a comment', 'wpex'), __('1 Comment', 'wpex'), __('% Comments', 'wpex'), 'comments-link', __('Comments closed', 'wpex')); ?></li>
					<?php } ?>
				<?php if( function_exists('zilla_likes') ) { ?><li class="meta-single-zilla-likes"><?php zilla_likes(); ?></li><?php } ?>
			</ul>
		</section><!--/meta -->
	<?php }
}