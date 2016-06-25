<?php
/*
Title: Organization Information for Site
Post Type: client
Order: 2
Priority: high
Tab: General
Flow: New Client Workflow
*/
  
piklist('field', array(
    'type' => 'text'
    ,'field' => 'automaton_project_name'
    ,'label' => 'Project Name'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

piklist('field', array(
    'type' => 'textarea'
    ,'field' => 'automaton_client_licenses'
    ,'label' => 'Licenses'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
        ,'attributes' => array(
   		'rows' => 5
  		,'cols' => 2
   		,'class' => 'large-text'
 )
  ));
	            
piklist('field', array(
    'type' => 'textarea'
    ,'field' => 'automaton_pro_associations'
    ,'label' => 'Professional Associations'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
       ,'attributes' => array(
   		'rows' => 5
  		,'cols' => 2
   		,'class' => 'large-text'
 )
  ));

piklist('field', array(
    'type' => 'textarea'
    ,'field' => 'automaton_client_biography'
    ,'label' => 'Biography'
    ,'description' => 'Client Biography/About'
    ,'value' => ''
    ,'help' => ''
       ,'attributes' => array(
   		'rows' => 5
  		,'cols' => 2
   		,'class' => 'large-text'
 )
  ));

piklist('field', array(
    'type' => 'textarea'
    ,'field' => 'automaton_services_products'
    ,'label' => 'Services/Products'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
        ,'attributes' => array(
   		'rows' => 5
  		,'cols' => 2
   		,'class' => 'large-text'
 )
  ));

piklist('field', array(
    'type' => 'text'
    ,'field' => 'automaton_business_phone'
    ,'label' => 'Primary Phone'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
	           
piklist('field', array(
    'type' => 'text'
    ,'field' => 'automaton_alternate_business_phone'
    ,'label' => 'Secondary Phone'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
  
  piklist('field', array(
    'type' => 'text'
    ,'label' => 'Fax'    
	,'field' => 'automaton_business_fax'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

piklist('field', array(
    'type' => 'text'
    ,'field' => 'automaton_business_email'
    ,'label' => 'Client Email'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
  
 piklist('field', array(
    'type' => 'text'
    ,'label' => 'Address'    
	,'field' => 'automaton_business_address'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

piklist('field', array(
    'type' => 'text'
    ,'label' => 'Address 2'    
	,'field' => 'automaton_business_address_2'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

piklist('field', array(
    'type' => 'text'
    ,'label' => 'City'    
	,'field' => 'automaton_business_city'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

piklist('field', array(
    'type' => 'text'
    ,'label' => 'State'    
	,'field' => 'automaton_business_state'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
  
piklist('field', array(
    'type' => 'text'
    ,'label' => 'ZIP'    
	,'field' => 'automaton_business_zip'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

piklist('field', array(
    'type' => 'text'
    ,'field' => 'automaton_mailing_address'
    ,'label' => 'Mailing Address'
    ,'description' => 'Enter if different from Business Address'
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

piklist('field', array(
    'type' => 'text'
    ,'field' => 'automaton_mailing_address_2'
    ,'label' => 'Mailing Address 2'
    ,'description' => 'Enter if different from Business Address'
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

piklist('field', array(
    'type' => 'text'
    ,'field' => 'automaton_mailing_city'
    ,'label' => 'Mailing Address City'
    ,'description' => 'Enter if different from Business Address'
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

piklist('field', array(
    'type' => 'text'
    ,'field' => 'automaton_mailing_state'
    ,'label' => 'Mailing Address State'
    ,'description' => 'Enter if different from Business Address'
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

piklist('field', array(
    'type' => 'text'
    ,'field' => 'automaton_mailing_zip'
    ,'label' => 'Mailing Address ZIP'
    ,'description' => 'Enter if different from Business Address'
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
  
  piklist('field', array(
    'type' => 'text'
    ,'label' => 'First Year of Service'    
	,'field' => 'automaton_years_service'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

piklist('field', array(
    'type' => 'text'
    ,'label' => 'Communities Served'    
	,'field' => 'automaton_communities_served'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
   		'rows' => 3
  		,'cols' => 2
   		,'class' => 'large-text'
 )
  ));

piklist('field', array(
    'type' => 'text'
    ,'label' => 'Specialties'    
	,'field' => 'automaton_specialties'
    ,'description' => ''
    ,'value' => ''
	,'add_more' => true
    ,'help' => ''
    ,'attributes' => array(
   		'rows' => 5
  		,'cols' => 2
   		,'class' => 'large-text'
 )
  ));  

piklist('field', array(
    'type' => 'text'
    ,'label' => 'Business Hours'    
	,'field' => 'automaton_business_hours'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
  
   ;
?>