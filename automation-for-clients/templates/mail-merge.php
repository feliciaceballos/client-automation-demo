<?php
/*
Single Post Template: Mail Merge
Description: This exports client addresses, main contact phone number and email. 
*/

?>
<table id="mail-merge">					
							<tr>
<th>Project Name</th>
<th>Contact First Name</th>
<th>Contact Last Name</th>
<th>Phone </th>
<th>Email </th>
<th>Mailing Address </th>
<th>Mailing Address </th>
<th>Mailing Address City </th>
<th>Mailing Address State </th>
<th>Mailing Address ZIP </th>						</tr>
					
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
<td><?php echo get_custom_field('automaton_client_first_name');?></td>
<td><?php echo get_custom_field('automaton_client_last_name');?></td>
<td><?php echo get_custom_field('automaton_business_phone');?></td>
<td><?php echo get_custom_field('automaton_client_email');?></td>
<td><?php $mailing_address = get_custom_field('automaton_mailing_address');
if (!empty($mailing_address)) {
    echo $mailing_address;
}
	else {
	echo get_custom_field('automaton_business_address');
}
?></td>
<td><?php $mailing_address = get_custom_field('automaton_mailing_address');
if (!empty($mailing_address)) {
    echo get_custom_field('automaton_mailing_address_2');
}
	else {
	echo get_custom_field('automaton_business_address_2');
}
?></td>
<td><?php $mailing_address = get_custom_field('automaton_mailing_address');
if (!empty($mailing_address)) {
    echo get_custom_field('automaton_mailing_city');
}
	else {
	echo get_custom_field('automaton_business_city');
}
?></td>
<td><?php $mailing_address = get_custom_field('automaton_mailing_address');
if (!empty($mailing_address)) {
    echo get_custom_field('automaton_mailing_state');
}
	else {
	echo get_custom_field('automaton_business_state');
}
?></td>
<td><?php $mailing_address = get_custom_field('automaton_mailing_address');
if (!empty($mailing_address)) {
    echo get_custom_field('automaton_mailing_zip');
}
	else {
	echo get_custom_field('automaton_business_zip');
}
?></td>
</tr>
<?php
endwhile;
wp_reset_query();?>