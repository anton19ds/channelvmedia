$(document).ready(function() {
  // Perks
    $('.togglefaq').click(function (e) {
        e.preventDefault();
        var notthis = $('.active').not(this);
        notthis.find('.icon-minus').addClass('icon-plus').removeClass('icon-minus');
        notthis.toggleClass('active').next('.faqanswer').slideToggle(300);
        $(this).toggleClass('active').next().slideToggle('fast');
        $(this).children('span.ic').toggleClass('icon-plus icon-minus');
    });
  // Class
	$('.grid-page').addClass('careers');
	$('#content').addClass('careers');
  // Hamburger
	$('.site-menu__button').click(function() {
		$(this).css('display','none');
		$('.site-menu').addClass('is-active'); 
	});
	$('.site-menu__close').click(function() {
		$('.site-menu__button').css('display','block');
		$(".site-menu").removeClass('is-active');
	});
  /*Brought click function of fileupload button when text field is clicked*/
	$('#filetext1').click(function() {
		$('#browsebtn1').click();
	});

  /*Brought click function of fileupload button when browse button is clicked*/
	$('#uploadbtn1').click(function() {
		$('#browsebtn1').click();
	});
  /*To bring the selected file value in text field*/	
	$('#browsebtn1').change(function() {
    $('#filetext1').val($(this).val());
  }); 
  /*Brought click function of fileupload button when text field is clicked*/
	$('#filetext2').click(function() {
		$('#browsebtn2').click();
	});
  /*Brought click function of fileupload button when browse button is clicked*/
	$('#uploadbtn2').click(function() {
		$('#browsebtn2').click();
	});
  /*To bring the selected file value in text field*/	
	$('#browsebtn2').change(function() {
    $('#filetext2').val($(this).val());
  });
  //Replace --- in dropdown
  $("#availability option:first:contains('---')").html('Availability');  
});