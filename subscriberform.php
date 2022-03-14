<?php
if($_POST["message"]) {
mail("smahendrancs@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: smahendrancs@gmail.com");
}
?>
