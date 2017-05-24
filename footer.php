
	<div class="row" id="footer" style="padding-bottom:10px;">

	<footer>

	<div class="hidden-xs hidden-sm col-md-6" id="footer_left">
		<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fhtlab.net%2F" target="_blank">
		<img src="<?php bloginfo('template_url'); ?>/images/html5-logo.png" width="88" height="31" alt="HTML5" />
		</a>

		<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhtlab.net%2F" target="_blank">
		<img src="<?php bloginfo('template_url'); ?>/images/vcss.gif" width="88" height="31" alt="CSS3" />
		</a>

		<a href="https://creativecommons.org/licenses/by-nc/4.0/deed.ja" target="_blank"> 
		<img src="<?php bloginfo('template_url'); ?>/images/cc-by-nc-4.0.png" width="88" height="31" alt="Creative Commons License" />
		</a>

		<a href="https://sites.google.com/site/happybusy/" target="_blank">
		<img src="<?php bloginfo('template_url'); ?>/images/busy8831.gif" width="88" height="31" alt="Busy" />
		</a>

	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-6" id="footer_right" style="text-align:right;">
		<p>Copyright (C) 2005 - <?php echo date('Y'); ?> <a href="http://htlab.net/profile/">Hideto Kikuchi</a><span class="print"> All Rights Reserved</span>.<br />
		<span class="hidden-xs">Created this page in <?php timer_stop(1); ?> seconds. Powered by WordPress.</span></p>
	</div>

	</footer>

	</div>

</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>


