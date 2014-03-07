<?php
// -- limited_edition.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer

?>
<?php img_tag('Limited-Edition.jpg', '', 'collections-logo'); ?>
<?php
/* notes on the new collection layout
The basic layout is a tiled selection of 'cropped' close up images
Hovering on the image swaps it to show the full image
Hovering also shows some text - for now just the image name

*/
$limited_edition_tiles = array(
	array('Case-Open-1',''),
	array('Case-Closed',''),
	array('Case-Open-2',''),
	array('Club',''),
	array('Hanuman-2',''),
	array('Hanuman-3',''),
	array('Medallion-6','')
);
$limited_edition_large_tiles = array(array('Hairandbeardplusnostril-FINAL',''));
$tile_image_path = TILE_PATH_PREFIX.'/limited_edition/';
$tile_count = count($limited_edition_tiles);
$ext = '.jpg';

?>
<div class="collection-blurb">
  <h3>DISCOVER</h3>
  <hr />
  <h2>LIMITED EDITION</h2> 
  <hr />
  <p>Amrapali in association with Divine Heritage Collection have created a regal Hanuman figurine handcrafted in the finest materials. 20 oz gold and 461 precious gemstones including diamonds, rubies and emeralds are expertly employed with exquisite craftsmanship, extraordinary engineering and devotion to create Hanuman, the divine hero of the Ramayana. This is a limited edition and truly a collector’s piece.</p>
  <p>Upon touching the right foot of the Hanuman, he opens his arms to reveal a tiny sculpture of Sita and Rama in his heart. His head bows at the same time in acknowledgement.</p>
  <p>For further information please log on to <a href="www.divineheritagecollection.com">www.divineheritagecollection.com</a></p>
</div>
<script>
	<?php 
	img_preloader($limited_edition_tiles); 
	img_preloader($limited_edition_large_tiles);
	?>
</script>
<div class="large_on_right">
	<ul>
		<?php list_images(0, 4, $limited_edition_tiles); ?>
	
	<li><a class="popup" <?php echo popup_info($limited_edition_large_tiles[0]); ?>><img src="<?php echo $tile_image_path.$limited_edition_large_tiles[0][0].$ext; ?>" <?php echo add_data($manish_large_tiles[0]); ?> /></a></li>
	</ul>
</div>
<div class="collection_tiles">
	<ul>
	<?php list_images(4, $tile_count, $limited_edition_tiles);	?>
	</ul>
</div>

<?php footer(); ?>
