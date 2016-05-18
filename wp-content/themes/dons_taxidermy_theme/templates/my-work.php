<?php
/*
Template Name: My Work Template
*/
?>
<?php get_header(); ?>

<div id="work">
	<div class="container-fluid">
		<div class="title">
			<?php the_field('work_title'); ?>
		</div>
		<div class="gallery">

<?php if(have_rows('gallery_entry')) : ?>
			<ul class="row">
				<?php while(have_rows('gallery_entry')) : the_row(); ?>
					<li class="gallery_item">
						<img src="<?php the_sub_field('image'); ?>">
						<div class="description">
							<h2><?php the_sub_field('title'); ?></h2>
							<p><?php the_sub_field('caption'); ?></p>
						</div>
					</li>	
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		</div>
	</div>
</div>




<?php get_footer(); ?>