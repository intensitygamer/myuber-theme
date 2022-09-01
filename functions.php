<?php


include 'includes/register_cpt.php';

include 'includes/register_page.php';


//* Enqueue Styles and Scripts
 
function my_ubereat_enqueue_style() {
	
 		$plugin_url = plugin_dir_url( __FILE__ );

		wp_register_style( 'bootstrap-style',  $plugin_url . "/assets/bootstrap/dist/css/bootstrap.min.css", false, '1.0' );

 	    wp_enqueue_style( 'bootstrap-style');

	    // echo 'sabre';
     	// wp_enqueue_style( 'bootstrap-scripts',  $plugin_url . "/assets/bootstrap/dist/js/bootstrap.bundle.min.js");
	
}

add_action( 'wp_enqueue_scripts', 'my_ubereat_enqueue_style' );

// add_action('wp_enqueue_scripts', 'tutsplus_enqueue_custom_js');

// function tutsplus_enqueue_custom_js() {
//     wp_enqueue_script('custom', get_stylesheet_directory_uri().'/scripts/custom.js');
// }
// add_action( 'admin_print_styles', 'my_ubereat_enqueue_scripts' );


function invoicelisting_flush_rewrites() {

	//activate_invoicelisting();
	flush_rewrite_rules();

}

register_activation_hook( __FILE__, 'invoicelisting_flush_rewrites' );

register_uninstall_hook( __FILE__, 'invoice_listing_uninstall' );

function invoice_listing_uninstall() {
          // Uninstallation stuff here
             unregister_post_type( 'customposttype' );
}

function invoice_listing_styles() {

   // wp_enqueue_style( 'movies',  plugin_dir_url( __FILE__ ) . ‘/css/movies.css’ );                      
}

add_action( 'wp_enqueue_scripts', 'invoice_listing_styles');

