var swiperpress = new Swiper('.swiper4', { 
	pagination: '.swiper-pagination',
	slidesPerView: 5,
	paginationClickable: true,
	spaceBetween: 0,
	freeMode: true, 
	paginationType: 'progress', 
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	// loop: true,
	// autoplay: 4000,
	  breakpoints: {
		// when window width is >= 460px
		460: {
		  slidesPerView: 2
		},
		// when window width is >= 960px
		1000: { 
		  slidesPerView: 3
		},
		// when window width is >= 1520px
		1500: { 
		  slidesPerView: 4
		}
	  }
});  