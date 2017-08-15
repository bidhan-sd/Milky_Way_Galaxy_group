jQuery(document).ready(function(){ 
	jQuery("responsive-video").fitvits(); 
 
});

jQuery(window).load(function(){
	
  jQuery("#sticker").sticky({ topSpacing: 0 });
}); 

jQuery(window).scroll(function(){
	if(jQuery(this).scrollTop()>300){
		jQuery("#gotoup").fadeIn();
	}
	else{
		jQuery("#gotoup").fadeOut();
	}
});

jQuery("#gotoup").click(function(){
	jQuery("html,body").animate({scrollTop:0}, 500);
});

