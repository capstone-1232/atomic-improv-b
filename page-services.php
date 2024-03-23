<?php

// This is the template for displaying the custom landing page

// @package atomic-improv

get_header();

?>
<div class="container">
    <div class="services-hero">
        <h2>What do we do?</h2>
    </div>

    <section class="services-corporate">
        <h3>Corporate Events</h3>
        <img src="<?= get_template_directory_uri() ?>/img/corporate-events.webp"
        alt="Donovan with his partner, Chris, posing while a comedy show.">
        <p>Pioneers in corporate comedy shows, Atomic Improv is always professional,  incorporating the clients needs and tailoring the show to the event.  This duo delivers cutting edge comedy that keeps the crowds roaring.</p>
        <p>The award winning production has performed thousands of times across North America and Europe to rave reviews and sold out crowds. Atomic Improv will make your next corporate function a sure fire success!</p>
    </section>
    <section class="services-poy">
        <div class="poy-part-1">
            <h3>The Power of Yes</h3>
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/donovan-graham.webp" alt="Donovan Workun (left) and Graham Neil (right) in suits posing for a picture.">
                <p>Power of Yes! is a corporate workshop hosted by Graham Neil and Donovan Workun that teaches you the creative techniques of improv and how to apply them to improve your business, work, and life.</p>
                <a href="#" aria-label="Book Power of Yes" role="button">Book Power of Yes</a>
            </div>
            <span class="divider"></span>
            <div>
                <h4>Why should you say "Yes" to the Power of Yes?</h4>
                <img src="<?= get_template_directory_uri()?>/img/donovan-graham-2.webp" alt="Donovan and Graham shaking hands.">
                <p>Improv training is a proven skill-building resource with many positive applications. In fact, a recent Forbes article reports that more Fortune 500 companies are using improv to inspire creativity, communication, and productivity in their workforce.</p>
                <p>Each Power of Yes! workshop focuses on researched business principles and can be customized to meet your organization's needs. Power of Yes! will enhance your staff's ability to work as a team in an effective manner and confidently communicate with clients and each other.</p>
            </div>
            <span class="divider"></span>
            <div>
                <h4>Still not sure if the power of yes is the power for you?</h4>
                <p>We get it. Actions speak louder than words, and we’d love to show you some of our testimonies about how The Power of Yes! has helped people just like you.</p>
            </div>
        </div>
        <div class="testimonials">
            <div class="card-1">
                <p>“In these past 2 months since the workshop, we are already seeing changes  in the way our team communicates internally and externally. I would recommend this workshop for all teams, big or small!”</p>
                <span>-Conoco Phillips</span>
            </div>
            <div class="card-2">
                <p>“I laughed until my stomach hurt! Along with the laughter came excellent tips on how to be positive, work as a team and how to say Yes! These guys are good!”</p>
                <span>-MacEwan</span>
            </div>
        </div>
        <div class="poy-part-2">
            <h4>Also Starring the Talented Graham Neil!</h4>
            <img src="" alt="">
            <p>Combining quick wit, with business savvy, Graham Neil is a genius when it comes to corporate and educational workshops, especially when it comes to supporting the front-line workers through the “Power of Yes!”. </p>
            <p>With a Bachelor of Journalism, well-known as an international award-winning Senior Reporter at CTV Edmonton with over 25 years of broadcast experience on CNN and CTV National News, Graham Neil is a reliable partner of Donovan’s in his “Power of Yes!” workshops.</p>
        </div>
    </section>

    <section >
        <h3>The Funny Santa Guy</h3>
        <img src="<?= get_template_directory_uri() ?>/img/santa-donovan.webp" alt="Donovan Workun dressed as santa claus sitting on a chair.">
        <p>Ho-ho-holy smokes, who’s that funny Santa guy?! Let ThatFunnySanta bring his trademark merriment and mearth as a special treat for your holiday cheer!</p>
        <img src="" alt="">
        <p>"I don’t know if there is anyone else but "ThatFunnySanta" who could bring such magic to our children", says Janice Krissa, co-founder of the FreeStore for Ukrainian Newcomers. "In a few short hours, he made hundreds of children and adults feel important and special and was able to turn a difficult time into a magical visit and memories that will last a lifetime."</p>
        <img src="" alt="">
    </section>

</div>

<?php
get_footer();
?>
