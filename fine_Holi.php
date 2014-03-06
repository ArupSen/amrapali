<?php
// -- fine_Holi.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer

?>
<?php img_tag('Fine-jewellery.jpg', '', 'collections-logo'); ?>
<?php
/* notes on the new collection layout
The basic layout is a tiled selection of 'cropped' close up images
Hovering on the image swaps it to show the full image
Hovering also shows some text - 2nd element of inner array

*/
$manish_tiles = array(	
	array('Fancy-Chequer-Sapphire-Slice-Earrings','Fancy Chequer Sapphire Slice Earrings<br />Sapphire &  diamond set in silver & gold'),
	array('Fancy-Chequer-Sapphire-Slice-Necklace','Fancy Chequer Sapphire Slice Necklace<br />Sapphire &  diamond set in silver & gold'),
	array('Geo-necklace','Geo Necklace<br />Ruby, coloured sapphire & diamond set in silver & gold')

);
$manish_large_tiles = array(array('Butterfly-Bangle-big','Butterfly Bangle <br />Ruby, coloured sapphire, emerald & diamond set in silver & gold'));
$tile_image_path = TILE_PATH_PREFIX.'/fine_holi/';
$tile_count = count($manish_tiles);
$ext = '.jpg';

?>
<div class="collection-blurb">
  <h3>DISCOVER</h3>
  <hr />
  <h2>HOLI</h2> 
  <hr />
  <p>Celebrating the festival of colours this collection is made primarily of multi coloured sapphire slices.</p>
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
