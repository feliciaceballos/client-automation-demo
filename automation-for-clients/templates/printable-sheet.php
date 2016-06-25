<?php
/*
Single Client Template: Printable Sheet
Description: This is a printable sheet with client details
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
add_action( 'genesis_entry_content', 'printable_sheet' );

function printable_sheet() {
echo '<img src="'.get_custom_field('automaton_logo_url').'" width="400px"></br></br></br>';	

echo '<h1>'.get_custom_field('automaton_project_name').'</h1></br>';

echo '<h2>Contact</h2></br>';
echo get_custom_field('automaton_client_first_name').' '.get_custom_field('automaton_client_last_name').'</br>';
echo get_custom_field('automaton_client_title').'</br>';
echo get_custom_field('automaton_contact_primary_phone').'</br>';
echo get_custom_field('automaton_contact_secondary_phone').'</br>';
echo get_custom_field('automaton_contact_text_phone').'</br>';
echo get_custom_field('automaton_contact_email').'</br></br></br>';

echo get_custom_field('automaton_business_phone').'</br>';
echo get_custom_field('automaton_alternate_business_phone').'</br>';
echo get_custom_field('automaton_business_fax').'</br>';
echo get_custom_field('automaton_client_email').'</br></br></br>';

echo '<h2>Addresses</h2></br>';
echo '<table id="addresses">
            <tr>
            <td>'.get_custom_field('automaton_business_address').'</td>
            <td>'.get_custom_field('automaton_mailing_address').'</td>
            </tr>
			<tr>
            <td>'.get_custom_field('automaton_business_address_2').'</td>
            <td>'.get_custom_field('automaton_mailing_address_2').'</td>
            </tr>
			<tr>
            <td>'.get_custom_field('automaton_business_city').' ,'.get_custom_field('automaton_business_state').' '.get_custom_field('automaton_business_zip').'</td>
            <td>'.get_custom_field('automaton_mailing_city').' ,'.get_custom_field('automaton_mailing_state').' '.get_custom_field('automaton_mailing_zip').'</td>
            </tr>
</table>';

echo '<h2>Social</h2></br>';
echo '<table id="social">
            <tr>
            <td><strong>Facebook:</strong> <a href="'.get_custom_field('automaton_facebook_URL').'">'.get_custom_field('automaton_facebook_URL').'</a></td>
            <td><strong>LinkedIn: </strong><a href="'.get_custom_field('automaton_linkedin_url').'">'.get_custom_field('automaton_linkedin_url').'</a></td>
            </tr>
			<tr>
            <td><strong>YouTube:</strong> <a href="'.get_custom_field('automaton_youtube_url').'">'.get_custom_field('automaton_youtube_url').'</a></td>
            <td><strong>Google:</strong> <a href="'.get_custom_field('automaton_google_url').'">'.get_custom_field('automaton_google_url').'</a></td>
            </tr>
			<tr>
            <td><strong>Twitter:</strong> <a href="https://twitter.com/'.get_custom_field('automaton_twitter_handle').'">@'.get_custom_field('automaton_twitter_handle').'</a></td>
            <td><strong>Skype:</strong> '.get_custom_field('automaton_skype_username').'</td>
            </tr>
			<tr>
            <td><strong>Additional Profile:</strong> <a href="'.get_custom_field('automaton_additional_profile_url').'">'.get_custom_field('automaton_additional_profile_url').'</a></td>
            <td><strong>'.get_custom_field('automaton_blog_name').' Blog:</strong> <a href="'.get_custom_field('automaton_blog_url').'">'.get_custom_field('automaton_blog_url').'</a></td>
            </tr>
</table>';

echo '<h2>About</h2></br>';
echo '<strong>Products/Services:</strong> '.get_custom_field('automaton_services_products').'</br>';
echo '<strong>First Year of Service: </strong>'.get_custom_field('automaton_years_service').'</br>';
echo '<strong>Communities Served:</strong> '.get_custom_field('automaton_communities_served').'</br>';
echo '<strong>Specialties:</strong> '.get_custom_field('automaton_specialties').'</br>';
echo '<strong>Business Hours:</strong> '.get_custom_field('automaton_business_hours').'</br>';
echo '<strong>Notes:</strong> '.get_custom_field('automaton_client_notes').'</br></br></br>';




}

genesis();

