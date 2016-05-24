<?php
/*
Template Name: Home Template
*/
?>
<?php get_header(); ?>

<div id="home">
	<div class="container home">
		<div class="welcome">
			<h2 class="header"><?php the_field('welcome') ?></h2>
			<div class="message">
				<?php the_field('welcome_short_message') ?>
			</div>
		</div>
		<hr>
		<div class="about">
			<h2 class="header"><?php the_field('about_click') ?></h2>
			
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/hunter.png" alt="" style="width: 200px;">
				<div class="message">
					<?php the_field('about_short_message') ?>
			
			</div>
			<div class="button">
				<a href="<?php bloginfo('url'); ?>/about"><button>Read More</button></a>
			</div>
		</div>
		<hr>
		<div class="my-work">
			<h2 class="header"><?php the_field('my_work_click') ?></h2>
			<div class="my-slider">

					<div id="slider">
					  <a href="javascript://" class="control_next">>></a>
					  <a href="javascript://" class="control_prev"><</a>
					  <ul>
					    <li style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/forest2.jpg); background-size: cover; background-position: center;"></li>
					    <li style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/forest.jpg); background-size: cover; background-position: center;"></li>
					    <li style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/forest3.jpg); background-size: cover; background-position: center;"></li>
					    <li style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/301H.jpg); background-size: cover; background-position: center;"></li>
					  </ul>  
					</div>

				
			</div>
			<div class="message">
				<?php the_field('my_work_short_message') ?>
			</div>
			<div class="button">
				<a href="<?php bloginfo('url'); ?>/my-work"><button>Read More</button></a>
			</div>
		</div>
		<hr>
		<div class="contact_me">
			<h2 class="header"><?php the_field('contact_me_click') ?></h2>
			<div class="message">
				<p><?php the_field('contact_me_short_message') ?></p>
			</div>
			<div class="button">
				<a href="<?php bloginfo('url'); ?>/contact"><button>Read More</button></a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>



