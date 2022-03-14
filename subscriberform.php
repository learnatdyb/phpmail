<?php
if($_POST["Message"]) {
mail("smahendrancs@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: smahendrancs@gmail.com");
}
?>
