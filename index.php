<?php
// This page template is used for default roat, its ok for blog, archive, category, search etc.

get_header();

//Default loop
if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content">
	<?php the_content(); ?>
</div>

<?php 
endwhile; endif;
get_footer();