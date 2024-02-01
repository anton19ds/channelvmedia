$(document).ready(function() {   
	$('.staff-close a').click(function(e){ 
		$('html').removeClass('no-scroll'); 
		$('body').removeClass('no-scroll');
		$('.tog').removeClass('open'); 
		$('.staff-bio-inner').fadeOut(); 
    	e.preventDefault();
	});      
	$('.staff-bio .staff-bio-inner').hide(); // it's obvious  
	$('.staff li').click(function() {   
		$('.tog').toggleClass('open'); 
    	$('.staff-bio .staff-bio-inner')
      	.hide()  // ...hide all other previous opened elements...
      	.eq($(this).index('.staff li')) // ... select right one by index of clicked .staff li element...
       	.toggle(); // and show/hide it 
    	$('.staff-close .staff-bio-inner')
      	.hide()  // ...hide all other previous opened elements...
      	.eq($(this).index('.staff li')) // ... select right one by index of clicked .staff li element...
       	.toggle(); // and show/hide it
  	}); 
});
$(document).ready(function() { 
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
});