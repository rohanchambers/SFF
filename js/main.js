$(document).ready( function(){
	// Initialise Skrollr
 	var s = skrollr.init({
 		forceHeight: false,
	    render: function(data) {
	        //Log the current scroll position.
	        console.log(data.curTop);
	    }
 	});	
	
	//Animate scroll
	var nav = $('.main-nav li a');

	$(nav).bind('click',function(event){
		
		//nav.hide();
	    
	    var $anchor = $(this);
	    
	    $('html, body').stop().animate({
	   
	        scrollTop: $($anchor.attr('href')).offset().top
	   
	    }, 1500, function(){
		    
	    	//$('.main-nav li a').fadeIn();
	    		    
	    });

	    event.preventDefault();

	});

	// Fade IN/OUT Intro Elements
});