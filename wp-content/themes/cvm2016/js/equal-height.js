$(document).ready(function() {
	equalheight = function(container){
var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}
$(window).load(function() {
  equalheight('.row-1 .strategy-col'); 
  equalheight('.row-2 .strategy-col'); 
  equalheight('.row-3 .strategy-col'); 
  equalheight('.row-4 .strategy-col'); 
  equalheight('.row-5 .strategy-col'); 
  equalheight('.row-6 .strategy-col'); 
  equalheight('.row-7 .strategy-col'); 
  equalheight('.row-8 .strategy-col'); 
  equalheight('.row-9 .strategy-col'); 
  equalheight('.row-10 .strategy-col'); 
  equalheight('.row-11 .strategy-col'); 
  equalheight('.row-12 .strategy-col'); 
  equalheight('.row-13 .strategy-col'); 
  equalheight('.row-14 .strategy-col'); 
  equalheight('.row-15 .strategy-col');  
  equalheight('.blog-hero-featured'); 
  equalheight('.grid-3b .companys');
});
$(window).resize(function(){
  equalheight('.row-1 .strategy-col'); 
  equalheight('.row-2 .strategy-col'); 
  equalheight('.row-3 .strategy-col'); 
  equalheight('.row-4 .strategy-col'); 
  equalheight('.row-5 .strategy-col'); 
  equalheight('.row-6 .strategy-col'); 
  equalheight('.row-7 .strategy-col'); 
  equalheight('.row-8 .strategy-col'); 
  equalheight('.row-9 .strategy-col'); 
  equalheight('.row-10 .strategy-col'); 
  equalheight('.row-11 .strategy-col'); 
  equalheight('.row-12 .strategy-col'); 
  equalheight('.row-13 .strategy-col'); 
  equalheight('.row-14 .strategy-col'); 
  equalheight('.row-15 .strategy-col');  
  equalheight('.blog-hero-featured');
  equalheight('.grid-3b .companys');
});
	
});


function equalHeight(group) {
   tallest = 0;
   group.each(function() {
      thisHeight = $(this).height();
      if(thisHeight > tallest) {
         tallest = thisHeight;
      }
   });
   group.height(tallest);
}
$(document).ready(function() {
   equalHeight($(".equal-height"));
});