// JavaScript Document
$(document).ready(function() {   
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
		if (scroll >= 1) {
			$('.hlogo.white').fadeOut();
			$('.hlogo.pages').fadeIn();
			$('.hamburger-header').show('slow');
			$('.hamburger').hide('fast');
			$('.header-bg').fadeIn('fast');
			$('.hlogo').addClass('smaller');
			$('.hamburger-header').addClass('smaller');
			$('.header-constant').addClass('smaller');
			$('.pr-dropdown-menu').addClass('pr-smaller');
			$('.site-menu__button').addClass('smaller');
		} else {
			$('.hlogo.white').fadeIn();
			$('.hlogo.pages').fadeOut();
			$('.hamburger-header').hide('fast');
			$('.hamburger').show('slow');
			$('.header-bg').fadeOut('fast');
			$('.hlogo').removeClass('smaller');
			$('.hamburger-header').removeClass('smaller');
			$('.header-constant').removeClass('smaller');
			$('.pr-dropdown-menu').removeClass('pr-smaller');
			$('.site-menu__button').removeClass('smaller');
		}
	}); 
	  
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
		if (scroll >= 500) {
			$('#sticky-side').addClass('sticky-fixed');
		} else {
			$('#sticky-side').removeClass('sticky-fixed');
		}
	});
	
	$('body').on('click', '[data-action="activate-site-menu"]', function (el) {
		$('.site-menu__button').hide();
		$('.site-menu').addClass('is-active');
		$('body').addClass('no-scroll');
	});
	$('body').on('click', '[data-action="close-site-menu"]', function (el) {
		$('.site-menu__button').show();
		$('.site-menu').removeClass('is-active');
		$('body').removeClass('no-scroll');
	});  
	
	$(function() {
	  $(window).scroll(function() {   
		var mass = Math.min(20, 1+0.005*$(this).scrollTop());
		$('#expandable').css('transform', 'scale(' + mass + ')'); 
	  });
	});

	function visibleZoom(){
		$('.animatezoom').each(function(){
			var top_of_object = $(this).offset().top + 0;
			var top_of_window = $(window).scrollTop();
			var bottom_of_object = $(this).offset().top + $(this).outerHeight() - 0;
			var bottom_of_window = $(window).scrollTop() + $(window).height();

			if(top_of_object > top_of_window && bottom_of_window > bottom_of_object) {
				$(this).removeClass('zoomOut');
				$(this).addClass('zoomIn').show('slow'); 
			}
			else {    
				$(this).removeClass('zoomIn');
				$(this).addClass('zoomOut');
			}  
		});
	}
	visibleZoom();
	$(window).scroll(function(){
		visibleZoom();
	});  
	
	function visibleFading(){
		$('.animatefade').each(function(){
			var top_of_object = $(this).offset().top + 0;
			var top_of_window = $(window).scrollTop();
			var bottom_of_object = $(this).offset().top + $(this).outerHeight() - 0;
			var bottom_of_window = $(window).scrollTop() + $(window).height();

			if(top_of_object > top_of_window && bottom_of_window > bottom_of_object) {
				$(this).removeClass('fadeOut');
				$(this).addClass('fadeIn').show('slow'); 
			}
			else {    
				$(this).removeClass('fadeIn');
				$(this).addClass('fadeOut');
			}  
		});
	}
	visibleFading();
	$(window).scroll(function(){
		visibleFading();
	}); 
	
	function visibleSlideInLeft(){
		$('.animateslideinleft').each(function(){
			var top_of_object = $(this).offset().top + 0;
			var top_of_window = $(window).scrollTop();
			var bottom_of_object = $(this).offset().top + $(this).outerHeight() - 0;
			var bottom_of_window = $(window).scrollTop() + $(window).height();

			if(top_of_object > top_of_window && bottom_of_window > bottom_of_object) {
				$(this).removeClass('slideOutLeft');
				$(this).addClass('slideInLeft'); 
			}
			else {    
				$(this).removeClass('slideInLeft');
				$(this).addClass('slideOutLeft');
			}  
		});
	}
	visibleSlideInLeft();
	$(window).scroll(function(){
		visibleSlideInLeft();
	});

	function visibleSlideInRight(){
		$('.animateslideinright').each(function(){
			var top_of_object = $(this).offset().top + 0;
			var top_of_window = $(window).scrollTop();
			var bottom_of_object = $(this).offset().top + $(this).outerHeight() - 0;
			var bottom_of_window = $(window).scrollTop() + $(window).height();

			if(top_of_object > top_of_window && bottom_of_window > bottom_of_object) {
				$(this).removeClass('slideOutRight');
				$(this).addClass('slideInRight'); 
			}
			else {
				$(this).removeClass('slideInRight');
				$(this).addClass('slideOutRight');
			}
		});
	}
	visibleSlideInRight();
	$(window).scroll(function(){
		visibleSlideInRight();
	});

	function visiblepulse(){
		$('.animatepulse').each(function(){
			var top_of_object = $(this).offset().top + 0;
			var top_of_window = $(window).scrollTop();
			var bottom_of_object = $(this).offset().top + $(this).outerHeight() - 0;
			var bottom_of_window = $(window).scrollTop() + $(window).height();

			if(top_of_object > top_of_window && bottom_of_window > bottom_of_object) {
				$(this).removeClass('fadeOut');
				$(this).addClass('pulse'); 
			}
			else {    
				$(this).removeClass('pulse');
				$(this).addClass('fadeOut');
			}  
		});
	}
	visiblepulse();
	$(window).scroll(function(){
		visiblepulse();
	});
	///
	function visibleenlarge(){
		$('.animateenlarge').each(function(){
			var top_of_object = $(this).offset().top + 0;
			var top_of_window = $(window).scrollTop();
			var bottom_of_object = $(this).offset().top + $(this).outerHeight() - 0;
			var bottom_of_window = $(window).scrollTop() + $(window).height();

			if(top_of_object > top_of_window && bottom_of_window > bottom_of_object) {
				$(this).removeClass('enlargeNo');
				$(this).addClass('enlargeYes'); 
			}
			else {    
				$(this).removeClass('enlargeYes');
				$(this).addClass('enlargeNo');
			}  
		});
	}
	visibleenlarge();
	$(window).scroll(function(){
		visibleenlarge();
	});
