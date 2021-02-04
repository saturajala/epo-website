<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EPO_website
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '', true, 'right' ); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo ('pingback_url'); ?>">

	<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js">
<![endif]-->

</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'epo-website' ); ?></a>

	    <!-- ========================== HEADER ============================= -->
<header class="front-page-header" role="banner">

	<nav class="navbar navbar-expand-lg fixed-top">

		<div class="container">
  
  			<a href="#" class="navbar-brand"><img src="<?php bloginfo('stylesheet_directory')?>/assets/img/logo.svg" alt="" class="img-fluid"></a>

			<button type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls=".navbar-collapse" class="navbar-toggler navbar-toggler-right">
			Menu<i class="fa fa-bars ml-2"></i>
			</button>

 	  		<?php
		 	wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'depth'			=> 2,
					'container'      => 'nav',
					'container_class'=> 'collapse navbar-collapse',
					'container_id'    => 'bs-example-navbar-collapse-1',
					'menu_class' 	=> 'navbar-nav ml-auto nav-item',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    				'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); 
			?> 

  		</div>
	</nav>

</header>