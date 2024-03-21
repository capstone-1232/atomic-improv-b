<?php
// This is the template for displaying the custom landing page
// @package atomic-improv
get_header();
?>

<style>
/* Contact Form Styles */
.contact-styled {
    background: #0E3E66; /* Background color */
    padding: 20px; /* Padding for the form */
    border-radius: 10px; /* Border radius for the form */
    font-family: Arial, Helvetica, sans-serif;
    color: #FFFFFF; /* Text color */
}

.contact-styled h3 {
    color: #FFFFFF; /* Heading text color */
}

.contact-styled .nf-field-label {
    color: #FFFFFF; /* Label text color */
    text-transform: capitalize;
}

.contact-styled .nf-form-content input[type="text"],
.contact-styled .nf-form-content input[type="email"],
.contact-styled .nf-form-content input[type="date"],
.contact-styled .nf-form-content textarea {
    color: #000000; /* Text color for input fields */
    border-radius: 5px; /* Border radius for input fields */
    background-color: #FFFFFF; /* Background color for input fields */
    border: 1px solid #000000; /* Black border for input fields */
    padding: 10px; /* Adjust padding as needed */
}

.contact-styled .nf-form-content input[type="text"]::placeholder,
.contact-styled .nf-form-content input[type="email"]::placeholder,
.contact-styled .nf-form-content input[type="date"]::placeholder,
.contact-styled .nf-form-content textarea::placeholder {
    color: #000000; /* Text color for placeholder */
}

.contact-styled .nf-form-content input[type="submit"] {
    display: block; /* Ensure button takes full width */
    margin: 0 auto; /* Center the button horizontally */
    background: #9EB7E5; /* Button background color */
    color: #000000; /* Button text color */
    border: none; /* Remove button border */
    border-radius: 5px; /* Border radius for button */
    padding: 10px 20px; /* Adjust padding as needed */
    font-weight: bold; /* Make button text bold */
    cursor: pointer; /* Change cursor to pointer on hover */
    transition: background-color 0.3s ease; /* Add transition effect */
}


.contact-styled .nf-form-content input[type="submit"]:hover {
    background: #70EE9C; /* Button background color on hover */
    color: #000000; /* Button text color on hover */
}

.contact-styled .nf-error.field-wrap .nf-field-element:after {
    background: #e74c3c; /* Error message background color */
}

.contact-styled .nf-form-fields-required {
    margin-bottom: 10px; /* Add margin below required fields */
}

.contact-styled .nf-error .nf-error-msg {
    color: #e74c3c; /* Error message text color */
}

.contact-styled .nf-error-msg,
.ninja-forms-req-symbol {
    color: #e74c3c; /* Required symbol text color */
}

.contact-styled .nf-pass.field-wrap .nf-field-element:after {
    color: #2ecc71; /* Password strength color */
    content: "\f164";
}
/* End Contact Form Styles */
</style>

<h1 class="contact-heading">Contact Donovan</h1>

<section class="hire-artist-section">
    <h2 class="hire-artist-heading">Hire This Amazing Improv Artist</h2>
    <div class="hire-artist-content">
        <p class="hire-artist-paragraph">This guy is pretty great. You absolutely wouldn’t want to miss out on hiring him for your next event, would you?</p>
        <p>Fill out the form below, and you can hash out the details of your next event with Donovan!</p>
    </div>
</section>

<section class="contact-styled">
    <h2 style="text-align:center; padding: 2rem 0; color: #FFFFFF;">Send Donovan a message</h2>
    <?php echo do_shortcode('[ninja_form id=1]'); ?>
</section>

<?php
get_footer();
?>