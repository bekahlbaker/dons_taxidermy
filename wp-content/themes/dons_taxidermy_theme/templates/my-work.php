<?php
/*
Template Name: My Work Template
*/
?>
<?php get_header(); ?>

<div id="work">
	<div class="container-fluid">
		<div class="title">
			<?php the_field('work-title'); ?>
		</div>
		<div class="gallery">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>




<?php get_footer(); ?>