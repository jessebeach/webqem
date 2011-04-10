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
	if ( ! is_active_sidebar( 'widget-area-footer'  )	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

<div id="footer-widget-area" role="complementary" class="stack">
  <?php if ( is_active_sidebar( 'widget-area-footer' ) ) : ?>
    <?php $widgets = wp_get_sidebars_widgets(); ?>
    <?php dynamic_sidebar( 'widget-area-footer' ); ?>
  <?php endif; ?>
</div><!-- #footer-widget-area -->
