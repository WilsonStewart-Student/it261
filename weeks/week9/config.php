<?php

ob_start();  // Prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors!!!

include('credentials.php');

$errors = array();

$success = "You have successfully logged on!";

function myError($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
        echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
        die();
    } 

    else 
    {
        echo 'Houston, we have a problem!';
        die();
    }    
}