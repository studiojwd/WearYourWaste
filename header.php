<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
global $woo_options, $woocommerce;
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php if ( $woo_options['woo_boxed_layout'] == 'true' ) echo 'boxed'; ?> <?php if (!class_exists('woocommerce')) echo 'woocommerce-deactivated'; ?>">
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php woo_title(''); ?></title>
<?php woo_meta(); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	wp_head();
	woo_head();
?>



<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" />  -->


<!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/full-slider.css" rel="stylesheet">
    
    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">

</head>

<body <?php body_class(); ?>>




<!-- Navigation -->
<div class="container">
  <div class="row">
    <div class="col-lg-12">
    
    
      <!-- Mobile Nav -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>    
      <script type="text/javascript">
       
      $(document).ready(function(){
       
              $(".mobilenav").hide();
              $(".mobile-toggle").show();
       
          $('.mobile-toggle').click(function(){
          $(".mobilenav").slideToggle();
          });
       
      });
       
      </script>
      <div class="mobile-navigation">
        
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/wear-your-waste-logo.svg" alt="Wear Your Waste" class="logo" /></a>
        <a href="#" class="mobile-toggle"><img src="<?php echo get_template_directory_uri(); ?>/img/mobilenav.png"/></a>
        <div class="mobilenav">
        
          <?php
          	  if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'primary-menu' ) ) {
          	  	wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => '', 'menu_class' => 'nav fr', 'theme_location' => 'primary-menu' ) );
          } ?>
          
          <?php
            if ( class_exists( 'woocommerce' ) ) {
              echo '<ul class="top wc-nav">';
              echo get_search_form();
              woocommerce_cart_link();
              echo '<li class="checkout"><a href="'.esc_url($woocommerce->cart->get_checkout_url()).'">'.__('Checkout','woothemes').'</a></li>';
              echo '<li><a href="/stockists">Find your stockists</a></li>';
              echo '</ul>';
            }
          ?>	
          
          <div class="userlogin">   
            <ul>       
              <?php if ( is_user_logged_in() ) { ?>
                <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>"><?php _e('My Account','woothemes'); ?></a></li>
                <li><a href="<?php echo wp_logout_url( home_url() ); ?>" title="Logout">Logout</a></li>
              <?php }
              else { ?>
                <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>"><?php _e('Login / Register','woothemes'); ?></a></li>
              <?php } ?> 
            </ul>
          </div>	
        
        </div>
      </div>  
      <!-- Mobile Nav END -->
      
          
    
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navigation">
        <div id="topbarnav">
          <div id="top">
            <?php
              if ( class_exists( 'woocommerce' ) && ICL_LANGUAGE_CODE=='en' ) {
                echo '<ul class="top wc-nav">';
                echo get_search_form();
                woocommerce_cart_link();
                echo '<li class="checkout"><a href="'.esc_url($woocommerce->cart->get_checkout_url()).'">'.__('Checkout','woothemes').'</a></li>';
                echo '<li><a href="/stockists">Find your stockists</a></li>';
                echo '</ul>';
              }
            ?>
            
            <?php
              if ( class_exists( 'woocommerce' ) && ICL_LANGUAGE_CODE=='es' ) {
                echo '<ul class="top wc-nav">';
                echo get_search_form();
                woocommerce_cart_link();
                echo '<li class="checkout"><a href="'.esc_url($woocommerce->cart->get_checkout_url()).'">'.__('Checkout','woothemes').'</a></li>';
                echo '<li><a href="/es/encuentra-tu-punto-de-venta">Encuentra tu punto de venta</a></li>';
                echo '</ul>';
              }
            ?>
            
            
            
          </div>
          <div class="userlogin">   
            <ul>       

              <?php if( is_user_logged_in() && ICL_LANGUAGE_CODE=='en' ) : ?>
                <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>"><?php _e('My Account','woothemes'); ?></a></li>
                <li><a href="<?php echo wp_logout_url( home_url() ); ?>" title="Logout">Logout</a></li>
              <?php elseif(ICL_LANGUAGE_CODE=='en') : ?>
                <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>"><?php _e('Login / Register','woothemes'); ?></a></li>
              <?php endif; ?>
              
              
              <?php if( is_user_logged_in() && ICL_LANGUAGE_CODE=='es' ) : ?>
                <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Mi cuenta','woothemes'); ?>"><?php _e('Mi cuenta','woothemes'); ?></a></li>
                <li><a href="<?php echo wp_logout_url( home_url() ); ?>" title="Logout">Logout</a></li>
              <?php elseif(ICL_LANGUAGE_CODE=='es') : ?>
                <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Registrarse','woothemes'); ?>"><?php _e('Login / Registrarse','woothemes'); ?></a></li>
              <?php endif; ?>
            
            </ul>
            <?php do_action('icl_language_selector'); ?>
          </div>
        </div>    
          
        <div class="headerarea">
          <a href="/" class="logoarea"><img src="<?php echo get_template_directory_uri(); ?>/img/wear-your-waste-logo.svg" alt="Wear Your Waste" class="logo" /></a>
          <?php
          	  if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'primary-menu' ) ) {
          	  	wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => '', 'menu_class' => 'nav fr', 'theme_location' => 'primary-menu' ) );
          } ?>
          
        </div>
        	
      </nav>
    </div>
    
  </div>
</div>
<!-- /.container -->


