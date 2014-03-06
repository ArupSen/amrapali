<?php
// -- fine_Panna.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer

?>
<?php img_tag('Fine-jewellery.jpg', '', 'collections-logo'); ?>
<?php
/* 
Clicking on a thumbnail image pops up larger one in lightbox (colorbox)
First array element is filename
Second is item name & description separated by <br />
*/
$manish_tiles = array(	
	array('Fine-Zambian-Emerald-Floral-Earrings','Fine Zambian Emerald Floral Earrings<br />Emerald & diamond set in gold'),
	array('Floral-Carved-Emerald-Necklace','Floral Carved Emerald Necklace<br />Emerald, diamond & ruby set in silver & gold'),
	array('Floral-Carved-Emerald-Peacock-Brooch','Floral Carved Emerald Peacock Brooch<br />Emerald, diamond & ruby set in silver & gold'),
	array('Floral-Craved-Emerald-Earrings','Floral Craved Emerald Earrings<br />Emerald, diamond & ruby set in silver & gold')
);
$manish_large_tiles = array(array('Trio-of-Emerald-Rings-big','Trio of Emerald Rings<br />Emerald & diamond rings set in silver & gold'));
$tile_image_path = TILE_PATH_PREFIX.'/fine_panna/';
$tile_count = count($manish_tiles);
$ext = '.jpg';

?>
<div class="collection-blurb">
  <h3>DISCOVER</h3>
  <hr />
  <h2>PANNA</h2>
  <hr />
  <p>Emerald pieces crafted using Gemfield ethically mined gems. Highlights include large carved pieces.</p>
</div>
<script>
	<?php 
	img_preloader($manish_tiles); 
	img_preloader($manish_large_tiles);
	?>
</script>
<div class="large_on_right">
	<ul>
		<?php list_images(0, 4, $manish_tiles); ?>
			
	<li><a class="popup" <?php echo popup_info($manish_large_tiles[0]); ?>><img src="<?php echo $tile_image_path.$manish_large_tiles[0][0].$ext; ?>" <?php echo add_data($manish_large_tiles[0]); ?> /></a></li>
	</ul>
</div>
<div class="collection_tiles">
	<ul>
	<?php list_images(4, $tile_count, $manish_tiles);	?>
	</ul>
</div>

<?php footer(); ?>
