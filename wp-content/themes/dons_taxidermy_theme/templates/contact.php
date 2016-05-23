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
			<div class="row contact">
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
							<p>903-714-3504</p>
						</div>
						<div class="directions">
							<h4>stop by</h4>
							<div class="google-maps">
								<a href="http://maps.apple.com/?address=1401+VZ+County+Road+1308+Canton, TX, United States"><p>Google Maps</p></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>