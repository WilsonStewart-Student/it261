<?php

// Form using post method.

if (isset($_POST["name"], $_POST["email"])) // If POST name and POST email have been set:
    {
        $name = $_POST["name"]; // POST name is assigned to $name.
        $email = $_POST["email"]; // POST email is assigned to $email.

        echo $name; 
        echo "<br>";
        echo $email;
    }
    else // If they haven"t been set, display the form where the user can set them!
    {
        echo 
        "
        <form action=\"\" method=\"post\"> 

        <label> NAME </label>
        <input type=\"text\" name=\"name\">

        <label> EMAIL </label>
        <input type=\"email\" name=\"email\">

        <input type=\"submit\" value=\"Send it!\">

        </form>
        ";
    } // With this setup, when the user confirms their inputs, they are then taken to a new page where their inputs are echoed.