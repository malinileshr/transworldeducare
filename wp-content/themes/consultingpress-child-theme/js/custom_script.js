var $ = jQuery.noConflict();
$(document).ready(function(){
	initializeGlobelCalls.init();
});

var initializeGlobelCalls = function(){
	var addSidebarButtonicon = function(){
		var img = '<img src="wp-content/themes/consultingpress-child-theme/images/stscope.png" class="stscopeicon">';
		$(img).insertBefore( ".sliding-enquiry .enquiry-header span" );
	}
	var getStudentName = function(){
		$('#slick-slide01').each( function(){
			var name = $(this).attr('title');
			console.log('1'+ name);
			$("<p>"+name+"</p>").insertAfter(".wpls-fix-box img.wp-post-image");
		});
		
	}	
	return{
		init: function(){
			addSidebarButtonicon();
			//getStudentName();
			
		}
	};
}();

(jQuery)(function ($) {
	jQuery(".StudentsSection .featured-pages-carousel").owlCarousel({
	    items: 8,
	    dots: false,
	    nav: true,
	    loop: true,
	    autoplay: true,
	    autoHeight: false,
	    autoplayTimeout: 3000,
	    autoplayHoverPause: true,
	    margin: 30,
	    responsiveClass: true,
	    mouseDrag: true,
	    responsive: {
	        0: {
	            items: 2
	        },
	        600: {
	            items: 4
	        },
	        1000: {
	            items: 8
	        }
	    }
	});

	$( ".StudentsSection .owl-prev").html('<i class="fa fa-chevron-left"></i>');
 	$( ".StudentsSection .owl-next").html('<i class="fa fa-chevron-right"></i>');
});
