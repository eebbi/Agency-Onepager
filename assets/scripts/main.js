var main = (function($) {

// Main navigation size change when scrolling
	$(window).scroll(function() {
	    var sh = GiveMeTheScroll();

	    // If page is scrolled down more than 220px, the smaller header will be shown
	    if (sh >= 220) {
	        $('header').addClass('sticky');
	        $('.menu-link').addClass('smaller');
	        $('.logo-container').addClass('logo-cont-small');
	        $('.logo').addClass('logo-small');
	        $('.nav-mobile').addClass('nav-mobile-small');
	    // If page if scrolled above 50px height, the original header will show
	    } else if (sh <= 50) {
	    	$('header').removeClass('sticky');
	    	$('.menu-link').removeClass('smaller');
	    	$('.logo-container').removeClass('logo-cont-small');
	        $('.logo').removeClass('logo-small');
	        $('.nav-mobile').removeClass('nav-mobile-small');
	    }
	    function GiveMeTheScroll() {
	    	return window.pageYOffset || document.documentElement.scrollTop;
		}
	});

// Open the mobile nav when the button is clicked
	$('.nav-mobile').click(function() {
		$('nav.main-menu').slideToggle();
	// If rotate class exists, remove that class, if it doesn't, add it
		if ($('.rotate')[0]) {
			$(this).removeClass('rotate');
		} else {
			$('.nav-mobile').addClass('rotate');
		}
	});

// Show the Sorry-modal if a button is clicked
	$('.sry').click(function(e) {
		$('.sorry').fadeIn(300);
	});
// Close it
	$('#sorryclose').click(function() {
		$('.sorry').fadeOut(300);
	});


/* Show the big bad cookies-bar on window load.
Store the acceptance in local storage and remove it 
when the button is clicked from the bottom left corner
*/
	var doihavecookies = localStorage.doihavecookies;

    function ourownonloadfunction() {
    	if (doihavecookies != 'yup') {
    		$('#cookie-bar').css('display', 'flex');
    	} else {
    		$('#nocookies').show();
    	}
	    $('#cookie-btn').click(function() {
	        $('#cookie-bar').fadeOut();
	        localStorage.doihavecookies = 'yup';
	        $('#nocookies').show();
	    });
	}
	window.onload = ourownonloadfunction;

	$("#nocookies").click(function(){
        delete localStorage.doihavecookies;
        $('#nocookies').text('Cookies deleted');
    });


// Offer request button that opens a full screen overlay with the contact form
	$('.offer-btn').click(function(e) {
		$('.offer-request').addClass('offer-open');
		e.preventDefault();
	});
	$('.offer-close').click(function(e) {
		$('.offer-request').removeClass('offer-open');
		e.preventDefault();
	});


// Focus next field when enter is pressed on forms
	$('input[type=text]').keypress(function(e) {
		if ( e.which == 13 ) {
			var index = $( 'input' ).index(this) + 1;
			$( 'input' ).eq(index).focus();
			e.preventDefault();
		}
	});

}(jQuery));
