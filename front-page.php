<?php

// This is the template for displaying the custom landing page

// @package atomic-improv

get_header();

?>

<section class="hero">
    <div>
        <h1>
            <span>"We make the</span>
            <span>evening</span>
            <span>all about you"</span>
        </h1>
        <span>-Donovan Workun</span>
    </div>
    
    <div>
        <img src="" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti quo eligendi numquam iusto voluptas animi, omnis alias ullam facere delectus consequatur, nulla eum eveniet atque dolorem. Debitis soluta est dolorum.</p>
        <button>Book A Show</button>
    </div>
</section>

<section>
    <h2>What does he do?</h2>
    <div>
        <h3>Corporate Events</h3>
        <img src="" alt="">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem, ad harum? Eos qui expedita iure aliquid omnis dicta enim libero provident sunt voluptatibus necessitatibus reiciendis, quae voluptatum ratione quam officiis!</p>
    </div>
    <div>
        <h3>Power of Yes!</h3>
        <img src="" alt="">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci maxime nihil mollitia recusandae doloribus in unde, impedit corporis quis vitae, deleniti molestias magni suscipit laborum eos ducimus labore nobis voluptas?</p>
    </div>
    <div>
        <h3>Improv Classes for Kids</h3>
        <img src="" alt="">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero culpa officia, nesciunt quasi maxime eos sapiente eligendi porro vel id reiciendis ipsum sed ad dolor quidem tempora. Beatae, quae nam.</p>
    </div>
</section>

<section>
    <h2>Who is this comedic genius?</h2>
    <video src=""></video>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis earum quos recusandae sint et minus nam corporis nostrum magni eligendi saepe reiciendis nihil impedit ad cumque, maxime expedita repellat voluptate.</p>
    <button>Learn more</button>

    <div>
        ---Soial Links Here---
    </div>
</section>

<section>
    <h2>What do people say about him?</h2>
    <div>
        <h3>Testimonial #1</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptatem quibusdam dolor delectus laborum totam fugiat soluta animi dolores. Cum saepe iste corrupti minima aliquam delectus animi unde deleniti eum.</p>
    </div>
    <div>
        <h3>Testimonial #2</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi consequatur, error libero ad natus fugiat, hic quo fuga corporis possimus unde deserunt, aut ratione cupiditate officia! Totam nihil officiis est!</p>
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
                <p><?= $event_date_time?></p>
                <p><?= $event_location?></p>
                <button> <a href="<?= $event_ticket_link ?>">Get Tickets</a></button>


    <?php
            endwhile;
            wp_reset_postdata(); // Reset the post data?>
        <?php else :
            echo '<p>No upcoming events found.</p>';
        endif;
    ?>

    <h2>Upcoming Events</h2>
    <img src="" alt="">

</section> <!-- This will be dynamic content. Create loop here! -->

<?php
get_footer();
?>
