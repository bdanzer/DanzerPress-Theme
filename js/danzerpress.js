(function( $ ) {
 	
 	$.noConflict();
    "use strict";

	new WOW().init();


		var a = $("html").offset().top;

		$(document).scroll(function(){
		    if($(this).scrollTop() > a)
		    {   
		       $('header.drawer-navbar.drawer-navbar--fixed.transparent').css({"background":"#242a2f"});
		    } else {
		       $('header.drawer-navbar.drawer-navbar--fixed.transparent').css({"background":"transparent", "transition":".7s"});
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

	  	jQuery(document).ready(function() {
		  jQuery('#primary-menu li').has('ul').addClass('has-children');
		});

		jQuery(function($) {
		  $('.drawer').drawer();
		});

		$(document).ready(function() {
		  $(".has-children ul").hide();
		  $(".fa").click(function() {
		    $(this).siblings("ul").slideToggle();
		    $(this).toggleClass("fa-caret-up");
		  });
		});

		$(".sub-menu").parent().append("<i class='fa fa-caret-down'></i>");


})(jQuery);