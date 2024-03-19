<?php

// █▄░█ ▄▀█ █░█   █▀█ █░█ █▀█
// █░▀█ █▀█ ▀▄▀   █▀▀ █▀█ █▀▀

    ob_start();

    // THIS_PAGE is defined as whatever page this PHP line is being run on. 
    define("THIS_PAGE", basename($_SERVER ["PHP_SELF"]));

    // When THIS_PAGE is equivalent to different pages, certain variables are changed accordingly.
    switch(THIS_PAGE)
    {
        case "login.php" :
            $title = "Login page of our Website Project";
            $body = "login-inner";
        break;

        case "register.php" :
            $title = "Register page of our Website Project";
            $body = "register-inner";
        break;

        case "index.php" :
            $title = "Home page of our Website Final Project";
            $body = "home-inner";
        break;

        case "about.php" :
            $title = "About page of our Website Final Project";
            $body = "about-inner";
        break;

        case "daily.php" :
            $title = "Daily page of our Website Final Project";
            $body = "daily-inner";
        break;

        case "project.php" :
            $title = "Project page of our Website Final Project";
            $body = "project-inner";
        break;

        case "project-caterpillar.php" :
            $title = "Project Caterpillar page of our Website Project";
            $body = "project-caterpillar-inner";
        break;

        case "contact.php" :
            $title = "Contact page of our Website Final Project";
            $body = "contact-inner";
        break;

        case "register.php" :
            $title = "Thanks for Contacting page of our Website Project";
            $body = "thx-inner";
        break;

        case "gallery.php" :
            $title = "Gallery page of our Website Final Project";
            $body = "gallery-inner";
        break;
    }

    // Our $nav array is an associative array that contains all of the links that will be in our nav.
    $nav = array
    (
        "index.php" => "HOME", 
        "about.php" => "ABOUT",
        "daily.php" => "DAILY",
        "project.php" => "PROJECT",
        "contact.php" => "CONTACT",
        "gallery.php" => "GALLERY" 
    );

    // make_links() builds a nav based on the contents of $nav!
    function make_links($nav)
    {
        $my_return = "";

        foreach($nav as $file_name => $display_name)
        {
            if (THIS_PAGE == $file_name)
            {
                $my_return .= "<li> <h2> <a href=\"$file_name\"> $display_name </a> </h2> </li>";
            }
            else
            {
                $my_return .= "<li> <h2> <a href=\"$file_name\"> $display_name </a> </h2> </li>";
            }

        } // End foreach().

        return $my_return;

    } // End links().
//


