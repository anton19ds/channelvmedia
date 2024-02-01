<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */

get_header(); ?>

<script src="/wp-content/themes/cvm2016/js/dot-matrix.js"></script>  
<div id="background-404-image"></div>
<div id="background-404"></div> 
<div id="particles-js"></div> 
 
	<div class="grid-page pmt20 clearfix">  
			<section class="error-404 not-found">
				<header class="page-header">
					<h2 class="story-title darwin tac white">The page you&#8217;re looking for doesn&#8217;t live here, but feel free to play with these vectors.</h2>
				</header><!-- .page-header -->

				<div class="page-content">
					<a class="double" href="http://channelvmedia.com/">View Our Homepage</a>
					<p class="tac white"><?php _e( '', 'twentysixteen' ); ?></p>
					<div class="grid-thin mauto clearfix" style="display;none;">
						<?php //get_search_form(); ?>
					</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
	</div><!-- grid-page --> 
<script>
      particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 100,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#cc2a9a"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#ffffff"
      },
      "polygon": {
        "nb_sides": 1
      },
      "image": {
        "src": " ",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.9,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 2,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 2,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200,
        "rotateZ": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});  
</script>
<?php get_footer(); ?>
