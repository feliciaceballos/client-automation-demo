<?php

/*
Plugin Name: Automation for Clients
Plugin URI: http://feliciaceballos.com/wordpress-automation-guide/demo/
Description: Copyright site owner and link to site administator and designer
Author: Felicia Ceballos-Marroquin
Version: 1.0
Author URI: http://feliciaceballos.com
Plugin Type: Piklist
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_action('init', 'my_init_function');
function my_init_function()
{
  if(is_admin())
  {
   include_once('path-to-file/class-piklist-checker.php');
 
   if (!piklist_checker::check(__FILE__))
   {
     return;
   }
  }
}


// Piklist Create Client Custom Post Type

add_filter('piklist_post_types', 'automaton_post_types');
function automaton_post_types($post_types)
{	
  $post_types = array_merge($post_types, array(
    'client' => array(
      'labels' => piklist('post_type_labels', 'Clients')
      ,'title' => __('Enter a new Client Title')
	  ,'menu_icon' => 'dashicons-id-alt'
   	  ,'page_icon' => 'dashicons-id-alt'
	  ,'exclude_from_search' => true
	 // ,'publicly_queryable' => false
      ,'supports' => array(
        'title'
        ,'revisions'
      )
	  ,'status' => array(
  	'draft' => array(
	'label' => 'New Client'
  	)
  	,'current' => array(
    	'label' => 'Current Client'
  	)
  	,'archive' => array(
    	'label' => 'Archived Client'
  	)
     )
      ,'public' => true
      ,'has_archive' => true
	  ,'edit_columns' => array(
        'title' => __('Client Name')
		,'automaton_client_email' => __('Email')
        ,'author' => __('Assigned to')
      )
      ,'rewrite' => array(
        'slug' => 'clients'
      )
    )
  ));
 
  return $post_types;
}

add_filter('piklist_taxonomies', 'client_taxonomy');
 function client_taxonomy($taxonomies)
 {
   $taxonomies[] = array(
      'post_type' => 'client'
      ,'name' => 'template'
      ,'show_admin_column' => true
      ,'configuration' => array(
        'hierarchical' => true
        ,'labels' => piklist('taxonomy_labels', 'Template')
        ,'hide_meta_box' => true
        ,'show_ui' => true
        ,'query_var' => true
        ,'rewrite' => array( 
          'slug' => 'template' 
        )
      )
    );
return $taxonomies;
}



/**
 * Reference Custom Single Post Templates
 *
 */

// Define a constant path to plugin folder
define(SINGLE_PATH, plugin_dir_path( __FILE__ ). '/templates');

// Filter the single_template with our custom function
add_filter('single_template', 'my_single_template');


function my_single_template($single) {
	global $wp_query, $post;
	$user_role = get_user_role();
	$welcome_letter = has_term( 'letter', 'template');
	$mail_merge = has_term( 'mail', 'template');
	$data_export = has_term( 'export', 'template');
	$branding = has_term( 'branding', 'template');
	$post_status = get_post_status () == 'future';
	
	if ($post->post_type == 'client' && $welcome_letter == 'TRUE' ) :
	return SINGLE_PATH . '/welcome-letter.php';

	elseif ($post->post_type == 'client' && $user_role == 'contributor' ) :
	return SINGLE_PATH . '/branding-sheet.php';
	
	elseif ($post->post_type == 'client' && $user_role == 'administrator' && $branding == 'TRUE' ) :
	return SINGLE_PATH . '/branding-sheet.php';
	
	elseif ($post->post_type == 'client' && $user_role == 'administrator' && $data_export == 'TRUE' ) :
	return SINGLE_PATH . '/data-export.php';
	
	elseif ($post->post_type == 'client' && $mail_merge == 'TRUE' ) :
	return SINGLE_PATH . '/mail-merge.php';

	else :
	return SINGLE_PATH . '/printable-sheet.php';
	 
	endif;
	return $single;
	
}


// Get user role
function get_user_role() {
    global $current_user;

    $user_roles = $current_user->roles;
    $user_role = array_shift($user_roles);

    return $user_role;
}



/**
 * Get Post Meta Shorthand
 * Carryover from TwentyTen CRM. You could also use genesis_get_custom_field().
 *
 * @author Bill Erickson
 * @link http://www.billerickson.net/twentyten-crm/
 */

function get_custom_field($field) {
	global $post;
	$value = get_post_meta($post->ID, $field, true);
	if ($value) return esc_attr( $value );
	else return false;
}


	
/**
 * Add taxonomies to post column
 *
 * @author Andrew Norcross
 * @link http://www.billerickson.net/twentyten-crm/
 */
 
function populate_custom_fields_in_post_list_view ($column_name, $id ) {
	global $post;

	//global $current_user;
	switch ($column_name) {
		
		case 'status':
			$category = get_the_category(); 
			echo $category[0]->cat_name;
	    	break;
		case 'automaton_client_email':
        	echo $email = get_post_meta( $post->ID, 'automaton_client_email', true);
		    break;
		case 'automaton_client_phone':
			echo get_post_meta( $post->ID, 'automaton_client_phone', true);
		    break;
		default:
			break;
	} // end switch
}


	// Add taxonomies to post column
	//add_action( 'manage_posts_custom_column', 'crm_manage_columns', 10, 2 );



































