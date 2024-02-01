// Work page funtions
$(document).ready(function() { 
	// animationName = animation classes and animationend = remove animation classes once animation has ended so it replays
	var animationName = 'animated pulse';
	var animationend = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend';
	// Client logos filter functions and animations
	$('.client-cs-filter > li').click(function(event){
		$(this).addClass('on');
        $('.client-cs-filter > li').not($(this)).removeClass('on');
	});    
	$('.client-cs-filter li.all').click(function(event){ 
        $('.client-cs-logos li').removeClass('hidden'); 
        $('.client-cs-logos li').addClass('visible').addClass(animationName).one(animationend, function() {
			$(this).removeClass(animationName);
		});    
	});
	$('.client-cs-filter li.business-tech').click(function(event){ 
        $('.client-cs-logos li').addClass('hidden');  
        $('.client-cs-logos li').removeClass('visible');  
        $('.client-cs-logos li.business-tech').addClass('visible').addClass(animationName).one(animationend, function() {
			$(this).removeClass(animationName);
		});  
	});
	$('.client-cs-filter li.consumer-tech').click(function(event){ 
        $('.client-cs-logos li').addClass('hidden');  
        $('.client-cs-logos li').removeClass('visible');  
        $('.client-cs-logos li.consumer-tech').addClass('visible').addClass(animationName).one(animationend, function() {
			$(this).removeClass(animationName);
		});  
	});
	$('.client-cs-filter li.lifestyle').click(function(event){ 
        $('.client-cs-logos li').addClass('hidden');  
        $('.client-cs-logos li').removeClass('visible');  
        $('.client-cs-logos li.lifestyle').addClass('visible').addClass(animationName).one(animationend, function() {
			$(this).removeClass(animationName);
		});  
	}); 
	$('.client-cs-filter li.media-and-marketing').click(function(event){ 
        $('.client-cs-logos li').addClass('hidden');  
        $('.client-cs-logos li').removeClass('visible');  
        $('.client-cs-logos li.media-and-marketing').addClass('visible').addClass(animationName).one(animationend, function() {
			$(this).removeClass(animationName);
		});   
	}); 
	$('.client-cs-filter li.enterprise').click(function(event){
        $('.client-cs-logos li').addClass('hidden');  
        $('.client-cs-logos li').removeClass('visible');   
        $('.client-cs-logos li.enterprise').addClass('visible').addClass(animationName).one(animationend, function() {
			$(this).removeClass(animationName);
		});   
	}); 
	$('.client-cs-filter li.professional-services').click(function(event){
        $('.client-cs-logos li').addClass('hidden');  
        $('.client-cs-logos li').removeClass('visible');   
        $('.client-cs-logos li.professional-services').addClass('visible').addClass(animationName).one(animationend, function() {
			$(this).removeClass(animationName);
		});   
	}); 
});	