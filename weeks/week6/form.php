<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title> Our First Form in Week 6 !</title>
</head>

<body>

    <h1> First form in Week 6! </h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset> 

            <legend> Contact Wilson </legend>

            <label> First Name </label>
            <input type="text" name="first_name" value="<?php if (isset($_POST["first_name"])) {echo htmlspecialchars($_POST["first_name"]);} ?>">

            <label> Last Name </label>
            <input type="text" name="last_name" value="<?php if (isset($_POST["last_name"])) {echo htmlspecialchars($_POST["last_name"]);} ?>">

            <label> Email Address </label>
            <input type="email" name="email" value="<?php if (isset($_POST["email"])) {echo htmlspecialchars($_POST["email"]);} ?>">

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

            <label> Phone Number </label>
            <input type="tel" name="phone" value="<?php if (isset($_POST["phone"])) {echo htmlspecialchars($_POST["phone"]);} ?>">

            <label> Favorite Wines </label>
            <ul>
                <li>
                <input type="checkbox" name="wines[]" value="cabernet" <?php if (isset($_POST["wines"]) && in_array("cabernet", $wines)) {echo"checked=\"checked\"";} ?> > Cabernet
                <!-- Check if value is set, and if the selected value is in our $wines array. -->
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

            <label> Regions </label>
            <select name="regions">
                <option value="" <?php if (isset($_POST["regions"]) && is_null($_POST["regions"])) {echo "selected=\"unselected\"";} ?> > Select One! </option>

                <option value="nw" <?php if (isset($_POST["regions"]) && $_POST["regions"] == "nw") {echo "selected=\"selected\"";} ?> > Northwest </option>
                <option value="sw" <?php if (isset($_POST["regions"]) && $_POST["regions"] == "sw") {echo "selected=\"selected\"";} ?> > Southwest </option>
                <option value="mw" <?php if (isset($_POST["regions"]) && $_POST["regions"] == "mw") {echo "selected=\"selected\"";} ?> > Midwest </option>
                <option value="ne" <?php if (isset($_POST["regions"]) && $_POST["regions"] == "ne") {echo "selected=\"selected\"";} ?> > Northeast </option>
                <option value="se" <?php if (isset($_POST["regions"]) && $_POST["regions"] == "se") {echo "selected=\"selected\"";} ?> > Southeast </option>
            </select>

            <label> Comments </label>
            <textarea name="comments"><?php if (isset($_POST["comments"])) {echo htmlspecialchars($_POST["comments"]);} ?></textarea>

            <label> Privacy </label>
            <ul>
            <li>
            <input type="radio" name="privacy" value="yes" <?php if (isset($_POST["privacy"]) && $_POST["privacy"] == "yes") {echo "checked=\"checked\"";} ?> > Yes
            </li>
            </ul>

            <input type="submit" value="Send it!">

            <p> <a href=""> Reset Form? </a> </p>




        </fieldset>
    </form>

</body>

</html>