<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Template Name: Homepage ES
 *
 * This template is a full-width version of the page.php template file. It removes the sidebar area.
 *
 * @package WooFramework
 * @subpackage Template
 */
	get_header();
	global $woo_options;
?>





       
    <!-- Full Page Image Background Carousel Header -->
        <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
    
            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
            <?php while(the_flexible_field("homepage-background")): ?>
              <?php if(get_row_layout() == "section"): // layout: Content ?>
                <div class="item <?php the_sub_field('active'); ?>">
                  <div class="fill" style="background-image:url('<?php the_sub_field('image'); ?>');"></div>
                  <div class="carousel-caption">
                    <h2><?php the_sub_field('title'); ?></h2>
                    <p><?php the_sub_field('copy'); ?></p>
                  </div>
                </div>
              <?php elseif(get_row_layout() == "file"): // layout: File ?>
                <div>
                  <a href="<?php the_sub_field("file"); ?>" ><?php the_sub_field("name"); ?></a>
                </div>
              <?php endif; ?>
            <?php endwhile; ?>
            </div>
    
            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <img class="left-arrow" src="<?php echo get_template_directory_uri(); ?>/img/arrow-left.png" />
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.png" />
            </a>
            <div style="width:80px;" class="down-arrow scroll-to-stream"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.png" /></div>
            <script>
              // Scroll to panel 01
              $(".scroll-to-stream").click(function() {
                $('html, body').animate({
                  scrollTop: $(".start-of-stream").offset().top
                }, 1000);
              });
            </script>
    
        </header>
        <!-- Shop Content -->
        <div class="container start-of-stream">
          <div class="row">
            <div class="col-lg-12" id="title">
              <hr/>
              <h1><?php the_field('shop title'); ?></h1>
            </div>
          </div>
          <div class="row" id="shoparea">
           <?php the_field('featured_products'); ?>
          </div>
        </div>

        
        <!-- Page Content -->
        <div class="container">
          <div class="row">
            <div class="col-lg-12" id="title">
              <hr/>
              <h1><?php the_field('stream title'); ?></h1>
            </div>
          </div>
          <div class="row" id="stream">
            <ul class="streamgrid">            						
              <?php
                global $post;
                $myposts = get_posts('numberposts=50&category=1');
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

        
        
        <!-- Script to Activate the Carousel -->
        <script>
        $('.carousel').carousel({
            interval: 15000 //changes the speed
        })
        </script>
        
        <!-- Stream structure -->
        <script>
          $(document).ready(function() {
            $("#stream").shapeshift();
          })
        </script>
        <!-- jQuery.Shapeshift -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.shapeshift.js"></script>
        
        
		
<?php get_footer(); ?>