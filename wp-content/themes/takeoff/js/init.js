jQuery(document).ready(function($){
    console.log('jQuery version: ' + jQuery.fn.jquery); // version
    console.log('jQuery version (aliased): ' + $.fn.jquery); // version, alias confirmation

    var win = $(window),
        body = $(document.body);

    // body events and manipulation
    body
	    .on('click', 'a[rel~="external"]', function(e){
	        // rel="external" opens in new window
	        e.preventDefault();
	        window.open(this.href);
	        return false;
	    })
	    .on('click', '.toggle-nav', function(e){
            //add or remove nav-open class to body for off-canvas nav
            e.preventDefault();
	        body.toggleClass('nav-open');
	    });

});


//Initiate Slick Slider for Reviews
$('.reviews').slick({
	dots: false,
	infinite: true,
	speed: 500,
	fade: true,
	cssEase: 'linear'
});

//Initiate Masonry for Project Grid
//$('.projects').masonry({
//  itemSelector: '.project-item',
//});


// Animate page bookmarks
$(function() {
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  	var target = $(this.hash);
		  	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  	if (target.length) {
			    $('html, body').animate({
			      scrollTop: target.offset().top
			    }, 1000);
			    return false;
		  	}
		}
	});
});

$('.menu-toggle').click(function() {
    $('body').toggleClass("nav-open");
});