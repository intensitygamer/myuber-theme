<?php

//* Create Post Types for Invoice

/* 
	Invoice Listing should have:
	ID, 
	Restaurant ID,
	Status,
	Start Date,
	End Date,
	Total,
	Fees
	Transfer,
	Orders

*/
function invoice_listing_register_post_type() {

    // create invoice CPT

    $labels = array( 

        'name' => __( 'Invoices'  ),

        'singular_name' => __( 'Invoice'  ),

        'add_new' => __( 'New Invoice'  ),

        'add_new_item' => __( 'Add New Invoice'  ),

        'edit_item' => __( 'Edit Invoice'  ),

        'new_item' => __( 'New Invoice'  ),

        'view_item' => __( 'View Invoice'  ),

        'search_items' => __( 'Search Invoice'  ),

        'not_found' =>  __( 'No Invoice Found'  ),

        'not_found_in_trash' => __( 'No Invoice found in Trash'  ),

    );

    $args = array(

        'labels' => $labels,

        'has_archive' => true,

        'public' => true,

        'hierarchical' => false,

        'supports' => array(

            'title', 

            'editor', 

            'excerpt', 

            'custom-fields', 

            'thumbnail',

            'page-attributes'

        ),

        'rewrite'   => array( 'slug' => 'invoice_listings' ),

        'show_in_rest' => true

    );

    register_post_type( 'invoice_listing', $args );

 /**
* @var  array  $customFields  Defines the custom fields available
*/

	// var $customFields = array(
	//     array(
	//         "name"          => "block-of-text",
	//         "title"         => "A block of text",
	//         "description"   => "",
	//         "type"          => "textarea",
	//         "scope"         =>   array( "page" ),
	//         "capability"    => "edit_pages"
	//     ),
	//     array(
	//         "name"          => "short-text",
	//         "title"         => "A short bit of text",
	//         "description"   => "",
	//         "type"          =>   "text",
	//         "scope"         =>   array( "post" ),
	//         "capability"    => "edit_posts"
	//     ),
	//     array(
	//         "name"          => "checkbox",
	//         "title"         => "Checkbox",
	//         "description"   => "",
	//         "type"          => "checkbox",
	//         "scope"         =>   array( "post", "page" ),
	//         "capability"    => "manage_options"
	//     )
	// );
	  
}

add_action( 'init', 'invoice_listing_register_post_type' );

/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_restaurant_custom_taxonomies() {


  // Add new "Locations" taxonomy to Posts
  register_taxonomy('status', 'invoice_listing', array(

    // Hierarchical taxonomy (like categories)

    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI

    'labels' => array(
      'name' => _x( 'Status', 'taxonomy general name' ),
      'singular_name' => _x( 'Status', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Status' ),
      'all_items' => __( 'All Status' ),
      'parent_item' => __( 'Parent Location' ),
      'parent_item_colon' => __( 'Parent Location:' ),
      'edit_item' => __( 'Edit Status' ),
      'update_item' => __( 'Update Status' ),
      'add_new_item' => __( 'Add New Status' ),
      'new_item_name' => __( 'New Status' ),
      'menu_name' => __( 'Status' ),
    ),

    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'status', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
 
	));

	wp_insert_term( 'All', 'status', array(
		'description' => '',
		'parent'      => 0,
		'slug'        => 'all',
	) );

	wp_insert_term( 'Ongoing', 'status', array(
		'description' => '',
		'parent'      => 0,
		'slug'        => 'ongoing',
	) );
 
	wp_insert_term( 'Verified', 'status', array(
		'description' => '',
		'parent'      => 0,
		'slug'        => 'verified',
	) );

	wp_insert_term( 'Pending', 'status', array(
		'description' => '',
		'parent'      => 0,
		'slug'        => 'pending',
	) ); 

 

}

add_action( 'init', 'add_restaurant_custom_taxonomies' );

//* Create Post Types for Register

function restaurant_register_post_type() {


	// create Restaurant CPT

    $labels = array( 

        'name' => __( 'Restaurants'  ),

        'singular_name' => __( 'Restaurant'  ),

        'add_new' => __( 'New Restaurant'  ),

        'add_new_item' => __( 'Add New Restaurant'  ),

        'edit_item' => __( 'Edit Restaurant'  ),

        'new_item' => __( 'New Restaurant'  ),

        'view_item' => __( 'View Restaurant'  ),

        'search_items' => __( 'Search Restaurant'  ),

        'not_found' =>  __( 'No Restaurant Found'  ),

        'not_found_in_trash' => __( 'No Restaurant found in Trash'  ),

    );

    $args = array(

        'labels' => $labels,

        'has_archive' => true,

        'public' => true,

        'hierarchical' => false,

        'supports' => array(

            'title', 

            'editor', 

            'excerpt', 

            'custom-fields', 

            'thumbnail',

            'page-attributes'

        ),

        'rewrite'   => array( 'slug' => 'restaurants' ),

        'show_in_rest' => true

    );

    register_post_type( 'restaurant_listing', $args );

}


add_action( 'init', 'restaurant_register_post_type' );
