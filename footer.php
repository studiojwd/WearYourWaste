<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Footer Template
 *
 * Here we setup all logic and XHTML that is required for the footer section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
	global $woo_options;
	
	echo '<div class="footer-wrap">';

	$total = 4;
	if ( isset( $woo_options['woo_footer_sidebars'] ) && ( $woo_options['woo_footer_sidebars'] != '' ) ) {
		$total = $woo_options['woo_footer_sidebars'];
	}

	if ( ( woo_active_sidebar( 'footer-1' ) ||
		   woo_active_sidebar( 'footer-2' ) ) && $total > 0 ) {

?>
	<?php woo_footer_before(); ?>
	
		<section id="footer-widgets" class="col-full col-<?php echo $total; ?> fix">
		
		
		
		
	
			<?php $i = 0; while ( $i < $total ) { $i++; ?>
				<?php if ( woo_active_sidebar( 'footer-' . $i ) ) { ?>
	
			<div class="block footer-widget-<?php echo $i; ?>">
	        	<?php woo_sidebar( 'footer-' . $i ); ?>
			</div>
	
		        <?php } ?>
			<?php } // End WHILE Loop ?>
			
	
	<!-- Begin MailChimp Signup Form -->
	<div id="mc_embed_signup">
	<form action="//wearyourwaste.us9.list-manage.com/subscribe/post?u=b5a3c18fb922f9a9cee49cb0c&amp;id=b56ddc9f1d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	    <div id="mc_embed_signup_scroll">
	<div class="mc-field-group">
		<label for="mce-EMAIL">Sign up for WYW news</label>
		<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
	</div>
		<div id="mce-responses" class="clear">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	    <div style="position: absolute; left: -5000px;"><input type="text" name="b_b5a3c18fb922f9a9cee49cb0c_b56ddc9f1d" tabindex="-1" value=""></div>
	    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
	    </div>
	</form>
	</div>
	
	<!--End mc_embed_signup-->
			
	<div class="rightsocial">
	  <a href="https://www.facebook.com/WearYourWaste" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="" /></a>
	  <a href="https://www.instagram.com/wearyourwaste/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="" /></a>
	  <!-- <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="" /></a> -->
	  <!-- <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/google.png" alt="" /></a>	 -->
	</div>
		</section><!-- /#footer-widgets  -->
	<?php } // End IF Statement ?>
	
	
	
<!-- Footer -->
    <div class="container" id="footer">
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Wear Your Waste 2015 - <?php echo date('Y'); ?></p>
          </div>
        </div>
      </footer>
    </div>
    
    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>
<?php woo_foot(); ?>
</body>
</html>