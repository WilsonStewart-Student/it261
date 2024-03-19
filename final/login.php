<?php 
include("server.php");
?>
    
    <div id="wrapper">

        <div id="main-aside">
        <h1> LOGIN </h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <fieldset>

            <label> Username </label>
            <input type="text" name="username" value="<?php if (isset($_POST["username"])) { echo htmlspecialchars($_POST["username"]); } ?>">

            <label> Password </label>
            <input type="password" name="password" value="<?php if (isset($_POST["password"])) { echo htmlspecialchars($_POST["password"]); } ?>">

            <button type="submit" name="login_user" class="btn"> Login </button>

            <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>'"> Reset </button>

            <?php
            include ("errors.php");
            ?>

            </fieldset>

        </form>

        <p> <a href="register.php"> Not a member? Please register here!</a> </p>

        </div> <!-- End "main-aside" -->

    </div> <!-- End "wrapper". -->

<?php
include("inc/footer.php"); 