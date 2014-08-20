$(document).ready( function(){
	// Initialize skrollr if the window width is higher than 768px wide
	if ($(window).width() > 768) {
		skrollr.init({
			forceHeight: false
		});
	}

	// Disable skrollr if the window is resized below 768px wide
	$(window).on('resize', function () {
		if ($(window).width() <= 768) {
			skrollr.init().destroy(); // skrollr.init() returns the singleton created above
		}
	});

	//Animate scroll to sections
	var nav = $('.main-nav li a, #scroll-down');

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