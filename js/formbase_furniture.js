var currentSlide = 0;
var slideWidth;
var slides;
var noSlides;

$(document).ready(function() {
	

	$(function(){
		$("#accordion").accordion({ header: "h4", active: false, autoHeight: false, collapsible: true });
	});
	
	workSlideShow();
	
	setInterval(changePosition,3000);
	
	function workSlideShow() {
        slideWidth = 690;
        slides = $('.slide');
        noSlides = slides.length;
		        
        slides.wrapAll('<div id="slidesHolder"></div>');
        slides.css({
            'float' : 'left'
        });
        $('#slidesHolder').css('width', slideWidth * noSlides);
	}
	
	function changePosition() {
	            if (currentSlide == noSlides - 1) {
	                currentSlide = 0;
	            } else {
	                currentSlide++;
	            }
	            switchSlide();
	        }
	
			/* Switches the slides using animate. */
	        function switchSlide() {
	            $('#slidesHolder').animate({
	                'marginLeft' : slideWidth * (-currentSlide)
	            });
	        }
	
});
