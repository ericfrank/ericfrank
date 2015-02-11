<?php
/*
    Template Name: Home
*/
?>
<?php
Starkers_Utilities::get_template_parts( array( 'parts/header' ) );
if ( have_posts() ) while ( have_posts() ) : the_post();
?>

<div id="home-header">
	<img id="eric-head" src="/images/eric-frank.png" alt="Eric Frank" />
	<h1>Designing and developing, all over California.</h1>
    <p>I'm part of a small-yet-growing group of interaction designers who skip the Photoshop mockups and go straight into the code. Some call us <a href="http://www.meetup.com/Designers-Who-Code/">Designers Who Code</a>. Which makes sense, really.</p>
    <p>You can usually find me building dashboards with the engineering team at <a href="http://pistoncloud.com">Piston</a>. But you can <em>usually</em> find me searching for the perfect cocktail in Oakland. I'm not looking for new opportunities at the moment, but I'm always <a href="mailto:eric@ericfrank.com">happy to talk</a>. Especially if you want to recommend some new music <a href="http://www.rdio.com/people/mrericfrank/">I should be listening</a> to.</p>
</div>

<?php
endwhile;
Starkers_Utilities::get_template_parts( array( 'parts/footer' ) );
?>
