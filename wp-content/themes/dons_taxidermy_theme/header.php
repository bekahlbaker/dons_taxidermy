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
<!-- sticky header -->
<div class="hiding" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/mountain-white-space.png);background-size: cover; ">
	<div class="logo-bar">
		<div class="container">
			<div class="logo">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png"></a>
			</div>
		</div>
	</div>
<!-- hidden on page other than "home" -->
<?php if ( is_front_page() ) { ?>
	<div id="hiding-header">
		<div class="h1">
			<h1><?php the_field('h1') ?></h1>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="message col-md-5 col-md-offset-1">
					<p><?php the_field('message_1') ?><br><br><?php the_field('message_2') ?></p>
				</div>
				<div class="button col-md-6">
					<a href=""><button>See My Work</button></a>
				</div>
			</div>
		</div> 	
	</div>
<?php } ?>
<!-- end hidden -->
</div>
<!-- end sticky header -->

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

