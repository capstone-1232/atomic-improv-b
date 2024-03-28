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
        <p>Atomic Improv stars three-time world improvisational champion Donovan Workun and professional improviser Chris Borger!</p>
        <p>With over thirty years of professional side-splitting jokes and impeccable talent to make anyone laugh, Atomic Improv’s interactive and hilarious shows are a perfect fit for any audience. Fast, funny and tailored to the crowd, Atomic Improv never fails to impress.</p>
    </div>
</section>

<section class="flex-container">
    <div class="flex-item">
        <p>When you’re with Atomic Improv, you’re not just watching a show… </p>
        <p>You’re a part of it!</p>
        <a href="<?= esc_url(get_permalink(12)); ?>" aria-label="Book a Show" role="button" class="about-book-button">Book a Show!</a>
    </div>
</section>

<section class="meet-donovan-section">
    <h2>MEET DONOVAN WORKUN</h2>
    <picture>
                    <source srcset="<?= get_template_directory_uri() ?>/img/sm/meetdonovansm.webp" media="(max-width: 500px)">

                    <source srcset="<?= get_template_directory_uri() ?>/img/md/meetdonovanmd.webp" media="(max-width: 800px)">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/lg/meetdonovanlg.webp" alt="Donovan Workun">
                </picture>
    <p>A world renowned Improviser, and a founding member of Atomic Improv, Donovan has over 30 years of comedy under his belt. He’s toured all over Canada, the US, and Europe, never ceasing to amaze and astound audiences with his wit and his motley variety of characters.</p>
    <p>Donovan was also the first Improviser to headline at Montreal’s Just For Laughs and has shared the stage with names such as Wayne Brady, Colin Mochrie, Mike Myers, and two people whom he’s always greatly looked up to and respected - Dave Thomas and Joe Flaherty. Beyond that, Donovan has also been a performer and write for several seasons of CBC’s radio program: The Irrelevant Show. Donovan is a side-splitting genius that you do not want to miss out on.</p>
</section>

<section class="image-gallery-section">
    <h3>WHAT HE'S BEEN A PART OF!</h3>
    <div class="image-gallery-container">
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/sm/oktoberfest.webp" alt="Donovan with a hat taking part in the oktober fest">
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hot-boy-summer.webp" alt="Poster of Hot Boy Summer">
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/the-irrelevant-show.png" alt="Poster of the Irrelevant Show">
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/canadian-comedy-awards.png" alt="Poster of the Canadian Comedy Awards">
        </div>
    </div>
</section>

<section class="chris-borger-about">
    <h2>MEET CHRIS BORGER</h2>
    <p>Donovan’s not just a one man show, you know. He has a very talented partner that joins him for his Improv acts!</p>

    <picture>
                    <source srcset="<?= get_template_directory_uri() ?>/img/sm/meetchrissm.webp" media="(max-width: 500px)">

                    <source srcset="<?= get_template_directory_uri() ?>/img/md/meetchrismd.webp" media="(max-width: 800px)">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/lg/meetchrislg.webp" alt="Chris Borger showing off his funny face while looking into the camera">
                </picture>

    <p>Chris Borger has worked as a professional improviser since 2011, and performs regularly with Atomic Improv, White Rhino, Rapid Fire Theatre, and the 11 o’ Clock Number. He has produced online video content for CBC Comedy, and Oilers Nation, and educational videos for the University of Alberta. </p>

    <p>His sketch comedy troupe, “Marv n’ Berry”, has toured North America’s comedy festival circuit, appearing recently at the Dallas Comedy Festival, the San Francisco Sketchfest, and Montreal Sketchfest.</p>
</section>

<?php
get_footer();
?>




