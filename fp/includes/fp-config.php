<?php
//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default


switch(THIS_PAGE){
        
    

    case 'template.php':
        $title = "Template";
        $h2 = "morbi tristique";
        
    break;
    
    case 'aboutme.php':
        $title = "About MadisonWoo";
        $h2 = "About Me";

    break;

    
    case 'work.php':
        $title = "Madison's Works";
        $h2 = "Works";

    break;
    
    case 'contact.php':
        $title = "Contact page";
        $h2 = "Contact";
    

    default:    
    $title = THIS_PAGE;    
    
}





?>
