<?php

// Form using post method that prevents user from submitting form with empty inputs.

if(isset($_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["comments"])) // If our variables have been set through our form:
{
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $comments = $_POST["comments"];

    if (empty($_POST["first_name"] && $_POST["last_name"] && $_POST["email"] && $_POST["comments"])) // If they're set, but one or more are empty:
    {
        echo "Please fill out all of the fields!";
    }
    else // If they're set, but all filled out:
    {
        echo $first_name;
        echo "<br>";
        echo $last_name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $comments;
    }
} 
else // If our variables haven't been set through our form:
{
    echo 
    "
    <form action=\"\" method=\"post\"> 

    <label> First Name </label>
    <input type=\"text\" name=\"first_name\">

    <label> Last Name </label>
    <input type=\"text\" name=\"last_name\">

    <label> Email </label>
    <input type=\"email\" name=\"email\">

    <label> Comments </label>
    <textarea name=\"comments\"> </textarea>

    <input type=\"submit\" value=\"Send it!\">

    </form>

    <p> <a href=\"\"> RESET </a> </p>
    ";
    // <textarea> provides a bigger box for user input & one that is scrollable and scalable. Intended for longer text.
}