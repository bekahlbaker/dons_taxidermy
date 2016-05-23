<?php
/*
Template Name: Contact Template
*/
?>
<?php get_header(); ?>

<div id="contact">
	<div class="container-fluid">
		<div class="title">
			<?php the_field('contact_me_title'); ?>
		</div>
		<div class="container">
			<p class="message">
				<?php the_field('message') ?>	
			</p>
		</div>
		<div class="container">
			<div class="row contact-me">
				<div class="col-md-6 contact-col">
					<h4>send a message</h4>
					<div class="contact-form">
						<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
					</div>
				</div>
				<div class="col-md-6 contact-col">
					<div class="second">
						<div class="call">
							<h4>call</h4>
							<p><?php the_field('call') ?></p>
						</div>
						<div class="directions">
							<h4>stop by</h4>
							<div class="google-maps">
								<div style="width: 100%"><iframe width="100%" height="400" src="http://www.maps.ie/create-google-map/map.php?width=100%&amp;height=400&amp;hl=en&amp;q=1401%20VZ%20County%20Road%201308%2C%20Canton%2C%20TX%2075103+(Don's%20Taxidermy)&amp;ie=UTF8&amp;t=&amp;z=9&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="http://www.mapsdirections.info/it/crea-una-mappa-con-google/">Personalizzare Google Maps</a> by <a href="http://www.mapsdirections.info/it/">Mappa con Google Maps</a></iframe></div><br />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>