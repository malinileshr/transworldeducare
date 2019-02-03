var $ = jQuery.noConflict();
$(document).ready(function(){
	initializeGlobelCalls.init();
});

var initializeGlobelCalls = function(){
	var addSidebarButtonicon = function(){
		var img = '<img src="http://localhost/transworldeducare/wp-content/uploads/2019/01/stscope.png" class="stscopeicon">';
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