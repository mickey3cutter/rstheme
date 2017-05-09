<?php
/* 
	Template Name: About 
*/
get_header(); ?>

<div class="gallery"> 
	<?php  // Output Gallery acf
	$images = get_field('gallery');
	if( $images ): ?>
	    <ul>
	        <?php foreach( $images as $image ): ?>
	            <li>
	                <a href="<?php echo $image['url']; ?>">
	                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
	                </a>
	                <p><?php echo $image['caption']; ?></p>
	            </li>
	        <?php endforeach; ?>
	    </ul>
	<?php endif; ?>
</div>

<div class="repeater">
	<?php // Output Repeater acf
	if( have_rows('repeater_field_name') ):
	    while ( have_rows('repeater_field_name') ) : the_row();
	        the_sub_field('sub_field_name');
	    endwhile;
	endif;?>
</div>


<div class="cpt">
	<?php // Output custom post type in loop
	$the_query = new WP_Query( 'post_type=portfolio&taxonomy=home_feat' );
	if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<img src="<?php echo $url; ?>">
	<?php endwhile; endif; wp_reset_postdata(); ?>

</div>


<?php get_footer(); ?>