(function( $ ) {
 	
 	$.noConflict();
    "use strict";

	new WOW().init();


		var a = $("html").offset().top;

		$(document).scroll(function(){
		    if($(this).scrollTop() > a)
		    {   
		       $('header.drawer-navbar.drawer-navbar--fixed.transparent').addClass("danzerpress-non-trans").css({"background":"#242a2f"});
		    } else {
		       $('header.drawer-navbar.drawer-navbar--fixed.transparent').removeClass("danzerpress-non-trans").css({"background":"transparent", "transition":".7s"});
		    }
		});

	  	$("a").on('click', function(event) {

	    // Make sure this.hash has a value before overriding default behavior
	    if (this.hash !== "") {
		      // Prevent default anchor click behavior
		      event.preventDefault();

		      // Store hash
		      var hash = this.hash;

		      // Using jQuery's animate() method to add smooth page scroll
		      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top + (-64)
		      }, 1000, function(){
		   
		        // Add hash (#) to URL when done scrolling (default click behavior)
		        
		      });
		    } // End if
		  });

	  	$(document).ready(function() {
		  $('#toc').scrollToFixed({
		  	marginTop: 110,
		  });
		});

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

		$(".sub-menu").parent().append("<i class='fa fa-caret-down'></i>");


})(jQuery);