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
<div id="Home"></div>
<header>
<div class="header" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/mountain-white-space.png);background-size: cover; background-position: center center;">
	<div class="logo-bar">
		<div class="container">
			<div class="pull-left">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png"></a>
			</div>
		</div>
	</div>
	<div id="hiding-header">
		<div class="h1">
			<h1><?php the_field('h1') ?></h1>
			<h1 style="display: none;">Dons Taxidermy Canton TX</h1>
		</div>
 		<div class="button">
			<a href="#anchor" class="smoothScroll"><button><span class="glyphicon glyphicon-chevron-down"></span></button></a>
	</div>
</div> <!-- end .header -->
<div id="anchor"></div>
<div id="About"></div>
<!-- sticky navbar -->
<div class="sticky">
	<div class="navbar">
		<div class="container-fluid">
			<div class="nav">
		<!-- desktop menu -->	
 				<div class="nav-menu-desktop hidden-sm hidden-xs">
					<ul>
						<a href="#Home" class="smoothScroll">
							<li>Home</li>
						</a>
						<a href="#About" class="smoothScroll">
							<li>About</li>
						</a>
						<a href="#Work" class="smoothScroll">
							<li>My Work</li>
						</a>
						<a href="#Contact" class="smoothScroll">
							<li>Contact Me</li>
						</a>
					</ul>	
				</div>
		<!-- end desktop nav -->
		<!-- mobile menu -->
				<div class="nav-menu-mobile hidden-md hidden-lg">
					<button id="mobile">
						<span class="glyphicon glyphicon-align-justify"></span> Menu
					</button>
					<div class="dropdown">
						<ul>
						<a href="#Home" class="smoothScroll">
							<li class="menu-item">Home</li>
						</a>
						<a href="#About" class="smoothScroll">
							<li class="menu-item">About</li>
						</a>
						<a href="#Work" class="smoothScroll">
							<li class="menu-item">My Work</li>
						</a>
						<a href="#Contact" class="smoothScroll">
							<li class="menu-item">Contact Me</li>
						</a>
					</ul>
					</div>
				</div>
		<!-- end mobile nav -->
			</div>
		</div>
	</div>
</div>
<!-- end sticky navbar -->
</header>