// █▀▀ █▀█ █▀█ █▀▄▀█   █▀█ █░█ █▀█
// █▀░ █▄█ █▀▄ █░▀░█   █▀▀ █▀█ █▀▀

    ini_set('display_errors', 1);

    // To get the message to actually send on DreamHost I need to use PHPMailer...
    use PHPMailer\PHPMailer\PHPMailer;

    /* Exception class. */
    require '../PHPMailer/src/Exception.php';

    /* The main PHPMailer class. */
    require '../PHPMailer/src/PHPMailer.php';

    /* SMTP class, needed if you want to use SMTP. */
    require '../PHPMailer/src/SMTP.php';

    // Just the file that contains the username and password for the burner Gmail
    // I used. 
    include '../login-NOGITHUB.php';


    $email = new PHPMailer(TRUE);

    // Initializing our variables:

    $first_name = "";
    $first_name_error = "";

    $last_name = "";
    $last_name_error = "";

    $email = "";
    $email_error = "";

    $phone = "";
    $phone_error = "";

    $bug_stage = "";
    $bug_stage_error = "";

    $email_rate = "";
    $email_rate_error = "";

    $comments = "";
    $comments_error = "";

    $privacy = "";
    $privacy_error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // If inputs are empty, declare a statement. 
        // Else, assign the $_POSTs to a variable. 

        if (empty($_POST["first_name"]))
        {
            $first_name_error = "Please fill out your first name.";
        }
        else 
        {
            $first_name = $_POST["first_name"];
        }

        if (empty($_POST["last_name"]))
        {
            $last_name_error = "Please fill out your last name.";
        }
        else 
        {
            $last_name = $_POST["last_name"];
        }

        if (empty($_POST["email"]))
        {
            $email_error = "Please fill out your email.";
        }
        else 
        {
            $email = $_POST["email"];
        }

        if(empty($_POST["phone"])) 
        { 
            // If empty, type in your number.
            $phone_error = "Please fill out your phone number.";
        }
        elseif(array_key_exists('phone', $_POST))
        {
            if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
            { 
            // If you are not typing the requested format of xxx-xxx-xxxx, display "Invalid format".
            // preg_match() checks a string for case-sensitive information detailed in RegEx format.
            $phone_error = "Invalid format!";
            }
            else
            {
            $phone = $_POST["phone"];
            } // end else
        } // end main if

        if (empty($_POST["bug_stage"]))
        {
            $bug_stage_error = "Please select what you want to recieve featured photos of!";
        }
        else 
        {
            $bug_stage = $_POST["bug_stage"];
        }

        if (empty($_POST["email_rate"]))
        {
            $email_rate_error = "Please select how often you would like to recieve emails!";
        }
        else 
        {
            $email_rate = $_POST["email_rate"];
        }

        if (empty($_POST["privacy"]))
        {
            $privacy_error = "You must agree for us to sell all of your data!";
        }
        else 
        {
            $privacy = $_POST["privacy"];
        }

        //

        function my_bug_stage($bug_stage)
        {
            $my_return = "";
            // If $_POST["bug_stage"] is not empty, implode $_POST["bug_stage"] and assign it to $my_return.
            if (!empty($_POST["bug_stage"]))
            {
                $my_return = implode(', ', $_POST["bug_stage"]);
            }
            return $my_return;
        } // Closing my_bug_stage().

        //

        if (isset($_POST["first_name"],
        $_POST["last_name"],
        $_POST["email"],
        $_POST["phone"],
        $_POST["bug_stage"],
        $_POST["email_rate"],
        $_POST["privacy"] ))
        {

            // Where the form data will be sent. 
            $to = "szemeo@mystudentswa.com"; 
            // Subject of the email from the form.
            date_default_timezone_set("America/Los_Angeles");
            $subject = "Test Email on ".date("m/d/y, h:i A")."";
            // Body of the email from the form.
            // PHP_EOL is a character that creates a new line.
            $body = 
            "
            First Name: $first_name ".PHP_EOL."
            Last Name: $last_name ".PHP_EOL."
            Email Address: $email ".PHP_EOL."
            Phone Number: $phone ".PHP_EOL."
            Desired Photo Subjects: ".my_bug_stage($bug_stage)." ".PHP_EOL."
            Email Rate: $email_rate ".PHP_EOL."
            ";

            // If statement stating that the email part of the form will only work if all the fields are filled out.

            if (!empty($first_name 
            && $last_name 
            && $email
            && $phone
            && $bug_stage
            && $email_rate
            && $privacy))
            {
                // // Sends the email! (Only works non-locally.)
                // mail($to, $subject, $body, $headers);
                // // Once the form is sent, let the end user know it worked!
                // header("Location:thx.php");

                // New code that complies with DreamHost's standards.
                // Mostly copied from here: https://github.com/PHPMailer/PHPMailer/blob/master/examples/simple_contact_form.phps

                // Initialize new mail.
                $mail = new PHPMailer();
                // Set mail attributes?
                $mail->isSMTP();
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "tls";
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->CharSet = PHPMailer::CHARSET_UTF8;

                // Gmail account info, vars are in login-NOGITHUB.php.
                $mail->Username = $myemail;
                $mail->Password = $mypassword;

                $mail->setFrom($myemail);
                $mail->addAddress($to);
                $mail->addReplyTo($email);
                $mail->Subject = $subject;
                $mail->Body = $body;
                if (!$mail->send()) {
                    echo "Uh oh, you shouldn't be seeing this error message... I echoed it before my HTML so it looks extra stupid!";
                } else {
                    header("Location:thx.php");
                }
            }

        } // Closing isset().

    } // Closing $_SERVER["REQUEST_METHOD"].
//



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
