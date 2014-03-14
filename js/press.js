// script for the limelight section

var visibleitem = undefined;
jQuery(document).ready(function(){
    jQuery('body').prepend(jQuery('<span>').addClass('pressTooltip'));
    jQuery('.closebox').hide();
    jQuery('.row li:not(#zoomin)').
    hover(
        function(evt){
            jQuery('.pressTooltip').
            html('').
            append(jQuery(this).children('.title:first').html()).
            append(jQuery('<br />')).
            append(jQuery(this).children('.subscript:first').html()).
            show();
        },
        function(evt){
            jQuery('.pressTooltip').hide();
        }
    ).
    mousemove(function(e){
                jQuery('.pressTooltip').css({top: e.pageY + 10, left: e.pageX + 10});
    }).
    click(function(e){
	var pos = jQuery(e.currentTarget).parent().find('li').index(e.currentTarget);
	if(jQuery('#zoomin').css('display') != 'none' && visibleitem == pos) {
		jQuery('#zoomin').slideUp();
		return;
	}
	if(Math.floor(visibleitem/items_per_row) < Math.floor(pos/items_per_row)) pos--;
	visibleitem = pos;
	jQuery('body').append(jQuery('.closebox').hide());
	var row = Math.floor(pos / items_per_row);
	var index = pos % items_per_row;
	var endChild = (row + 1) * items_per_row;
	var zoomin_li = jQuery('#zoomin');

	zoomin_li.remove();
	while(jQuery(e.currentTarget).parent().find('li:nth-child('+endChild+')').length == 0) endChild--;

	if(zoomin_li.css('display') != 'none')  zoomin_li.css('display', 'none');
	zoomin_li.
		html('').
		append(
			jQuery('.closebox').
				show().
				click(function(e){
					jQuery('#zoomin').slideUp();
				})
		).
		append(
			jQuery(this).children(".image:first").length ?
				jQuery(this).children(".image:first").clone() :
				jQuery("<img />").attr({
					src: jQuery(this).attr("data-img-src"),
					alt: jQuery(this).children(".description:first").text()
				})
		).
		append(
			jQuery('<div />').
				addClass('innertext').
				append(
					jQuery(this).children('.title:first').clone()
				).
				append(
					jQuery(this).children('.subscript:first').clone()
				).
				append(
					jQuery(this).children('.description:first').clone()
				)
		).
		append(
			jQuery('<div />').css('clear','both')
		).
		insertAfter(
			jQuery(e.currentTarget).parent().find('li:nth-child('+endChild+')')
		);
	jQuery('#zoomin').slideDown(200, function(){
		target = jQuery('#zoomin');
		if(
			//top of viewport lower than top of target OR
			jQuery(document).scrollTop() > target.offset().top ||
			//bottom of viewport higher than bottom of target
			jQuery(document).scrollTop() + jQuery(window).height() <
				target.offset().top + target.height()
		) {
			jQuery('html, body').animate({scrollTop: target.offset().top}, 300);
		}
	});
    });
});
