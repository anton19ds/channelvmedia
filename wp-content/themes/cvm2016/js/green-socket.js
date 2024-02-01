(function ($) {
	// Init ScrollMagic
    var controller = new ScrollMagic.Controller(); 
	
// ---------- loop through each section and reveal title
		$('.project').each(function(){
			// console.log(this);
 			//build a scene
			var ourScene = new new ScrollMagic.Scene({
				triggerElement: this.children[4], 
				triggerHook: 0.9, 
			})
			.setClassToggle(this, 'fade-in')  
			.addTo(controller); 
			
		});
// ---------- Pin and animate 5 Common Barriers
	    var pinSection4 = new TimelineMax();
	
		pinSection4 
	
.fromTo($('.wrapper-barrier .barrier-row'), 2.0, {y: '+=0'}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '+=0.4')  
.fromTo($('.wrapper-barrier .barrier-row'), 2.0, {y: '0', autoAlpha: 1}, {y: 0, autoAlpha: 0, ease:Power1.easeOut}, '+=0.4') 
	 
.set($('.wrapper-barrier .sp-number'), {text: '2'})
.set($('.wrapper-barrier p.sp-strong'), {text: 'Marketing is doing a lot, but it’s not producing high-value results.'}) 
.set($('.wrapper-barrier p.sp'), {text: 'Marketing seems to have all the bases covered--lots of channels, lots of tactics, lots of vendors--but there doesn’t seem to be a direct connection between those and what’s necessary for growth.'}) 
.set($('.wrapper-barrier .barrier-img'), {attr:{src:"https://channelvmedia.com/wp-content/uploads/2020/07/circle-eye-chart.png"}})
.fromTo($('.wrapper-barrier .barrier-row'), 2.0, {y: '+=0'}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '+=0.4')  
.fromTo($('.wrapper-barrier .barrier-row'), 2.0, {y: '0', autoAlpha: 1}, {y: 0, autoAlpha: 0, ease:Power1.easeOut}, '+=0.4') 

.set($('.wrapper-barrier .sp-number'), {text: '3'}) 
.set($('.wrapper-barrier p.sp-strong'), {text: 'Marketing looks at what other companies are doing and reverse engineers that into tools and tactics, rather than developing its own strategic plan.'}) 
.set($('.wrapper-barrier p.sp'), {text: 'In other words, no one really knows why they’re doing what they’re doing or how it will contribute to overall business success.'})  
.set($('.wrapper-barrier .barrier-img'), {attr:{src:"https://channelvmedia.com/wp-content/uploads/2020/07/circle-celebrate.png"}})
.fromTo($('.wrapper-barrier .barrier-row'), 2.0, {y: '+=0'}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '+=0.4')  
.fromTo($('.wrapper-barrier .barrier-row'), 2.0, {y: '0', autoAlpha: 1}, {y: 0, autoAlpha: 0, ease:Power1.easeOut}, '+=0.4') 
 
.set($('.wrapper-barrier .sp-number'), {text: '4'})  
.set($('.wrapper-barrier p.sp-strong'), {text: 'The metrics that marketing uses to measure its success aren’t aligned with how the company defines its success.'}) 
.set($('.wrapper-barrier p.sp'), {text: 'These metrics are often tied to specific marketing platforms and channels, rather than to outcomes that directly influence company growth.'}) 
.set($('.wrapper-barrier .barrier-img'), {attr:{src:"https://channelvmedia.com/wp-content/uploads/2020/07/circle-less-is-more.png"}})
.fromTo($('.wrapper-barrier .barrier-row'), 2.0, {y: '+=0'}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '+=0.4')  
.fromTo($('.wrapper-barrier .barrier-row'), 2.0, {y: '0', autoAlpha: 1}, {y: 0, autoAlpha: 0, ease:Power1.easeOut}, '+=0.4') 

.set($('.wrapper-barrier .sp-number'), {text: '5'})
.set($('.wrapper-barrier p.sp-strong'), {text: 'The company’s narrative in the market is either too broad or too narrow.'}) 
.set($('.wrapper-barrier p.sp'), {text: 'When a company’s positioning is undeveloped or unfocused it often... Speaks to everyone and no one. Communicates in terms of features, functions, jargon and hyperbole. Addresses the wrong buyer (e.g., not the decision maker), speaks to a small fraction of its addressable market, or worse, only reaches its industry peers.'}) 
.set($('.wrapper-barrier .barrier-img'), {attr:{src:"https://channelvmedia.com/wp-content/uploads/2020/07/circle-voice.png"}})
.fromTo($('.wrapper-barrier .barrier-row'), 2.0, {y: '+=0'}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '+=0.4')  
.fromTo($('.wrapper-barrier .barrier-row'), 2.0, {y: '0', autoAlpha: 1}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '+=0.4') 
	
		var pinScene04 = new ScrollMagic.Scene({
	        triggerElement: '.wrapper-barrier', 
			triggerHook: 0,
			duration: '500%'
		})
	    .setPin('.wrapper-barrier', {pushFollowers: true}) 
		.setTween(pinSection4) 
//		.addTo(controller);
// ---------- END Pin 4 and animate bullets
 

// Timeline Picture
 		var timelinePic = new ScrollMagic.Scene({
	        triggerElement: '.timeline-pic', 
			triggerHook: 0.4,
			duration: '80%'
		})
	    .setPin('.timeline-pic', {pushFollowers: false}) 
		.setTween(timelinePic) 
		.addTo(controller);
	
// Timeline Line
 		var timelineLine = new ScrollMagic.Scene({
	        triggerElement: '.timeline-line-overlay', 
			triggerHook: 0.68,
			duration: '250%'
		})
	    .setPin('.timeline-line-overlay', {pushFollowers: false}) 
		.setTween(timelineLine) 
		.addTo(controller);

// Timeline
	$(".fade-section").each(function() {
	  var timeline = new TimelineMax(); 
	  var fadeIn = TweenMax.from(this, '0.6', {opacity:0.3, y:15, ease: Power2.easeOut}, '.1');
	  var active = TweenMax.to($(this).siblings(".timeline-circle"), '.6', {css:{className:'+=active'}, y:15, ease: Power2.easeOut}, '.1');
		
	  timeline.add(active, 0).add(fadeIn, 0);

	  var scene = new ScrollMagic.Scene({triggerElement: this, offset: -200, reverse: true})
		.setTween(timeline)
		.addTo(controller); 
	});
	
// Who is it for
	$(".fade-why").each(function() {
	  var timeline = new TimelineMax(); 
	  var fadeIn = TweenMax.from(this, '0.6', {opacity:0.0, y:15, ease: Power2.easeOut}, '.1');
	  var active = TweenMax.to($(this), '.6', {css:{className:'+=active'}, y:15, ease: Power2.easeOut}, '.1');

	  timeline.add(active, 0).add(fadeIn, 0);

	  var scene = new ScrollMagic.Scene({triggerElement: this, offset: -200, reverse: true})
		.setTween(timeline)
		.addTo(controller); 
	});
	$(".fade-why-right").each(function() {
	  var timeline = new TimelineMax(); 
	  var fadeIn = TweenMax.from(this, '0.6', {opacity:0.0, y:15, ease: Power2.easeOut}, '.1');
	  var active = TweenMax.to($(this), '.6', {css:{className:'+=active'}, y:15, ease: Power2.easeOut}, '.1'); 

	  timeline.add(active, 0).add(fadeIn, 0);

	  var scene = new ScrollMagic.Scene({triggerElement: this, offset: -200, reverse: true})
		.setTween(timeline)
		.addTo(controller); 
	});
	
	$(".slide-left").each(function() {
	  var timeline = new TimelineMax(); 
	  var slideOut = TweenMax.from(this, '0.6', {opacity:1.0, y:0, ease: Power2.easeOut}, '.1');
	  var active = TweenMax.to($(this), '.6', {css:{className:'+=active'}, y:0, ease: Power2.easeOut}, '.1');

	  timeline.add(active, 0).add(slideOut, 0);

	  var scene = new ScrollMagic.Scene({triggerElement: this, offset: -200, reverse: true})
		.setTween(timeline)
		.addTo(controller); 
	});
	
	$(".slide-right").each(function() {
	  var timeline = new TimelineMax(); 
	  var slideOut = TweenMax.from(this, '0.6', {opacity:1.0, y:0, ease: Power2.easeOut}, '.1');
	  var active = TweenMax.to($(this), '.6', {css:{className:'+=active'}, y:0, ease: Power2.easeOut}, '.1');

	  timeline.add(active, 0).add(slideOut, 0);

	  var scene = new ScrollMagic.Scene({triggerElement: this, offset: -200, reverse: true})
		.setTween(timeline)
		.addTo(controller); 
	});
	
	$(".benefits-left").each(function() {
	  var timeline = new TimelineMax(); 
	  var slideOut = TweenMax.from(this, '0.6', {opacity:1.0, y:0, ease: Power2.easeOut}, '.1');
	  var active = TweenMax.to($(this), '.6', {css:{className:'+=active'}, y:0, ease: Power2.easeOut}, '.1'); 
		
	  timeline.add(active, 0).add(slideOut, 0);

	  var scene = new ScrollMagic.Scene({triggerElement: this, offset: -300, reverse: true})
		.setTween(timeline)
		.addTo(controller); 
	});
	
	$(".perks-slide-right").each(function() {
	  var timeline = new TimelineMax(); 
	  var slideOut = TweenMax.from(this, '0.6', {opacity:1.0, y:0, ease: Power2.easeOut}, '.1');
	  var active = TweenMax.to($(this), '.6', {css:{className:'+=active'}, y:0, ease: Power2.easeOut}, '.1');

	  timeline.add(active, 0).add(slideOut, 0);

	  var scene = new ScrollMagic.Scene({triggerElement: this, offset: -200, reverse: true})
		.setTween(timeline)
		.addTo(controller); 
	});
	
	$(".perks-fade-in").each(function() {
	  var timeline = new TimelineMax(); 
	  var fadeIn = TweenMax.from(this, '0.6', {opacity:0.0, y:30, ease: Power2.easeOut}, '.1');
	  var active = TweenMax.to($(this), '.6', {css:{className:'+=active'}, y:0, ease: Power2.easeOut}, '.1');

	  timeline.add(active, 0).add(fadeIn, 0);

	  var scene = new ScrollMagic.Scene({triggerElement: this, offset: -300, reverse: true})
		.setTween(timeline)
		.addTo(controller); 
	}); 
	
	
}(jQuery));