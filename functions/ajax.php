<?php

//Ajax example. Include ajax.js from folder to your js.

function rs_more_images_ajax(){
	$k=0;
	$p_id = $_POST['p_id'];
	$images = get_field('gallery', $prod_id); 
	
	if( $images ): foreach( $images as $image ):  $k++; if($k>=7) { ?>

      <div class="col-md-4">
        <a href="#" data-img="<?php echo $image['url']; ?>" class="grid-item-in open-portfolio-popup-tax">
            <img src="<?php echo aq_resize($image['url'],360,360,true,true,true,true ); ?>" alt="gallery image" />
        </a>
      </div>

   <?php }  endforeach; endif;
}

add_action('wp_ajax_nopriv_more_images_ajax', 'rs_more_images_ajax');
add_action('wp_ajax_more_images_ajax', 'rs_more_images_ajax');
