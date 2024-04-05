<?php
// This is the template for displaying the custom landing page
// @package atomic-improv
get_header();
?>

<h2 class="about-heading">WHO WE ARE</h2>

<section class="flex-container">
    <div class="column1">
        <h3>We're improv at it's finest!</h3>
        <div class="image-about">
        <picture>
                    <source srcset="<?= get_template_directory_uri() ?>/img/sm/whoweare1.webp" media="(max-width: 500px)">

                    <source srcset="<?= get_template_directory_uri() ?>/img/md/whoweare1md.webp" media="(max-width: 800px)">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/lg/whoweare1lg.webp" alt="Donovan Workun and Chris Borger posing together in matching attires">
        </picture>
        </div>
    </div>
    <div class="column2">
        <p>Atomic Improv stars three-time world improv champion Donovan Workun and Chris Borger!</p>
        <p>For over thirty years, Atomic Improv has been delighting audiences all over the world. Canadian comedy award winning and headlining at the theatre St. Dennis for Montreal's Just for Laughs, and featured performers at the 2012 London Summer Olympic Games, now coming to your corporate events! </p>
        <!-- <p>Atomic Improv has toured across North America, Asia and Mexico and are the first improv group to headline Montreal’s Just For Laughs Comedy Festival. They have also been featured in several TV comedy specials.  This Canadian comedy award winning duo  was selected to perform at the 2012 London Summer Olympic Games,  and  continues to perform, teach workshops and keynote for corporate events all across Canada. </p> -->
    </div>
</section>

<section class="flex-container">
    <div class="flex-item">
        <a href="<?= esc_url(get_permalink(12)); ?>" aria-label="Book a Show" role="button" class="about-book-button">Book a Show!</a>
    </div>
</section>

<section class="meet-donovan-section">
    <h2>Meet Donovan Workun</h2>
    <picture>
                    <source srcset="<?= get_template_directory_uri() ?>/img/sm/meetdonovansm.webp" media="(max-width: 500px)">

                    <source srcset="<?= get_template_directory_uri() ?>/img/md/meetdonovanmd.webp" media="(max-width: 800px)">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/lg/meetdonovanlg.webp" alt="Donovan Workun being a goofball and having a fun time.">
                </picture>
    <p>Donovan has performed thousands of shows and has worked with stars such as: Wayne Brady, Colin Mochrie, Mike Myers, and two people whom he’s always greatly looked up to and respected - Dave Thomas and Joe Flaherty.</p>
    <p> Donovan's improv skills have landed him roles in dozens of national TV commercials, shows and feature films. He starred and wrote for 10 years in the national CBC radio one comedy series "The Irrelevant Show." He's also written and starred in the hit reality series on CMT "Ice Racer Showdown" and wrote for the reality series "Taking it Off."</p>
</section>

<section class="chris-borger-about">
    <h2>Meet Chris Borger</h2>
    <!-- <p>Donovan’s not just a one man show, you know. He has a very talented partner that joins him for his Improv acts!</p> -->

    <picture>
                    <source srcset="<?= get_template_directory_uri() ?>/img/sm/meetchrissm.webp" media="(max-width: 500px)">

                    <source srcset="<?= get_template_directory_uri() ?>/img/md/meetchrismd.webp" media="(max-width: 800px)">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/lg/meetchrislg.webp" alt="Chris Borger showing off his funny face while looking into the camera">
                </picture>

    <p>Chris Borger has worked as a professional improviser since 2011. He has produced online video content for CBC Comedy, and Oilers Nation, and educational videos for the University of Alberta. </p>

    <p>His sketch comedy troupe, “Marv n’ Berry”, has toured North America’s comedy festival circuit, appearing recently at the Dallas Comedy Festival, the San Francisco Sketchfest, and Montreal Sketchfest.</p>
</section>

<?php
get_footer();
?>




