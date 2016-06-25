<?php
/*
Title: Primary Contact Information
Post Type: client
Order: 1
Priority: high
Tab: General
Flow: New Client Workflow
*/

piklist('field', array(
    'type' => 'text'
    ,'label' => 'First Name'    
	,'field' => 'automaton_client_first_name'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
  
  piklist('field', array(
    'type' => 'text'
    ,'label' => 'Last Name'    
	,'field' => 'automaton_client_last_name'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
  
  piklist('field', array(
    'type' => 'text'
    ,'field' => 'automaton_client_title'
    ,'label' => 'Professional Title'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

piklist('field', array(
    'type' => 'text'
    ,'label' => 'Phone'    
	,'field' => 'automaton_contact_primary_phone'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

piklist('field', array(
    'type' => 'text'
    ,'label' => 'Alternate Phone'    
	,'field' => 'automaton_contact_secondary_phone'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
  
  piklist('field', array(
    'type' => 'text'
    ,'field' => 'automaton_contact_text_phone'
    ,'label' => 'Text Phone'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
  
  piklist('field', array(
    'type' => 'text'
    ,'field' => 'automaton_contact_email'
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
    ,'field' => 'automaton_contact_best_time'
    ,'label' => 'Best time to contact'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

   ;
?>