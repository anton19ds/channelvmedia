var swiper1 = new Swiper('.swiper1', {
	pagination: '.swiper-pagination',
	paginationType: 'fraction',
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	autoHeight: true, //enable auto height 
    slidesPerView: 'auto',
	loop: true,
	// autoplay: 3000,
    disableOnInteraction: false,
    grabCursor: true,
});
var swipersliderone = new Swiper('.swiper_slider_one', { 
	pagination: '.swiper-pagination',
	paginationType: 'fraction',
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	autoHeight: true, //enable auto height  
	loop: true,
	// autoplay: 3000,
	disableOnInteraction: false,
	grabCursor: true,
    spaceBetween: 40, 
	effect: 'slide',
	speed: 200,
	  breakpoints: {
		// when window width is >= 320px
		320: {
    		spaceBetween: 20,
		},
		// when window width is >= 480px
		480: { 
		  spaceBetween: 30
		},
		// when window width is >= 640px
		640: { 
		  spaceBetween: 40
		}
	  }
});
var swipersliderone = new Swiper('.swiper_slider_two', {
	pagination: '.swiper-pagination',
	paginationType: 'fraction',
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	autoHeight: true, //enable auto height
    slidesPerView: 'auto',
	loop: true,
	// autoplay: 3000,
	disableOnInteraction: false,
	grabCursor: true,
    spaceBetween: 40, 
	effect: 'slide',
	speed: 200,
	speed: 200,
	  breakpoints: {
		// when window width is >= 320px
		320: {
    		spaceBetween: 20,
		},
		// when window width is >= 480px
		480: { 
		  spaceBetween: 30
		},
		// when window width is >= 640px
		640: { 
		  spaceBetween: 40
		}
	  }
}); 