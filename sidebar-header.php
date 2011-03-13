<?php
/**
 * The Footer widget areas.
 *
 * @package WordPress
 * @subpackage webqem
 * @since webqem 0.1
 */
?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'first-header-widget-area'  ) )
		return;
	// If we get this far, we have widgets. Let do this.
?>

			<div id="header-widget-area" role="complementary">

<?php if ( is_active_sidebar( 'first-header-widget-area' ) ) : ?>
				<div class="widget-area">
					<ul>
						<?php dynamic_sidebar( 'first-header-widget-area' ); ?>
					</ul>
				</div><!-- #first .widget-area -->
<?php endif; ?>

			</div><!-- #footer-widget-area -->
