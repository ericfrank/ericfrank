<?php Starkers_Utilities::get_template_parts( array( 'parts/header', 'parts/top-bar' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/footer' ) ); ?>