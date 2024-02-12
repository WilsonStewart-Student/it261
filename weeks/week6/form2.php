<?php

    ob_start();


    // To get the message to actually send on DreamHost I need to use PHPMailer...
    use PHPMailer\PHPMailer\PHPMailer;

    // Important because PHPMailer likes to not tell me what the problem is on it's own...!!!
    ini_set('display_errors', 1);

    // Exception class.
    require '../../PHPMailer/src/Exception.php';

    // The main PHPMailer class.
    require '../../PHPMailer/src/PHPMailer.php';

    // SMTP class.
    require '../../PHPMailer/src/SMTP.php';

    // Just the file that contains the username and password for the burner Gmail I used. 
    // The info doesn't really matter but IDK.
    include '../../login-NOGITHUB.php';


    $email = new PHPMailer();

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
                $mail = new PHPMailer(true);
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
                    echo "Uh oh, you're not supposed to see this error... I even echoed it before the HTML, so it looks real bad!";
                    echo $mail->Body;
                } else {
                    header("Location:thx.php");
                }
            }

        } // Closing isset().

    } // Closing $_SERVER["REQUEST_METHOD"].

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title> Our Second Form in Week 6! </title>
</head>

<body>

    <h1> Second form in Week 6! </h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset> 

            <legend> Contact Wilson </legend>

            <label> First Name </label>
            <input type="text" name="first_name" value="<?php if (isset($_POST["first_name"])) {echo htmlspecialchars($_POST["first_name"]);} ?>">
            <!-- Error message that displays if no name is entered: -->
            <span class="error"> <?php echo $first_name_error; ?> </span>

            <label> Last Name </label>
            <input type="text" name="last_name" value="<?php if (isset($_POST["last_name"])) {echo htmlspecialchars($_POST["last_name"]);} ?>">
            <span class="error"> <?php echo $last_name_error; ?> </span>

            <label> Email Address </label>
            <input type="email" name="email" value="<?php if (isset($_POST["email"])) {echo htmlspecialchars($_POST["email"]);} ?>">
            <span class="error"> <?php echo $email_error; ?> </span>

            <label> Gender </label>
            <ul>
                <li>
                <input type="radio" name="gender" value="female" <?php if (isset($_POST["gender"]) && $_POST["gender"] == "female") {echo "checked=\"checked\"";} ?>> Female
                </li>
                <li>
                <input type="radio" name="gender" value="male" <?php if (isset($_POST["gender"]) && $_POST["gender"] == "male") {echo "checked=\"checked\"";} ?>> Male
                </li>
                <li>
                <input type="radio" name="gender" value="other" <?php if (isset($_POST["gender"]) && $_POST["gender"] == "other") {echo "checked=\"checked\"";} ?> > Other
                </li>
            </ul>
            <span class="error"> <?php echo $gender_error; ?> </span>

            <label> Phone Number </label>
            <input type="tel" name="phone" value="<?php if (isset($_POST["phone"])) {echo htmlspecialchars($_POST["phone"]);} ?>">
            <span class="error"> <?php echo $phone_error; ?> </span>

            <label> Favorite Wines </label>
            <ul>
                <li>
                <!-- Check if value is set, and if the selected value is in our $wines array: -->
                <input type="checkbox" name="wines[]" value="cabernet" <?php if (isset($_POST["wines"]) && in_array("cabernet", $wines)) {echo"checked=\"checked\"";} ?> > Cabernet
                </li>

                <li>
                <input type="checkbox" name="wines[]" value="merlot" <?php if (isset($_POST["wines"]) && in_array("merlot", $wines)) {echo"checked=\"checked\"";} ?> > Merlot
                </li>

                <li>
                <input type="checkbox" name="wines[]" value="syrah" <?php if (isset($_POST["wines"]) && in_array("syrah", $wines)) {echo"checked=\"checked\"";} ?> > Syrah
                </li>

                <li>
                <input type="checkbox" name="wines[]" value="malbac" <?php if (isset($_POST["wines"]) && in_array("malbac", $wines)) {echo"checked=\"checked\"";} ?> > Malbac
                </li>

                <li>
                <input type="checkbox" name="wines[]" value="redblend" <?php if (isset($_POST["wines"]) && in_array("redblend", $wines)) {echo"checked=\"checked\"";} ?> > Red Blend
                </li>
            </ul>
            <!-- Error message that displays if no wines are selected: -->
            <span class="error"> <?php echo $wines_error; ?> </span>

            <label> Regions </label>
            <select name="regions">
                <option value="" <?php if (isset($_POST["regions"]) && is_null($_POST["regions"])) {echo "selected=\"unselected\"";} ?> > Select One! </option>

                <option value="nw" <?php if (isset($_POST["regions"]) && $_POST["regions"] == "nw") {echo "selected=\"selected\"";} ?> > Northwest </option>
                <option value="sw" <?php if (isset($_POST["regions"]) && $_POST["regions"] == "sw") {echo "selected=\"selected\"";} ?> > Southwest </option>
                <option value="mw" <?php if (isset($_POST["regions"]) && $_POST["regions"] == "mw") {echo "selected=\"selected\"";} ?> > Midwest </option>
                <option value="ne" <?php if (isset($_POST["regions"]) && $_POST["regions"] == "ne") {echo "selected=\"selected\"";} ?> > Northeast </option>
                <option value="se" <?php if (isset($_POST["regions"]) && $_POST["regions"] == "se") {echo "selected=\"selected\"";} ?> > Southeast </option>
            </select>
            <span class="error"> <?php echo $regions_error; ?> </span>

            <label> Comments </label>
            <textarea name="comments"><?php if (isset($_POST["comments"])) {echo htmlspecialchars($_POST["comments"]);} ?></textarea>
            <span class="error"> <?php echo $comments_error; ?> </span>

            <label> Privacy </label>
            <ul>
            <li>
            <input type="radio" name="privacy" value="yes" <?php if (isset($_POST["privacy"]) && $_POST["privacy"] == "yes") {echo "checked=\"checked\"";} ?> > Yes
            </li>
            </ul>
            <span class="error"> <?php echo $privacy_error; ?> </span>

            <input type="submit" value="Send it!">

            <p> <a href=""> Reset Form? </a> </p>




        </fieldset>
    </form>

</body>

</html>