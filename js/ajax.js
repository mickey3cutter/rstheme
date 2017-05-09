jQuery(document).ready(function($) {

	function load_images(){
   		var ajaxurl = $(".more-btn").data('url'); 
	   	$.post( ajaxurl , {
        	'action' : 'rs_more_images_ajax',
        	'p_id' : $('.more-btn').data('p_id'),
		})
		.done(function(response) {
			$('.loader-img').hide(); // Hide loader gif on ajax done
			var $data = $(response );
            if($data.length){
                $(".grid-on-wrap").append($data); // Don't forget to create space where ajax will show
            }
		});
	    return false;
	}

	$(".more-btn").on("click",function(){
	    $(this).hide(); 
	     $('.loader-img').show(); // Show loader gif
	    load_images();
	});
});