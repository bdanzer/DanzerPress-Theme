(function( $ ) {
 	
 	//Prevent Conflicts
 	$.noConflict();
    "use strict";

	    //Wow init
		new WOW().init();

		//Fix transparent menu when scrolling
		var a = $("html").offset().top;

		$(document).scroll(function(){
		    if($(this).scrollTop() > a)
		    {   
		       $('header.drawer-navbar.drawer-navbar--fixed.transparent').addClass("danzerpress-non-trans").removeClass("danzerpress-trans");
		       $('.danzerpress-emergency-header').addClass("danzerpress-no-display");
		    } else {
		       $('header.drawer-navbar.drawer-navbar--fixed.transparent').removeClass("danzerpress-non-trans").addClass("danzerpress-trans");
		       $('.danzerpress-emergency-header').removeClass("danzerpress-no-display");
		    }
		});


		//Scrolling to anchor
	  	$(".danzerpress-hash").on('click', function(event) {

		    // Make sure this.hash has a value before overriding default behavior
		    if (this.hash !== "") {
			      // Prevent default anchor click behavior
			      event.preventDefault();

			      // Store hash
			      var hash = this.hash;
			      console.log(hash);

			      // Using jQuery's animate() method to add smooth page scroll
			      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			      $('html, body').animate({
			        scrollTop: $(hash).offset().top + (-64)
			      }, 1000, function(){
			   
			        // Add hash (#) to URL when done scrolling (default click behavior)
			        
			      });
			    } // End if
		  });

	  	$(window).on("load", function () {

		  	var urlHash = window.location.href.split("#")[1];
		  	console.log(urlHash);

		  	if (urlHash &&  $('#' + urlHash).length ) {

			  	$('html, body').animate({
			        scrollTop: $('#' + urlHash).offset().top + (-64)
			    }, 1000, function(){


			    });
		  	}

	  	});


	  	//Scroll to fix init
	  	$(document).ready(function() {
		  $('#toc').scrollToFixed({
		  	marginTop: 110,
		  });

		  $('#danzerpress-fixed').scrollToFixed({
		  	marginTop: 90,
		  });
		});


	  	//Menu Fixing
	  	jQuery(document).ready(function() {
		  jQuery('#primary-menu li').has('ul').addClass('has-children');
		});

		jQuery(function($) {
		  $('.drawer').drawer();
		});

		$(document).ready(function() {
			if ($(window).width() > 1024) {
				$("#primary-menu li").hover(function() {
					$(this).find("ul").slideToggle('fast');
					$(this).find(".fa").toggleClass("fa-caret-up");
				});
			} else {
				$(".has-children ul").hide();
				$("#primary-menu .fa").click(function() {
					$(this).siblings("ul").slideToggle();
					$(this).toggleClass("fa-caret-up");
				});
			}
		});

		$("header .sub-menu").parent().append("<i class='fa fa-caret-down'></i>");


		//Tilt.js init defaults
		$( document ).ready(function() {
			$('.danzerpress-tilt').tilt({
			    glare: true,
			    maxGlare: .5,
			    scale: 1.1
			})
		});


		//Fancybox Defaults
		$('[data-fancybox]').fancybox({
			youtube : {
				controls : 0,
				showinfo : 0
			},
			vimeo : {
				color : 'f00'
			}
		});

		//Slick Slider
		$('.slider').slick({
		  infinite: true,
		  centerMode: false,
		  slidesToScroll: 3,
		  slidesToShow: 3,
		  dots: true,
		  arrows: false,
		  autoplay: true,
		  autoplaySpeed: 3000,
		  responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        arrows: false,
		        centerMode: true,
		        centerPadding: '40px',
		        slidesToShow: 3
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        arrows: false,
		        centerMode: true,
		        centerPadding: '40px',
		        slidesToShow: 1
		      }
		    }
		  ]
		});

		$('.slider-for').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  fade: true,
		  autoplay: true,
		  autoplaySpeed: 6000,
		  asNavFor: '.slider-nav'
		});
		$('.slider-nav').slick({
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  asNavFor: '.slider-for',
		  dots: false,
		  centerMode: false,
		  focusOnSelect: true,
		  responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        arrows: true,
		        slidesToShow: 2
		      }
		    }
		  ]
		});


})(jQuery);