///
	function visibleflipY(){
		$('.animateflipY').each(function(){
			var top_of_object = $(this).offset().top + 0;
			var top_of_window = $(window).scrollTop();
			var bottom_of_object = $(this).offset().top + $(this).outerHeight() - 0;
			var bottom_of_window = $(window).scrollTop() + $(window).height();

			if(top_of_object > top_of_window && bottom_of_window > bottom_of_object) {
				$(this).removeClass('flipOutY');
				$(this).addClass('flipInY'); 
			}
			else {    
				$(this).removeClass('flipInY');
				$(this).addClass('flipOutY');
			}  
		});
	}
	visibleflipY();
	$(window).scroll(function(){
		visibleflipY();
	});
	
	// Who page nav vertical scrolling
	function visibleBarHero(){
		$('#story').each(function(){
			var top_of_nav = $('.who-jump-links').offset().top + 0;
			var top_of_object = $(this).offset().top + 0; 
			var bottom_of_object = $(this).offset().top + $(this).outerHeight() - 0;
			var bottom_of_nav = $('.who-jump-links').offset().top + $('.who-jump-links').outerHeight() - 0; 

			if(top_of_nav > top_of_object && bottom_of_nav < bottom_of_object) {
				$('.who-jump-links li a').removeClass('active'); 
			}
			else {
			}  
		});
	}
	visibleBarHero();
	$(window).scroll(function(){
		visibleBarHero();
	});	
	function visibleBarStory(){
		$('#story').each(function(){
			var top_of_nav = $('.who-jump-links').offset().top + 0;
			var top_of_object = $(this).offset().top + 0; 
			var bottom_of_object = $(this).offset().top + $(this).outerHeight() - 0;
			var bottom_of_nav = $('.who-jump-links').offset().top + $('.who-jump-links').outerHeight() - 0; 

			if(top_of_nav > top_of_object && bottom_of_nav < bottom_of_object) {
				$('.who-jump-links li a').removeClass('active');
				$('a.story').addClass('active'); 
			}
			else {    
				$('a.story').removeClass('active'); 
			}  
		});
	}
	visibleBarStory();
	$(window).scroll(function(){
		visibleBarStory();
	});	
	function visibleBarLeadership(){
		$('#leadership').each(function(){
			var top_of_nav = $('.who-jump-links').offset().top + 0;
			var top_of_object = $(this).offset().top + 0; 
			var bottom_of_object = $(this).offset().top + $(this).outerHeight() - 0;
			var bottom_of_nav = $('.who-jump-links').offset().top + $('.who-jump-links').outerHeight() - 0; 

			if(top_of_nav > top_of_object && bottom_of_nav < bottom_of_object) {
				$('.who-jump-links li a').removeClass('active');
				$('a.leadership').addClass('active'); 
			}
			else {    
				$('a.leadership').removeClass('active'); 
			}  
		});
	}
	visibleBarLeadership();
	$(window).scroll(function(){
		visibleBarLeadership();
	});
	function visibleBarCulture(){
		$('#culture').each(function(){
			var top_of_nav = $('.who-jump-links').offset().top + 0;
			var top_of_object = $(this).offset().top + 0; 
			var bottom_of_object = $(this).offset().top + $(this).outerHeight() - 0;
			var bottom_of_nav = $('.who-jump-links').offset().top + $('.who-jump-links').outerHeight() - 0; 

			if(top_of_nav > top_of_object && bottom_of_nav < bottom_of_object) {
				$('.who-jump-links li a').removeClass('active');
				$('a.culture').addClass('active'); 
			}
			else {    
				$('a.culture').removeClass('active'); 
			}  
		});
	}
	visibleBarCulture();
	$(window).scroll(function(){
		visibleBarCulture();
	}); 
	 
	$('#menu-item-41131 a').addClass('hs-cta-trigger-button hs-cta-trigger-button-122536178737 na go26732895');
	
	$(".sticky-tab").click(function(){
		$(".sticky-tab-inner").addClass('open-tab');
	});
	$(".sticky-tab-close").click(function(){
		$(".sticky-tab-inner").removeClass('open-tab');
	});
	
	// Read More
	$(".read").click(function(){
		$(this).prev().slideToggle(); 
		if($(this).text()=='Read More'){
			$(this).text('Read Less'); 
			$(this).closest('.expand').addClass('expanded'); 
		}
		else if($(this).text()=='Read Less'){
			$(this).text('Read More'); 
			$(this).closest('.expand').removeClass('expanded');  
		}  
	});
	// Landing Form Block - stop background scroll
	$('.form-fixed').mouseover(function() { 
		$('body').addClass('no-scroll'); 
	});
	$('.form-fixed').mouseout(function() { 
		$('body').removeClass('no-scroll'); 
	});
	// PR Dropdown Menu
	$('li#menu-item-22305 a').click(function(){
      $('.pr-dropdown-menu').removeClass('open'); 
	});
	$('li#menu-item-22305 a').mouseover(function() {
      $('.pr-dropdown-menu').addClass('open'); 
	});
	$('li#menu-item-22305 a').mouseout(function() {
      $('.pr-dropdown-menu').removeClass('open'); 
	});
    $('.pr-dropdown-menu').removeClass('open');  
    $('.pr-dropdown-menu').hover(function() {
      $('.pr-dropdown-menu').toggleClass('open'); 
	});	
	// Blog Search
	$('.nac-search-wrap').hide();

	$('.search-nac-icon').bind('click',function(){
		$(this).toggle('slide', { direction: "right" }, 0); 
		$('.nac-search-wrap').delay('500').toggle('slide', { direction: "right" }, 500);
	});
	$('.search-nac-close').bind('click',function(){
		$('.nac-search-wrap').toggle('slide', { direction: "right" }, 0); 
		$('.search-nac-icon').toggle('slide', { direction: "right" }, 500);  
	});
	
	$('.form-disclaimer').bind('click',function(){
		$('#form-disclaimer').toggle('slide', { direction: "up" }, 0);  
	}); 
	$('.form-disclaimer-2').bind('click',function(){
		$('#form-disclaimer-2').toggle('slide', { direction: "up" }, 0);  
	});
	$('.form-disclaimer-3').bind('click',function(){
		$('#form-disclaimer-3').toggle('slide', { direction: "up" }, 0);  
	});
	$('.form-disclaimer-4').bind('click',function(){
		$('#form-disclaimer-4').toggle('slide', { direction: "up" }, 0);  
	}); 
	
	$('#menu-header-nav li#menu-item-22305').addClass('menu-item-has-children');
	
	/* Accordian Q&A */  
	$('.sp-tab').bind('click',function(){  
		$('.sp-tab p.sp').slideUp('fast'); 
		$('.sp-tab').removeClass('active');
		$(this).addClass('active'); 
		$(this).find('p.sp').slideDown('slow'); 
	});  
	$('#sp-tab1').bind('click',function(){  
		$('.sp-tab-pic').slideUp('500');
		$('.sp-tab-pic.sp-1').toggle('slide', { direction: 'down'}, 500); 
	});
	$('#sp-tab2').bind('click',function(){   
		$('.sp-tab-pic').slideUp('500');
		$('.sp-tab-pic.sp-2').toggle('slide', { direction: 'down'}, 500); 
	});
	$('#sp-tab3').bind('click',function(){  
		$('.sp-tab-pic').slideUp('500');
		$('.sp-tab-pic.sp-3').toggle('slide', { direction: 'down'}, 500);  
	});
	$('#sp-tab4').bind('click',function(){   
		$('.sp-tab-pic').slideUp('500');
		$('.sp-tab-pic.sp-4').toggle('slide', { direction: 'down'}, 500); 
	});
	$('#sp-tab5').bind('click',function(){   
		$('.sp-tab-pic').slideUp('500');
		$('.sp-tab-pic.sp-5').toggle('slide', { direction: 'down'}, 500);  
	});

	/* FAQs */ 	
	$('h3.togglefaq').click(function (e) {
		e.preventDefault();
		var notthis = $('.active').not(this);
		notthis.find('.icon-minus').addClass('icon-plus').removeClass('icon-minus');
		notthis.toggleClass('active').next('.faqanswer').slideToggle(500); 
		$(this).toggleClass('active').next().slideToggle(500); 
		$(this).children('span.ic').toggleClass('icon-plus icon-minus');
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
$( document ).ready(function() {
	$('a.taphover').on('touchstart', function (e) {
    'use strict'; //satisfy the code inspectors
    var link = $(this); //preselect the link
    if (link.hasClass('hover')) {
        return true;
    } else {
        link.addClass('hover');
        $('a.taphover').not(this).removeClass('hover');
        e.preventDefault();
        return false; //extra, and to make sure the function has consistent return points
    }
	});
}); 
// hide related videos on youtube. CSS also needed .hytPlayerWrap
$( document ).ready(function() {
"use strict";
    document.addEventListener('DOMContentLoaded', function() {
        // Activate only if not already activated
        if (window.hideYTActivated) return;
        // Load API
        if (typeof YT === 'undefined') {
            let tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            let firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        }
        // Activate on all players
        let onYouTubeIframeAPIReadyCallbacks = [];
        for (let playerWrap of document.querySelectorAll(".hytPlayerWrap")) {
            let playerFrame = playerWrap.querySelector("iframe");
            
            let onPlayerStateChange = function(event) {
                if (event.data == YT.PlayerState.ENDED) {
                    playerWrap.classList.add("ended");
                } else if (event.data == YT.PlayerState.PAUSED) {
                    playerWrap.classList.add("paused");
                } else if (event.data == YT.PlayerState.PLAYING) {
                    playerWrap.classList.remove("ended");
                    playerWrap.classList.remove("paused");
                }
            };
            
            let player;
            onYouTubeIframeAPIReadyCallbacks.push(function() {
                player = new YT.Player(playerFrame, {
                    events: {
                        'onStateChange': onPlayerStateChange
                    }
                });
            });
          
            playerWrap.addEventListener("click", function() {
                let playerState = player.getPlayerState();
                if (playerState == YT.PlayerState.ENDED) {
                    player.seekTo(0);
                } else if (playerState == YT.PlayerState.PAUSED) {
                    player.playVideo();
                }
            });
        }
        
        window.onYouTubeIframeAPIReady = function() {
            for (let callback of onYouTubeIframeAPIReadyCallbacks) {
                callback();
            }
        };
        
        window.hideYTActivated = true;
    });
});
// Case Study Read More Block Hover Functions
	$(document).ready(function() {
    	checkWidth();
	});
	$(window).on("resize", function(){
		checkWidth();
	});

	function checkWidth(){
		$vWidth = $(window).width();
		// $('body').html($vWidth);
		if($vWidth > 767){
			$('.cs-rm1 .cs-headline-rm').mouseover(function() { 
			  $('.cs-rm1 .cs-img-rm').removeClass('show-rm');
			  $('.cs-rm1 .cs-img-rm').addClass('hide-rm');
			  $('.cs-rm1 .cs-quote-rm').removeClass('hide-rm');
			  $('.cs-rm1 .cs-quote-rm').addClass('show-rm');
			});
			$('.cs-rm1 .cs-headline-rm').mouseout(function() { 
			  $('.cs-rm1 .cs-quote-rm').removeClass('show-rm');
			  $('.cs-rm1 .cs-quote-rm').addClass('hide-rm');
			  $('.cs-rm1 .cs-img-rm').removeClass('hide-rm'); 
			  $('.cs-rm1 .cs-img-rm').addClass('show-rm'); 
			});  
			$('.cs-rm2 .cs-headline-rm').mouseover(function() { 
			  $('.cs-rm2 .cs-img-rm').removeClass('show-rm');
			  $('.cs-rm2 .cs-img-rm').addClass('hide-rm');
			  $('.cs-rm2 .cs-quote-rm').removeClass('hide-rm');
			  $('.cs-rm2 .cs-quote-rm').addClass('show-rm');
			});
			$('.cs-rm2 .cs-headline-rm').mouseout(function() { 
			  $('.cs-rm2 .cs-quote-rm').removeClass('show-rm');
			  $('.cs-rm2 .cs-quote-rm').addClass('hide-rm');
			  $('.cs-rm2 .cs-img-rm').removeClass('hide-rm'); 
			  $('.cs-rm2 .cs-img-rm').addClass('show-rm'); 
			});  
			$('.cs-rm3 .cs-headline-rm').mouseover(function() { 
			  $('.cs-rm3 .cs-img-rm').removeClass('show-rm');
			  $('.cs-rm3 .cs-img-rm').addClass('hide-rm');
			  $('.cs-rm3 .cs-quote-rm').removeClass('hide-rm');
			  $('.cs-rm3 .cs-quote-rm').addClass('show-rm');
			});
			$('.cs-rm3 .cs-headline-rm').mouseout(function() { 
			  $('.cs-rm3 .cs-quote-rm').removeClass('show-rm');
			  $('.cs-rm3 .cs-quote-rm').addClass('hide-rm');
			  $('.cs-rm3 .cs-img-rm').removeClass('hide-rm'); 
			  $('.cs-rm3 .cs-img-rm').addClass('show-rm'); 
			});
			$('.cs-rm4 .cs-headline-rm').mouseover(function() { 
			  $('.cs-rm4 .cs-img-rm').removeClass('show-rm');
			  $('.cs-rm4 .cs-img-rm').addClass('hide-rm');
			  $('.cs-rm4 .cs-quote-rm').removeClass('hide-rm');
			  $('.cs-rm4 .cs-quote-rm').addClass('show-rm');
			});
			$('.cs-rm4 .cs-headline-rm').mouseout(function() { 
			  $('.cs-rm4 .cs-quote-rm').removeClass('show-rm');
			  $('.cs-rm4 .cs-quote-rm').addClass('hide-rm');
			  $('.cs-rm4 .cs-img-rm').removeClass('hide-rm'); 
			  $('.cs-rm4 .cs-img-rm').addClass('show-rm'); 
			}); 
			$('.cs-rm5 .cs-headline-rm').mouseover(function() { 
			  $('.cs-rm5 .cs-img-rm').removeClass('show-rm');
			  $('.cs-rm5 .cs-img-rm').addClass('hide-rm');
			  $('.cs-rm5 .cs-quote-rm').removeClass('hide-rm');
			  $('.cs-rm5 .cs-quote-rm').addClass('show-rm');
			});
			$('.cs-rm5 .cs-headline-rm').mouseout(function() { 
			  $('.cs-rm5 .cs-quote-rm').removeClass('show-rm');
			  $('.cs-rm5 .cs-quote-rm').addClass('hide-rm');
			  $('.cs-rm5 .cs-img-rm').removeClass('hide-rm'); 
			  $('.cs-rm5 .cs-img-rm').addClass('show-rm'); 
			});  
			$('.cs-rm6 .cs-headline-rm').mouseover(function() { 
			  $('.cs-rm6 .cs-img-rm').removeClass('show-rm');
			  $('.cs-rm6 .cs-img-rm').addClass('hide-rm');
			  $('.cs-rm6 .cs-quote-rm').removeClass('hide-rm');
			  $('.cs-rm6 .cs-quote-rm').addClass('show-rm');
			});
			$('.cs-rm6 .cs-headline-rm').mouseout(function() { 
			  $('.cs-rm6 .cs-quote-rm').removeClass('show-rm');
			  $('.cs-rm6 .cs-quote-rm').addClass('hide-rm');
			  $('.cs-rm6 .cs-img-rm').removeClass('hide-rm'); 
			  $('.cs-rm6 .cs-img-rm').addClass('show-rm'); 
			});
			$('.cs-rm7 .cs-headline-rm').mouseover(function() { 
			  $('.cs-rm7 .cs-img-rm').removeClass('show-rm');
			  $('.cs-rm7 .cs-img-rm').addClass('hide-rm');
			  $('.cs-rm7 .cs-quote-rm').removeClass('hide-rm');
			  $('.cs-rm7 .cs-quote-rm').addClass('show-rm');
			});
			$('.cs-rm7 .cs-headline-rm').mouseout(function() { 
			  $('.cs-rm7 .cs-quote-rm').removeClass('show-rm');
			  $('.cs-rm7 .cs-quote-rm').addClass('hide-rm');
			  $('.cs-rm7 .cs-img-rm').removeClass('hide-rm'); 
			  $('.cs-rm7 .cs-img-rm').addClass('show-rm'); 
			});
			$('.cs-rm8 .cs-headline-rm').mouseover(function() { 
			  $('.cs-rm8 .cs-img-rm').removeClass('show-rm');
			  $('.cs-rm8 .cs-img-rm').addClass('hide-rm');
			  $('.cs-rm8 .cs-quote-rm').removeClass('hide-rm');
			  $('.cs-rm8 .cs-quote-rm').addClass('show-rm');
			});
			$('.cs-rm8 .cs-headline-rm').mouseout(function() { 
			  $('.cs-rm8 .cs-quote-rm').removeClass('show-rm');
			  $('.cs-rm8 .cs-quote-rm').addClass('hide-rm');
			  $('.cs-rm8 .cs-img-rm').removeClass('hide-rm'); 
			  $('.cs-rm8 .cs-img-rm').addClass('show-rm'); 
			});
			$('.cs-rm9 .cs-headline-rm').mouseover(function() { 
			  $('.cs-rm9 .cs-img-rm').removeClass('show-rm');
			  $('.cs-rm9 .cs-img-rm').addClass('hide-rm');
			  $('.cs-rm9 .cs-quote-rm').removeClass('hide-rm');
			  $('.cs-rm9 .cs-quote-rm').addClass('show-rm');
			});
			$('.cs-rm9 .cs-headline-rm').mouseout(function() { 
			  $('.cs-rm9 .cs-quote-rm').removeClass('show-rm');
			  $('.cs-rm9 .cs-quote-rm').addClass('hide-rm');
			  $('.cs-rm9 .cs-img-rm').removeClass('hide-rm'); 
			  $('.cs-rm9 .cs-img-rm').addClass('show-rm'); 
			});
			$('.cs-rm10 .cs-headline-rm').mouseover(function() { 
			  $('.cs-rm10 .cs-img-rm').removeClass('show-rm');
			  $('.cs-rm10 .cs-img-rm').addClass('hide-rm');
			  $('.cs-rm10 .cs-quote-rm').removeClass('hide-rm');
			  $('.cs-rm10 .cs-quote-rm').addClass('show-rm');
			});
			$('.cs-rm10 .cs-headline-rm').mouseout(function() { 
			  $('.cs-rm10 .cs-quote-rm').removeClass('show-rm');
			  $('.cs-rm10 .cs-quote-rm').addClass('hide-rm');
			  $('.cs-rm10 .cs-img-rm').removeClass('hide-rm'); 
			  $('.cs-rm10 .cs-img-rm').addClass('show-rm'); 
			});
			// img hover
			$('.cs-rm1 .cs-img-rm').mouseover(function() { 
			  $('.cs-rm1 .cs-content-rm').removeClass('show-rm');
			  $('.cs-rm1 .cs-content-rm').addClass('hide-rm');
			  $('.cs-rm1 .cs-quote-rm2').removeClass('hide-rm');
			  $('.cs-rm1 .cs-quote-rm2').addClass('show-rm');
			});
			$('.cs-rm1 .cs-img-rm').mouseout(function() { 
			  $('.cs-rm1 .cs-quote-rm2').removeClass('show-rm');
			  $('.cs-rm1 .cs-quote-rm2').addClass('hide-rm');
			  $('.cs-rm1 .cs-content-rm').removeClass('hide-rm'); 
			  $('.cs-rm1 .cs-content-rm').addClass('show-rm'); 
			}); 
			//
			$('.cs-rm2 .cs-img-rm').mouseover(function() { 
			  $('.cs-rm2 .cs-content-rm').removeClass('show-rm');
			  $('.cs-rm2 .cs-content-rm').addClass('hide-rm');
			  $('.cs-rm2 .cs-quote-rm2').removeClass('hide-rm');
			  $('.cs-rm2 .cs-quote-rm2').addClass('show-rm');
			});
			$('.cs-rm2 .cs-img-rm').mouseout(function() { 
			  $('.cs-rm2 .cs-quote-rm2').removeClass('show-rm');
			  $('.cs-rm2 .cs-quote-rm2').addClass('hide-rm');
			  $('.cs-rm2 .cs-content-rm').removeClass('hide-rm'); 
			  $('.cs-rm2 .cs-content-rm').addClass('show-rm'); 
			});
			//
			$('.cs-rm3 .cs-img-rm').mouseover(function() { 
			  $('.cs-rm3 .cs-content-rm').removeClass('show-rm');
			  $('.cs-rm3 .cs-content-rm').addClass('hide-rm');
			  $('.cs-rm3 .cs-quote-rm2').removeClass('hide-rm');
			  $('.cs-rm3 .cs-quote-rm2').addClass('show-rm');
			});
			$('.cs-rm3 .cs-img-rm').mouseout(function() { 
			  $('.cs-rm3 .cs-quote-rm2').removeClass('show-rm');
			  $('.cs-rm3 .cs-quote-rm2').addClass('hide-rm');
			  $('.cs-rm3 .cs-content-rm').removeClass('hide-rm'); 
			  $('.cs-rm3 .cs-content-rm').addClass('show-rm'); 
			});
			//
			$('.cs-rm4 .cs-img-rm').mouseover(function() { 
			  $('.cs-rm4 .cs-content-rm').removeClass('show-rm');
			  $('.cs-rm4 .cs-content-rm').addClass('hide-rm');
			  $('.cs-rm4 .cs-quote-rm2').removeClass('hide-rm');
			  $('.cs-rm4 .cs-quote-rm2').addClass('show-rm');
			});
			$('.cs-rm4 .cs-img-rm').mouseout(function() { 
			  $('.cs-rm4 .cs-quote-rm2').removeClass('show-rm');
			  $('.cs-rm4 .cs-quote-rm2').addClass('hide-rm');
			  $('.cs-rm4 .cs-content-rm').removeClass('hide-rm'); 
			  $('.cs-rm4 .cs-content-rm').addClass('show-rm'); 
			});  
			//
			$('.cs-rm5 .cs-img-rm').mouseover(function() { 
			  $('.cs-rm5 .cs-content-rm').removeClass('show-rm');
			  $('.cs-rm5 .cs-content-rm').addClass('hide-rm');
			  $('.cs-rm5 .cs-quote-rm2').removeClass('hide-rm');
			  $('.cs-rm5 .cs-quote-rm2').addClass('show-rm');
			});
			$('.cs-rm5 .cs-img-rm').mouseout(function() { 
			  $('.cs-rm5 .cs-quote-rm2').removeClass('show-rm');
			  $('.cs-rm5 .cs-quote-rm2').addClass('hide-rm');
			  $('.cs-rm5 .cs-content-rm').removeClass('hide-rm'); 
			  $('.cs-rm5 .cs-content-rm').addClass('show-rm'); 
			});   
			//
			$('.cs-rm6 .cs-img-rm').mouseover(function() { 
			  $('.cs-rm6 .cs-content-rm').removeClass('show-rm');
			  $('.cs-rm6 .cs-content-rm').addClass('hide-rm');
			  $('.cs-rm6 .cs-quote-rm2').removeClass('hide-rm');
			  $('.cs-rm6 .cs-quote-rm2').addClass('show-rm');
			});
			$('.cs-rm6 .cs-img-rm').mouseout(function() { 
			  $('.cs-rm6 .cs-quote-rm2').removeClass('show-rm');
			  $('.cs-rm6 .cs-quote-rm2').addClass('hide-rm');
			  $('.cs-rm6 .cs-content-rm').removeClass('hide-rm'); 
			  $('.cs-rm6 .cs-content-rm').addClass('show-rm'); 
			});   
			//
			$('.cs-rm7 .cs-img-rm').mouseover(function() { 
			  $('.cs-rm7 .cs-content-rm').removeClass('show-rm');
			  $('.cs-rm7 .cs-content-rm').addClass('hide-rm');
			  $('.cs-rm7 .cs-quote-rm2').removeClass('hide-rm');
			  $('.cs-rm7 .cs-quote-rm2').addClass('show-rm');
			});
			$('.cs-rm7 .cs-img-rm').mouseout(function() { 
			  $('.cs-rm7 .cs-quote-rm2').removeClass('show-rm');
			  $('.cs-rm7 .cs-quote-rm2').addClass('hide-rm');
			  $('.cs-rm7 .cs-content-rm').removeClass('hide-rm'); 
			  $('.cs-rm7 .cs-content-rm').addClass('show-rm'); 
			});   
			//
			$('.cs-rm8 .cs-img-rm').mouseover(function() { 
			  $('.cs-rm8 .cs-content-rm').removeClass('show-rm');
			  $('.cs-rm8 .cs-content-rm').addClass('hide-rm');
			  $('.cs-rm8 .cs-quote-rm2').removeClass('hide-rm');
			  $('.cs-rm8 .cs-quote-rm2').addClass('show-rm');
			});
			$('.cs-rm8 .cs-img-rm').mouseout(function() { 
			  $('.cs-rm8 .cs-quote-rm2').removeClass('show-rm');
			  $('.cs-rm8 .cs-quote-rm2').addClass('hide-rm');
			  $('.cs-rm8 .cs-content-rm').removeClass('hide-rm'); 
			  $('.cs-rm8 .cs-content-rm').addClass('show-rm'); 
			});   
			//
			$('.cs-rm9 .cs-img-rm').mouseover(function() { 
			  $('.cs-rm9 .cs-content-rm').removeClass('show-rm');
			  $('.cs-rm9 .cs-content-rm').addClass('hide-rm');
			  $('.cs-rm9 .cs-quote-rm2').removeClass('hide-rm');
			  $('.cs-rm9 .cs-quote-rm2').addClass('show-rm');
			});
			$('.cs-rm9 .cs-img-rm').mouseout(function() { 
			  $('.cs-rm9 .cs-quote-rm2').removeClass('show-rm');
			  $('.cs-rm9 .cs-quote-rm2').addClass('hide-rm');
			  $('.cs-rm9 .cs-content-rm').removeClass('hide-rm'); 
			  $('.cs-rm9 .cs-content-rm').addClass('show-rm'); 
			});   
			//
			$('.cs-rm10 .cs-img-rm').mouseover(function() { 
			  $('.cs-rm10 .cs-content-rm').removeClass('show-rm');
			  $('.cs-rm10 .cs-content-rm').addClass('hide-rm');
			  $('.cs-rm10 .cs-quote-rm2').removeClass('hide-rm');
			  $('.cs-rm10 .cs-quote-rm2').addClass('show-rm');
			});
			$('.cs-rm10 .cs-img-rm').mouseout(function() { 
			  $('.cs-rm10 .cs-quote-rm2').removeClass('show-rm');
			  $('.cs-rm10 .cs-quote-rm2').addClass('hide-rm');
			  $('.cs-rm10 .cs-content-rm').removeClass('hide-rm'); 
			  $('.cs-rm10 .cs-content-rm').addClass('show-rm'); 
			});
			////////////////////////////////////////
			// //// Case Study Color Block
			$('.cscb-rm1 .cscb-headline-rm').mouseover(function() {  
			  $('.cscb-rm1 .cscb-quote-rm2').removeClass('hide-rm');
			  $('.cscb-rm1 .cscb-quote-rm2').addClass('show-rm');
			});
			$('.cscb-rm1 .cscb-headline-rm').mouseout(function() { 
			  $('.cscb-rm1 .cscb-quote-rm2').removeClass('show-rm');
			  $('.cscb-rm1 .cscb-quote-rm2').addClass('hide-rm'); 
			});
			//
			$('.cscb-rm2 .cscb-headline-rm').mouseover(function() {  
			  $('.cscb-rm2 .cscb-quote-rm2').removeClass('hide-rm');
			  $('.cscb-rm2 .cscb-quote-rm2').addClass('show-rm');
			});
			$('.cscb-rm2 .cscb-headline-rm').mouseout(function() { 
			  $('.cscb-rm2 .cscb-quote-rm2').removeClass('show-rm');
			  $('.cscb-rm2 .cscb-quote-rm2').addClass('hide-rm'); 
			});
			$('.cscb-rm3 .cscb-headline-rm').mouseover(function() {  
			  $('.cscb-rm3 .cscb-quote-rm2').removeClass('hide-rm');
			  $('.cscb-rm3 .cscb-quote-rm2').addClass('show-rm');
			});
			$('.cscb-rm3 .cscb-headline-rm').mouseout(function() { 
			  $('.cscb-rm3 .cscb-quote-rm2').removeClass('show-rm');
			  $('.cscb-rm3 .cscb-quote-rm2').addClass('hide-rm'); 
			});
			$('.cscb-rm4 .cscb-headline-rm').mouseover(function() {  
			  $('.cscb-rm4 .cscb-quote-rm2').removeClass('hide-rm');
			  $('.cscb-rm4 .cscb-quote-rm2').addClass('show-rm');
			});
			$('.cscb-rm4 .cscb-headline-rm').mouseout(function() { 
			  $('.cscb-rm4 .cscb-quote-rm2').removeClass('show-rm');
			  $('.cscb-rm4 .cscb-quote-rm2').addClass('hide-rm'); 
			});
			$('.cscb-rm5 .cscb-headline-rm').mouseover(function() {  
			  $('.cscb-rm5 .cscb-quote-rm2').removeClass('hide-rm');
			  $('.cscb-rm5 .cscb-quote-rm2').addClass('show-rm');
			});
			$('.cscb-rm5 .cscb-headline-rm').mouseout(function() { 
			  $('.cscb-rm5 .cscb-quote-rm2').removeClass('show-rm');
			  $('.cscb-rm5 .cscb-quote-rm2').addClass('hide-rm'); 
			});
			$('.cscb-rm6 .cscb-headline-rm').mouseover(function() {  
			  $('.cscb-rm6 .cscb-quote-rm2').removeClass('hide-rm');
			  $('.cscb-rm6 .cscb-quote-rm2').addClass('show-rm');
			});
			$('.cscb-rm6 .cscb-headline-rm').mouseout(function() { 
			  $('.cscb-rm6 .cscb-quote-rm2').removeClass('show-rm');
			  $('.cscb-rm6 .cscb-quote-rm2').addClass('hide-rm'); 
			});
			$('.cscb-rm7 .cscb-headline-rm').mouseover(function() {  
			  $('.cscb-rm7 .cscb-quote-rm2').removeClass('hide-rm');
			  $('.cscb-rm7 .cscb-quote-rm2').addClass('show-rm');
			});
			$('.cscb-rm7 .cscb-headline-rm').mouseout(function() { 
			  $('.cscb-rm7 .cscb-quote-rm2').removeClass('show-rm');
			  $('.cscb-rm7 .cscb-quote-rm2').addClass('hide-rm'); 
			});
			$('.cscb-rm8 .cscb-headline-rm').mouseover(function() {  
			  $('.cscb-rm8 .cscb-quote-rm2').removeClass('hide-rm');
			  $('.cscb-rm8 .cscb-quote-rm2').addClass('show-rm');
			});
			$('.cscb-rm8 .cscb-headline-rm').mouseout(function() { 
			  $('.cscb-rm8 .cscb-quote-rm2').removeClass('show-rm');
			  $('.cscb-rm8 .cscb-quote-rm2').addClass('hide-rm'); 
			});
			$('.cscb-rm9 .cscb-headline-rm').mouseover(function() {  
			  $('.cscb-rm9 .cscb-quote-rm2').removeClass('hide-rm');
			  $('.cscb-rm9 .cscb-quote-rm2').addClass('show-rm');
			});
			$('.cscb-rm9 .cscb-headline-rm').mouseout(function() { 
			  $('.cscb-rm9 .cscb-quote-rm2').removeClass('show-rm');
			  $('.cscb-rm9 .cscb-quote-rm2').addClass('hide-rm'); 
			});
			$('.cscb-rm10 .cscb-headline-rm').mouseover(function() {  
			  $('.cscb-rm10 .cscb-quote-rm2').removeClass('hide-rm');
			  $('.cscb-rm10 .cscb-quote-rm2').addClass('show-rm');
			});
			$('.cscb-rm10 .cscb-headline-rm').mouseout(function() { 
			  $('.cscb-rm10 .cscb-quote-rm2').removeClass('show-rm');
			  $('.cscb-rm10 .cscb-quote-rm2').addClass('hide-rm'); 
			});
		} else if($vWidth <= 767) {
			$('.cs-rm1 .cs-quote-rm').removeClass('show-rm');
			$('.cs-rm1 .cs-quote-rm').addClass('hide-rm');
			$('.cs-rm1 .cs-img-rm').removeClass('hide-rm'); 
			$('.cs-rm1 .cs-img-rm').addClass('show-rm');
			$('.cs-rm1 .cs-headline-rm').mouseover(function() {
			  $('.cs-rm1 .cs-img-rm').removeClass('hide-rm');
			  $('.cs-rm1 .cs-img-rm').addClass('show-rm');
			});
			$('.cs-rm1 .cs-headline-rm').mouseout(function() { 
			}); 
			$('.cs-rm2 .cs-quote-rm').removeClass('show-rm');
			$('.cs-rm2 .cs-quote-rm').addClass('hide-rm');
			$('.cs-rm2 .cs-img-rm').removeClass('hide-rm'); 
			$('.cs-rm2 .cs-img-rm').addClass('show-rm');
			$('.cs-rm2 .cs-headline-rm').mouseover(function() {
			  $('.cs-rm2 .cs-img-rm').removeClass('hide-rm');
			  $('.cs-rm2 .cs-img-rm').addClass('show-rm');
			});
			$('.cs-rm2 .cs-headline-rm').mouseout(function() { 
			}); 
			$('.cs-rm3 .cs-quote-rm').removeClass('show-rm');
			$('.cs-rm3 .cs-quote-rm').addClass('hide-rm');
			$('.cs-rm3 .cs-img-rm').removeClass('hide-rm'); 
			$('.cs-rm3 .cs-img-rm').addClass('show-rm');
			$('.cs-rm3 .cs-headline-rm').mouseover(function() {
			  $('.cs-rm3 .cs-img-rm').removeClass('hide-rm');
			  $('.cs-rm3 .cs-img-rm').addClass('show-rm');
			});
			$('.cs-rm3 .cs-headline-rm').mouseout(function() { 
			});
			$('.cs-rm4 .cs-quote-rm').removeClass('show-rm');
			$('.cs-rm4 .cs-quote-rm').addClass('hide-rm');
			$('.cs-rm4 .cs-img-rm').removeClass('hide-rm'); 
			$('.cs-rm4 .cs-img-rm').addClass('show-rm');
			$('.cs-rm4 .cs-headline-rm').mouseover(function() {
			  $('.cs-rm4 .cs-img-rm').removeClass('hide-rm');
			  $('.cs-rm4 .cs-img-rm').addClass('show-rm');
			});
			$('.cs-rm4 .cs-headline-rm').mouseout(function() { 
			}); 
			$('.cs-rm5 .cs-quote-rm').removeClass('show-rm');
			$('.cs-rm5 .cs-quote-rm').addClass('hide-rm');
			$('.cs-rm5 .cs-img-rm').removeClass('hide-rm'); 
			$('.cs-rm5 .cs-img-rm').addClass('show-rm');
			$('.cs-rm5 .cs-headline-rm').mouseover(function() {
			  $('.cs-rm5 .cs-img-rm').removeClass('hide-rm');
			  $('.cs-rm5 .cs-img-rm').addClass('show-rm');
			});
			$('.cs-rm5 .cs-headline-rm').mouseout(function() { 
			}); 
			$('.cs-rm6 .cs-quote-rm').removeClass('show-rm');
			$('.cs-rm6 .cs-quote-rm').addClass('hide-rm');
			$('.cs-rm6 .cs-img-rm').removeClass('hide-rm'); 
			$('.cs-rm6 .cs-img-rm').addClass('show-rm');
			$('.cs-rm6 .cs-headline-rm').mouseover(function() {
			  $('.cs-rm6 .cs-img-rm').removeClass('hide-rm');
			  $('.cs-rm6 .cs-img-rm').addClass('show-rm');
			});
			$('.cs-rm6 .cs-headline-rm').mouseout(function() { 
			});  
			$('.cs-rm7 .cs-quote-rm').removeClass('show-rm');
			$('.cs-rm7 .cs-quote-rm').addClass('hide-rm');
			$('.cs-rm7 .cs-img-rm').removeClass('hide-rm'); 
			$('.cs-rm7 .cs-img-rm').addClass('show-rm');
			$('.cs-rm7 .cs-headline-rm').mouseover(function() {
			  $('.cs-rm7 .cs-img-rm').removeClass('hide-rm');
			  $('.cs-rm7 .cs-img-rm').addClass('show-rm');
			});
			$('.cs-rm7 .cs-headline-rm').mouseout(function() { 
			}); 
			$('.cs-rm8 .cs-quote-rm').removeClass('show-rm');
			$('.cs-rm8 .cs-quote-rm').addClass('hide-rm');
			$('.cs-rm8 .cs-img-rm').removeClass('hide-rm'); 
			$('.cs-rm8 .cs-img-rm').addClass('show-rm');
			$('.cs-rm8 .cs-headline-rm').mouseover(function() {
			  $('.cs-rm8 .cs-img-rm').removeClass('hide-rm');
			  $('.cs-rm8 .cs-img-rm').addClass('show-rm');
			});
			$('.cs-rm8 .cs-headline-rm').mouseout(function() { 
			});  
			$('.cs-rm9 .cs-quote-rm').removeClass('show-rm');
			$('.cs-rm9 .cs-quote-rm').addClass('hide-rm');
			$('.cs-rm9 .cs-img-rm').removeClass('hide-rm'); 
			$('.cs-rm9 .cs-img-rm').addClass('show-rm');
			$('.cs-rm9 .cs-headline-rm').mouseover(function() {
			  $('.cs-rm9 .cs-img-rm').removeClass('hide-rm');
			  $('.cs-rm9 .cs-img-rm').addClass('show-rm');
			});
			$('.cs-rm9 .cs-headline-rm').mouseout(function() { 
			});  
			$('.cs-rm10 .cs-quote-rm').removeClass('show-rm');
			$('.cs-rm10 .cs-quote-rm').addClass('hide-rm');
			$('.cs-rm10 .cs-img-rm').removeClass('hide-rm'); 
			$('.cs-rm10 .cs-img-rm').addClass('show-rm');
			$('.cs-rm10 .cs-headline-rm').mouseover(function() {
			  $('.cs-rm10 .cs-img-rm').removeClass('hide-rm');
			  $('.cs-rm10 .cs-img-rm').addClass('show-rm');
			});
			$('.cs-rm10 .cs-headline-rm').mouseout(function() { 
			});
			// img hover
			$('.cs-rm1 .cs-quote-rm2').removeClass('show-rm');
			$('.cs-rm1 .cs-quote-rm2').addClass('hide-rm');
			$('.cs-rm1 .cs-content-rm').removeClass('hide-rm'); 
			$('.cs-rm1 .cs-content-rm').addClass('show-rm');
			$('.cs-rm1 .cs-img-rm').mouseover(function() {
			  $('.cs-rm1 .cs-content-rm').removeClass('hide-rm');
			  $('.cs-rm1 .cs-content-rm').addClass('show-rm');
			});
			$('.cs-rm1 .cs-img-rm').mouseout(function() { 
			});
			//
			$('.cs-rm2 .cs-quote-rm2').removeClass('show-rm');
			$('.cs-rm2 .cs-quote-rm2').addClass('hide-rm');
			$('.cs-rm2 .cs-content-rm').removeClass('hide-rm'); 
			$('.cs-rm2 .cs-content-rm').addClass('show-rm');
			$('.cs-rm2 .cs-img-rm').mouseover(function() {
			  $('.cs-rm2 .cs-content-rm').removeClass('hide-rm');
			  $('.cs-rm2 .cs-content-rm').addClass('show-rm');
			});
			$('.cs-rm2 .cs-img-rm').mouseout(function() { 
			});
			//
			$('.cs-rm3 .cs-quote-rm2').removeClass('show-rm');
			$('.cs-rm3 .cs-quote-rm2').addClass('hide-rm');
			$('.cs-rm3 .cs-content-rm').removeClass('hide-rm'); 
			$('.cs-rm3 .cs-content-rm').addClass('show-rm');
			$('.cs-rm3 .cs-img-rm').mouseover(function() {
			  $('.cs-rm3 .cs-content-rm').removeClass('hide-rm');
			  $('.cs-rm3 .cs-content-rm').addClass('show-rm');
			});
			$('.cs-rm3 .cs-img-rm').mouseout(function() { 
			});
			//
			$('.cs-rm4 .cs-quote-rm2').removeClass('show-rm');
			$('.cs-rm4 .cs-quote-rm2').addClass('hide-rm');
			$('.cs-rm4 .cs-content-rm').removeClass('hide-rm'); 
			$('.cs-rm4 .cs-content-rm').addClass('show-rm');
			$('.cs-rm4 .cs-img-rm').mouseover(function() {
			  $('.cs-rm4 .cs-content-rm').removeClass('hide-rm');
			  $('.cs-rm4 .cs-content-rm').addClass('show-rm');
			});
			$('.cs-rm4 .cs-img-rm').mouseout(function() { 
			});
			//
			$('.cs-rm5 .cs-quote-rm2').removeClass('show-rm');
			$('.cs-rm5 .cs-quote-rm2').addClass('hide-rm');
			$('.cs-rm5 .cs-content-rm').removeClass('hide-rm'); 
			$('.cs-rm5 .cs-content-rm').addClass('show-rm');
			$('.cs-rm5 .cs-img-rm').mouseover(function() {
			  $('.cs-rm5 .cs-content-rm').removeClass('hide-rm');
			  $('.cs-rm5 .cs-content-rm').addClass('show-rm');
			});
			$('.cs-rm5 .cs-img-rm').mouseout(function() { 
			});
			//
			$('.cs-rm6 .cs-quote-rm2').removeClass('show-rm');
			$('.cs-rm6 .cs-quote-rm2').addClass('hide-rm');
			$('.cs-rm6 .cs-content-rm').removeClass('hide-rm'); 
			$('.cs-rm6 .cs-content-rm').addClass('show-rm');
			$('.cs-rm6 .cs-img-rm').mouseover(function() {
			  $('.cs-rm6 .cs-content-rm').removeClass('hide-rm');
			  $('.cs-rm6 .cs-content-rm').addClass('show-rm');
			});
			$('.cs-rm6 .cs-img-rm').mouseout(function() { 
			});
			//
			$('.cs-rm7 .cs-quote-rm2').removeClass('show-rm');
			$('.cs-rm7 .cs-quote-rm2').addClass('hide-rm');
			$('.cs-rm7 .cs-content-rm').removeClass('hide-rm'); 
			$('.cs-rm7 .cs-content-rm').addClass('show-rm');
			$('.cs-rm7 .cs-img-rm').mouseover(function() {
			  $('.cs-rm7 .cs-content-rm').removeClass('hide-rm');
			  $('.cs-rm7 .cs-content-rm').addClass('show-rm');
			});
			$('.cs-rm7 .cs-img-rm').mouseout(function() { 
			});
			//
			$('.cs-rm8 .cs-quote-rm2').removeClass('show-rm');
			$('.cs-rm8 .cs-quote-rm2').addClass('hide-rm');
			$('.cs-rm8 .cs-content-rm').removeClass('hide-rm'); 
			$('.cs-rm8 .cs-content-rm').addClass('show-rm');
			$('.cs-rm8 .cs-img-rm').mouseover(function() {
			  $('.cs-rm8 .cs-content-rm').removeClass('hide-rm');
			  $('.cs-rm8 .cs-content-rm').addClass('show-rm');
			});
			$('.cs-rm8 .cs-img-rm').mouseout(function() { 
			});
			//
			$('.cs-rm9 .cs-quote-rm2').removeClass('show-rm');
			$('.cs-rm9 .cs-quote-rm2').addClass('hide-rm');
			$('.cs-rm9 .cs-content-rm').removeClass('hide-rm'); 
			$('.cs-rm9 .cs-content-rm').addClass('show-rm');
			$('.cs-rm9 .cs-img-rm').mouseover(function() {
			  $('.cs-rm9 .cs-content-rm').removeClass('hide-rm');
			  $('.cs-rm9 .cs-content-rm').addClass('show-rm');
			});
			$('.cs-rm9 .cs-img-rm').mouseout(function() { 
			});
			//
			$('.cs-rm10 .cs-quote-rm2').removeClass('show-rm');
			$('.cs-rm10 .cs-quote-rm2').addClass('hide-rm');
			$('.cs-rm10 .cs-content-rm').removeClass('hide-rm'); 
			$('.cs-rm10 .cs-content-rm').addClass('show-rm');
			$('.cs-rm10 .cs-img-rm').mouseover(function() {
			  $('.cs-rm10 .cs-content-rm').removeClass('hide-rm');
			  $('.cs-rm10 .cs-content-rm').addClass('show-rm');
			});
			$('.cs-rm10 .cs-img-rm').mouseout(function() { 
			});  
			// //// Case Study Color Block
			$('.cscb-rm1 .cscb-quote-rm2').removeClass('show-rm');
			$('.cscb-rm1 .cscb-quote-rm2').addClass('hide-rm'); 
			$('.cscb-rm1 .cscb-headline-rm').mouseover(function() { 
			});
			$('.cscb-rm1 .cscb-headline-rm').mouseout(function() { 
			}); 
			$('.cscb-rm2 .cscb-quote-rm2').removeClass('show-rm');
			$('.cscb-rm2 .cscb-quote-rm2').addClass('hide-rm'); 
			$('.cscb-rm2 .cscb-headline-rm').mouseover(function() { 
			});
			$('.cscb-rm2 .cscb-headline-rm').mouseout(function() { 
			}); 
			$('.cscb-rm3 .cscb-quote-rm2').removeClass('show-rm');
			$('.cscb-rm3 .cscb-quote-rm2').addClass('hide-rm'); 
			$('.cscb-rm3 .cscb-headline-rm').mouseover(function() { 
			});
			$('.cscb-rm3 .cscb-headline-rm').mouseout(function() { 
			}); 
			$('.cscb-rm4 .cscb-quote-rm2').removeClass('show-rm');
			$('.cscb-rm4 .cscb-quote-rm2').addClass('hide-rm'); 
			$('.cscb-rm4 .cscb-headline-rm').mouseover(function() { 
			});
			$('.cscb-rm4 .cscb-headline-rm').mouseout(function() { 
			});
			$('.cscb-rm5 .cscb-quote-rm2').removeClass('show-rm');
			$('.cscb-rm5 .cscb-quote-rm2').addClass('hide-rm'); 
			$('.cscb-rm5 .cscb-headline-rm').mouseover(function() { 
			});
			$('.cscb-rm5 .cscb-headline-rm').mouseout(function() { 
			}); 
			$('.cscb-rm6 .cscb-quote-rm2').removeClass('show-rm');
			$('.cscb-rm6 .cscb-quote-rm2').addClass('hide-rm'); 
			$('.cscb-rm6 .cscb-headline-rm').mouseover(function() { 
			});
			$('.cscb-rm6 .cscb-headline-rm').mouseout(function() { 
			}); 
			$('.cscb-rm7 .cscb-quote-rm2').removeClass('show-rm');
			$('.cscb-rm7 .cscb-quote-rm2').addClass('hide-rm'); 
			$('.cscb-rm7 .cscb-headline-rm').mouseover(function() { 
			});
			$('.cscb-rm7 .cscb-headline-rm').mouseout(function() { 
			}); 
			$('.cscb-rm8 .cscb-quote-rm2').removeClass('show-rm');
			$('.cscb-rm8 .cscb-quote-rm2').addClass('hide-rm'); 
			$('.cscb-rm8 .cscb-headline-rm').mouseover(function() { 
			});
			$('.cscb-rm8 .cscb-headline-rm').mouseout(function() { 
			}); 
			$('.cscb-rm9 .cscb-quote-rm2').removeClass('show-rm');
			$('.cscb-rm9 .cscb-quote-rm2').addClass('hide-rm'); 
			$('.cscb-rm9 .cscb-headline-rm').mouseover(function() { 
			});
			$('.cscb-rm9 .cscb-headline-rm').mouseout(function() { 
			}); 
			$('.cscb-rm10 .cscb-quote-rm2').removeClass('show-rm');
			$('.cscb-rm10 .cscb-quote-rm2').addClass('hide-rm'); 
			$('.cscb-rm10 .cscb-headline-rm').mouseover(function() { 
			});
			$('.cscb-rm10 .cscb-headline-rm').mouseout(function() { 
			}); 
		}
	}