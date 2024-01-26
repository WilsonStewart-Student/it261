<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title> Form 3 Inside my HTML </title>
</head>

<body>

    <h1> My "form3.php"! </h1>

    <form action="" method="post">
        <fieldset>

        <label> First Name </label>
        <input type="text" name="first_name">

        <label> Last Name </label>
        <input type="text" name="last_name">

        <label> Email </label>
        <input type="email" name="email">

        <label> Comments </label>
        <textarea name="comments"> </textarea>

        <input type="submit" value="Send it!">

        <p> <a href=""> RESET </a> </p>

        </fieldset>
    </form>

    <?php

    if(isset($_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["comments"])) // If our variables have been set through our form:
    {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $comments = $_POST["comments"];
    
        if (empty($_POST["first_name"] && $_POST["last_name"] && $_POST["email"] && $_POST["comments"])) // If they're set, but one or more are empty:
        // if (empty($_POST["first_name"]) || empty($_POST["last_name"]) || empty($_POST["email"]) || empty($_POST["comments"]))
        // Above commented because I was confused about the usage of && instead of || in our if statement.
        // I guess if it's done within ONE function you use &&, but if you separate the functions you use ||? And it doesn't work the other way around...
        {
            echo "<p class=\"error\"> Please fill out all of the fields! </p>";
        }
        else // If they're set, but all filled out:
        {
            echo "
            <div class=\"box\">

            <h2> Hello $first_name $last_name! </h2>
            <p> We have recieved your <b>email as:</b> $email and will be reviewing your <b>comments:</b> $comments </p>

            </div>
            ";
        }
    } 

    ?>

</body>

</html>