<?php

// This is the template for displaying the custom landing page

// @package atomic-improv

get_header();

?>

<h1 style="text-align:center; padding: 2rem 0;">Contact Donovan</h1>

<section style="padding-top: 0; padding-right: 4rem; padding-bottom: 4rem; padding-left: 4rem;">
    <h2 style="text-align:center; padding-bottom: 2rem;">Hire This Amazing Improv Artist</h2>
    <div>
        <p style="padding-top: 2rem">This guy is pretty great. You absolutely wouldn’t want to miss out on hiring him for your next event, would you?</p>

        Fill out the form below, and you can hash out the details of your next event with Donovan!</p>
    </div>
</section>

<section>
<h2 style="text-align:center; padding: 2rem 0;">Send Donovan a message</h2>
<form action="" method="post" style="text-align: center;">

    <label for="name" style="display: inline-block; text-align: left; width: 80%;">Name</label><br>
    <input type="text" id="name" name="name" style="border-radius: 20px; padding: 10px; width: 80%;"><br>

    <label for="email" style="display: inline-block; text-align: left; width: 80%;">Email</label><br>
    <input type="email" id="email" name="email" style="border-radius: 20px; padding: 10px; width: 80%;"><br>

    <label for="date" style="display: inline-block; text-align: left; width: 80%;">Requested date(s)</label><br>
    <input type="date" id="date" name="date" style="border-radius: 20px; padding: 10px; width: 80%;"><br>

    <label for="message" style="display: inline-block; text-align: left; width: 80%;">Add a message</label><br>
    <textarea id="message" name="message" style="border-radius: 20px; padding: 10px; width: 80%; height: 150px;"></textarea><br>

    <p>test</p>

    <div style="margin-top: 20px; margin-bottom: 20px;">
        <input type="submit" value="Submit" style="border-radius: 20px; padding: 10px 20px; background-color: #70EE9C; color: #000000; border: none;">
    </div>
</form>
</section>

<?php
get_footer();
?>