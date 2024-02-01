<?php
/**
 * Block Post Manual List Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id = 'block-' . $block['id'];
if( !empty($block['anchor']) ) {
   $id = $block['anchor'];
}
// Load values and assing defaults.
$benefits_post_padding_top = get_field('benefits_post_padding_top') ?: 'Section Padding Top'; 
$benefits_post_padding_bottom = get_field('benefits_post_padding_bottom') ?: 'Section Padding Bottom'; 
$blog_post_headline = get_field('blog_post_headline') ?: 'Headline'; 
$blog_post_headline_color = get_field('blog_post_headline_color') ?: 'Headline Color'; 
$blog_post_subheadline = get_field('blog_post_subheadline') ?: 'Subheadline'; 
$blog_post_subheadline_color = get_field('blog_post_subheadline_color') ?: 'Subheadline Color'; 
$blog_post_text = get_field('blog_post_text') ?: 'Intro Text'; 
$blog_post_text_color = get_field('blog_post_text_color') ?: 'Intro Text Color'; 
$blog_post_list = get_field('blog_post_list') ?: 'List';  
$blog_post_photo = get_sub_field('blog_post_photo') ?: 'Photo'; 
$blog_post_name = get_sub_field('blog_post_name') ?: 'Title'; 
$blog_post_desc = get_sub_field('blog_post_desc') ?: 'Description'; 
$blog_post_link = get_sub_field('blog_post_link') ?: 'Link'; 
$blog_post_background_color = get_field('blog_post_background_color') ?: 'Section Background Color';
$blog_post_title_color = get_field('blog_post_title_color') ?: 'Blog Post Title Color';
$blog_post_desc_color = get_field('blog_post_desc_color') ?: 'Blog Post Description Color';
$blog_post_post_link_color = get_field('blog_post_post_link_color') ?: 'Blog Post Text Link Color';
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl bg-white clearfix">
	<div class="grid-page mauto pad clearfix" style="<?php if(get_field('blog_post_padding_top')) { echo 'padding-top:' . get_field('blog_post_padding_top') . ';'; } ?> <?php if(get_field('blog_post_padding_bottom')) { echo 'padding-bottom:' . get_field('blog_post_padding_bottom') . ';'; } ?>">
		<?php if((get_field('blog_post_headline') || get_field('blog_post_subheadline') || get_field('blog_post_text')) == true ) { echo '<div class="grid-10 fl pb5 clearfix">'; } ?>
			<?php if(get_field('blog_post_headline')) { echo '<h2 class="block-headline bkw '; } ?><?php if((get_field('blog_post_headline_color')) == true ) { echo '' . get_field('blog_post_headline_color') . ''; } else { echo''; } ?><?php if(get_field('blog_post_headline')) { echo '">' . get_field('blog_post_headline') . '</h2>'; } ?>
			<?php if(get_field('blog_post_subheadline')) { echo '<span class="block-subheadline"'; } ?><?php if(get_field('blog_post_subheadline_color')) { echo ' style="color:' . get_field('blog_post_subheadline_color') . ';"'; } ?><?php if(get_field('blog_post_subheadline')) { echo '>' . get_field('blog_post_subheadline') . '</span>'; } ?>
			<?php if(get_field('blog_post_text')) { echo '<span class="block-text"'; } ?><?php if((get_field('blog_post_text_color') && get_field('blog_post_text')) == true ) { echo ' style="color:' . get_field('blog_post_text_color') . ';"'; } ?><?php if(get_field('blog_post_text')) { echo '>' . get_field('blog_post_text') . '</span>'; } ?>
		<?php if((get_field('blog_post_headline') || get_field('blog_post_subheadline') || get_field('blog_post_text')) == true ) { echo '</div>'; } ?>

		<?php if(get_field('blog_post_list')): $i = 0; ?>
			<ul class="blog-post-list-flex">
			<?php while(has_sub_field('blog_post_list')): $i++; ?>
				<li <?php if(get_field('blog_post_columns')) { echo 'class="project ' . get_field('blog_post_columns') . '"'; } ?>>
				 <?php if(get_sub_field('blog_post_button_link')) { echo '<a href="' . get_sub_field('blog_post_button_link') . '" role="link">'; } ?>
					<span class="post-content">
						<?php if(get_sub_field('blog_post_photo')) { echo '<span class="post-img"><span class="post-bg clearfix" style="background-image:url(' . get_sub_field('blog_post_photo') . ');"><span class="color-overlay purple-pink-diagonal opacity30"></span></span></span>'; } ?>
						<?php if(get_sub_field('blog_post_name')) { echo '<h3 class="post-name mt0 mb10">' . get_sub_field('blog_post_name') . '</h3>'; } ?>
						<?php if(get_sub_field('blog_post_desc')) { echo '<span class="post-desc">' . get_sub_field('blog_post_desc') . '</span>'; } ?>
						<?php if((get_sub_field('blog_post_button_text')) == true ) { echo '<span class="post-link">' . get_sub_field('blog_post_button_text') . '</span>'; } ?>
					</span>
				 <?php if(get_sub_field('blog_post_button_link')) { echo '</a>'; } ?>
 				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>

		<style type="text/css"> 
		.grid-page { clear:both; display:block; margin:0 auto; min-height:10px; position:relative; width:80%; max-width:1200px !important;}
		.blog-post-list-flex{display:flex;flex-flow:row wrap;float:left;gap:0%;margin:0px auto !important;padding:0 !important;position:relative;width:100%;max-width:1200px !important;}
		.blog-post-list-flex li{display:flex;flex:1 0 auto;flex-grow:1;margin:0 3% 0 0;padding:0;position:relative;width:14.16%;max-width:14.16%;}
		.blog-post-list-flex li.six{width:14.16%;max-width:14.16%;}
		.blog-post-list-flex li.five{width:17.6%;max-width:17.6%;}
		.blog-post-list-flex li.four{width:22.75%;max-width:22.75%;}
		.blog-post-list-flex li.three{margin:0 3% 0 0;width:31.3%;max-width:31.3%;}
		.blog-post-list-flex li.two{width:48.5%;max-width:48.5%;}

		.blog-post-list-flex li.six:nth-child(6n+6){margin-right:0;}
			
		.blog-post-list-flex li.five:nth-child(5n+5){margin-right:0%;}
		.blog-post-list-flex li.five:nth-child(6n+6){margin-right:3%;}
			
		.blog-post-list-flex li.four:nth-child(4n+4){margin-right:0%;}
		.blog-post-list-flex li.four:nth-child(5n+5){margin-right:3%;} 

		.blog-post-list-flex li.three:nth-child(3n+3){margin-right:0;}

		.blog-post-list-flex li.two:nth-child(even){margin-right:0;}

		.blog-post-list-flex li a {display:block;position:relative;transition:all .5s ease-in-out;width:100%;z-index:1;}
		.blog-post-list-flex li a:hover {cursor:pointer;transition:all .5s ease-in-out;}
		.blog-post-list-flex li .post-img {background-position:center center;background-repeat:no-repeat;background-size:cover;float:left;display:block;height:250px;margin:0 0 20px;overflow:hidden;padding:0;position:relative;width:100%;-moz-transition:all 0.5s ease;-webkit-transition:all 0.5s ease;-o-transition:all 0.5s ease;-ms-transition:all 0.5s ease;transition:all 0.5s ease;}
		.blog-post-list-flex li a:hover .post-img {-moz-transition:all 0.5s ease;-webkit-transition:all 0.5s ease;-o-transition:all 0.5s ease;-ms-transition:all 0.5s ease;transition:all 0.5s ease;}
		.blog-post-list-flex li .post-img .post-bg {background-position:center center;background-repeat:no-repeat;background-size:cover;bottom:0;display:block;height:250px;left:0;margin:0;padding:0;position:absolute;right:0;top:0;width:100%;-moz-transition:all 3.0s ease;-webkit-transition:all 3.0s ease;-o-transition:all 3.0s ease;-ms-transition:all 3.0s ease;transition:all 3.0s ease;} 
		.blog-post-list-flex li a:hover .post-img .post-bg {transform:scale(1.5);}
		.blog-post-list-flex li .post-content {display:block;float:left;margin:0;padding:0 0 30px;position:relative;width:100%;}
		.blog-post-list-flex li .post-name {color:#3A357E;display:block;float:left;font-family:'Lato', sans-serif;font-weight:400;font-size:24px;line-height:110%;padding:0 0 10px;position:relative;text-align:left;transition:all .5s ease-in-out;width:100%;}
		.blog-post-list-flex li a:hover .post-name {cursor:pointer;transform:scale(1.0);transition:all .5s ease-in-out;}
		.blog-post-list-flex li .post-desc {display:block;float:left;font-family:'Lato', sans-serif;font-weight:400;margin:0;position:relative;text-align:left;transition:all .5s ease-in-out;width:100%;} 
		.blog-post-list-flex li .post-desc p{color:#333;display:block;font-family:'Lato', sans-serif;font-weight:400;font-size:16px;line-height:120%;position:relative;width:100%;}
		.blog-post-list-flex li .post-link {color:#3A357E;display:block;float:left;font-family:'Lato', sans-serif;font-weight:400;font-size:16px;padding-bottom:20px;position:relative;text-align:left;width:100%;}
		.blog-post-list-flex li .post-link::after {content: "→";margin-left:5px;}
		.blog-post-list-flex li a:hover .post-link {color:#C83493;}
 
 		@media screen and (max-width: 1200px) { 
			.blog-post-list-flex li.six {width:17.6%;max-width:17.6%;} /* 5 */
			.blog-post-list-flex li.six:nth-child(6n+6){margin-right:3%;}
			.blog-post-list-flex li.six:nth-child(5n+5){margin-right:0;} 
		}
 		@media screen and (max-width: 1100px) { 
			.blog-post-list-flex li.six {width:22.75%;max-width:22.75%;} /* 4 */
			.blog-post-list-flex li.six:nth-child(5n+5){margin-right:3%;}
			.blog-post-list-flex li.six:nth-child(4n+4){margin-right:0;}
			
			.blog-post-list-flex li.five{width:22.75%;max-width:22.75%;} /* 4 */
			.blog-post-list-flex li.five:nth-child(5n+5){margin-right:3%;}
			.blog-post-list-flex li.five:nth-child(4n+4){margin-right:0;} 
		}
 		@media screen and (max-width: 960px) { 
			.blog-post-list-flex li.six {width:31.3%;max-width:31.3%;} /* 3 */
			.blog-post-list-flex li.six:nth-child(4n+4){margin-right:3%;}
			.blog-post-list-flex li.six:nth-child(3n+3){margin-right:0;} 
			
			.blog-post-list-flex li.five{width:31.3%;max-width:31.3%;} /* 3 */ 
			.blog-post-list-flex li.five:nth-child(4n+4){margin-right:3%;}
			.blog-post-list-flex li.five:nth-child(3n+3){margin-right:0;}
		
			.blog-post-list-flex li.four{width:31.3%;max-width:31.3%;} /* 3 */ 
			.blog-post-list-flex li.four:nth-child(4n+4){margin-right:3%;}
			.blog-post-list-flex li.four:nth-child(3n+3){margin-right:0;}
			 
		} 
 		@media screen and (max-width: 767px) { 
			.blog-post-list-flex li.six,
			.blog-post-list-flex li.five,
			.blog-post-list-flex li.four,
			.blog-post-list-flex li.three {width:48.5%;max-width:48.5%;} /* 2*/ 
			.blog-post-list-flex li.six:nth-child(3n+3){margin-right:3%;}
			.blog-post-list-flex li.six:nth-child(2n+2){margin-right:0;}
			
			.blog-post-list-flex li.five:nth-child(3n+3){margin-right:3%;}
			.blog-post-list-flex li.five:nth-child(2n+2){margin-right:0;}
			
			.blog-post-list-flex li.four:nth-child(3n+3){margin-right:3%;}
			.blog-post-list-flex li.four:nth-child(2n+2){margin-right:0%;}
			 
			.blog-post-list-flex li.three:nth-child(3n+3){margin-right:3%;}
			.blog-post-list-flex li.three:nth-child(even){margin-right:0;}
		}
		@media screen and (max-width: 500px) { 
			.blog-post-list-flex li.six,
			.blog-post-list-flex li.five,
			.blog-post-list-flex li.four,
			.blog-post-list-flex li.three, 
			.blog-post-list-flex li.two{width:100%;max-width:100%;}  
			
			.blog-post-list-flex li.six:nth-child(3n+3){margin-right:0%;}
			.blog-post-list-flex li.six{margin-right:0%;}
			
 			.blog-post-list-flex li.five:nth-child(3n+3){margin-right:0%;} 
			
			.blog-post-list-flex li.four:nth-child(2n+2){margin-right:0%;}
			
			.blog-post-list-flex li.three:nth-child(3n+3), 
			.blog-post-list-flex li.three {margin-right:0;}
			
			.blog-post-list-flex li.two:nth-child(even){margin-right:0%;} 
		}
		</style> 
	</div>   
 	<!--Inline style for Hero Block-->
	<style type="text/css">
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> {
			background-color: <?php echo $blog_post_background_color; ?> !important; 
		}
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .blog-post-list-flex .post-name { 
			color: <?php echo $blog_post_title_color; ?> !important;
		} 
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .blog-post-list-flex .post-desc p { 
			color: <?php echo $blog_post_desc_color; ?> !important;
		} 
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .blog-post-list-flex .post-link { 
			color: <?php echo $blog_post_post_link_color; ?> !important;
		} 
	</style>  
</section>