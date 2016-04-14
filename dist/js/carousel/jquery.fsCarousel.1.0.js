/**
* plugin: jquery.fsCarousel.1.0.js
* author: kt.cheung @ Brandammo
* website: www.brandammo.co.uk
* version: 1.0
* date: 7th nov 2011
* description: the carousel plugin can be found at carouFredsel (http://caroufredsel.frebsite.nl) 
* i just merely integrated into a working fullscreen carousel solution.
**/

(function($){

  $.fn.fsCarousel = function(options) {  
  
	//set up default options 
	var defaults = { 
		slideClass: '.slide', //the class name for your slides
		scrollEasing: 'easeInOutQuint', //easing method
		scrollPauseDuration: 5000, //pause duration of slide
		scrollDuration: 500, //duration of a scroll
		autoPlay: true
	}; 
  	
	var opts = $.extend({}, defaults, options); 	

	var $this;
	var isStart;
	
    return this.each(function() {
    	$this = $(this);
 		isStart = true;
 		resizeCarousel();
 		
 		$(window).resize(function(){
			if(isStart !== true) {
				$this.trigger("destroy");
			}
			resizeCarousel();
		})
    });
	
	function resizeCarousel() {
		var browserWidth = $(window).width();
		var browserHeight = $(window).height();
		var bodyHeight = $('body').outerHeight(true);
		
		if(bodyHeight < browserHeight) {
			$('body').css('overflow', 'hidden');
			$this.css({'height' : browserHeight, 'width' : browserWidth});
			$(opts.slideClass).css({'height' : browserHeight, 'width' : browserWidth});
		} else {
			$this.css({'height' : bodyHeight, 'width' : browserWidth});
			$(opts.slideClass).css({'height' : bodyHeight, 'width' : browserWidth});
		}		
		
		$this.carouFredSel({
			auto : { play: opts.autoPlay },
			scroll : {
				items : 1,
				easing: opts.scrollEasing,
				pauseDuration: opts.scrollPauseDuration,
				duration: opts.scrollDuration
			},
			items : { visible: 1 }
		});		
		isStart = false;
	}
		
  };
})(jQuery);
