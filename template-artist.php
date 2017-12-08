<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Template Name: Artist
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
 
 <div class="container" id="artistspage">
   <div class="row">
     <div class="col-xs-4">
       <img src="<?php the_field('artistimage'); ?>" alt="<?php the_field('artistname'); ?>" />
     </div>
     <div class="col-xs-8">
       <?php the_field('artistbio'); ?>
     </div>
   </div>
 </div>
 <div class="container" id="artistspage">
   <div class="row">
     <div class="col-lg-12" id="title">
       <hr/>
       <h3><?php the_field('artistname'); ?> Products</h3>
     </div>
     <?php the_field('skucode'); ?>
     
   </div>
 </div>
		
<?php get_footer(); ?>
