<footer>
	<div class="container-fluid">
		<div class="contact">
			<div class="row">
				<div class="col-xs-1"></div>
				<div class="col-xs-2 home">
					<a href="<?php bloginfo('url'); ?>" data-toggle="tooltip"  data-placement="bottom" title="Home">
						<span class="glyphicon glyphicon-home"></span>
					</a>
				</div>
				<div class="col-xs-2 email">
					<a href="mailto:rbaker75169@gmail.com?&subject=Request%20for%20more%20info" class="hidden-md hidden-lg" data-toggle="tooltip"  data-placement="bottom" title="Email">
						<span class="glyphicon glyphicon-envelope"></span>
					</a>
					<a href="<?php bloginfo('url'); ?>/contact" class="hidden-sm hidden-xs" data-toggle="tooltip"  data-placement="bottom" title="Email">
						<span class="glyphicon glyphicon-envelope"></span>
					</a>
				</div>
				<div class="col-xs-2 call">
					<a href="tel:+1-903-714-3504" class="hidden-md hidden-lg" data-toggle="tooltip"  data-placement="bottom" title="Call">
						<span class="glyphicon glyphicon-phone-alt"></span>
					</a>
					<a href="<?php bloginfo('url'); ?>/contact" class="hidden-sm hidden-xs" data-toggle="tooltip"  data-placement="bottom" title="Call">
						<span class="glyphicon glyphicon-phone-alt"></span>
					</a>
				</div>
				<div class="col-xs-2 address">
					<a href="http://maps.apple.com/?address=1401+VZ+County+Road+1308+Canton, TX, United States" class="hidden-md hidden-lg" data-toggle="tooltip"  data-placement="bottom" title="Directions">
						<span class="glyphicon glyphicon-map-marker"></span>
					</a>
					<a href="<?php bloginfo('url'); ?>/contact" class="hidden-sm hidden-xs" data-toggle="tooltip"  data-placement="bottom" title="Directions">
						<span class="glyphicon glyphicon-map-marker"></span>
					</a>
				</div>
				<div class="col-xs-2 facebook">
					<a href="https://www.facebook.com/donstaxidermy" data-toggle="tooltip"  data-placement="bottom" title="Facebook">
						<i class="fa fa-facebook-square" aria-hidden="true"></i>
					</a>
				</div>
				<div class="col-xs-1"></div>
			</div>
		</div>
		<div class="copyright">
			<p>&copy; Copyright <?php echo date("Y"); ?></p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
