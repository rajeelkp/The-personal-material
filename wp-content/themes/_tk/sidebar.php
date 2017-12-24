<?php
/**
 * The sidebar containing the main widget area
 *
 * @package _tk
 */
?>

	</div><!-- close .main-content-inner -->

	<div class="sidebar col-xs-12 col-sm-4 col-md-3">
     <div class='socials'>
        <div class='hidden-xs'>
         <div class='big-card card-inset-shadow white'>
             <div class='single-box fb'><img  src='<?php echo get_template_directory_uri() ?>/includes/images/fb.png'/>Find on Facebook</div>
             <div class='single-box twitter'><img  src='<?php echo get_template_directory_uri() ?>/includes/images/twitter.png'/>Find on Twitter</div>
             <div class='single-box linkedin'><img  src='<?php echo get_template_directory_uri() ?>/includes/images/g+.png'/>Find on Google +</div>
             <div class='single-box instagram'><img src='<?php echo get_template_directory_uri() ?>/includes/images/instagram.png'>Find on Instagram</div>
             <div class='single-box mail'><img src='<?php echo get_template_directory_uri() ?>/includes/images/mail.png'>Message Me</div>

            </div>
        </div>
 
        <div class='hidden-xs'>
            <div class='rapid h3'>
                A lazy body powered by an extremely efficient mind capable of generating enthusiastic ideas from dynamic viewpoints, coupled with an emotion cooled and divine heart.
            </div>
        </div>   
      </div>
		<?php // add the class "panel" below here to wrap the sidebar in Bootstrap style ;) ?>
		<div class="sidebar-padder">

			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="search" class="widget widget_search">
					<?php get_search_form(); ?>
				</aside>

				<aside id="archives" class="widget widget_archive">
					<h3 class="widget-title"><?php _e( 'Archives', '_tk' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget widget_meta">
					<h3 class="widget-title"><?php _e( 'Meta', '_tk' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; ?>

		</div><!-- close .sidebar-padder -->
