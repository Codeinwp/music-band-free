jQuery(document).ready(function () { 
	/* mobile menu */
	jQuery(".menu_toggle").click(function() {
		jQuery("#header_nav").toggle();
		jQuery(this).toggleClass("active");
	});

	/* menu limit */
	
    var full_width = 0;
    jQuery("ul.menu:first > li").each(function( index ) {    
        if((jQuery(this).width() + full_width) > 500) {
            jQuery(this).remove();
        }
        full_width = full_width + jQuery(this).width(); 
    });
	
	/* end - menu limit */
	
	jQuery(".fnav a:last-child").css('border-right','none');
	
	jQuery(".slidernav").tabs("div.panes > div");

jQuery("#sliderr .sliderWrapper").cycle({
	fx: "fade",
	next: ".slider-buttons.left",
	prev: ".slider-buttons.right"
});
	
	if(jQuery('.buyalbum').length === 0) {
		jQuery('#header_nav').css('float','right');
	}
	
	if(jQuery('.about_banner').length === 0) {
		jQuery('.about_content').css('width','auto');
		jQuery('.about_content').css('max-width','600px');
		jQuery('.about_content').css('margin-left','0px');
	}
});