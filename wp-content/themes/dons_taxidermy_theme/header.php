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
<div class="hiding" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/Optimized-mountain.png);background-size: cover; ">
	<div class="logo-bar">
		<div class="container">
			<div class="logo">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png">
			</div>
		</div>
	</div>
	<div id="hiding-header">
		<div class="h1">
			<h1>Bring Your Trophy Back to Life</h1>
			<div class="container">
				<p>Welcome to Don's Taxidermy. <br><br>The only shop you'll need for all your trophies.</p>
			</div>
		</div>
	</div>
</div>
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
		<!-- mobile menu -->
				<div class="nav-menu-mobile hidden-md hidden-lg">
					<div id="mobile">
						<span class="glyphicon glyphicon-align-justify"></span>
					</div>
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
			</div>
		</div>
	</div>
</div>
</header>

