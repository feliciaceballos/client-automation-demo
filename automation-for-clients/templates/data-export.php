<?php
/*
Single Post Template: All Data Export
Description: This exports all client data
*/

?>
<table id="data-export">					
							<tr>
<th>Project Name</th>
<th>Licenses</th>
<th>Professional Associations</th>
<th>Biography</th>
<th>Services/Products</th> 
<th>Primary Phone</th>
<th>Secondary Phone</th>
<th>Fax</th>    
<th>Client Email</th>    
<th>Address</th>    
<th>Address 2</th>    
<th>City</th>    
<th>State</th>   
<th>ZIP</th>    
<th>Mailing Address</th>   
<th>Mailing Address 2</th>   
<th>Mailing Address City</th>  
<th>Mailing Address State</th>   
<th>Mailing Address ZIP</th>
<th>First Year of Service</th>   
<th>Communities Served</th>
<th>Specialties</th>
<th>Business Hours</th>  
<th>First Name</th>
<th>Last Name</th>  
<th>Professional Title</th>
<th>Phone</th>   
<th>Alternate Phone</th>
<th>Text Phone</th>  
<th>Client Email</th> 
<th>Best time to contact</th>
<th>Logo URL</th>    
<th>Main URL</th> 
<th>Background URL</th> 
<th>Primary Color HEX</th>   
<th>Secondary Color HEX</th> 
<th>Accent Color HEX</th>   
<th>Neutral Color HEX</th> 
<th>Sites to Model After</th>   
<th>Site Goals</th>   
<th>Site Design Notes</th>  
<th>Fonts</th>
<th>Current Domain</th>  
<th>Requested Domain</th>  
<th>Requested Domain 2</th>
<th>Domain Provider</th>  
<th>Current Hosting Provider</th>  
<th>Current Website Platform</th>
<th>Email Address for New Personalized Domain</th>  
<th>Facebook URL</th>
<th>Twitter</th>
<th>LinkedIn URL</th> 
<th>Google+ Profile URL</th> 
<th>YouTube URL</th>  
<th>Skype Username</th>   
<th>Additional Profile URL</th>
<th>Blog Name</th>
<th>Blog URL</th>
<th>Client Notes</th> 
			</tr>
					
<?php 
$args = array(
	'posts_per_page' => '-1',
	'post_status'  => 'archive,draft,current',
	'post_type' => array( 'client' )
);
$downloads = new WP_Query($args);
while ($downloads->have_posts()): $downloads->the_post(); 
global $post; ?>
<tr>
<td><?php echo get_custom_field('automaton_project_name');?></td> 
<td><?php echo get_custom_field('automaton_client_licenses');?></td> 
<td><?php echo get_custom_field('automaton_pro_associations');?></td> 
<td><?php echo get_custom_field('automaton_client_biography');?></td> 
<td><?php echo get_custom_field('automaton_services_products');?></td> 
<td><?php echo get_custom_field('automaton_business_phone');?></td> 
<td><?php echo get_custom_field('automaton_alternate_business_phone');?></td> 
<td><?php echo get_custom_field('automaton_business_fax');?></td> 
<td><?php echo get_custom_field('automaton_client_email');?></td> 
<td><?php echo get_custom_field('automaton_business_address');?></td> 
<td><?php echo get_custom_field('automaton_business_address_2');?></td> 
<td><?php echo get_custom_field('automaton_business_city');?></td> 
<td><?php echo get_custom_field('automaton_business_state');?></td> 
<td><?php echo get_custom_field('automaton_business_zip');?></td> 
<td><?php echo get_custom_field('automaton_mailing_address');?></td> 
<td><?php echo get_custom_field('automaton_mailing_address_2');?></td> 
<td><?php echo get_custom_field('automaton_mailing_city');?></td> 
<td><?php echo get_custom_field('automaton_mailing_state');?></td> 
<td><?php echo get_custom_field('automaton_mailing_zip');?></td> 
<td><?php echo get_custom_field('automaton_years_service');?></td> 
<td><?php echo get_custom_field('automaton_communities_served');?></td> 
<td><?php echo get_custom_field('automaton_specialties');?></td> 
<td><?php echo get_custom_field('automaton_business_hours');?></td> 
<td><?php echo get_custom_field('automaton_client_first_name');?></td> 
<td><?php echo get_custom_field('automaton_client_last_name');?></td> 
<td><?php echo get_custom_field('automaton_client_title');?></td> 
<td><?php echo get_custom_field('automaton_contact_primary_phone');?></td> 
<td><?php echo get_custom_field('automaton_contact_secondary_phone');?></td> 
<td><?php echo get_custom_field('automaton_contact_text_phone');?></td> 
<td><?php echo get_custom_field('automaton_contact_email');?></td> 
<td><?php echo get_custom_field('automaton_contact_best_time');?></td> 
<td><?php echo get_custom_field('automaton_logo_url');?></td> 
<td><?php echo get_custom_field('automaton_main_url');?></td> 
<td><?php echo get_custom_field('automaton_background_url');?></td> 
<td><?php echo get_custom_field('automaton_primary_color_hex');?></td> 
<td><?php echo get_custom_field('automaton_secondary_color_hex');?></td> 
<td><?php echo get_custom_field('automaton_accent_color_hex');?></td> 
<td><?php echo get_custom_field('automaton_neutral_color_hex');?></td> 
<td><?php echo get_custom_field('automaton_model_sites');?></td> 
<td><?php echo get_custom_field('automaton_site_goals');?></td> 
<td><?php echo get_custom_field('automaton_site_style');?></td> 
<td><?php echo get_custom_field('automaton_site_fonts');?></td> 
<td><?php echo get_custom_field('automaton_current_domain');?></td> 
<td><?php echo get_custom_field('automaton_requested_domain');?></td> 
<td><?php echo get_custom_field('automaton_requested_domain_2');?></td> 
<td><?php echo get_custom_field('automaton_domain_provider');?></td> 
<td><?php echo get_custom_field('automaton_hosting_provider');?></td> 
<td><?php echo get_custom_field('automaton_website_platform');?></td> 
<td><?php echo get_custom_field('automaton_email_address_personal_domain');?></td> 
<td><?php echo get_custom_field('automaton_facebook_URL');?></td> 
<td><?php echo get_custom_field('automaton_twitter_handle');?></td> 
<td><?php echo get_custom_field('automaton_linkedin_url');?></td> 
<td><?php echo get_custom_field('automaton_google_url');?></td> 
<td><?php echo get_custom_field('automaton_youtube_url');?></td> 
<td><?php echo get_custom_field('automaton_skype_username');?></td> 
<td><?php echo get_custom_field('automaton_additional_profile_url');?></td> 
<td><?php echo get_custom_field('automaton_blog_name');?></td> 
<td><?php echo get_custom_field('automaton_blog_url');?></td> 
<td><?php echo get_custom_field('automaton_client_notes');?></td> 
</tr>
<?php
endwhile;
wp_reset_query();?>


