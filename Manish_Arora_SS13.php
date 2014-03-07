<?php
// -- Manish_Arora_SS13.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer

?>
<?php img_tag('Manish-Arora.jpg', '', 'collections-logo'); ?>
<?php
/* 
Clicking on a thumbnail image pops up larger one in lightbox (colorbox)
First array element is filename
Second is item name & description separated by <br />

*/
$manish_tiles = array(	
	array('Gazelle-Earrings','Gazelle Earrings<br />Base Metal with 18k Yellow Gold plating, Enamel, Coral, Pearl & Crystal'),
	array('Gazelle-Necklace','Gazelle Necklace<br />Base Metal with 18k Yellow Gold plating, Enamel, Turquoise & Crystal'),
	array('Heart-of-Gold-earrings','Heart of Gold earrings<br />Sterling silver with 18k yellow gold plating, enamel, pearl and pink heart crystal'),
	array('Panther-Earrings','Panther Earrings<br />Base Metal with 18k Yellow Gold plating, Enamel, Amythest, Pearl & Turquoise'),
	array('Queen-of-Heart-bangle','Queen of Heart bangle<br />Base Metal with 18k Yellow Gold plating, Enamel, Coral, Pearl, Turquoise & Crystal'),
	array('Royal-Bengal-Amulet','Royal Bengal Amulet<br />Sterling Silver with 18k Yellow Gold plating, Enamel & Pink heart crystal'),
	array('Royal-Bengal-Cuff','Royal Bengal Cuff<br />Base Metal with 18k Yellow Gold plating, Enamel & Pink heart crystal'),
	array('Royal-Bengal-Earrings','Royal Bengal Earrings<br />Base Metal with 18k Yellow Gold plating, Enamel & Turquoise'),
	array('Royal-Bengal-Ring','Royal Bengal Ring<br />Sterling Silver with 18k Yellow Gold plating, Enamel & Pink heart crystal')
);
$manish_large_tiles = array(array('Panther-Cuff-big','Panther Cuff<br />Base Metal with 18k Yellow Gold plating, Enamel, Rose Quartz, Green Chalcedony, Amythest & Turquoise'));
$tile_image_path = TILE_PATH_PREFIX.'/manish_ss13/';
$tile_count = count($manish_tiles);
$ext = '.jpg';


?>
<div class="collection-blurb">
  <h3>Spring/Summer ’13</h3>
  <hr />
  <h2>MANISH ARORA</h2> 
  <hr />
  <p>A Mélange of traditional art mixed with the royalty of India interspersed with the wild and nature, Manish Arora & Amrapali SS13 Collection is an eclectic collection which brings post culture exoticism. The collection is a revitalization of tradition from a modern kaleidoscope.  
</p>
</div>
<script type="text/javascript" charset="utf-8">
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
