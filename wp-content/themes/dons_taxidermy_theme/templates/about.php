<?php
/*
Template Name: About Template
*/
?>
<?php get_header();  ?>

<div id="about">
	<div class="container">
		<div class="title_image">
			<?php
				if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); }
			?>
		</div>
		<div class="about content-block">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
	<div class="navigation">
		<a href=""><div class="arrow-left pull-left"><span class="glyphicon glyphicon-arrow-left"></span></div></a>
		<a href=""><div class="arrow-right pull-right"><span class="glyphicon glyphicon-arrow-right"></span></div></a>	
	</div>
</div>



<?php get_footer(); ?>

