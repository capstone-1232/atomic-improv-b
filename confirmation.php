<?php
/*
Template Name: Contact Form Confirmation
*/

get_header();

$name = $_POST['your-name']; 

echo "<div style='background-color: #0E3E66; padding: 4rem; text-align: center;'>";
echo "<h1 style='color: #FFFFFF;'>THANK YOU, $name, FOR YOUR MESSAGE!</h1>";
echo "<h2 style='color: #FFFFFF;'>DONOVAN WILL CONTACT YOU SHORTLY.</h2>";
echo "<a href='" . home_url() . "' class='custom-button'>BACK TO HOME</a>";
echo "</div>";

get_footer();
?>