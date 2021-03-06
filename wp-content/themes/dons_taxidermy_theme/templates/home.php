<?php
/*
Template Name: Home Template
*/
?>
<?php get_header(); ?>

<section class="about" id="About">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
 				<h2 class="header">Don's Taxidermy</h2>
 				<p>Donald Baker, Owner</p>
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/profile.png" alt="" style="max-width: 200px;">
			</div>
			<div class="col-md-7">
				<div class="message">
					<?php the_field('welcome_short_message') ?>
					<div id="Work"></div>
				</div>	
			</div>
		</div>
	</div>
</section>

<div id="gallery" class="container-fluid">
<?php if(have_rows('gallery')) : ?>
	<ul class="gallery row">
		<?php while(have_rows('gallery')) : the_row(); ?>
			<li class="col-xs-4 col-sm-4 col-md-2 img">
			<div class="one">
				<a href="" data-featherlight="<?php the_sub_field('image'); ?>"><img src="<?php the_sub_field('image'); ?>"></a>
			</div>
			</li>	
		<?php endwhile; ?>
	</ul>
<?php endif; ?>
<div id="Contact"></div>
</div>
<section class="forms">
		<div class="container">
			<div class="row contact-me">
				<div class="col-md-6 contact-col">
					<h3>Send a message</h3>
					<div class="contact-form">
						<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
					</div>
				</div>
				<div class="col-md-6 contact-col">
					<div class="second">
						<div class="call">
							<h3>Call</h3>
							<p class="number">903-714-6862</p>
						</div>
						<div class="directions">
							<h3>Stop by</h3>
							<div class="google-maps">
								<div style="width: 100%"><iframe width="100%" height="400" src="http://www.maps.ie/create-google-map/map.php?width=100%&amp;height=400&amp;hl=en&amp;q=1401%20VZ%20County%20Road%201308%2C%20Canton%2C%20TX%2075103+(Don's%20Taxidermy)&amp;ie=UTF8&amp;t=&amp;z=9&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="http://www.mapsdirections.info/it/crea-una-mappa-con-google/">Personalizzare Google Maps</a> by <a href="http://www.mapsdirections.info/it/">Mappa con Google Maps</a></iframe></div><br />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<div class="contianer-fluid" style="background: #7e7d7b;">
		<div class="row">
			<div class="col-md-6">
				<div class="price-list">
					
						<div class="price-message">
							<p>Budgets and dream-mounts are different for everyone, so the best thing to do is give me a call; however, I've included a price list of the basics... so you have a rough idea of what you're looking at.</p>
							<button class="ghost" id="price">See Prices</button>
						</div>
						<div class="modal fade" id="priceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">              
						      <div class="modal-body">
						      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						        <p> <?php the_field('price_list') ?> </p>
						      </div>
						    </div>
						  </div>
						</div>

				</div>
			</div>
			<div class="col-md-6">
					<div class="testimonials container">
						<?php if( function_exists( "get_testimonial_slider_recent" ) ){ get_testimonial_slider_recent( $set="1") ;}?>
					</div>
			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?> 

