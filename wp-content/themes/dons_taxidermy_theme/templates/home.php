<?php
/*
Template Name: Home Template
*/
?>
<?php get_header(); ?>

<div id="home" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/bg.jpg') ; background-size: cover; background-repeat: no-repeat; background-position: center center;">
	<div class="container-fluid home">
		<div class="welcome">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/hunter.png" alt="" style="width: 200px; float: left;">
			<h2 class="header"><?php the_field('welcome') ?></h2>
			<div class="message">
				<?php the_field('welcome_short_message') ?>
			</div>
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/hunter.png" alt="" style="width: 200px; float: right;">
			<div class="message">
					<?php the_field('about_short_message') ?>
			
			</div>
			<div class="button">
				<a href="<?php bloginfo('url'); ?>/about"><button>Read More</button></a>
			</div>
		</div>
	


<!-- 
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
 -->


		<hr style="border: 0;
    height: 1px;
    background: #333;
    background-image: linear-gradient(to right, #ccc, #333, #ccc);">
	<div class="row">
		<div class="my-work col-md-6">
			<h2 class="header"><?php the_field('my_work_click') ?></h2>
			<div class="featured">
				<div class="row">
					<div class="col-md-4 featured_image">
						<?php if( get_field('featured_1') ): ?>

							<img src="<?php the_field('featured_1'); ?>" />

						<?php endif; ?>
					</div>
					<div class="col-md-4 featured_image">
						<?php if( get_field('featured_2') ): ?>

							<img src="<?php the_field('featured_2'); ?>" />

						<?php endif; ?>
					</div>
					<div class="col-md-4 featured_image">
						<?php if( get_field('featured_3') ): ?>

							<img src="<?php the_field('featured_3'); ?>" />

						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="message">
				<?php the_field('my_work_short_message') ?>
			</div>
			<div class="button">
				<a href="<?php bloginfo('url'); ?>/my-work"><button>See More</button></a>
			</div>
		</div>
		
		<div class="contact_me col-md-6">
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
</div>

<?php get_footer(); ?>



