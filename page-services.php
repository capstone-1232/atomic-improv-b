<?php

// This is the template for displaying the custom landing page

// @package atomic-improv

get_header();

?>

<div class="services-hero">
    <h2>What We Do</h2>
    <img src="<?= get_template_directory_uri() ?>/img/lg/whatdowedo-hero.webp" alt="Chris and Donovan contemplate their funniest moments to tell you about.">
</div>
<div class="light-bg">
    <section class="services-corporate">
        <h3>Corporate Shows</h3>
        <div class="corp-flex">
            <picture class="md-img lg-img">
                <source srcset="<?= get_template_directory_uri() ?>/img/sm/corposhowssm.webp" media="(max-width: 500px)">
                <source srcset="<?= get_template_directory_uri() ?>/img/md/corposhowsmd.webp" media="(max-width: 800px)">
                <img src="<?= get_template_directory_uri() ?>/img/lg/corposhowslg.webp" alt="Donovan Workun (left) and Chris Borger (right) pointing their finger at the camera to encourage you to read about what they do.">
            </picture>
            <div class="corp-text">
                <p>Pioneers in corporate comedy shows, Atomic Improv is always professional, incorporating the clients needs and tailoring the show to the event. This duo delivers cutting edge comedy that keeps the crowds roaring.</p>
                <p>The award winning production has performed thousands of shows across North America and Europe to rave reviews and sold out crowds. Atomic Improv will make your next corporate function a sure fire success!</p>
            </div>
        </div>
    </section>
    <section class="services-poy">
        <div class="poy-part-1">
            <h3>The Power of Yes</h3>
            <div class="poy-grid">
                <picture class="md-img lg-img">
                    <source srcset="<?= get_template_directory_uri() ?>/img/sm/powerofyesgraham.webp" media="(max-width: 500px)">
                    <source srcset="<?= get_template_directory_uri() ?>/img/md/powerofyesgraham.webp" media="(max-width: 800px)">
                    <img src="<?= get_template_directory_uri() ?>/img/lg/powerofyesgraham.webp" alt="Donovan Workun (left) and Graham Neil (right) in suits posing for a picture.">
                </picture>
                <div class="poy-grid-content">
                    <p>Power of Yes! is a corporate workshop hosted by Graham Neil and Donovan Workun that teaches you active listening, positivity and empathy in collaboration all through fun and simple improv techniques that will move your business forward.</p>
                    <a href="<?= site_url();?>/contact-us" aria-label="Book Power of Yes" role="button">Book Power of Yes</a>
                </div>
            </div>

            <span class="divider"></span>
            <div>
                <h4>Why should you say "Yes" to the Power of Yes?</h4>
                <div class="poy-grid-rev">
                    <picture class="md-img lg-img">
                        <source srcset="<?= get_template_directory_uri() ?>/img/sm/powerofyes2sm.webp" media="(max-width: 500px)">
                        <source srcset="<?= get_template_directory_uri() ?>/img/md/powerofyes2md.webp" media="(max-width: 800px)">
                        <img src="<?= get_template_directory_uri() ?>/img/lg/powerofyes2lg.webp" alt="Donovan Workun (left) and Chris Borger (right) are plotting on how to help you say Yes! to the Power of Yes.">
                    </picture>
                    <div class="poy-grid-content-rev">
                        <p>Improv training is a proven skill-building resource with many positive applications. In fact, a recent Forbes article reports that more Fortune 500 companies are using improv to inspire creativity, communication, and productivity in their workforce.</p>
                        <p>Each Power of Yes! workshop focuses on researched business principles and can be customized to meet your organization's needs. Power of Yes! will enhance your staff's ability to work as a team in an effective manner and confidently communicate with clients and each other.</p>
                    </div>
                </div>
            </div>
            <span class="divider"></span>
        </div>
        <div class="testimonials">
            <div class="poy-testimonial">
                <h4>Still not sure if the power of yes is the power for you?</h4>
                <p>We get it. Actions speak louder than words, and we’d love to show you some of our testimonies about how The Power of Yes! has helped people just like you.</p>
            </div>
            <div class="card-grid">
                <div class="card-1">
                    <p>“In these past 2 months since the workshop, we are already seeing changes in the way our team communicates internally and externally. I would recommend this workshop for all teams, big or small!”</p>
                    <span>Conoco Phillips</span>
                </div>
                <div class="card-2">
                    <p>“I laughed until my stomach hurt! Along with the laughter came excellent tips on how to be positive, work as a team and how to say Yes! These guys are good!”</p>
                    <span>MacEwan</span>
                </div>
            </div>
        </div>
        <div class="poy-part-2">
            <h4>Also Starring the Talented Graham Neil!</h4>
            <div class="poy-grid">
                <picture class="md-img lg-img">
                    <source srcset="<?= get_template_directory_uri() ?>/img/sm/grahamneilsm.webp" media="(max-width: 500px)">
                    <source srcset="<?= get_template_directory_uri() ?>/img/md/grahamneilmd.webp" media="(max-width: 800px)">
                    <img src="<?= get_template_directory_uri() ?>/img/lg/grahamneillg.webp" alt="Award-winning Senior Reporter Graham Neil, with Donovan Workun looking over his shoulder.">
                </picture>
                <div class="poy-grid-content">

                    <p>Combining quick wit, with business savvy, Graham Neil is a genius when it comes to corporate and educational workshops, especially when it comes to supporting the front-line workers through the “Power of Yes!”. </p>
                    <p>With a Bachelor of Journalism and well-known as an international award-winning Senior Reporter at CTV Edmonton with over 25 years of broadcast experience on CNN and CTV National News, Graham Neil is a reliable partner of Donovan’s in his “Power of Yes!” workshops.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="services-santa">
        <h3>@ThatFunnySanta!</h3>
        <div class="poy-grid-rev">
            <picture class="md-img lg-img">
                <source srcset="<?= get_template_directory_uri() ?>/img/sm/santa1sm.webp" media="(max-width: 500px)">
                <source srcset="<?= get_template_directory_uri() ?>/img/md/santa1md.webp" media="(max-width: 800px)">
                <img src="<?= get_template_directory_uri() ?>/img/lg/santa1lg.webp" alt="Santa Claus looking over a crowd in the town of Banff">
            </picture>
            <div class="poy-grid-content-rev">
                <p>Christmas is the most magical time of the year, and nothing is more special than having Santa Claus himself show up to your yuletide festivities. The combination of this Santa's sparkling eyes, sharp wit, and ability to connect with children and adults alike is what makes him the most merry and the brightest St. Nick in all of Alberta!</p>
                <p>Making his audience laugh and truly believe in the miracle of Christmas is what makes @ThatFunnySanta the official Santa for Epcor, the Town of Banff and the Banff Springs Hotel! Not to fret however, as his jolly merriment is still available throughout many dates in November until early December for your naughty or nice party plans!</p>
            </div>
        </div>

        <div class="poy-grid">
            <picture class="md-img lg-img">
                <source srcset="<?= get_template_directory_uri() ?>/img/sm/santa3.webp" media="(max-width: 500px)">
                <source srcset="<?= get_template_directory_uri() ?>/img/md/santa3.webp" media="(max-width: 800px)">
                <img src="<?= get_template_directory_uri() ?>/img/lg/santa3.webp" alt="Mr. and Mrs. Claus spreading holiday cheer in Banff.">
            </picture>
            <div class="poy-grid-content">
                <div class="testimonials">
                    <div class="card-1">
                        <p>"I don’t know if there is anyone else but "ThatFunnySanta" who could bring such magic to our children. In a few short hours, he made hundreds of children and adults feel important and special and was able to turn a difficult time into a magical visit and memories that will last a lifetime."</p>
                        <span>Janice Krissa<br>co-founder of FreeStore <br>for Ukrainian Newcomers.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php
get_footer();
?>