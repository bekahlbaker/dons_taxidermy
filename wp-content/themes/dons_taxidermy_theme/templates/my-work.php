<?php
/*
Template Name: My Work Template
*/
?>
<?php get_header(); ?>

<div id="work">
	<div class="container">
		<div class="content-block">
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php the_content(); ?>
				<?php endwhile; endif; ?>
				</div>
		<div class="gallery">

<?php if(have_rows('gallery_entry')) : ?>
			<ul class="row">
				<?php while(have_rows('gallery_entry')) : the_row(); ?>
					<li class="gallery_item pop col-md-4">
					<div class="gallery_img" style="background-image: url('<?php the_sub_field('image'); ?>') ;"></div>
						<img src="<?php the_sub_field('image'); ?>">
						<div class="description">
							<h2><?php the_sub_field('title'); ?></h2>
							<p><?php the_sub_field('caption'); ?></p>
						</div>
					</li>	
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
			<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">              
			      <div class="modal-body">
			      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        <img src="" class="imagepreview" style="width: 100%;" >
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
	<div class="navigation">
		<a href="<?php bloginfo('url'); ?>/contact"><button>Contact Me</button></a>	
	</div>
</div>




<?php get_footer(); ?>