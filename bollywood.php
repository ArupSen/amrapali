<?php
// -- bollywood.php --

require_once 'inc_path.php';
require_once INCPATH.'header.php';
require_once DATAPATH.'bollywood_photos.php';
navbar();

// the unique contents will go here up to the footer
?>
<?php img_tag('Bollywood.jpg','','spotlight-logo'); ?>
<?php
require_once INCPATH.'spotlight_snippet.php';
// the list items are objects
$array_length = count($bollywood_photos);
$thumbnail_path = 'http://yogarup.com/amrapali/images/bollywood/thumbnails/';
$main_image_path = 'http://yogarup.com/amrapali/images/bollywood/';
create_thumblist($bollywood_photos);			
?>
			<li id='zoomin'></li>
	</ul>	
</div>
<?php footer(); ?>
