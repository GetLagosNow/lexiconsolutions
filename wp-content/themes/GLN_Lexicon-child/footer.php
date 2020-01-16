			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div id="footer">
					<!-- nav -->
					<nav class="footer-nav" role="navigation">
						<?php wp_nav_menu(); ?>
					</nav>
					<!-- /nav -->
					<div id="footer-socials">
						<a target="_blank" href="mailto:seve@getlagosnow.com">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Mail_Icon_White.png" alt="email" id="footer-email" class="footer-social-icon">
						</a>
						<a target="_blank" href="twitter.com">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Twitter_Icon_White.png" alt="twitter" id="footer-twitter" class="footer-social-icon">
						</a>
						<a target="_blank" href="linkedin.com">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/LinkedIn_Icon_White.png" alt="linkedin" id="footer-linkedin" class="footer-social-icon">
						</a>
					</div>

				</div>

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Site by', 'html5blank'); ?>
					<a target="_blank" href="https://getlagosnow.com" title="Get Lagos Now">Get Lagos Now</a>
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
