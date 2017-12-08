<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Template Name: Journal
 *
 *
 * @package WooFramework
 * @subpackage Template
 */
	get_header();
	global $woo_options;
?>
       
        <!-- Page Content -->
        <div class="container">
          <div class="row">
            <div class="col-lg-12" id="title">
              <hr/>
              <h1><?php the_field('title'); ?></h1>
            </div>
          </div>
          <div class="row" id="stream">
            <ul class="streamgrid">            						
              <?php
                global $post;
                $myposts = get_posts('numberposts=1000');
                foreach($myposts as $post) :
              ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('thumbnail'); /* Thumbnail */ ?>
                  <h4><?php the_title(); ?></h4>
                </a>
              </li>
              
              <?php endforeach; ?>
            </ul>
            
            
          </div>
        </div>
        
        
		
<?php get_footer(); ?>