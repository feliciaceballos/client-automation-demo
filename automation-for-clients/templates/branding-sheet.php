<?php
/*
Single Client Template: Branding
Description: This is a printable sheet with brand assets for the client
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
add_action( 'genesis_entry_content', 'branding_sheet' );

function branding_sheet() {
echo '<img src="'.get_custom_field('automaton_logo_url').'" width="400px"></br></br></br>';	

echo '<h2>Colors</h2></br>';
echo '<div class="one-fourth first" style="display: block; height: 300px; border: 2px solid #dfdfdf; background-color: '.get_custom_field('automaton_primary_color_hex').'">';
echo '<p style="background: #fff;text-align: center; padding: 20px 0;">Primary Color</br>'.get_custom_field('automaton_primary_color_hex').'</p></br></div>';

echo '<div class="one-fourth" style="display: block; height: 300px; border: 2px solid #dfdfdf; background-color: '.get_custom_field('automaton_secondary_color_hex').'">';
echo '<p style="background: #fff;text-align: center; padding: 20px 0;">Secondary Color</br>'.get_custom_field('automaton_secondary_color_hex').'</p></br></div>';

echo '<div class="one-fourth" style="display: block; height: 300px; border: 2px solid #dfdfdf; background-color: '.get_custom_field('automaton_accent_color_hex').'">';
echo '<p style="background: #fff;text-align: center; padding: 20px 0;">Accent Color</br>'.get_custom_field('automaton_accent_color_hex').'</p></br></div>';

echo '<div class="one-fourth"  style="display: block; height: 300px; border: 2px solid #dfdfdf; background-color: '.get_custom_field('automaton_neutral_color_hex').'">';
echo '<p style="background: #fff;text-align: center; padding: 20px 0;">Neutral Color</br>'.get_custom_field('automaton_neutral_color_hex').'</p></br></div>';

echo '&nbsp;<h2>Fonts</h2></br>';
echo get_custom_field('automaton_site_fonts').'</br></br></br>';

echo '&nbsp;<h2>Notes</h2></br>';
echo get_custom_field('automaton_site_style').'</br></br></br>';

echo '&nbsp;<h2>Additional Images</h2></br>';
echo '<img src="'.get_custom_field('automaton_main_url').'" width="150px" style="padding-right:20px" >';	
echo '<img src="'.get_custom_field('automaton_background_url').'" width="150px" style="padding-right:20px">';	
echo '<img src="'.get_custom_field('automaton_additional_url').'" width="150px" style="padding-right:20px">';	
}

genesis();

