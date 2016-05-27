<?php
/*
Template Name: About Template
*/
?>
<?php get_header();  ?>

<div id="about" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/lake.jpg') ; background-size: cover; background-repeat: no-repeat; background-position: center center;">
	<div class="container" style="  background-image:
    linear-gradient(
      to bottom right, 
     rgba(255,255,255,0.5), transparent
    );">
		<div class="title">
			<?php the_field('about_title'); ?>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="title_image">
				<?php
					if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); }
				?>
			</div>
			</div>
			<div class="col-md-6">
				<div class="about content-block">
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php the_content(); ?>
				<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="navigation">
		<a href="<?php bloginfo('url'); ?>/my-work"><button>See My Work</button></a>	
	</div>
</div>



<?php get_footer(); ?>

