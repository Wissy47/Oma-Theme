<?php
/*
 	header template
    @package oma-theme

*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo( 'name' ); wp_title();?> </title>
	<meta name="description" content=" <?php bloginfo( 'description' ); ?> ">
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http:gmpg.org/xfn/11">
	<?php if( is_singular() && pings_open(get_queried_object())): ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?> ">
	<?php endif ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="container">
	<div class="row">
		<div class="col-12">
			<header class="header-container text-center background-img" style="background-image: url(<?php header_image() ?> );">
				
				<div class="header-content table">
					<div class="table-cell">
				<h1 class="oma-site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="oma-site-description"><?php bloginfo( 'description' ); ?></h2>
				</div> <!--.table-cell-->
				</div><!-- .header-content -->
				<div class="nav-container">
					<nav class="navbar navbar-default navbar-oma">
						<?php 
							wp_nav_menu( array(
    'theme_location'  => 'primary',
    'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => '',
    'container_id'    => 'bs-example-navbar-collapse-1',
    'menu_class'      => 'navbar nav',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
) );
							// wp_nav_menu( array(
							// 	'theme_location' => 'primary',
							// 	'container' => false,
							// 	'menu_class' => 'navbar nav',
							// 	 'add_li_class'  =>'nav-item',
							// 	 'depth' => 2,
							// 	 'walker' => new WP_Bootstrap_Navwalker()
							// 	 )
							// );


						 ?>
					</nav>

				</div> <!-- .nav-container -->
				
			</header><!-- .header-container -->
			
		</div><!-- .col-xs-12 -->
	</div> <!-- .row -->
</div> <!--.container-fluid-->