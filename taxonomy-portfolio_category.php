<?php

// Output term ACF field
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
the_field('field_slug','products_category_'.$term->term_id));


//Default Loop
if (have_posts()) : while (have_posts()) : the_post(); 
the_content();
endwhile; endif;