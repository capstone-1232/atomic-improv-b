<?php
// This is the template for displaying the custom landing page
// @package atomic-improv
get_header();
?>



<h1 class="contact-heading">Contact Donovan</h1>

<section class="hire-artist-section">
    <h2 class="hire-artist-heading">Hire This Amazing Improv Artist</h2>
    <div class="hire-artist-content">
        <p class="hire-artist-paragraph">This guy is pretty great. You absolutely wouldn’t want to miss out on hiring him for your next event, would you?</p>
        <p>Fill out the form below, and you can hash out the details of your next event with Donovan!</p>
    </div>
</section>

<section class="contact-styled">
<h2 class="send-message-heading">SEND DONOVAN A MESSAGE</h2>
    <?php echo do_shortcode('[ninja_form id=1]'); ?>
</section>

<?php
get_footer();
?>