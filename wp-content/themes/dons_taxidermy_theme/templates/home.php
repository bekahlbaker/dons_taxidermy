<?php
/*
Template Name: Home Template
*/
?>
<?php get_header(); ?>

<div id="home">

<!-- WELCOME -->

	<div class="slant-bottom-right">
		<div class="container-fluid">
			<section>
				<div class="title">
					<h2 class="header"><?php the_field('welcome') ?></h2>
				</div>
				<hr>
				<div style="padding-right: 50px;">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/hunter.png" alt="" class="curve-right">
				</div>
			  	<div class="message">
					<?php the_field('welcome_short_message') ?>
				</div>
				<div class="navigation">
					<a href=""><button class="ghost">see my work</button></a>
				</div>
			</section>
		</div>
	</div>

	<div class="container-fluid">
		<div id="break" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/woodbg2.jpg');"></div>
	</div>

<!-- MY WORK -->

		<div class="slant-top-right">
		<div class="container-fluid">
			<section>
				<div class="title">
					<h2 class="header"><?php the_field('my_work_click') ?></h2>
				</div>
				<hr>
				<div style="padding-left: 50px;">
					<?php if( get_field('featured_1') ): ?>
						<img src="<?php the_field('featured_1'); ?>" class="curve-left"/>
					<?php endif; ?>
				</div>
			  	<div class="message">
					<?php the_field('welcome_short_message') ?>
				</div>
				<div class="navigation">
					<a href="<?php bloginfo('url'); ?>/my-work"><button class="ghost">see my work</button></a>
				</div>
			</section>
		</div>
	</div>

	<div class="container-fluid">
		<div id="break" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/woodbg2.jpg');"></div>
	</div>

<!-- CONTACT ME -->

	<div class="slant-top-right">
		<div class="container-fluid">
			<section>
				<div class="title">
					<h2 class="header"><?php the_field('contact_me_click') ?></h2>
				</div>
				<hr>
				<div style="padding-right: 50px;">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/hunter.png" alt="" class="curve-right">
				</div>
			  	<div class="message">
					<?php the_field('contact_me_short_message') ?>
				</div>
				<div class="navigation">
					<a href="<?php bloginfo('url'); ?>/contact"><button class="ghost">see my work</button></a>
				</div>
			</section>
		</div>
	</div>

	

</div>


<?php get_footer(); ?> 

