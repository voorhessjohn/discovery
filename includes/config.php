<?php
//config.php


//this enables pages to know their own name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
define('DEBUG',TRUE); #we want to see all errors

//this clears date errors of all sorts
date_default_timezone_set('America/Los_Angeles');

//this is inside of an h1 in the header.php file
$banner = 'Banner goes here';


$nav1['index.php'] = 'Main Page';
$nav1['contact.php'] = 'Contact Us';
$nav1['links.php'] = 'Links';
$nav1['contact2.php'] = 'Email Form';
//$nav1['customers.php'] = 'Customers';
$nav1['grind.php'] = 'The Daily Grind';
$nav1['books.php'] = 'Books';

switch(THIS_PAGE)
{
        
    case 'index.php':
        $title = 'Index Page';
        $banner = 'Index Page';
    break;
        
    case 'links.php':
        $title = 'Links Page';
        $banner = 'Links Page';
    break;
        
    case 'contact.php':
        $title = 'Contact Page';
        $banner = 'Contact Page';
    break;
    
    case 'contact2.php':
        $title = 'Second Contact Page';
        $banner = 'Second Contact Page';
    break;
    
    case 'customers.php':
        $title = 'Customers Page';
        $banner = 'Customers Page';
    break;
    
    case 'grind.php':
        $title = 'The Daily Grind';
        $banner = 'The Daily Grind';
    break;
        
    case 'books.php':
        $title = 'Book Page';
        $banner = 'Some Books!';
    break;
        
    case 'bookview.php':
        $title = 'A Closer Look at a Book';
        $banner = 'More About This Book';
    break;
        
    default:
        $title = THIS_PAGE;
        $banner = 'Banner goes here';        
}

//stores database login info
include 'credentials.php';


function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}


function makeLinks($nav)
{
    $myReturn = "";
    
    foreach($nav as $url => $text){
        
        if(THIS_PAGE == $url)
        {
            $myReturn .= '<li class="current"><a href="' . $url . '">' . $text . '</a></li>';
            
        }else
        {
            $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>';
            
        }
        
        
        
    }
    
    
    return $myReturn;
    
}


/*
              <li class="current"><a href="index.html">Home</a></li>
              <li><a href="ourwork.html">Our Work</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              <li><a href="projects.html">Projects</a></li>
              <li><a href="contact.html">Contact Us</a></li>
*/