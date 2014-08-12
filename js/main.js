$(document).ready( function(){
	//Animate scroll
	var nav = $('.main-nav li a');

	$(nav).bind('click',function(event){
		
		nav.hide();
	    
	    var $anchor = $(this);
	    
	    $('html, body').stop().animate({
	   
	        scrollTop: $($anchor.attr('href')).offset().top
	   
	    }, 500, function(){
		    
	    	$('.main-nav li a').fadeIn();
	    		    
	    });

	    event.preventDefault();

	});
});