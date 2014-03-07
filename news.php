<?php
// -- news.php --

require_once 'inc_path.php';
require_once INCPATH.'header.php';
require_once DATAPATH.'news_photos.php';
navbar();

// the unique contents will go here up to the footer
?>
<?php img_tag('news.jpg','','spotlight-logo'); ?>
<?php
require_once INCPATH.'spotlight_snippet.php';
// the list items are objects
$array_length = count($news_photos);
$thumbnail_path = 'http://yogarup.com/amrapali/images/news/thumbnails/';
$main_image_path = 'http://yogarup.com/amrapali/images/news/';
create_thumblist($news_photos);			
?>
			<li id='zoomin'></li>
	</ul>	
</div>
<?php footer(); ?>
