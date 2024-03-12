<?php

// This is the template for displaying the custom landing page

// @package atomic-improv

get_header();

?>

<div>
    <h1>Services</h1>
</div>

<div>
    <section >
        <h2>Corporate Events</h2>
        <img src="<?= get_template_directory_uri()?>/img/corporate-events.webp" alt="Donovan with his partner, Chris, posing while a comedy show.">
        <p>Pioneers in corporate comedy shows, Atomic Improv is always professional,  incorporating the clients needs and tailoring the show to the event.  This duo delivers cutting edge comedy that keeps the crowds roaring.</p>
        <p>The award winning production has performed thousands  of times across North America and Europe to rave reviews and sold out  crowds. Atomic Improv will make your next corporate function a sure fire success!</p>
        <a href="#" aria-label="Book Corporate Event">Book Corporate Event</a>
    </section>

    <section >
        <h2>The Power of Yes</h2>
        <img src="<?= get_template_directory_uri()?>/img/poy.webp" alt="Power of yes logo.">
        <div>
            <h3>What is it?</h3>
            <img src="<?= get_template_directory_uri() ?>/img/donovan-graham.webp" alt="Donovan Workun (left) and Graham Neil (right) in suits posing for a picture.">
            <p>Power of Yes! is a corporate workshop hosted by Graham Neil and Donovan Workun that teaches you the creative techniques of improv and how to apply them to improve your business, work, and life.</p>
            <span class="divider"></span>
        </div>

        <div>
            <h3>Why should you say "Yes" to the Powe of Yes?</h3>
            <img src="<?= get_template_directory_uri()?>/img/donovan-graham-2.webp" alt="Donovan and Graham shaking hands.">
            <p>Improv training is a proven skill-building resource with many positive applications. In fact, a recent Forbes article reports that more Fortune 500 companies are using improv to inspire creativity, communication, and productivity in their workforce.</p>
            <p>Each Power of Yes! workshop focuses on researched business principles and can be customized to meet your organization's needs. Power of Yes! will enhance your staff's ability to work as a team in an effective manner and confidently communicate with clients and each other.</p>
            <span class="divider"></span>
        </div>

        <div>
            <h3>Still not sure if the power of yes is the power for you?</h3>
            <p>We get it. Actions speak louder than words, and we’d love to show you some of our testimonies about how The Power of Yes! has helped people just like you.</p>
        </div>

        <div>
            <div>
                <p>“In these past 2 months since the workshop, we are already seeing changes  in the way our team communicates internally and externally. I would recommend this workshop for all teams, big or small!”</p>
                <span>-Conoco Phillips</span>
            </div>
            <div>
                <p>“I laughed until my stomach hurt! Along with the laughter came excellent tips on how to be positive, work as a team and how to say Yes! These guys are good!”</p>
                <span>-MacEwan</span>
            </div>
        </div>

        <a href="#" aria-label="Book Power of Yes">Book Power of Yes</a>
    </section>

    <section >
        <h2>The Funny Santa Guy</h2>
        <img src="<?= get_template_directory_uri() ?>/img/santa-donovan.webp" alt="Donovan Workun dressed as santa claus sitting on a chair.">
        <p>Ho-ho-holy smokes, is that Donovan Workun guest starring as Santa Claus?! You’d better believe it!</p>
        <p>Coming to a location near you this winter, Donovan’s bringing holiday cheer and joy to you and your community. When you call on this jovial Santa for your event, you’re guaranteed Christmas cheer for the whole family. From pet-friendly photo shoots to an overall festive spirit, Donovan never fails to impress and bring good cheer to your community.</p>
        <a href="#" aria-label="Book the Santa Guy">Book the Santa Guy</a>
    </section>

</div>

<?php
get_footer();
?>
