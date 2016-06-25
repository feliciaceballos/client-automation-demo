<?php
/*
Single Client Template: Welcome Letter
Description: This is a printable welcome letter for new clients
*/


//* Remove Before Header widget area
remove_action( 'genesis_before_header', 'automaton_before_header' );

//* Remove site header elements
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

//* Remove the entry meta in the entry header
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open' );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close' ); 

/** Remove post info */
remove_action('genesis_before_post_content', 'genesis_post_info' );
add_filter('genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
remove_action('genesis_entry_header', 'genesis_post_meta' );

//* Remove navigation
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_before_header', 'genesis_do_subnav', 11 );

//* Remove footer
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );
remove_action( 'genesis_footer', 'automaton_custom_footer' );

//* Add content
add_action( 'genesis_entry_content', 'welcome_letter' );

function welcome_letter() {
echo '<div class="letter-sender">';
echo get_custom_field('automaton_letter_sender_name').'</br>';
echo get_custom_field('automaton_letter_sender_address').' '.get_custom_field('automaton_letter_sender_address_2').'</br>';
echo get_custom_field('automaton_letter_sender_city').', '; 
echo get_custom_field('automaton_letter_sender_state').' '; 
echo get_custom_field('automaton_letter_sender_zip').'</br></br></br>';
echo '</div>';

echo date('F jS Y').'</br></br></br>';

echo get_custom_field('automaton_client_first_name').' '.get_custom_field('automaton_client_last_name').'</br>';
echo get_custom_field('automaton_business_address').' '.get_custom_field('automaton_business_address_2').'</br>';
echo get_custom_field('automaton_business_city').', '.get_custom_field('automaton_business_state').' '.get_custom_field('automaton_business_zip').'</br></br></br>';

echo 'Dear '.get_custom_field('automaton_client_first_name').',</br></br></br>';
echo wpautop( get_custom_field('automaton_letter_text')).'</br>';

echo 'Sincerely, </br></br></br></br></br>'.get_custom_field('automaton_letter_sender_name').'</br>';

}


genesis();
