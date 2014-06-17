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
	<p>I live happily in <del>Los Angeles</del> <ins>San Francisco</ins>, and design in-residence at <a href="http://www.pistoncloud.com">Piston</a>. I stand for responsive design, really big type, and the best cocktails.</p>
</div>

<hr />

<h2 class="center">Recent Work</h2>

<div class="grid" id="recent">
	<a class="grid-1-3" href="/piston">
		<p><img src="/images/piston.png" alt="Piston Cloud Computing" /></p>
		<h3>Piston</h3>
		<p>Building the future of open cloud software.</p>
	</a>
	<a class="grid-1-3" href="/andrew-heringer">
		<p><img src="/images/andrew-heringer.png" alt="Andrew Heringer" /></p>
		<h3>Andrew Heringer</h3>
		<p>Singer/guitarist of Los Angeles' Milo Greene.</p>
	</a>
	<a class="grid-1-3" href="/breadbrothers">
		<p><img src="/images/breadbros.png" alt="Breadbrothers Games" /></p>
		<h3>Breadbrothers</h3>
		<p>Indie RPGs for those who love indie RPGs.</p>
	</a> 
</div>

<hr />

<h2 class="center">What else?</h2>

<div class="grid center">
	<a class="grid-1-2 box" href="/logos">
		<h3>Logos</h3>
		<p>A selection of logos I have organically and locally hand-crafted out of kale.</p>
	</a>
	<!--
	<a class="grid-1-2 box" href="/graphics">
		<h3>Graphics</h3>
		<p>Posters, ideas, &amp; designs. AKA what I'm really doing when I tell people I'm busy.</p>
	</a>
	-->
</div>

<?php
endwhile;
Starkers_Utilities::get_template_parts( array( 'parts/footer' ) );
?>
