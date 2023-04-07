(function(win, $) {

	is_screen = function(max_width){
		if(win.matchMedia){
			return win.matchMedia('(max-width:'+ max_width +'px)').matches;
		}else{
			return win.innerWidth <= max_width;
		}
	};

	smoothscroll = {

		passive : function(){
			var supportsPassive = false;
			try {
			  document.addEventListener("test", null, { get passive() { supportsPassive = true }});
			} catch(e) {}

			return supportsPassive;
		},
		init : function(){

			if($('html').hasClass('mobile') || $('html').hasClass('mac')) return;

			var $window = $(window);
			var scrollTime = 1;
			var distance_offset = 2.5;
			var scrollDistance = $window.height() / distance_offset;

			if(this.passive()){
			    window.addEventListener("wheel",this.scrolling,{passive: false});
			}else{
                $window.on("mousewheel DOMMouseScroll", this.scrolling);
			}

			if( $('html').hasClass('mobile') ) { // Mobile

				$('.product_explan, .product_info_txt_').on('touchmove', function(event) {
					//event.preventDefault();
					event.stopPropagation();
					return true;
				});

			} else {
				$('.product_explan, .product_info_txt_').on('mousewheel', function(event) {
					//event.preventDefault();
					event.stopPropagation();
					return true;
				});
			}

		},
		destroy : function(){

			if(this.passive()){
			    window.removeEventListener("wheel",this.scrolling);
			}else{
               $(window).off("mousewheel DOMMouseScroll", this.scrolling);
			}
			TweenMax.killChildTweensOf($(window),{scrollTo:true});

		},
		scrolling : function(event){

			event.preventDefault();

			var $window = $(window);
			var scrollTime = 1;
			var distance_offset = 2.5;
			var scrollDistance = $window.height() / distance_offset;
			var delta = 0;

			if(smoothscroll.passive()){
			    delta = event.wheelDelta/120 || -event.deltaY/3;
			}else{
				if(typeof event.originalEvent.deltaY != "undefined"){
					delta = -event.originalEvent.deltaY/120;
				}else{
				    delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
				}
			}

			var scrollTop = $window.scrollTop();
			var finalScroll = scrollTop - parseInt(delta*scrollDistance);

			TweenMax.to($window, scrollTime, {
				scrollTo : { y: finalScroll, autoKill:true },
				ease: Power3.easeOut,
				overwrite: 5
			});


		}

	};

})(window, jQuery);
