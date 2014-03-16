<?php
// -- collections.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<?php img_tag('collections-logo.jpg', '', 'collections-logo'); ?>
<?php img_tag('collections-text.jpg','','fine-jewels'); ?>
<?php
$manish_tiles = array(	
	'Ara-Necklace',	
	'Astral-Bangle',	
	'Black-rock-Golden-Ear-Cuffs',	
	'Celeste-Necklace',	
	'Cosmos-Head-Jewel',	
	'Orbital-Cuff',	
	'Gazelle-Earrings',	
	'Gazelle-Necklace',	
	'Gazelle-Temple-Necklace',	
	'Gazelle-Third-Eye',	 	
	'Mirror-Third-Eye',	
	'Queen-of-Heart-bangle',	
	'Royal-Bengal--Earrings',	
	'Royal-Bengal-Amulet',
	'Royal-Bengal-cuff'
);
$manish_large_tiles = array('Jewelled-Collar','Panther-cuff');
$tile_image_path = 'http://yogarup.com/amrapali/images/collections/manish/';
$tile_count = count($manish_tiles);
$ext = '-crop.jpg';
?>
<script type="text/javascript" charset="utf-8">
	<?php 
	img_preloader($manish_tiles); 
	img_preloader($manish_large_tiles);
	?>
</script>
<div class="large_on_right">
	<ul>
		<?php list_images(0,4, $manish_tiles); ?>
			
	<li><img src="<?php echo $tile_image_path.$manish_large_tiles[0].$ext; ?>" <?php echo add_data($manish_large_tiles[0]); ?> /></li>
	</ul>
</div>
<div class="large_on_left">
	<ul>
	<li><img src="<?php echo $tile_image_path.$manish_large_tiles[1].$ext; ?>" <?php echo add_data($manish_large_tiles[1]); ?> /></li>	
	
		<?php list_images(4,8,  $manish_tiles);	?>
	</ul>
</div>
<div class="collection_tiles">
	<ul>
	<?php list_images(8, $tile_count, $manish_tiles);	?>
	</ul>
</div>
<?php footer(); ?>
