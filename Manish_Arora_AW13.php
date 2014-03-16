<?php
// -- Manish_Arora_AW13.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer

?>
<?php img_tag('Manish_Arora_AW13.jpg', '', 'collections-logo'); ?>
<?php
/* 
Clicking on a thumbnail image pops up larger one in lightbox (colorbox)
First array element is filename
Second is item name & description separated by <br />


*/
$manish_tiles = array(	
  array('Ara-Necklace','Ara Necklace<br />Base Metal with 18k Yellow Gold plating and Enamel'),
	array('Astral-Bangle','Astral Bangle<br />Base Metal with 18k Yellow Gold plating,Enamel and embellished with Black Onyx and crystal.'),
	array('Atria-ring','Atria ring<br />Base Metal with 18k Yellow Gold plating, Enamel and studded with Blue Crystal.'),
	array('Black-rock-black-ear-cuffs','Black rock black ear cuffs<br />Base Metal with 18k Yellow Gold plating,Black Lacquer coating & Enamel'),
	array('Celeste-Necklace','Celeste Necklace<br />Base Metal with 18k Yellow Gold plating,Enamel and studded with crystals, Black & Green Onyx, Blue & Holographic  crystal.'),
	array('Cosmos-Head-Jewel','Cosmos Head Jewel<br />Base Metal with 18k Yellow Gold plating, Enamel.'),
	array('Leda-Earrings','Leda Earrings<br />Base Metal with 18k Yellow Gold plating and Enamel '),
	array('Lynx-ear-cuff','Lynx ear cuff<br />Base Metal with 18k Yellow Gold plating,Black Lacquer coating and Enamel.'),
	array('Orbital-Cuff','Orbital Cuff<br />Base Metal with 18k Yellow Gold plating,Enamel and studded with crystal.')
);
$manish_large_tiles = array(array('Jewelled-Collar-big','Jewelled Collar<br />Base Metal with 18k Yellow Gold plating,Enamel and studded with Green Onyx, Blue & Holographic  crystal.'));
$tile_image_path = TILE_PATH_PREFIX.'/manish_aw13/';
$tile_count = count($manish_tiles);
$ext = '.jpg';
?>
<div class="collection-blurb">
  <h3>Autumn/Winter ’13</h3>
  <hr />
  <h2>MANISH ARORA</h2> 
  <hr />
  <p>A Rajasthani twist on modern jewellery style, the collection is designed for the Bold, Dramatic and Powerful cosmopolitan woman.  This collection pushes the boundaries of contemporary design sensibilities at the same time capturing the essence of Amrapali’s signature style- bold & detailed and Manish’s flamboyant designs.
</p>
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
