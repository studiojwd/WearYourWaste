<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Template Name: Stockists
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
 
 <div class="container" id="stockists">
   <div class="row">
     <?php while(the_flexible_field("stockists")): ?>
       <?php if(get_row_layout() == "shop"): // layout: Content ?>
         <div class="col-xs-3">
             <img src="<?php the_sub_field('shoplogo'); ?>" alt="<?php the_sub_field('shopname'); ?>" />
             <h3><?php the_sub_field('shopname'); ?></h3>
             <div class="info"><?php the_sub_field('shopaddress'); ?></div>
         </div>
       <?php elseif(get_row_layout() == "file"): // layout: File ?>
         <div>
           <a href="<?php the_sub_field("file"); ?>" ><?php the_sub_field("name"); ?></a>
         </div>
       <?php endif; ?>
     <?php endwhile; ?>
     
   </div>
 </div>
		
<?php get_footer(); ?>