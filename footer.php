	<footer class="clear">
		<div class="fotter-grid-wrap max-width group">
			<div class="footer-col">
				<h3>Navigation</h3>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-navigation' ) ); ?>
			</div>
			<div class="footer-col">
				<h3>Distilleries</h3>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-distilleries' ) ); ?>
			</div>
			<div class="footer-col">
				<h3>Get Social</h3>
				<div class="social-wrap">
					<a href="https://www.facebook.com/Wee-Whisky-Connection-1527851197324742">
						<img alt="Wee Whisky Connection Facebook Icon" class="social-icon" src="<?php echo get_template_directory_uri(); ?>/images/social/facebook.png" />
					</a>
					<a href="#">
						<img alt="Wee Whisky Connection Instagram Icon" class="social-icon" src="<?php echo get_template_directory_uri(); ?>/images/social/instagram.png" />
					</a>
					<a href="#">
						<img alt="Wee Whisky Connection Youtube Icon" class="social-icon" src="<?php echo get_template_directory_uri(); ?>/images/social/youtube.png" />
					</a>
				</div>
				<h3>Keep in Touch</h3>
				<br />
				<!-- Begin MailChimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
				<style type="text/css">
					/*#mc_embed_signup{clear:left; font:14px;}
					#mc_embed_signup form {padding: 0;}
					#mc_embed_signup.button {background: orange; border-radius: 5px;}
					#mce-EMAIL{width: 68%; max-width: 300px; padding: 10px; font-size: 20px;}
					#mc-embedded-subscribe {background: orange; padding: 10px; font-size: 20px; margin-top: 10px; border: none; color: #fff; border-radius: 5px;}*/
				</style>
				<div id="mc_embed_signup">
					<form action="https://weewhiskyconnection.us18.list-manage.com/subscribe/post?u=cd5fa6ad6adc9f0262552dcc5&amp;id=9559578d74" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">
						
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cd5fa6ad6adc9f0262552dcc5_9559578d74" tabindex="-1" value=""></div>
					    <div class="clear"><input type="submit" value="Join Us" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					    </div>
					</form>
				</div>
				<!--End mc_embed_signup-->
			</div>
		</div>
		<div class="footer-menu center">
			<?php wp_nav_menu( array( 'theme_location' => 'bottom-footer-navigation' ) ); ?>
		</div>
		<p class="copyright clear center">The Whisky Connection &copy;2018</p>
	</footer>

	<div id="bottom-footer-sponsor-desktop" class="desktop" style="max-width: 500px; width: 100%; margin: 30px auto 110px auto; text-align: center;"></div>
	<div id="bottom-footer-sponsor-mobile" class="mobile" style="max-width: 320px; width: 100%; margin: 30px auto 90px auto; text-align: center;"></div>

</div>

<!-- Mailing list overlay -->	
<div class="mailing-list-overlay-wrap">
	<div class="mailing-list-overlay"></div>
	<div class="mailing-list-modal" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999999; max-width: 500px; width: 100%;">
		<div class="mailing-list-header">
			<img style="width: 200px;" src="https://thewhiskyconnection.com/wp-content/themes/wee-whisky-theme/images/wwc-logo.png" />
		</div>
		<div class="mailing-list-body">
			<div id="mc_embed_signup">
				<form style="text-align: center; margin-bottom: 15px;" action="https://weewhiskyconnection.us18.list-manage.com/subscribe/post?u=cd5fa6ad6adc9f0262552dcc5&amp;id=9559578d74" method="post" id="mc-embedded-subscribe-form-overlay" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
						<p>Join the whisky club. Get emails about whisky!</p>
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" style="text-align: center; padding: 5px; margin: 0 auto 15px auto;" placeholder="email address" required>
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cd5fa6ad6adc9f0262552dcc5_9559578d74" tabindex="-1" value=""></div>
					    <div class="clear"><input type="submit" style="margin: 0 auto;" value="Join" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				    </div>
				</form>
			</div>
		</div>
	</div>
</div>
	<script>
		(function() {
		  if (navigator.userAgent.match(/IEMobile\/9\.0/)) {
		    var msViewportStyle = document.createElement("style");
		    msViewportStyle.appendChild(
		      document.createTextNode("@-ms-viewport{width:auto!important}")
		    );
		    document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
		  }
		})();
	</script>

	<?php get_template_part('mobile', 'menu');

	get_template_part('age-verification', 'menu') ?>

	<!-- <script type="text/javascript"> var infolinks_pid = 3217724; var infolinks_wsid = 0; </script> <script type="text/javascript" src="//resources.infolinks.com/js/infolinks_main.js"></script> -->

	<?php wp_footer(); ?>

	<!-- <script type="text/javascript">
		var infolinks_pid = 3217724;
		var infolinks_wsid = 0;
	</script>
	<script type="text/javascript" src="//resources.infolinks.com/js/infolinks_main.js"></script> -->
	
	</body>
	
</html>