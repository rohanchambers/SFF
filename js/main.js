$(function(){

	//Animate scroll to sections
	$('.main-nav li a, #scroll-down').bind('click',function(e){		   
	    var $anchor = $(this);
	    $('html, body').stop().animate({	   
	        scrollTop: $($anchor.attr('href')).offset().top
	    }, 1500);
	    e.preventDefault();
	});

	function setupSkrollr() {
		skrollr.init({
			forceHeight: false
		});
	}	

	mobileWidth = 768;
	desktopWidth =  975;
	
	// Initialize skrollr if the window width is higher than 768px wide else destroy skrollr
	if ($(window).width() >= mobileWidth) {	
		setupSkrollr();
	}

	mainNav = $('header .main-nav');

	$(window).on('resize', function () {
		if ($(window).width() <= 768) {
			
			skrollr.init().destroy();

		} else {
			setupSkrollr();		
		}

		if ($(window).width() >= 975) {		
			mainNav.show();
		}
		 else {
			mainNav.hide();
		}
	});
	
	// Mobile hamburger menu show/hide
	$('#hamburger a, header .main-nav a').click( function(e){
		if ($(window).width() <= 975) {		
			$(mainNav).slideToggle();
		}
		e.preventDefault();
		e.stopPropagation();		
	});

	// Add/Remove Class of active to highlight mobile nav items
	$('.main-nav a').click( function(){
		$('.main-nav a').removeClass('active');
		$(this).addClass('active');
	});
});