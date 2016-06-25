<?php
/*
Title: Notes
Post Type: client
Order: 20
Tab: Notes
Flow: New Client Workflow
*/


piklist('field', array(
    'type' => 'textarea'
    ,'label' => 'Client Notes'    
	,'field' => 'automaton_client_notes'
    ,'description' => ''
    ,'value' => ''
    ,'help' => ''
	,'add_more' => true
    ,'attributes' => array(
      'class' => 'text'
    )
  ));

 ;
?>