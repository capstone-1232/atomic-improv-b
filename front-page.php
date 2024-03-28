<?php

// This is the template for displaying the custom landing page

// @package atomic-improv

get_header();

?>

<section class="home-hero">
    <div class="tagline">
        <h2>
            <span>"We make the evening</span>
            <span>all about you"</span>
        </h2>
        <a href="<?= esc_url(get_permalink(12)); ?>" aria-label="Book a Show" role="button">Book a Show!</a>
    </div>
</section>

<div class="info-blurb">
    <p>The Atomic Improv Co. is Canada's Premier two man Improv troupe that has been creating comedy on the spot based entirely on audience suggestions since 1990.</p>
    <p>Their unique and customized comedy show is the perfect for any size and type of event. From corporate retreats and workshops at parties, they can take your event from “Hum Drum” to hilarious at Atomic speeds!</p>
</div>

<section class="home-services">
    <h2>Beyond the Improv!</h2>
    <div class="home-poy">
        <h3>Power of Yes!</h3>
        <img src="<?= get_template_directory_uri() ?>/img/poy.webp" alt="Power of yes logo">
        <p>Take an innovative approach to team building and communication with “The Power of Yes”.</p>
    </div>
    <div class="divider"></div>
    <div class="home-santa">
        <h3>That Funny Santa!</h3>
        <img src="<?= get_template_directory_uri() ?>/img/sm/santa2.webp" alt="Donovan Dressed as a Santa, sitting on a wide chair with two black dogs in his lap and laughing.">
        <p>Christmas is a magical time of year and there is nothing more special than bringing to your event!</p>
        <p>Let ThatFunnySanta bring his trademark merriment and mirth as a special treat to your holiday cheer!</p>
        <a href="<?= esc_url(get_permalink(8)); ?>" aria-label="Discover More" role="button">Discover More</a>
    </div>    
</section>

<section class="home-about">
    <h2>Who is Atomic Improv?</h2>
    <!-- <video src=""></video> -->
    <p>Three-time world Improv Champion and Canadian comedy award winning Donovan Workun and professional improviser of
        over 11 years Chris Borger form Atomic Improv, Canada’s premier improv comedy show.</p>
    <a href="<?= esc_url(get_permalink(10)); ?>" aria-label="Get to know more about Donovan" role="button">Get to know
        more</a>

    <div class="socials">
        <h3>Check out the Social Media!</h3>
        <img src="<?= get_template_directory_uri() ?>/img/sm/socialmedialookin.webp" alt="Donovan wants you to check out the Social Media.">
        <div class="social-links">
            <a href="https://www.instagram.com/atomicimprov/" aria-label="Instagram Link">
                <svg viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                        fill="#0F0F0F" />
                    <path
                        d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                        fill="#0F0F0F" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z"
                        fill="#0F0F0F" />
                </svg>
            </a>
            <a href="https://www.facebook.com/donovan.workun" aria-label="Facebook Link">
                <svg viewBox="0 0 24.00 24.00"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.048"></g><g id="SVGRepo_iconCarrier"> <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z"></path> </g>
            </svg></a>
            <a href="" aria-label="Youtube Link">
                <svg viewBox="0 -3 20 20">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-300.000000, -7442.000000)" fill="#000000">
                            <g transform="translate(56.000000, 160.000000)">
                                <path
                                    d="M251.988432,7291.58588 L251.988432,7285.97425 C253.980638,7286.91168 255.523602,7287.8172 257.348463,7288.79353 C255.843351,7289.62824 253.980638,7290.56468 251.988432,7291.58588 M263.090998,7283.18289 C262.747343,7282.73013 262.161634,7282.37809 261.538073,7282.26141 C259.705243,7281.91336 248.270974,7281.91237 246.439141,7282.26141 C245.939097,7282.35515 245.493839,7282.58153 245.111335,7282.93357 C243.49964,7284.42947 244.004664,7292.45151 244.393145,7293.75096 C244.556505,7294.31342 244.767679,7294.71931 245.033639,7294.98558 C245.376298,7295.33761 245.845463,7295.57995 246.384355,7295.68865 C247.893451,7296.0008 255.668037,7296.17532 261.506198,7295.73552 C262.044094,7295.64178 262.520231,7295.39147 262.895762,7295.02447 C264.385932,7293.53455 264.28433,7285.06174 263.090998,7283.18289">
                                </path>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
            <a href="" aria-label="TikTok Link">
                <svg fill="#ffffff" viewBox="-7.68 -7.68 47.36 47.36"><g stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-7.68" y="-7.68" width="47.36" height="47.36" rx="23.68" fill="#000000" strokewidth="0"></rect></g><g stroke-linecap="round" stroke-linejoin="round"></g><g><path d="M16.656 1.029c1.637-0.025 3.262-0.012 4.886-0.025 0.054 2.031 0.878 3.859 2.189 5.213l-0.002-0.002c1.411 1.271 3.247 2.095 5.271 2.235l0.028 0.002v5.036c-1.912-0.048-3.71-0.489-5.331-1.247l0.082 0.034c-0.784-0.377-1.447-0.764-2.077-1.196l0.052 0.034c-0.012 3.649 0.012 7.298-0.025 10.934-0.103 1.853-0.719 3.543-1.707 4.954l0.020-0.031c-1.652 2.366-4.328 3.919-7.371 4.011l-0.014 0c-0.123 0.006-0.268 0.009-0.414 0.009-1.73 0-3.347-0.482-4.725-1.319l0.040 0.023c-2.508-1.509-4.238-4.091-4.558-7.094l-0.004-0.041c-0.025-0.625-0.037-1.25-0.012-1.862 0.49-4.779 4.494-8.476 9.361-8.476 0.547 0 1.083 0.047 1.604 0.136l-0.056-0.008c0.025 1.849-0.050 3.699-0.050 5.548-0.423-0.153-0.911-0.242-1.42-0.242-1.868 0-3.457 1.194-4.045 2.861l-0.009 0.030c-0.133 0.427-0.21 0.918-0.21 1.426 0 0.206 0.013 0.41 0.037 0.61l-0.002-0.024c0.332 2.046 2.086 3.59 4.201 3.59 0.061 0 0.121-0.001 0.181-0.004l-0.009 0c1.463-0.044 2.733-0.831 3.451-1.994l0.010-0.018c0.267-0.372 0.45-0.822 0.511-1.311l0.001-0.014c0.125-2.237 0.075-4.461 0.087-6.698 0.012-5.036-0.012-10.060 0.025-15.083z"></path> </g></svg>
            </a>
        </div>
    </div>
