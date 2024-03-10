<?php
// This is my server page, which will be communicating to the database.

// Our "session" -- This is where we will start our session!
// A session is a way to store the information.
// We would like the information that is inputted via our registration form to land in our database. 

// Start the session: (Who would have guessed?)
session_start();

// Connect to our config file:
include ("config.php");

// We will eventually have a header include.
// include ("includes/header.php");

// Connect to our user database:
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// We will be asking if "reg_user" isset.
// We will also be using a new function, which is "mysqli_real_escape_string()" which will remove any extra characters.
// For example, the last name "O'Reilly" would become "OReilly".

// If "reg_user" isset:
if(isset($_POST["reg_user"]))
{

    // Set $first_name and adjust the inputted value to the charset of the current connected database. ($iConn)

    $first_name = mysqli_real_escape_string($iConn, $_POST["first_name"]);
    $last_name = mysqli_real_escape_string($iConn, $_POST["last_name"]);
    $email = mysqli_real_escape_string($iConn, $_POST["email"]);
    $username = mysqli_real_escape_string($iConn, $_POST["username"]);
    $password_register = mysqli_real_escape_string($iConn, $_POST["password_register"]);
    $password_confirm = mysqli_real_escape_string($iConn, $_POST["password_confirm"]);

    // If our end user has left some of the information empty, we are going to say something!
    // We are also going to introduce a new function - array_push()!

    if(empty($first_name))
    {
        // The first argument in array_push is the name of the array, and the second argument is what we are adding to that array.
        array_push($errors, "First name is required!");
    }

    if(empty($last_name))
    {
        array_push($errors, "Last name is required!");
    }

    if(empty($email))
    {
        array_push($errors, "Email is required!");
    }

    if(empty($username))
    {
        array_push($errors, "Username is required!");
    }

    if(empty($password_register))
    {
        array_push($errors, "Password is required!");
    }

    // Now, for $password_confirm, we need to check that it matches $password_register. 
    if($password_confirm !== $password_register)
    {
        array_push($errors, "Passwords do not match!");
    }

    // We now have to select from the table where username = username, and email = email.
    // ...AND, limit 1.

    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1 ";

    // The result is all the usernames/emails we already have in our DB:
    $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    // Let's put all those usernames and emails into our $rows variable:
    $rows = mysqli_fetch_assoc($result);

    // We can only have one unique email, and one unique username.
    // If there is a username in our database, the end user cannot use that username when they register. (Same goes for email.)
    // So lets stop them from doing that!!!

    if ($rows)
    {
        // If any of our stored usernames are the same as this user's new username:
        if ($rows["username"] == $username)
        {
            array_push($errors, "Username already taken!");
        }
        // If any of our stored emails are the same as this user's new email:
        if ($rows["email"] == $email)
        {
            array_push($errors, "Email already taken!");
        }
    }

    // If there are NO errors, life is very good!
    // We can check the length of errors by doing (int)$errors. 
    if ((int)$errors == 0)
    {
        // md5() converts the password inputted by the user into an md5 hash. (A random 32 character string.)
        // md5 is not very secure. No real problem using it here, this is just a reminder for myself!
        $password = md5($password_register);

        // Now let's insert our newly registered user's information into our database!

        $query = "INSERT INTO users (first_name, last_name, email, username, password) 
        VALUES ('$first_name','$last_name','$email','$username','$password')";

        mysqli_query($iConn, $query);

        // And assign the username to the current session:
        $_SESSION["username"] = $username;

        $_SESSION["success"] = $success;

        // Then send the user to the login page!
        header("Location:login.php");
    }

} // Close "if(isset($_POST["reg_user"]))"











if(isset($_POST["login_user"]))
{
    // Our login page will only have two input fields, one for username and one for password.

    $username = mysqli_real_escape_string($iConn, $_POST["username"]);

    $password = mysqli_real_escape_string($iConn, $_POST["password"]);

    if(empty($username))
    {
        array_push($errors, "Username is required!");
    }
    if(empty($password))
    {
        array_push($errors, "Password is required!");
    }

    if ((int)$errors == 0)
    {
        $password = md5($password);

        // We are going to query our "users" table to make sure our username and password match a registered user!
        $query = "SELECT * FROM users WHERE username = '$username' AND password ='$password' ";

        $results = mysqli_query($iConn, $query);

        if (mysqli_num_rows($results) == 1)
        {
            $_SESSION["username"] = $username;
            $_SESSION["success"] = $success;

            // If the above is successful, we will be directed to the index page.

            header("Location:index.php");
        }
        else
        {
            array_push($errors, "Wrong username/password combo!");
        }
    }

} // Close "if(isset($_POST["login_user"]))"