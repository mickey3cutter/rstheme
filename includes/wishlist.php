<?php 
/* 
    Template Name: Wishlist 
*/
get_header();  ?> 
    <div id="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2><?php the_field('title'); ?></h2>
                    <div class="estimate-wrapper text-left">
                        <div class="wishlist-wrapper">
                            <?php 
                            $ids = split(',', $_COOKIE['wishlist']);
                            $args = array(
                                'post_type' => 'products',
                                'post__in' => $ids
                            );
                            $the_query = new WP_Query( $args ); if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="wishlist-entry clearfix" data-id="<?php the_id(); ?>">
                                <a class="preview" href="<?php echo get_permalink(); ?>"><img src="<?php the_field('thumbnail'); ?>" /></a>
                                <div class="description">
                                    <div class="cell-view">
                                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                </div>
                                <div class="wishlist-remove" data-id="<?php the_id(); ?>"></div>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>