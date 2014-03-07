<?php
// -- silver.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer

?>
<?php img_tag('Silver-jewellery.jpg', '', 'collections-logo'); ?>
<?php
/* notes on the new collection layout
The basic layout is a tiled selection of 'cropped' close up images
Hovering on the image swaps it to show the full image
Hovering also shows some text - for now just the image name

*/
$silver_tiles = array(
	array('Coil-Elephant-Earrings-with-Zircon---Edited','Coil Elephant Earrings with Zircon<br />White Zircons and 18kt gold plated silver'),
	array('Filigree-Ball-Earrings---Edited','Filigree Ball Earrings<br />18kt gold plated silver'),
	array('Silver-&-Gold-Panther-Head---Edited','Silver & Gold Panther Head<br />Zircon (red, colourless) and 18kt gold plated silver'),
	array('Silver-Dim-Yellow-Glass-Flower-Earrings---edited','Silver Dim Yellow Glass Flower Earrings<br />Glass and silver'),
	array('Silver-Floral-Chakri-Studs---Edited','Silver Floral Chakri Studs<br />White zircon, Crystal and 18kt Gold Plated Silver.'),
	array('Silver-Golden-Lily-Earrings---Edited','Silver Golden Lily Earrings<br />18kt Gold Plated Silver, Amethyst'),
	array('Silver-Ornate-Design-Cuff---Edited','Silver Ornate Design Cuff<br />Plain Silver'),
	array('Silver-Pearl-&-Crystal-Lotus-Earrings---Edited','Silver Pearl & Crystal Lotus Earrings<br />Cultured freshwater pearls, glass and 18kt gold plated silver'),
	array('Silver-Pearl-&-Flower-Chandbali-Earrings---Edited','Silver Pearl & Flower Chandbali Earrings<br />Cultured fresh water pearls, glass and 18kt gold plated silver'),
	array('Silver-Shaida-Style-Garnet-Ring---Edited','Silver Shaida Style Garnet Ring<br />Garnet, blue topaz, peridot and 18kt gold plated silver')
);
$silver_large_tiles = array(array('Silver-Handpainted-Six-Deity-Amulet-Necklace---Edited-big','Silver Handpainted Six Deity Amulet Necklace<br />Cotton thread, Sanganeri handmade paper, glass beads and silver'));
$tile_image_path = TILE_PATH_PREFIX.'/silver/';
$tile_count = count($silver_tiles);
$ext = '.jpg';

?>
<div class="collection-blurb">
  <h3>DISCOVER</h3>
  <hr />
  <h2>SILVER JEWELLERY</h2> 
  <hr />
  <p>Sourcing inspirations from various tribes, the designs of our silver explore off-beaten tracks. To view and shop our entire Silver jewellery range, please visit our e-store <a href="www.tribebyamrapali.com">www.tribebyamrapali.com</a></p>
</div>
<script>
	<?php 
	img_preloader($silver_tiles); 
	img_preloader($silver_large_tiles);
	?>
</script>
<div class="large_on_right">
	<ul>
		<?php list_images(0, 4, $silver_tiles); ?>
	
	<li><a class="popup" <?php echo popup_info($silver_large_tiles[0]); ?>><img src="<?php echo $tile_image_path.$silver_large_tiles[0][0].$ext; ?>" <?php echo add_data($silver_large_tiles[0]); ?> /></a></li>
	</ul>
</div>
<div class="collection_tiles">
	<ul>
	<?php list_images(4, $tile_count, $silver_tiles);?>
	</ul>
</div>

<?php footer(); ?>
