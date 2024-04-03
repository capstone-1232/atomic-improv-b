<?php
// This is the template for displaying the custom landing page
// @package atomic-improv
get_header();
?>

<h2 class="contact-heading">Hire us!</h2>

<section class="hire-artist-section">
    <div class="hire-artist-content">
    <p class="hire-artist-paragraph">Fill out the form below, and you can hash out the details of your next event with them!</p>
    </div>
</section>

<section class="contact-styled">
<h3 class="send-message-heading">SEND US A MESSAGE</h3>
    <?php echo do_shortcode('[ninja_form id=1 html_id_prefix="contact_form_"]'); ?>
</section>

<?php
get_footer();
?>