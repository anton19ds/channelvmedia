// This code lives in gsap-main.js and gsap-main.min.js
gsap.registerPlugin(ScrollTrigger);

const text = document.querySelector(".enlarger"); 

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
const heroText = document.querySelectorAll(".enlarger");