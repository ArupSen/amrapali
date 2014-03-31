<?php
// -- awards.php --

require_once 'inc_path.php';
require_once INCPATH.'header.php';
require_once DATAPATH.'awards_sorted.php';
navbar();

// the unique contents will go here up to the footer
?>
<?php img_tag('awards.jpg','','spotlight-logo'); ?>
<?php
require_once INCPATH.'spotlight_snippet.php';
// the list items are objects
$array_length = count($awards_photos);
$thumbnail_path = 'http://amrapalijewels.com/images/awards/thumbnails/';
$main_image_path = 'http://amrapalijewels.com/images/awards/';
create_thumblist($awards_photos);			
?>
			<li id='zoomin'></li>
	</ul>	
</div>
<?php footer(); ?>
