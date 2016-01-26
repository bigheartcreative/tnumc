					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="small-9 medium-4 columns" id="contactInfo">
								<h5>Contact Us</h5>
								<p>304 S. Perimeter Park Drive</p>
								<p>Nashville, TN 37211</p>
								<p>615.329.1177</p>
								<p><a href="#">info@TNUMC.org</a></p>
								<p><a href="#">Hours &amp; Directions</a></p>
								<p><a href="#">Privacy Policy</a></p>
		    				</div>
		    				<!-- replace with Forms widget -->
		    				<div class="small-9 medium-4 columns" id="eNewsletter">
		    					<h5><span>e</span>Newsletter Subscription</h5>
								<?php gravity_form(1, true, true, false, '', false); ?>

								<!-- <form action="">
									<input type="text" placeholder="First Name">
									<input type="text" placeholder="Last Name">
									<input type="text" placeholder="Email">
									<button type="submit">Submit</button>
								</form> -->
		    				</div>
		    				<div class="small-9 medium-4 columns">
								<h5>Connect With Us</h5>
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