<?php

// This is the template for displaying the custom landing page

// @package atomic-improv

get_header();

?>

<section class="hero">
    <div>
        <h2>
            <span>"We make the evening</span>
            <span>all about you"</span>
        </h2>
        <span>-Donovan Workun</span>
    </div>
    
    <div>
        <p>With over thirty years of professional side-splitting jokes and impeccable talent to make anyone laugh, Atomic Improv’s interactive and hilarious shows are a perfect fit for any audience. Fast, funny and tailored to the crowd, Atomic Improv never fails to impress.</p>
        <p>When you’re with Atomic Improv, you’re not just watching a show…</p>
        <span>You're a part of it!</span>
        <a href="<?= esc_url(get_permalink(12));?>">Book a Show!</a>
    </div>
</section>

<section>
    <h2>What does he do?</h2>
    <div>
        <h3>Corporate Events</h3>
        <img src="<?= get_template_directory_uri();?>/img/corporate-events.png" alt="Donovan with his partner, Chris, posing in a comedy show.">
        <p>When you’re looking to host a memorable corporate event – look no further than Atomic Improv!</p>
    </div>
    <div class="divider"></div>
    <div>
        <h3>Power of Yes!</h3>
        <img src="<?= get_template_directory_uri()?>/img/poy.png" alt="Power of yes logo">
        <p>Take an innovative approach to team building and communication with “The Power of Yes”.</p>
    </div>
    <div>
        <h3>Who's that funny santa guy?</h3>
        <img src="<?= get_template_directory_uri()?>/img/santa-guy.png" alt="Donovan Dressed as a Santa, sitting on a wide chair with two black dogs in his lap and laughing.">
        <p>Naughty or nice, we will be telling you twice - come see Donovan this xmas as Santa Claus!</p>
    </div>
    <div class="divider"></div>
    <a href="<?= esc_url(get_permalink(8));?>">Discover More</a>
</section>

<section>
    <h2>Who is this comedic genius?</h2>
    <!-- <video src=""></video> -->
    <p>Three-time world Improv Champ Donovan Workun is an absolute comedic genius. Starring in multiple movies, TV shows and radio programs, this is one legendary comedian you don’t want to miss.</p>
    <p>But that just leaves the question...</p>
    <p>Who is he? Come find out more!</p>
    <a href="<?= esc_url(get_permalink(10)); ?>">Get to know more</a>

    <h3>Checkout his Social Media</h3>
    <div>
        <a href="https://www.facebook.com/donovan.workun">Facebook</a>
        <a href="#">Twitter</a>
        <a href="https://www.instagram.com/atomicimprov/">Instagram</a>
    </div>
</section>

<section>
    <h2>What do people say about him?</h2>
    <div>
        <p><span>“An absolute gut-buster...</span> 
        <span>A festival of belly-laughs!”</span></p>
        <span>-Edmonton Journal</span>
    </div>
    <div>
        <p><span>"Workun deserves an</span>
        <span>Improv Oscar"</span></p>
        <span>-Edie Ranvier,</span>
        <span>The Reviews Hub</span>
    </div>
</section>

<section>
    <h2>Upcoming Events</h2>
    <?php
        $args = array(
            'post_type' => 'upcoming_events',
            'posts_per_page' => -1, 
        );

        $upcoming_events = new WP_Query($args);

        if ($upcoming_events->have_posts()) :
            while ($upcoming_events->have_posts()) : $upcoming_events->the_post();

                // Retrieve custom field values
                $event_name = get_field('event_name');
                $event_description = get_field('event_description');
                $event_location = get_field('event_location');
                $event_date_time = get_field('date_time');
                $event_ticket_link = get_field('ticket_link');

                $image = get_field('event_image');
                $size = 'full';

    ?>
                <h3><?= $event_name ?></h3>
                <?php if ($image){
                    echo wp_get_attachment_image($image, $size);
                }; ?>
                <p><?= $event_description ?></p>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/></svg>
                    <p><?= $event_date_time?></p>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>
                    <p><?= $event_location?></p>
                </div>
                <a href="<?= $event_ticket_link ?>">Get Tickets</a>


    <?php
            endwhile;
            wp_reset_postdata(); // Reset the post data?>
        <?php else :
            echo '<p>No upcoming events for now.</p>';
        endif;
    ?>

</section>

<?php
get_footer();
?>
