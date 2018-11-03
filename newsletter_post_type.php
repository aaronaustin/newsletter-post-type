<?php
/*Plugin Name: Create Newsletter Post Type
Description: This plugin registers the newsletter post type.
Version: 1.0.6
License: GPLv2
GitHub Plugin URI: https://github.com/aaronaustin/newsletter-post-type
*/

// register custom post type to work with
function create_newsletter_post_type() {
	// set up labels
	$labels = array(
 		'name' => 'Newsletter',
    	'singular_name' => 'Newsletter',
    	'add_new' => 'New Newsletter',
    	'add_new_item' => 'New Newsletter',
    	'edit_item' => 'Edit Newsletter',
    	'new_item' => 'New Newsletter',
    	'all_items' => 'All Newsletters',
    	'view_item' => 'View Newsletter',
    	'search_items' => 'Search Newsletter',
    	'not_found' =>  'No Newsletter Found',
    	'not_found_in_trash' => 'No Newsletter found in Trash',
    	'parent_item_colon' => '',
    	'menu_name' => 'Newsletter'
    );
    //register post type
	register_post_type( 'newsletter', array(
		'labels' => $labels,
        'show_in_rest' => false,
		'has_archive' => true,
 		'public' => true,
		'taxonomies' => '',
		'exclude_from_search' => true,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'newsletter'),
		'rest_base' => '',
        'rest_controller_class' => '',
        'menu_icon' => 'dashicons-email',
        'supports' => array( 'title', 'editor', 'thumbnail','newsletter_start_datetime' )
		)
	);
}
add_action( 'init', 'create_newsletter_post_type' );

// Add the custom columns to the newsletter post type:
add_filter( 'manage_newsletter_posts_columns', 'set_custom_edit_newsletter_columns' );
function set_custom_edit_newsletter_columns($columns) {
    unset( $columns['author'] );
    unset( $columns['categories'] );
    unset( $columns['comments'] );
    unset( $columns['tags'] );
    // unset( $columns['date'] );
    // $columns['newsletter_start_datetime'] = __( 'Start Date', 'newsletter_start_datetime' );
    // $columns['end_date'] = __( 'End', 'your_text_domain' );

    return $columns;
}

// Add the data to the custom columns for the newsletter post type:
add_action( 'manage_newsletter_posts_custom_column' , 'custom_newsletter_column', 10, 2 );
function custom_newsletter_column( $column, $post_id ) {
    switch ( $column ) {

        case 'newsletter_start_datetime' :
            echo date("Y-m-d g:i a", strtotime(get_post_meta( $post_id , 'newsletter_start_datetime' , true )));
            break;

        case 'end_date' :
            echo date("Y-m-d g:i a", get_post_meta( $post_id , 'end_date' , true ));
            break;

    }
}

add_filter( 'manage_edit-newsletter_sortable_columns', 'set_custom_newsletter_sortable_columns' );
function set_custom_newsletter_sortable_columns( $columns ) {
    $columns['newsletter_start_datetime'] = 'newsletter_start_datetime';
    $columns['end_date'] = 'end_date';
    return $columns;
}

add_action( 'pre_get_posts', 'newsletter_custom_orderby' );
function newsletter_custom_orderby( $query ) {
  if ( ! is_admin() )
    return;
  $orderby = $query->get( 'orderby');
  if ( 'newsletter_start_datetime' == $orderby ) {
    $query->set( 'meta_key', 'newsletter_start_datetime');
    $query->set( 'orderby', 'meta_value' );
  }
}

//add styles and scripts
function newsletter_post_type_assets() {
    wp_register_style('newsletter_post_type_style', plugins_url('style.css',__FILE__ ));
    wp_enqueue_style('newsletter_post_type_style');
    wp_register_script( 'newsletter_post_type_script', plugins_url('script.js',__FILE__ ));
    wp_enqueue_script('newsletter_post_type_script');
    wp_enqueue_media();
    wp_localize_script( 'newsletter_post_type_script', 'linkToNewsletter', array( 'myPermalink' => get_permalink($_GET['post']), ) );
    wp_localize_script( 'newsletter_post_type_script', 'newsletterSubject', array( 'subject' => get_field('subject',$_GET['post']), ) );
    wp_localize_script( 'newsletter_post_type_script', 'newsletterTitle', array( 'title' => get_the_title($_GET['post']), ) );
    wp_localize_script( 'acf_relationship_mods_script', 'newsletterDate', array( 'date' => date('m/d/Y', strtotime(get_field('send_date',$_GET['post']))), ) );

}

add_action( 'admin_init','newsletter_post_type_assets');


//Custom Template for the Newsletter
add_filter('single_template', 'newsletter_template');
function newsletter_template($template) {
    global $post;
    if ($post->post_type == "newsletter" && $template !== locate_template(array("newsletter_template.php"))){
        return plugin_dir_path( __FILE__ ) . "newsletter_template.php";
    }
    return $template;
}
//Custom Template for the Newsletter
add_filter('single_template', 'latest_events_template');
function latest_events_template($template) {
    global $post;
    if ($post->post_type == "newsletter" && $template !== locate_template(array("newsletter_template.php"))){
        return plugin_dir_path( __FILE__ ) . "newsletter_template.php";
    }
    return $template;
}

include 'newsletter_options.php';
include 'newsletter_send_meta_box.php';
include 'newsletter_mailchimp_send.php';

?>
