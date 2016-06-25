<?php
/*
Title: Letter Template
Post Type: client
Order: 19
Tab: Letter
Flow: New Client Workflow
*/
  
piklist('field', array(
    'type' => 'text'
    ,'label' => 'Sender Name'    
	,'field' => 'automaton_letter_sender_name'
    ,'description' => 'Include first and last name'
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
  
piklist('field', array(
    'type' => 'text'
    ,'label' => 'Sender Address'    
	,'field' => 'automaton_letter_sender_address'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

piklist('field', array(
    'type' => 'text'
    ,'label' => 'Sender Address 2'    
	,'field' => 'automaton_letter_sender_address_2'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

piklist('field', array(
    'type' => 'text'
    ,'label' => 'Sender City'    
	,'field' => 'automaton_letter_sender_city'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

piklist('field', array(
    'type' => 'text'
    ,'label' => 'Sender State'    
	,'field' => 'automaton_letter_sender_state'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
  
piklist('field', array(
    'type' => 'text'
    ,'label' => 'Sender ZIP'    
	,'field' => 'automaton_letter_sender_zip'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
  
piklist('field', array(
    'type' => 'editor'
    ,'label' => 'Letter Text'    
	,'field' => 'automaton_letter_text'
    ,'description' => 'This box populates the text in the letter template'
    ,'value' => ''
    ,'help' => ''
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
  
   ;
?>