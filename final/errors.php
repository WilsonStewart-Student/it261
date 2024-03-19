<?php 

// Our errors file, that we will be using a foreach loop in!
// If we have errors, we need to display them. 

if (count($errors) > 0) 
?>

<div>
    <?php foreach ($errors as $error) { ?>
        <?php echo "<span class=\"error\"> $error </span>"; ?>
    <?php } ?>
</div> <!-- End "errors". -->

<?php
?>