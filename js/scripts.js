(function($) {
	$(document).ready(function() {
		"use strict";
		
		$(".i4ewOd-pzNkMb-haAclf").css({
			"display": "none",
			
		  });

		$('.fade-up-a').each(function() {
			$(this).addClass('fade-up-show');
		  });

		if ($(window).scrollTop() < 1) {
			localStorage.removeItem('navbarScrolled');
		  }

		// $('.counter-a').parallax({
		// 	imageSrc: 'images/milestone.jpg',
		// 	speed: 0.5,
		// 	bleed: 0
		// });
	
		// Callback function to change the navbar background on scroll
		function changeNavbarBackground() {
			var minWidth = 992;
			var windowWidth = $(window).width();
			var scrollTop = $(window).scrollTop();

			if (windowWidth >= minWidth){
				if (scrollTop > 10) {
					$('#nav-a').addClass('navbar-scrolled');
					$('#nav-a .nav-link').css({
					  'color': '#000',
					  'transition': 'color 0.3s ease-in-out'
					});
					localStorage.setItem('navbarScrolled', 'true');
				  } else {
					$('#nav-a').removeClass('navbar-scrolled');
					$('#nav-a .nav-link').css({
					  'color': '#fff',
					  'transition': 'color 0.3s ease-in-out'
					});
					localStorage.removeItem('navbarScrolled');
				  }
			}
		
			
		  }
		
		  // Check if the navbar was scrolled before the page reloads
		  var navbarScrolled = localStorage.getItem('navbarScrolled');
		  var minWidth = 992;
		  var windowWidth = $(window).width();
		  if (windowWidth >= minWidth) {
			if (navbarScrolled === 'true') {
			  $('#nav-a').addClass('navbar-scrolled');
			  $('#nav-a .nav-link').css({
				'color': '#000',
				'transition': 'color 0.3s ease-in-out'
			  });
			} else {
			  $('#nav-a .nav-link').css({
				'color': '#fff',
				'transition': 'color 0.3s ease-in-out'
			  });
			}
		  }
		
		  // Add event listener to the scroll event
		  $(window).scroll(changeNavbarBackground);
		
		


		

		// PAGE TRANSITION
		$('.navigation-menu ul li a').on('click', function(e) {
			$('.transition-overlay').toggleClass("open");
			});
			$('.navigation-menu ul li a').on('click', function(e) {
				e.preventDefault();                  
				var goTo = this.getAttribute("href"); 
				setTimeout(function(){
					window.location = goTo;
				},1000);       
			});


		 /********************
			Main image slider
		  *********************/
			// $('.main-image-slider').slick({
			// 	slidesToShow: 1,
			// 	loop:true,
			// 	autoplay: true,
			// 	swipe: false,
			// 	  pauseOnHover: false, 
			// 	autoplaySpeed: 5000,
			// 	arrows: false,
			// 	autoplayButton: false,
			// 	fade: true,
			// 	speed: 1000,
			// 	dots:false,
			// 	instructionsText: 'This carousel shows one large product image at a time. Use the Previous and Next buttons to move between images, or use the preceding thumbnails carousel to select a specific image to display here.',
			// 	regionLabel: 'main image carousel',
			//   });

			  $(".main-image-slider")
			  .on("init", function () {
				$('.slick-slide[data-slick-index="0"]').addClass("slick-animation");
			  })
			  .slick({
				autoplay: true,
				infinite: true,
				fade: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				speed: 1500,
				autoplaySpeed: 4000,
				pauseOnFocus: false,
				pauseOnHover: false,
				draggable: false, // Disable dragging to prevent unintended touch events
			  })
			  .on({
				beforeChange: function (event, slick, currentSlide, nextSlide) {
				  $(".slick-slide", this).eq(nextSlide).addClass("slick-animation");
				  $(".slick-slide", this).eq(currentSlide).addClass("stop-animation");
				},
				afterChange: function () {
				  $(".stop-animation", this).removeClass("stop-animation slick-animation");
				},
			  }).slickAnimation();
			  
			  
			  
			  
		
		
			  /**
   * Clients Slider
   */
			 
			  $('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 3000,
				speed: 500,
				pauseOnHover: false,
				cssEase: 'linear',
				arrows: false,
				dots: false,
				pauseOnHover: false,
				responsive: [{
				  breakpoint: 992,
				  settings: {
					slidesToShow: 4
				  }
				},
				 {
				  breakpoint: 768,
				  settings: {
					slidesToShow: 3
				  }
				}]
			  });
			  
				


				////////////////////////////////// home gallery



				$(".slick-slider-h").slick({
					slidesToShow: 3,
					slidesToScroll: 1,
					autoplay: true,
					autoplaySpeed: 0,
					arrows: false,
					rtl: true,
					centerMode: true,
					dots: false,
					centerPadding: "50px",
					infinite: true,
					speed: 5000,
					cssEase: "linear",
					swipe: false,
					touchMove: false,
					draggable: false,
					pauseOnHover: false,
					responsive: [
					  {
						breakpoint: 992, // Breakpoint for medium-sized screens
						settings: {
						  slidesToShow: 2,
						}
					  },
					  {
						breakpoint: 768, // Breakpoint for small screens
						settings: {
						  slidesToShow: 1,
						}
					  }
					]
				  });
				  
				
				

				////////////////////////////////// home gallery
		  
		

		

				  ///////////////////////////////flsh news
				
				  
				  $('.multiple-items').slick({
					infinite: true,
					slidesToShow: 3,
					slidesToScroll: 1,
					autoplay: true,
					autoplaySpeed: 0,
					cssEase: "linear",
					speed: 3000,
					arrows: false,
					dots: false,
					pauseOnHover: false,
					swipe: false,
					responsive: [
					  {
						breakpoint: 992, // Breakpoint for medium-sized screens
						settings: {
						  slidesToShow: 2,
						}
					  },
					  {
						breakpoint: 768, // Breakpoint for small screens
						settings: {
						  slidesToShow: 1.5,
						}
					  }
					]
				  });
				  
		

			
			  

		
		
			
	});
	// END JQUERY		

	////////////////////////////////

	


	/////////////////////////////


	
	  

	new WOW().init();

	
	

	setTimeout(function(){
		$("body").addClass("page-loaded");
	});

	
  

       
    
})(jQuery);











  
  

