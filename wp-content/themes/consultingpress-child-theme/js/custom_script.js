var $ = jQuery.noConflict();
$(document).ready(function(){
	initializeGlobelCalls.init();
});

var initializeGlobelCalls = function(){
	var addSidebarButtonicon = function(){
		var img = '<img src="../wp-content/themes/consultingpress-child-theme/images/stscope.png" class="stscopeicon">';
		$(img).insertBefore( ".sliding-enquiry .enquiry-header span" );
	}
	var getStudentName = function(){
		$('#slick-slide01').each( function(){
			var name = $(this).attr('title');
			console.log('1'+ name);
			$("<p>"+name+"</p>").insertAfter(".wpls-fix-box img.wp-post-image");
		});
		
	}
    var gallerytab = function(){
        $('.go-gallery-filters li').first().hide();        
        $('a[data-filter = "pune-campus"]').parent('li').addClass("active");        
        $('.go-gallery-filters a').click(function(){
            var tabvalue = $(this).attr('data-filter');
            $('a').parent('li').removeClass("active");
            $('a[data-filter = '+tabvalue+']').parent('li').addClass("active");
        });
    }	
	return{
		init: function(){
			addSidebarButtonicon();
			//getStudentName();
			gallerytab();
		}
	};
}();

(jQuery)(function ($) {
    if(jQuery('.StudentsSection').length){
    	jQuery(".StudentsSection .featured-pages-carousel").owlCarousel({
    	    items: 5,
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
    	            items: 3
    	        },
    	        1000: {
    	            items: 5
    	        }
    	    }
    	});
    }
	$( ".StudentsSection .owl-prev").html('<i class="fa fa-chevron-left"></i>');
 	$( ".StudentsSection .owl-next").html('<i class="fa fa-chevron-right"></i>');
});
