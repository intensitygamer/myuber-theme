<?php

// Create Invoice Listing Page 

function create_invoice_listing_page(){
 
	 
	$pages = get_pages();

	$invoice_dashboard = array(	'slug' => 'invoice-dashboard',	'title' =>'Invoice Dashboard'	);

	foreach ($pages as $page) {
			
			$apage = $page->post_name; 
			
			 switch ( $apage ){ 

				case 'invoice-dashboard' :   				
					$invoice_dashboard_found = true;
					$page_id = $page->id;		
					break;			
				default:					$no_page;			
			}		
		}
	
	//$invoice_dashboard_found = 1;

	if(!$invoice_dashboard_found){

			$page_id = wp_insert_post(array(
				'post_title' => $invoice_dashboard['title'],
				'post_type' =>'page',		
				'post_name' => $invoice_dashboard['slug'],
				'post_status' => 'publish',
		        'comment_status' => 'close',
	    	    'ping_status'    => 'close',
	        	'post_author'    => 1,
			));
       		
       		if( !$page_id )
            	wp_die('Error creating template page');

 
	} 
		update_post_meta( $page_id, '_wp_page_template', '../pages/invoice_dashboard.php' );

}

add_action('admin_init', 'create_invoice_listing_page');

add_filter( 'page_template', 'catch_plugin_template' );

function catch_plugin_template( $template ) {
    
    if( is_page('invoice-dashboard') ){
		
		
		ob_start();

        $template = dirname( __FILE__ ) . '\..\invoice_dashboard.php';
	
		ob_end_clean(); // closing and cleaning buffer

   	}
    
    return $template;
}