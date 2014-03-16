<?php
// -- spotlight.php --

require_once 'inc_path.php';
require_once INCPATH.'header.php';
require_once DATAPATH.'press_photos.php';
navbar();

// the unique contents will go here up to the footer
?>
<?php img_tag('publications.jpg','','spotlight-logo'); ?>
<?php
require_once INCPATH.'spotlight_snippet.php';
// the list items are objects
$array_length = count($press_photos);
$thumbnail_path = 'http://yogarup.com/amrapali/images/press/thumbnails/';
$main_image_path = 'http://yogarup.com/amrapali/images/press/';
create_thumblist($press_photos);			
?>
			<li id='zoomin'></li>
	</ul>	
</div>
<?php footer(); ?>
