<?php 

// Our errors file, that we will be using a foreach loop in!
// If we have errors, we need to display them. 

if (count($errors) > 0) 
?>

<div class="errors">
    <?php foreach ($errors as $error) { ?>
        <p> <?php echo $error; ?></p>
    <?php } ?>
</div> <!-- End "errors". -->

<?php
?>