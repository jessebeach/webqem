<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage webqem
 * @since webqem 0.1
 */

get_header(); ?>
<div id="content" role="main" class="size2of3">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="unit size1of3">
    	<?php if ( is_front_page() ) { ?>
    		<h2 class="entry-title"><?php the_title(); ?></h2>
    	<?php } else { ?>
    		<h1 class="entry-title"><?php the_title(); ?></h1>
    	<?php } ?>
    
    	<div class="entry-content">
    		<?php the_content(); ?>
    		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'webqem' ), 'after' => '</div>' ) ); ?>
    		<?php edit_post_link( __( 'Edit', 'webqem' ), '<span class="edit-link">', '</span>' ); ?>
    	</div><!-- .entry-content -->
    </div><!-- #post-## -->
    
    <?php /* comments_template( '', true ); */ ?>
  <?php endwhile; ?>
</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
