<?php

$_textfeld = array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => __( "Headline", "" ),
    "param_name" => "h1",
    "value" => __( "", "" ),
    "description" => __( "", "" )
);

$_textarea = array(
    "type" => "textarea_html",
    "holder" => "div",
    "class" => "",
    "heading" => __( "Inhalt", "" ),
    "param_name" => "content",
    "value" => __( "", "" ),
    "description" => __( "Text", "" )
);

$_image = array(
    "type"        => "attach_image",
    "heading"     => __( "Bild", "" ),
    "description" => '',
    "param_name"  => "image",
    "value" => __( "", "" ),
);


$_select = array(
  'type' => 'dropdown',
  'heading' => __( 'Field Label',  "my-text-domain" ),
  'param_name' => 'field_name',
  'value' => array(
    __( 'Option 1 Label',  "my-text-domain"  ) => 'option1value',
    __( 'Option 2 Label',  "my-text-domain"  ) => 'option2value',
    __( 'Option 3 Label',  "my-text-domain"  ) => 'option3value',
  ),
  "description" => __( "Enter description.", "my-text-domain" )
);



More: https://fjorgedigital.com/insights/blog/visual-composer-examples/
