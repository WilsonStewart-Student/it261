<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset> 

            <legend> Contact Wilson </legend>

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
            <label> Favorite Pony Species </label>
            <ul>
                <li>
                <input type="checkbox" name="species[]" value="earth pony" <?php if (isset($_POST["species"]) && in_array("earth pony", $species)) {echo"checked=\"checked\"";} ?> > <span class="checkbox-text">Earth Pony</span>
                </li>

                <li>
                <input type="checkbox" name="species[]" value="pegasus" <?php if (isset($_POST["species"]) && in_array("pegasus", $species)) {echo"checked=\"checked\"";} ?> > <span class="checkbox-text">Pegasus</span>
                </li>

                <li>
                <input type="checkbox" name="species[]" value="unicorn" <?php if (isset($_POST["species"]) && in_array("unicorn", $species)) {echo"checked=\"checked\"";} ?> > <span class="checkbox-text">Unicorn</span>
                </li>

                <li>
                <input type="checkbox" name="species[]" value="alicorn" <?php if (isset($_POST["species"]) && in_array("alicorn", $species)) {echo"checked=\"checked\"";} ?> > <span class="checkbox-text">Alicorn</span>
                </li>

                <li>
                <input type="checkbox" name="species[]" value="changeling" <?php if (isset($_POST["species"]) && in_array("changeling", $species)) {echo"checked=\"checked\"";} ?> > <span class="checkbox-text">Changeling</span>
                </li>
            </ul>
            <!-- Error message that displays if no species are selected: -->
            <span class="error"> <?php echo $species_error; ?> </span>
            </td>
            
            <td>
            <label> Favorite Mane 6 Pony </label>
            <select name="mane6">
                <option value="" <?php if (isset($_POST["mane6"]) && is_null($_POST["mane6"])) {echo "selected=\"unselected\"";} ?> > Select One! </option>

                <option value="Twilight Sparkle" <?php if (isset($_POST["mane6"]) && $_POST["mane6"] == "Twilight Sparkle") {echo "selected=\"selected\"";} ?> > Twilight Sparkle </option>
                <option value="Fluttershy" <?php if (isset($_POST["mane6"]) && $_POST["mane6"] == "Fluttershy") {echo "selected=\"selected\"";} ?> > Fluttershy </option>
                <option value="Applejack" <?php if (isset($_POST["mane6"]) && $_POST["mane6"] == "Applejack") {echo "selected=\"selected\"";} ?> > Applejack </option>
                <option value="Pinkie Pie" <?php if (isset($_POST["mane6"]) && $_POST["mane6"] == "Pinkie Pie") {echo "selected=\"selected\"";} ?> > Pinkie Pie </option>
                <option value="Rarity" <?php if (isset($_POST["mane6"]) && $_POST["mane6"] == "Rarity") {echo "selected=\"selected\"";} ?> > Rarity </option>
                <option value="Rainbow Dash" <?php if (isset($_POST["mane6"]) && $_POST["mane6"] == "Rainbow Dash") {echo "selected=\"selected\"";} ?> > Rainbow Dash </option>
            </select>
            <span class="error"> <?php echo $mane6_error; ?> </span>
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
            <label> Your Comments </label>
            <textarea name="comments"><?php if (isset($_POST["comments"])) {echo htmlspecialchars($_POST["comments"]);} ?></textarea>
            <span class="error"> <?php echo $comments_error; ?> </span>

            <input type="submit" value="Send it!">
            <p> <a href=""> Reset Form? </a> </p>
            </td>
            </tr>

            </table>

    </fieldset>
</form>