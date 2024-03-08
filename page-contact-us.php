<?php

// This is the template for displaying the custom landing page

// @package atomic-improv

get_header();

?>

<h1>Contact Donovan</h1>

<section>
<h2>Hire this amazing Improv Artist</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quisquam eaque quibusdam ipsa deserunt blanditiis, harum totam rerum modi libero esse qui, nesciunt dicta odio eveniet explicabo maiores, porro voluptates?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quisquam eaque quibusdam ipsa deserunt blanditiis, harum totam rerum modi libero esse qui, nesciunt dicta odio eveniet explicabo maiores, porro voluptates?</p>
</section>

<form action="" method="post">
        <div style="display: flex;">
            <div style="flex: 1;">
            <label for="first_name">First Name:</label><br>
                <input type="text" id="first_name" name="first_name" style="border-radius: 20px;"><br>
            </div>
            <div style="flex: 1; margin-left: 10px;">
                <label for="last_name">Last Name:</label><br>
                <input type="text" id="last_name" name="last_name" style="border-radius: 20px;"><br>
            </div>
        </div>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" style="border-radius: 20px;"><br>

        <label for="contact">Contact:</label><br>
        <input type="text" id="contact" name="contact" style="border-radius: 20px;"><br>

        <label for="date">Date:</label><br>
        <input type="date" id="date" name="date" style="border-radius: 20px;"><br>

        <label for="message">Add Message:</label><br>
        <textarea id="message" name="message" style="border-radius: 20px;"></textarea><br>

        <div style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
            <input type="submit" value="Submit" style="border-radius: 20px; padding: 10px 20px; background-color: #007bff; color: #fff; border: none;">
        </div>
    </form>

<?php
get_footer();
?>