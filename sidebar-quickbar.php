<?php
/**
 * The Quickbar widget area.
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
	if ( ! is_active_sidebar( 'widget-area-quickbar'  ) )
		return;
	// If we get this far, we have widgets. Let do this.
?>
<div id="quickbar" class="wrapper">
  <div id="header-widget-area" role="complementary" class="stack">
    <?php if ( is_active_sidebar( 'widget-area-quickbar' ) ) : ?>
      <?php $widgets = wp_get_sidebars_widgets(); ?>
      <?php dynamic_sidebar( 'widget-area-quickbar' ); ?>
    <?php endif; ?>
  </div><!-- #footer-widget-area -->
</div>
