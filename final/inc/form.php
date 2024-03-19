<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset> 

            <table>
            <tr>
                
                <td>
                <label> First Name </label>
                <input type="text" name="first_name" value="<?php if (isset($_POST["first_name"])) {echo htmlspecialchars($_POST["first_name"]);} ?>">
                <span class="error"> <?php echo $first_name_error; ?> </span>
                </td>

                <td>
                <label> Last Name </label>
                <input type="text" name="last_name" value="<?php if (isset($_POST["last_name"])) {echo htmlspecialchars($_POST["last_name"]);} ?>">
                <span class="error"> <?php echo $last_name_error; ?> </span>
                </td>

                <td>
                <label> Email Address </label>
                <input type="email" name="email" value="<?php if (isset($_POST["email"])) {echo htmlspecialchars($_POST["email"]);} ?>">
                <span class="error"> <?php echo $email_error; ?> </span>
                </td>

                <td>
                <label> Phone Number </label>
                <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST["phone"])) {echo htmlspecialchars($_POST["phone"]);} ?>">
                <span class="error"> <?php echo $phone_error; ?> </span>
                </td>

            </tr>

            <tr> <td colspan="4" id="divider"> </td> </tr>

            <tr>
            <td>
            <label> I want to see... </label>
            <ul>
                <li>
                <input type="checkbox" name="bug_stage[]" value="Caterpillars" <?php if (isset($_POST["bug_stage"]) && in_array("Caterpillars", $bug_stage)) {echo"checked=\"checked\"";} ?> > <span class="checkbox-text">Caterpillars</span>
                </li>

                <li>
                <input type="checkbox" name="bug_stage[]" value="Pupae" <?php if (isset($_POST["bug_stage"]) && in_array("Pupae", $bug_stage)) {echo"checked=\"checked\"";} ?> > <span class="checkbox-text">Pupae</span>
                </li>

                <li>
                <input type="checkbox" name="bug_stage[]" value="Butterflies/Moths" <?php if (isset($_POST["bug_stage"]) && in_array("Butterflies/Moths", $bug_stage)) {echo"checked=\"checked\"";} ?> > <span class="checkbox-text">Butterflies/Moths</span>
                </li>
            </ul>
            <!-- Error message that displays if no bug_stage are selected: -->
            <span class="error"> <?php echo $bug_stage_error; ?> </span>
            </td>
            
            <td>
            <label> I want to be emailed... </label>
            <select name="email_rate">
                <option value="" <?php if (isset($_POST["email_rate"]) && is_null($_POST["email_rate"])) {echo "selected=\"unselected\"";} ?> > Select One! </option>

                <option value="Weekly" <?php if (isset($_POST["email_rate"]) && $_POST["email_rate"] == "Weekly") {echo "selected=\"selected\"";} ?> > Weekly </option>
                <option value="Biweekly" <?php if (isset($_POST["email_rate"]) && $_POST["email_rate"] == "Biweekly") {echo "selected=\"selected\"";} ?> > Biweekly </option>
                <option value="Monthly" <?php if (isset($_POST["email_rate"]) && $_POST["email_rate"] == "Monthly") {echo "selected=\"selected\"";} ?> > Monthly </option>

            </select>
            <span class="error"> <?php echo $email_rate_error; ?> </span>
            </td>

            <td>
            <label> Privacy Policy </label>
            <ul>
            <li>
            <input type="radio" name="privacy" value="agree" <?php if (isset($_POST["privacy"]) && $_POST["privacy"] == "agree") {echo "checked=\"checked\"";} ?> > Agree.
            </li>
            </ul>
            <span class="error"> <?php echo $privacy_error; ?> </span>
            </td>

            <td>

            <input type="submit" value="Send it!">
            <p> <a href=""> Reset Form? </a> </p>
            </td>
            </tr>

            </table>

    </fieldset>
</form>