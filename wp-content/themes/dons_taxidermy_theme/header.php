<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9">
<title>
  <?php
    if( ! is_home() ):
      wp_title( '|', true, 'right' );
    endif;
    bloginfo( 'name' );
  ?>
</title>

<?php wp_head(); ?>
</head>

<!--[if IE 9]>
 <body class="ie9">
<![endif]-->
<!--[if !IE]>-->
<body <?php body_class();  ?> >

<!--<![endif]-->
<header>
<div class="header" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/mountain-white-space.png);background-size: cover; ">
	<div class="logo-bar">
		<div class="container">
			<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png"></a>
		</div>
	</div>
	<div id="hiding-header">
		<div class="h1">
			<h1><?php the_field('h1') ?></h1>
		</div>
 		<div class="button">
			<a href="#anchor" class="smoothScroll"><button><span class="glyphicon glyphicon-chevron-down"></span></button></a>
		</div> 
	</div>
</div>
<div id="anchor"></div>
<!-- sticky navbar -->
<div class="sticky">
	<div class="navbar">
		<div class="container-fluid">
			<div class="nav">
		<!-- desktop menu -->	
 				<div class="nav-menu-desktop hidden-sm hidden-xs">
					<?php
						$defaults = array(
							'theme_location' => 'main-nav',
							'container' => false,
							'depth' => 1
						);
						wp_nav_menu($defaults);
					?>	
				</div>
		<!-- end desktop nav -->
		<!-- mobile menu -->
				<div class="nav-menu-mobile hidden-md hidden-lg">
					<button id="mobile">
						<span class="glyphicon glyphicon-align-justify"></span> Menu
					</button>
					<div class="dropdown">
						<?php
						$defaults = array(
							'theme_location' => 'main-nav',
							'container' => false,
							'depth' => 1
						);
						wp_nav_menu($defaults);
					?>	
					</div>
				</div>
		<!-- end mobile nav -->
			</div>
		</div>
	</div>
</div>
<!-- end sticky navbar -->
</header>

