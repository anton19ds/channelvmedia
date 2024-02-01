<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
get_header(); ?>  

<!-- ---------- HERO ---------------- --> 		
	<?php if(get_field('page_title_text') || get_field('page_intro_text')) { echo '<div class="contact-wrap clearfix"'; } ?> 
		<?php if(get_field('page_hero_background_photo')) {	echo 'style="background-image:url(' . get_field('page_hero_background_photo') . ');"'; } ?>
	<?php if(get_field('page_title_text') || get_field('page_intro_text')) { echo '><div class="color-overlay purple-pink-diagonal opacity20 "></div><div class="grid-10 fl contact-intro clearfix">'; } ?>

	<?php if(get_field('page_title_photo')) {	echo '<div class="grid-page clearfix"><div class="grid-7 fl pt110 clearfix"><img class="responsive-img" src="' . get_field('page_title_photo') . '" border="0" alt="Title" /></div></div>'; } ?>  
		
		<?php if(get_field('page_title_text')) {	echo '<div class="grid-page clearfix"><div class="grid-10 fl pt110 tac clearfix"><h1 class="white darwin fs96 ts3">' . get_field('page_title_text') . '</h1></div></div>'; } ?> 
		
		<?php if(get_field('page_intro_text')) {	echo '<div class="grid-page clearfix"><div class="grid-10 fl ppb3 tac clearfix"><p class="white fs26 ts2">' . get_field('page_intro_text') . '</p></div></div>'; } ?>
		
		
	<?php if(get_field('page_title_text') || get_field('page_intro_text')) { echo '</div></div>'; } ?>  
 
<!-- --------- END HERO ------------- --> 		

<div class="section grid-10 bg-white fl pb5 pt3 clearfix">
	<div class="grid-page clearfix">
		<div class="grid-2b fl tac clearfix">
			<div class="grid-page clearfix">
				<h6 class="contact-subheadline">Headquarters</h6> 
				<p>167 W. 23rd St.,<br/>Floors 2 &amp; 3<br/>
				New York, NY 10011</p>
			</div>
		</div>   
		<div class="grid-2b fl tac clearfix">
			<div class="grid-page clearfix">
				<h6 class="contact-subheadline">Write</h6> 
				<p><a href="mailto:hello@channelvmedia.com">hello@channelvmedia.com</a></p>
			</div>
		</div>  
		<div class="grid-2b fl tac clearfix">
			<div class="grid-page clearfix">
				<h6 class="contact-subheadline">Call</h6> 
				<p><a href="tel:+12126800179" class="tel">212.680.0179</a></p>
			</div>
		</div>
		<div class="grid-2b fl tac clearfix">
			<div class="grid-page clearfix">
				<h6 class="contact-subheadline">Connect</h6> 
				<ul class="contact-social-icons clearfix">
					<li><a href="https://www.facebook.com/ChannelVMedia/" target="_blank"><img src="https://channelvmedia.com/wp-content/uploads/2018/04/icon-facebook-light-purple.svg" alt="Facebook" border="0"/></a></li>
					<li><a href="https://twitter.com/channelvmedia/" target="_blank"><img src="https://channelvmedia.com/wp-content/uploads/2018/04/icon-twitter-light-purple.svg" alt="Twitter" border="0"/></a></li>
					<li><a href="https://www.instagram.com/channelvmedia/" target="_blank"><img src="https://channelvmedia.com/wp-content/uploads/2018/04/icon-instagram-light-purple.svg" alt="Instagram" border="0"/></a></li>
				</ul>
			</div>
		</div>  
	</div>
</div>  

<!-- ---------- FORM --------------- -->
<section id="get-started" class="grid-10 fl bg-light-purple pt5 pb5 clearfix">
	<div class="grid-page clearfix">
		<div class="grid-3b fl clearfix">   
			<h3 class="sp white light mt20">Become a client.<br/>Join our team.</br/>Get in Touch.</h3> 
			<div class="grid-10 fl hide-mobile clearfix"> 
				<p class="sp-small-text form-disclaimer-2">Why we collect your information.</p> 
				<p id="form-disclaimer-2" class="sp-small-text">This form collects your name and email so we can contact you to assess if our service would be beneficial for your company.</p>
			</div> 
		</div>
		<div class="grid-6 fr clearfix">  
			<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
			<script>
			  hbspt.forms.create({
				region: "na1",
				portalId: "298842",
				formId: "119a8ef9-10cc-49d6-8b7f-02796dfb326b"
			  });
			</script> 
			<div class="grid-10 fl hide-desktop clearfix"> 
				<p class="sp-small-text form-disclaimer-2">Why we collect your information.</p> 
				<p id="form-disclaimer-2" class="sp-small-text">This form collects your name and email so we can contact you to assess if our service would be beneficial for your company.</p>
			</div> 
		</div> 
	</div> 
</section>  

<?php get_footer(); ?>