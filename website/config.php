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
            $body = "about inner";
        break;

        case "daily.php" : 
            $title = "Daily page of our Website Project";
            $body = "daily inner";
        break;

        case "project.php" : 
            $title = "Project page of our Website Project";
            $body = "project inner";
        break;

        case "contact.php" : 
            $title = "Contact page of our Website Project";
            $body = "contact inner";
        break;


        case "gallery.php" : 
            $title = "Gallery page of our Website Project";
            $body = "gallery inner";
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

    $gender = "";
    $gender_error = "";

    $phone = "";
    $phone_error = "";

    $wines = "";
    $wines_error = "";

    $regions = "";
    $regions_error = "";

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

        if (empty($_POST["gender"]))
        {
            $gender_error = "Please select your gender.";
        }
        else 
        {
            $gender = $_POST["gender"];
        }

        if (empty($_POST["phone"]))
        {
            $phone_error = "Please fill out your phone number.";
        }
        else 
        {
            $phone = $_POST["phone"];
        }

        if (empty($_POST["wines"]))
        {
            $wines_error = "What...? No wines?";
        }
        else 
        {
            $wines = $_POST["wines"];
        }

        if (empty($_POST["regions"]))
        {
            $regions_error = "Please select your region.";
        }
        else 
        {
            $regions = $_POST["regions"];
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
            $privacy_error = "You must agree to recieve spam emails!!!!!!";
        }
        else 
        {
            $privacy = $_POST["privacy"];
        }

        //

        function my_wines($wines)
        {
            $my_return = "";
            // If $_POST["wines"] is not empty, implode $_POST["wines"] and assign it to $my_return.
            if (!empty($_POST["wines"]))
            {
                $my_return = implode(', ', $_POST["wines"]);
            }
            return $my_return;
        } // Closing my_wines().

        //

        if (isset($_POST["first_name"],
        $_POST["last_name"],
        $_POST["email"],
        $_POST["gender"],
        $_POST["phone"],
        $_POST["wines"],
        $_POST["regions"],
        $_POST["comments"],
        $_POST["privacy"] ))
        {

            // Where the form data will be sent. (This is a really old email of mine.)
            $to = "lolalightningbug@gmail.com"; 
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
            Gender: $gender ".PHP_EOL."
            Phone Number: $phone ".PHP_EOL."
            Wine(s): ".my_wines($wines)." ".PHP_EOL."
            Region: $regions ".PHP_EOL."
            Comments: $comments ".PHP_EOL."
            ";
            $headers = array(
                'From' => 'lolalightningbug@gmail.com'
            );

            // If statement stating that the email part of the form will only work if all the fields are filled out.

            if (!empty($first_name 
            && $last_name 
            && $email
            && $gender
            && $phone
            && $wines
            && $regions
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
