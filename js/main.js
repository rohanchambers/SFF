// Mustache HTML markup for disclaimer pop up on load
function disclaimerTemp() {
  var template = $('#disclaimer_template').html();
  Mustache.parse(template);   // optional, speeds up future uses
  var rendered = Mustache.render(template);
  $('#disclaimer_rendered').html(rendered);
}
disclaimerTemp();

$(function(){

	var lightbox = $('.lightbox-bg, .lightbox-disclaimer');
	var speed = 500;

    //Check cookie value
    if ($.cookie('disclaimer') != 'iagree') {
        console.log('Not Set');
		$(lightbox).show();
		$('body').addClass('stop-scrolling');
		$('body').bind('touchmove', function(e){e.preventDefault()})

    } else {
        console.log('Its Set');
		$(lightbox).hide();
    }

    // Attach click function to button '#agree' to set cookie
    $('#cta-agree').click( function(){
        $.cookie('disclaimer', 'iagree', { expires: 365, path: '/' });
		$(lightbox).fadeOut()
		$('body').removeClass('stop-scrolling');
		$('body').unbind('touchmove')
        console.log('clicked');
    });

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