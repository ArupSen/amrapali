<?php
// -- Manish_Arora_SS14.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();
// the unique contents will go here up to the footer

?>
<?php img_tag('Manish_Arora_SS14.jpg', '', 'collections-logo'); ?>
<?php
/* 
Clicking on a thumbnail image pops up larger one in lightbox (colorbox)
First array element is filename
Second is item name & description separated by <br />
*/
$manish_tiles = array(	
	array('Borris-handcuff','Borris handcuff<br />Base Metal with 18k Yellow Gold plating Swarovski baguette and Enamel.'),
	array('Bruna-hand-jewel','Bruna hand jewel<br />Base Metal with 18k Yellow Gold plating Swarovski baguette , round crystal & Enamel.'),
	array('Cella-earrings','Cella earrings<br />Base Metal with 18k Yellow Gold plating Swarovski pearl beads and Enamel.'),
	array('Eme-earcuffs','Eme earcuffs<br />Base Metal with 18k Yellow Gold plating swarovski and Enamel'),
	array('Eme-earrings','Eme earrings<br />Base Metal with 18k Yellow Gold plating Swarovski baguette and Enamel.'),
	array('Eme-handcuff','Eme handcuff<br />Base Metal with 18k Yellow Gold plating Swarovski baguette and Enamel.'),
	array('Emon-earcuffs','Emon earcuffs<br />Base Metal with 18k Yellow Gold plating Swarovski pearl beads and Enamel.'),
	array('Esme-earrings','Esme earrings<br />Base Metal with 18k Yellow Gold plating Swarovski crystal pearl beads and Enamel.'),
	array('Naho-necklace','Naho necklace<br />Base Metal with 18k Yellow Gold plating Swarovski pearl beads and Enamel.'),
	array('Nella-ring','Naho necklace<br />Base Metal with 18k Yellow Gold plating Swarovski crystal and Enamel.'),
	array('Reeka-ring','Reeka ring<br />Base Metal with 18k Yellow Gold plating Swarovski pearl beads and Enamel.')
);
$manish_large_tiles = array(array('Rosa-ring-big','Rosa ring<br />Base Metal with 18k Yellow Gold plating Swarovski baguette and Enamel.'));
$tile_image_path = TILE_PATH_PREFIX.'/manish_ss14/';
$tile_count = count($manish_tiles);
$ext = '.jpg';
?> 
<div class="collection-blurb">
  <h3>Spring/Summer ’14</h3>
  <hr />
  <h2>MANISH ARORA</h2> 
  <hr />
  <p> Manish has once again delved into Amrapali’s extensive archives to create a collection adorned with fluorescent art deco patterns and kaleidoscopic botanicals. The 18kt gold plated collection is bold and bright. The collection has a juicy palette of banana yellow, sherbet pink, fuschia and mint green embedded into predominantly geometric shapes.  
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
