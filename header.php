<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage webqem
 * @since webqem 0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'webqem' ), max( $paged, $page ) );

	?></title>
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'template_directory' ); ?>/css/core.css" />
<link rel="stylesheet" type="text/css" media="screen and (min-width:640px)" href="<?php bloginfo( 'template_directory' ); ?>/plugins/oocss/core/grid/grids.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'template_directory' ); ?>/css/typography.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'template_directory' ); ?>/css/webqem.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- <script type="text/javascript" language="javascript" src=""></script> -->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<?php
	get_sidebar( 'quickbar' );
?>
<section class="hfeed">
	<header id="header" class="wrapper">
  	<hgroup id="branding" role="banner" class="stack">
  		<h1 id="site-title">
  			<span>
  				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
  			</span>
  		</h1>
  		<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
  
  		<?php
  			// Check if this is a post or page, if it has a thumbnail, and if it's a big one
  			if ( is_singular() &&
  					has_post_thumbnail( $post->ID ) &&
  					( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
  					$image[1] >= HEADER_IMAGE_WIDTH ) :
  				// Houston, we have a new header image!
  				echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
  			endif; ?>
  	</hgroup><!-- #branding -->
	</header><!-- #header -->

	<div id="main" class="wrapper">
	 <div class="stack">
