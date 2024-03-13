<?php
// This is the template for displaying the custom landing page
// @package atomic-improv
get_header();
?>

<h1 style="text-align: center; padding: 2rem 0; color: #0E3E66;">About</h1>

<section style="padding-top: 0; padding-right: 4rem; padding-bottom: 4rem; padding-left: 4rem; background-color: #0E3E66;">
    <h2 style="text-align:center; padding-bottom: 2rem; color: #FFFFFF; padding-top: 2rem;">Meet the Visionary</h2>
    <img class="donovan-meet-the-visionary" style="display: block; margin: 0 auto;">
    <div>
        <p style="padding-top: 2rem; color: #FFFFFF;">A world renowned Improviser, and a founding member of Atomic Improv, Donovan has over 30 years of comedy under his belt. He’s toured all over Canada, the US, and Europe, never ceasing to amaze and astound audiences with his wit and his motley variety of characters.</p>
    </div>
</section>

<section style="background-color: #0E3E66;">
    <p style="padding-top: 0; padding-right: 4rem; padding-bottom: 4rem; padding-left: 4rem; color: #FFFFFF;">Donovan was also the first Improviser to headline at Montreal’s Just For Laughs and has shared the stage with names such as Wayne Brady, Colin Mochrie, Mike Myers, and two people whom he’s always greatly looked up to and respected - Dave Thomas and Joe Flaherty. Beyond that, Donovan has also been a performer and write for several seasons of CBC’s radio program: The Irrelevant Show. </p>
</section>

<section>
    <p style="padding-top: 0; padding-right: 4rem; padding-left: 4rem; color: #FFFFFF;">In 2012, he was also selected as a feature performer for the Canada Olympic House during the London Olympics. He continues to share his talents worldwide, having delivered over hundreds of corporate Improv Workshops across the world. Donovan is a side-splitting genius that you do not want to miss out on. </p>
</section>

<section>
    <h2 style="text-align:center; padding-bottom: 2rem;">The visionary in action</h2>
    <div style="position: relative; overflow: hidden;">
        <?php echo do_shortcode('[slick-slider]'); ?>
    </div>
</section>

<section style="background-color: #0E3E66;">
    <h2 style="text-align:center; padding-top:2rem; padding-bottom: 2rem; color: #FFFFFF;">His fantastic partners!</h2>
    <p style="padding-right: 4rem; padding-bottom: 4rem; padding-left: 4rem; color: #FFFFFF;">Donovan has multiple talented partners that work with him to bring the power of improv and timeless joy to your events. Why not take a moment and get to know these spectacular partners?</p>

    <hr class="white-line" style="margin-left: 20px; margin-right: 20px; border: 0; height: 2px; background-color: white;">

    <h3 style="text-align:center; padding top: 4rem; padding-bottom: 4rem; color: #FFFFFF;">Chris Borger</h3>
    <img src="<?php echo get_template_directory_uri(); ?>/img/chris-borger.png" alt="Donovan with Chris Borger" style="display: block; margin: 0 auto; border-radius: 10px; border: 2px solid white; position: relative; top: -50px;">

    <p style="padding-right: 4rem; padding-bottom: 4rem; padding-left: 4rem; color: #FFFFFF;">Chris Borger has worked as a professional improviser since 2011, and performs regularly with Atomic Improv, White Rhino, Rapid Fire Theatre, and the 11 o’ Clock Number. He has produced online video content for CBC Comedy, and Oilers Nation, and educational videos for the University of Alberta. </p>

    <p style="padding-right: 4rem; padding-bottom: 4rem; padding-left: 4rem; color: #FFFFFF;">His sketch comedy troupe, “Marv n’ Berry”, has toured North America’s comedy festival circuit, appearing recently at the Dallas Comedy Festival, the San Francisco Sketchfest, and Montreal Sketchfest.</p>

    <div style="background-color: white; padding: 2rem; border-radius: 10px;">
    <h3 style="text-align:center; padding top: 4rem; padding-bottom: 4rem;">Graham Neil</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/img/graham-neil-about.png" alt="Donovan with Chris Borger" style="display: block; margin: 0 auto; border-radius: 10px; border: 2px solid white; padding-bottom: 2rem; position: relative; top: -50px;">

        <p style="padding-right: 4rem; padding-bottom: 2rem; padding-left: 4rem; color: #053F23;">Combining quick wit, with business savvy, Graham Neil is a genius when it comes to corporate and educational workshops, especially when it comes to supporting the front-line workers through the “Power of Yes!”. </p>

        <p style="padding-right: 4rem; padding-bottom: 2rem; padding-left: 4rem;color: #053F23;">With a Bachelor of Journalism, well-known as an international award-winning Senior Reporter at CTV Edmonton with over 25 years of broadcast experience on CNN and CTV National News, Graham Neil is a reliable partner of Donovan’s in his “Power of Yes!” workshops.</p>
    </div>
</section>

<?php
get_footer();
?>