</section>

<section class="home-testimonials">
    <h2>What do people say about Us?</h2>
    <div class="testimonial-card">
        <p><span>“An absolute gut-buster...<br>A festival of belly-laughs!”</span></p>
        <span>-Edmonton Journal</span>
    </div>
    <div class="testimonial-card">
        <p><span>"Workun deserves an
            <br>Improv Oscar"</span></p>
        <span>-Edie Ranvier,<br>
        The Reviews Hub</span>
    </div>
</section>

<section class="upcoming-events">
    <h2>Catch Atomic Improv at:</h2>
    <?php
    $args = array(
        'post_type' => 'upcoming_events',
        'posts_per_page' => 1,
    );

    $upcoming_events = new WP_Query($args);

    if ($upcoming_events->have_posts()):
        while ($upcoming_events->have_posts()):
            $upcoming_events->the_post();

            // Retrieve custom field values
            $event_name = get_field('event_name');
            $event_description = get_field('event_description');
            $event_location = get_field('event_location');
            $event_date_time = get_field('date_time');
            $event_ticket_link = get_field('ticket_link');

            $image = get_field('event_image');
            $size = 'full';

            ?>
                    <?php if ($image) {
                        echo wp_get_attachment_image($image, $size);
                    }
                    ; ?>
                    <h3>
                        <?= $event_name ?>
            </h3>
            <p>
                <?= $event_description ?>
            </p>
            <div class="event-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                    <path
                        d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z" />
                </svg>
                <p>
                    <?= $event_date_time ?>
                </p>
            </div>
            <div class="event-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                    <path
                        d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                </svg>
                <p>
                    <?= $event_location ?>
                </p>
            </div>
            <a href="<?= $event_ticket_link ?>" aria-label="Get Tickets" role="button">Get Tickets</a>


            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data       ?>
    <?php else:
        echo '<p>No upcoming events for now.</p>';
    endif;
    ?>

</section>

<?php
get_footer();
?>
