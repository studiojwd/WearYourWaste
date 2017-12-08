<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Template Name: About
 *
 * This template is a full-width version of the page.php template file. It removes the sidebar area.
 *
 * @package WooFramework
 * @subpackage Template
 */
	get_header();
	global $woo_options;
?>
       <div class="clear"></div>
        <!-- Page Content -->
        <div class="container">
          <div class="row">
            <div class="col-lg-12" id="title">
              <hr/>
              <h1><?php the_field('title'); ?></h1>
            </div>
          </div>
        </div>
        
        <div class="container">
          <div class="row">
            <div class="col-lg-12" id="heroimage">
              <img src="<?php the_field('image'); ?>" alt="<?php the_field('title'); ?>" />
            </div>
          </div>
        </div>
        
        <div class="container">
          <div class="row">
            <div class="col-xs-6">
              <?php the_field('leftcontent'); ?>
            </div>
            <div class="col-xs-6">
              <?php the_field('rightcontent'); ?>
            </div>
          </div>
        </div>
        
        
		
<?php get_footer(); ?>