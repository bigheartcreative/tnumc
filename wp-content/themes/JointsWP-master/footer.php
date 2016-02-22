					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="small-9 medium-4 large-3 columns" id="contactInfo">
								<h5><?php _e( 'Contact Us', 'jointswp' ); ?></h5>
								<p><?php _e( '304 S. Perimeter Park Drive', 'jointswp' ); ?></p>
								<p><?php _e( 'Nashville, TN 37211', 'jointswp' ); ?></p>
								<p><?php _e( '615.329.1177', 'jointswp' ); ?></p>
								<p><a href="mailto:info@TNUMC.org" class="italic"><?php _e( 'info@TNUMC.org', 'jointswp' ); ?></a></p>
								<p><a class="top-pad" href="<?php bloginfo('url'); ?>/communications/news/job-listings/" ><?php _e( 'Job Listings', 'jointswp' ); ?></a></p>
								<p><a href="#"><?php _e( 'Hours &amp; Directions', 'jointswp' ); ?></a></p>
								<p><a href="#"><?php _e( 'Privacy Policy', 'jointswp' ); ?></a></p>
		    				</div>
		    				<div class="small-9 medium-4 large-4 large-offset-1 columns" id="eNewsletter">
		    					<h5><span>e-</span><?php _e( 'Newsletter Subscription', 'jointswp' ); ?></h5>
								<?php gravity_form(1, true, true, false, '', false); ?>

								<!-- <form action="">
									<input type="text" placeholder="First Name">
									<input type="text" placeholder="Last Name">
									<input type="text" placeholder="Email">
									<button type="submit">Submit</button>
								</form> -->
		    				</div>
		    				<div class="small-9 medium-4 large-3 large-offset-1 columns" id="connect">
								<h5><?php _e( 'Connect With Us', 'jointswp' ); ?></h5>
								<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/facebook.png" alt="Facebook"></a>
								<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/twitter.png" alt="Twitter"></a>
								<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/youtube.png" alt="YouTube"></a>
		    				</div>
							<div class="large-12 medium-12 columns">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->