<?php
// This is the template for displaying the custom landing page
// @package atomic-improv
get_header();
?>

<h1 class="about-heading" style="padding: 2rem 0; padding-left: 2rem; color: #0E3E66;">About</h1>

<section class="meet-visionary-section">
    <div class="meet-visionary-content">
        <h2>ATOMIC IMPROV AT <br> IT'S FINEST!</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/img/donovan-meet-the-visionary.webp" alt="Donovan giving a speech">
        <div class="meet-visionary-text">
            <p>Atomic Improv stars three-time world improvisational champion Donovan Workun and professional improviser Chris Borger!</p>
        </div>
    </div>
</section>

<section class="donovan-bio-section">
    <div class="donovan-bio-content">
        <p>With over thirty years of professional side-splitting jokes and impeccable talent to make anyone laugh, Atomic Improv’s interactive and hilarious shows are a perfect fit for any audience. Fast, funny and tailored to the crowd, 
Atomic Improv never fails to impress.</p>
        <p>When you’re with Atomic Improv, you’re not just watching a show… </p>
        <p>You’re a part of it!</p>
        <a href="<?= esc_url(get_permalink(12)); ?>" aria-label="Book a Show" role="button">Book a Show!</a>
    </div>
</section>

<section class="meet-donovan-section">
    <h2>MEET DONOVAN WORKRUN</h2>
    <img src="<?php echo get_template_directory_uri(); ?>/img/donovan-meet-the-visionary.webp" alt="Donovan giving a speech">
    <p>A world renowned Improviser, and a founding member of Atomic Improv, Donovan has over 30 years of comedy under his belt. He’s toured all over Canada, the US, and Europe, never ceasing to amaze and astound audiences with his wit and his motley variety of characters.</p>
    <p>Donovan was also the first Improviser to headline at Montreal’s Just For Laughs and has shared the stage with names such as Wayne Brady, Colin Mochrie, Mike Myers, and two people whom he’s always greatly looked up to and respected - Dave Thomas and Joe Flaherty. Beyond that, Donovan has also been a performer and write for several seasons of CBC’s radio program: The Irrelevant Show. Donovan is a side-splitting genius that you do not want to miss out on.</p>
</section>

<section class="image-gallery-section">
    <h2>MEET DONOVAN WORKRUN</h2>
    <div class="image-gallery-container">
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/the-visionary-in-action.webp" alt="Donovan with a hat">
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hot-boy-summer.webp" alt="Hot boy summer">
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/the-visionary-in-action-3.webp" alt="Fire pit comedy tour">
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/the-visionary-in-action-4.webp" alt="Donovan on CTV">
        </div>
    </div>
</section>

<section style="background-color: #0E3E66;">
    <h2 style="text-align:center; padding-top:2rem; padding-bottom: 2rem; color: #FFFFFF;">His fantastic partners!</h2>
    <p style="padding-right: 4rem; padding-bottom: 4rem; padding-left: 4rem; color: #FFFFFF;">Donovan has multiple talented partners that work with him to bring the power of improv and timeless joy to your events. Why not take a moment and get to know these spectacular partners?</p>

    <hr class="white-line" style="margin-left: 20px; margin-right: 20px; border: 0; height: 2px; background-color: white;">

    <h3 style="padding: 2rem 0; padding-left: 2rem; padding top: 4rem; padding-bottom: 4rem; color: #FFFFFF;">Chris Borger</h3>
    <img src="<?php echo get_template_directory_uri(); ?>/img/chris-borger.png" alt="Donovan with Chris Borger" style="display: block; margin: 0 auto; border-radius: 10px; border: 2px solid white;">

    <p style="padding-right: 4rem; padding-bottom: 4rem; padding-left: 4rem; color: #FFFFFF;">Chris Borger has worked as a professional improviser since 2011, and performs regularly with Atomic Improv, White Rhino, Rapid Fire Theatre, and the 11 o’ Clock Number. He has produced online video content for CBC Comedy, and Oilers Nation, and educational videos for the University of Alberta. </p>

    <p style="padding-right: 4rem; padding-bottom: 4rem; padding-left: 4rem; color: #FFFFFF;">His sketch comedy troupe, “Marv n’ Berry”, has toured North America’s comedy festival circuit, appearing recently at the Dallas Comedy Festival, the San Francisco Sketchfest, and Montreal Sketchfest.</p>
</section>

<div style="background-color: white; padding: 2rem; border-radius: 10px; overflow: hidden;">
    <h3 style="padding: 2rem 0; padding-left: 2rem; padding-top: 4rem; padding-bottom: 4rem;">Graham Neil</h3>
    <div style="margin: 0 auto; border-radius: 10px; overflow: hidden; border: 2px solid #000000;">
        <img src="<?php echo get_template_directory_uri(); ?>/img/graham-neil-with-donovan.webp" alt="Donovan with Chris Borger" style="display: block; width: 100%; border-radius: inherit;">
    </div>
</div>

        <p style="padding-right: 4rem; padding-bottom: 2rem; padding-left: 4rem; color: #053F23;">Combining quick wit, with business savvy, Graham Neil is a genius when it comes to corporate and educational workshops, especially when it comes to supporting the front-line workers through the “Power of Yes!”. </p>

        <p style="padding-right: 4rem; padding-bottom: 2rem; padding-left: 4rem;color: #053F23;">With a Bachelor of Journalism, well-known as an international award-winning Senior Reporter at CTV Edmonton with over 25 years of broadcast experience on CNN and CTV National News, Graham Neil is a reliable partner of Donovan’s in his “Power of Yes!” workshops.</p>
    </div>
</section>

<?php
get_footer();
?>


