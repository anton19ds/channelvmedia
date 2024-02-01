gsap.registerPlugin(ScrollTrigger);

const text = document.querySelector(".cvm-hero-title"); 

// Hero Parallax
const tl = gsap.timeline({
  defaults: { ease: "none", transformOrigin: "50% 50%" },
  scrollTrigger: {
	trigger: ".cvm-hero",
	start: "top top",
	end: "bottom top",
	scrub: true } }); 

tl.to(
text,
{
  y: -text.offsetHeight * text.dataset.depth,
  autoAlpha: 1, // change to 0 to make opacity 0 on scroll
  scale: 1.98,
  duration: 1.0 },

0); 

/* loader */
const heroText = document.querySelectorAll(".cvm-hero-title");

function initHeaderTilt() {
	document.querySelector('.perspective-gallery').addEventListener('mousemove', moveImages);
}
function moveImages(e){
    
    const { offsetX, offsetY, target } = e;
    const { clientWidth, clientHeight } = target; 
	
	// get 0 0 cursor position in the center of the window
	const xPos = (offsetX/clientWidth) - 0.5;
	const yPos = (offsetY/clientHeight) - 0.5; 
	const xPos2 = (offsetX/clientWidth) + 0.2;
	
	const leftImages = gsap.utils.toArray('.pg-left .pg-image');
	const rightImages = gsap.utils.toArray('.pg-right .pg-image');
	const titleHTilt = gsap.utils.toArray('.tilt-text');
		
	const modifier = (index) => index*1.2+0.5;
	
	// move left 3 image
	leftImages.forEach((image, index) => {
		gsap.to(image, {
			duration: 1.2,
			x: xPos*20*modifier(index),
			y: yPos*30*modifier(index),
			rotationY: xPos*40,
			rotationX: yPos*10,
			ease:'Power3.out'
		})
	})
	
	rightImages.forEach((image, index) => {
		gsap.to(image, {
			duration: 1.2,
			x: xPos*20*modifier(index),
			y: -yPos*30*modifier(index),
			rotationY: xPos*40,
			rotationX: yPos*10,
			ease:'Power3.out'
		})
	})
	
	titleHTilt.forEach((elem, index) => {
		gsap.to(elem, {
			duration: 1.2,
			x: xPos2*40*modifier(index),
			// y: -yPos*30*modifier(index),
			// rotationY: xPos*60,
			// rotationX: yPos*10,
			ease:'Power3.out' 
		})
	}) 
	
}
function init(){
    
    initHeaderTilt(); 

}

window.addEventListener('load', function(){
    init();
});
 