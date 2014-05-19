<?php
// -- footer.php --
?>

</div><!-- end of contents -->
<div id="footer">
	
</div>
</div> <!-- end of wrap -->
<script  src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script  src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script  src="<?php echo JSPATH.'parallax.js'; ?>"></script>
<script  src="<?php echo JSPATH.'press.js'; ?>"></script>
<script  src="<?php echo JSPATH.'jquery.colorbox-min.js'; ?>"></script>
<script>
	$(function() {
		// some sub-nav menu items should be active
		$('#collections .sub-nav').find('a').eq(2).addClass('sub-nav-active');
		$('#spotlight .sub-nav').find('a').eq(3).addClass('sub-nav-active');
		$('#awards .sub-nav').find('a').eq(2).addClass('sub-nav-active');
		$('#exhibitions .sub-nav').find('a').eq(5).addClass('sub-nav-active');
		$('#contact .sub-nav').find('a').eq(1).addClass('sub-nav-active');
		$('#careers .sub-nav').find('a').eq(2).addClass('sub-nav-active');
		$('#stores .sub-nav').find('a').eq(1).addClass('sub-nav-active');
		$('#international .sub-nav').find('a').eq(0).addClass('sub-nav-active');
    // insert an anchor to link back to the home page
    $('#heading').append('<a class="home-link" href="./index.php" title="return to home page"></a>');
    $('.home-link').css({'width': '250px', 'height':'140px','margin':'0 auto','display':'block'});
    // swap icons in the captcha
    $("#recaptcha_reload").attr('src', './images/refresh.png');
    $("#recaptcha_switch_audio").attr('src', './images/audio.png');
    $("#recaptcha_switch_img").attr('src', './images/text.png');
    $("#recaptcha_whatsthis").attr('src', './images/help.png');
	});
	
</script>

<script>
// colorbox lightbox applies to the collection pages
// set title text as data to use in colorbox
$(function() {
  //$('.popup').removeAttr('title');
  $('.popup').colorbox({title: function() {
  return  $(this).data('text');
  }});
});
</script>
<script>
// accordion menu on the store locations pages
// uses jquery ui
$(function() {
	$( "#store_locations" ).accordion({ collapsible: true, active: false, heightStyle: "content" });
	
	// calculate paragraph width according to no. of paras
	var sections = $('#store_locations').find('div').length;
	for (var i=0; i < sections; i++) {
		var paras = $('#store_locations div').eq(i).children('p').length;
		var width = Math.floor(100 / paras) - 2;
		width = width.toString() + '%';
		$('#store_locations div').eq(i).children('p').css('width', width);
	};
});
</script>
<script>
// fades in the banner which links to the store
$(function() {
	setTimeout(function() {
	$('.shop-popup').fadeIn();
	}, 5000);
});
</script>
</body>
</html>
