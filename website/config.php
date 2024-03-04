<?php

// █▄░█ ▄▀█ █░█   █▀█ █░█ █▀█
// █░▀█ █▀█ ▀▄▀   █▀▀ █▀█ █▀▀

    ob_start();

    define("THIS_PAGE", basename($_SERVER ["PHP_SELF"])); // This variable is defined as whatever page this PHP line is on. Here, THIS_PAGE is index.php

    switch(THIS_PAGE)
    {
        case "index.php" : // When THIS_PAGE = index.php, the following variables are defined as so.
            $title = "Home page of our Website Project";
            $body = "home";
        break;

        case "about.php" : // When THIS_PAGE = about.php, the following variables are defined as so.
            $title = "About page of our Website Project";
            $body = "about-inner";
        break;

        case "daily.php" : 
            $title = "Daily page of our Website Project";
            $body = "daily-inner";
        break;

        case "project.php" : 
            $title = "Project page of our Website Project";
            $body = "project-inner";
        break;

        case "project-artist.php" : 
            $title = "Artist page of our Website Project";
            $body = "project-artist-inner";
        break;

        case "contact.php" : 
            $title = "Contact page of our Website Project";
            $body = "contact-inner";
        break;

        case "thx.php" : 
            $title = "Thank You for Filling Out our Contact Form";
            $body = "thx-inner";
        break;

        case "gallery.php" : 
            $title = "Gallery page of our Website Project";
            $body = "gallery-inner";
        break;
    }

        // Our navigational array:
        $nav = array
    (
        "index.php" => "Home", 
        "about.php" => "About",
        "daily.php" => "Daily",
        "project.php" => "Project",
        "contact.php" => "Contact",
        "gallery.php" => "Gallery" 
    );

    function make_links($nav)
    {
        $my_return = "";

        foreach($nav as $key => $value)
        {
            if (THIS_PAGE == $key)
            {
                $my_return .= "<li> <a style=\"color:#6b1fb1; text-shadow: #6b1fb1 0 0 10px;\" href=\"$key\"> $value </a> </li>";
            }
            else
            {
                $my_return .= "<li> <a style=\"color:#f8e3c4\"  href=\"$key\"> $value </a> </li>";
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

    $species = "";
    $species_error = "";

    $mane6 = "";
    $mane6_error = "";

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

        if (empty($_POST["species"]))
        {
            $species_error = "Please pick your favorite species!";
        }
        else 
        {
            $species = $_POST["species"];
        }

        if (empty($_POST["mane6"]))
        {
            $mane6_error = "Please pick your favorite Mane 6 pony!";
        }
        else 
        {
            $mane6 = $_POST["mane6"];
        }

        if (empty($_POST["comments"]))
        {
            $comments_error = "We value your input.";
        }
        else 
        {
            $comments = $_POST["comments"];
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

        function my_species($species)
        {
            $my_return = "";
            // If $_POST["species"] is not empty, implode $_POST["species"] and assign it to $my_return.
            if (!empty($_POST["species"]))
            {
                $my_return = implode(', ', $_POST["species"]);
            }
            return $my_return;
        } // Closing my_species().

        //

        if (isset($_POST["first_name"],
        $_POST["last_name"],
        $_POST["email"],
        $_POST["phone"],
        $_POST["species"],
        $_POST["mane6"],
        $_POST["comments"],
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
            Favorite Pony Species: ".my_species($species)." ".PHP_EOL."
            Favorite Mane 6 Pony: $mane6 ".PHP_EOL."
            Comments: $comments ".PHP_EOL."
            ";

            // If statement stating that the email part of the form will only work if all the fields are filled out.

            if (!empty($first_name 
            && $last_name 
            && $email
            && $phone
            && $species
            && $mane6
            && $comments
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

// █▀▄ █▄▄   █▀█ █░█ █▀█
// █▄▀ █▄█   █▀▀ █▀█ █▀▀

    define('DEBUG', 'TRUE');  // We want to see our errors!!!

    include('../weeks/week8/credentials.php');

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
//
