<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Template Name: Raw HTML
 *
 * This template is a full-width version of the page.php template file. It removes the sidebar area.
 *
 * @package WooFramework
 * @subpackage Template
 */
  get_header();
  global $woo_options;
?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12" id="title">
        <hr/>
        <h1><?php the_field('pagetitle'); ?></h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <?php the_field('rawhtml'); ?>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <?php the_field('wysiwygetform'); ?>
    </div>
  </div>
       
    
<?php get_footer(); ?>