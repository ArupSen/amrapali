<?php
// -- hollywood.php --

require_once 'inc_path.php';
require_once INCPATH.'header.php';
require_once DATAPATH.'hollywood_sorted.php';
navbar();

// the unique contents will go here up to the footer
?>
<?php img_tag('hollywood.jpg','','spotlight-logo'); ?>
<?php
require_once INCPATH.'spotlight_snippet.php';
// the list items are objects
$array_length = count($hollywood_photos);
$thumbnail_path = 'http://amrapalijewels.com/images/hollywood/thumbnails/';
$main_image_path = 'http://amrapalijewels.com/images/hollywood/';
create_thumblist($hollywood_photos);
			
?>
			<li id='zoomin'></li>
	</ul>	
</div>
<?php footer(); ?>
