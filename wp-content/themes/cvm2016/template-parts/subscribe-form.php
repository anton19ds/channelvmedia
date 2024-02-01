<?php if(get_field('subscribe_form', 'option') == true) { ?>
	<div class="sticky-tab"></div>
	<div class="sticky-tab-inner">  
		<div class="sticky-tab-close"></div> 
		 <?php the_field('subscribe_form', 'option'); ?>  
	</div>
<?php } ?>