<?php
include("server.php");
?>

<div id="wrapper">

<div id="main-aside">

    <h1> REGISTER </h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <fieldset>

    <!-- Form collects: first_name, last_name, email, username, password, password_confirm -->

    <label> First Name </label>
    <input type="text" name="first_name" value="<?php if (isset($_POST["first_name"])) { echo htmlspecialchars($_POST["first_name"]); } ?>">

    <label> Last Name </label>
    <input type="text" name="last_name" value="<?php if (isset($_POST["last_name"])) { echo htmlspecialchars($_POST["last_name"]); } ?>">

    <label> Email </label>
    <input type="email" name="email" value="<?php if (isset($_POST["email"])) { echo htmlspecialchars($_POST["email"]); } ?>">

    <label> Username </label>
    <input type="text" name="username" value="<?php if (isset($_POST["username"])) { echo htmlspecialchars($_POST["username"]); } ?>">

    <label> Password </label>
    <input type="password" name="password_register" value="<?php if (isset($_POST["password_register"])) { echo htmlspecialchars($_POST["password_register"]); } ?>">

    <label> Confirm your password </label>
    <input type="password" name="password_confirm" value="<?php if (isset($_POST["password_confirm"])) { echo htmlspecialchars($_POST["password_confirm"]); } ?>">

    <button type="submit" name="reg_user" class="btn"> Register </button>

    <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>'"> Reset </button>

    <?php
    include ("errors.php");
    ?>

    </fieldset>
    </form>

    <p> <a href="login.php"> Already a member? Please log in here!</a> </p>

</div> <!-- End "main-aside". -->
</div> <!-- End "wrapper". -->

<?php
include ("inc/footer.php");
?>
