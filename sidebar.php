<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage webqem
 * @since webqem 0.1
 */
?>
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>

		<div class="widget" role="complementary">
			<ul>
			  <?php dynamic_sidebar( 'primary-widget-area' ); ?>
			</ul>
		</div><!-- #primary .widget-area -->

<?php endif; ?>
<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div class="widget-area" role="complementary">
			<ul>
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
