<?php

// Form using get method.

if (isset($_GET["name"], $_GET["email"])) // If GET name and GET email have been set:
    {
        $name = $_GET["name"]; // GET name is assigned to $name.
        $email = $_GET["email"]; // GET email is assigned to $email.
    }
    else // If they haven"t been set, display the form where the user can set them!
    {
        echo 
        "
        <form action=\"\" method=\"get\"> 

        <label> NAME </label>
        <input type=\"text\" name=\"name\">

        <label> EMAIL </label>
        <input type=\"email\" name=\"email\">

        <input type=\"submit\" value=\"Confirm\">

        </form>
        ";
    } // With this setup, when the user confirms their inputs, they are then taken to a new page where their inputs are part of the URL.