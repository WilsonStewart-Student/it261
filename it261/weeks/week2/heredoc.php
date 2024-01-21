<?php

$heredoc_string = <<< HD
One of my favorite books is The Handmaid's Tale, written by Margaret Atwood, and is presently a miniseries on HULU. Hulu's viewing audience is extremely excited about the miniseries and looks forward to the 5th season of the award-winning "Handmaid's Tale!"

Elizabeth Moss' rendition of June is right on! I liked the show's first two seasons!
HD;

echo $heredoc_string; // Using Heredoc syntax is a way of creating long string variables without worrying about escaping quotes. You do however still need to escape dollar signs, as variable replacement is accepted.