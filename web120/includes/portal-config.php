<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;


//die;


switch(THIS_PAGE){

    case 'index.php':
        $title = "Joanna Gromadzka's WEB120 Title Page";
        $logo = 'fa-home';
        $PageID = "Welcome";
    break;
        
     case 'contactme.php':
        $title = "Joanna Gromadzka's WEB120 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = "Contact Joanna";
    break;
        
     case 'flowchart.php':
        $title = "Joanna Gromadzka's WEB120 Flowchart";
        $logo = 'far fa-object-group';
        $PageID = "Flowchart";
    break;   
    
    case 'aia.php':
        $title = "Joanna Gromadzka's WEB120 AIA";
        $logo = 'fas fa-table';
        $PageID = "AIA";
    break; 
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
        
}
$nav1['index.php'] = 'Welcome';
$nav1['big/index.php'] = 'Big';
$nav1['aia.php'] = 'AIA';
$nav1['flowchart.php'] = 'Flowchart';
$nav1['fp/index.php'] = 'Final Project';
$nav1['contactme.php'] = 'Contact Joanna';


/* here we are creating a function to generate links and highlight on the current page

        <!--
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Joanna</a></li>
       -->
*/


function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";    
        }else{
        
        $myReturn .= "<li><a href=\"$url\">$text</a></li>";
    }
    }
    return $myReturn;
}
?>
