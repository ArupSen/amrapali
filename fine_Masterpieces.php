<?php
// -- fine_Masterpieces.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer

?>
<?php img_tag('Fine-jewellery.jpg', '', 'collections-logo'); ?>
<div class="collection-blurb">
	<h3>DISCOVER</h3>
	<hr />
	<h2>MASTERPIECES</h2>
	<hr />
	<p>High Jewellery comprising of one off pieces crafted using large rare diamonds and gemstones and created using ancient Indian techniques which have been preserved by our highly skilled craftsman.</p>
</div>
<?php
/*  
Clicking on a thumbnail image pops up larger one in lightbox (colorbox)
First array element is filename
Second is item name & description separated by <br />
*/
$manish_tiles = array(	
	array('Large-Sapphire-&-Emerald-Rings','Large Sapphire & Emerald Rings<br />Burmese Sapphire &  Zambian Emerald with diamond set in white gold'),
	array('Lotus-Flower-Earrings','Lotus Flower Earrings<br />Diamond & Ruby with enamel detailing on reverse set in gold'),
	array('Manik-Lotus-Earrings','Manik Lotus Earrings<br />Ruby, diamond & pearl set in gold'),
	array('Manik-Lotus-Sautoir','Manik Lotus Sautoir<br />Ruby, diamond & pearl set in gold'),
  array('Peacock-Temple-Bangle-with-Diamond','Peacock Temple Bangle<br />Diamond, Ruby & Emerald set in silver & gold'),
	array('Victorian-Collar-Necklace-with-Earrings','Victorian Collar Necklace with Earrings<br />Diamond &  South Sea Pearl set in silver & gold')
);
$manish_large_tiles = array(array('Lotus-Flower-Necklace-big','Lotus Flower Necklace<br />Diamond & Ruby with enamel detailing on reverse set in gold'));
$tile_image_path = TILE_PATH_PREFIX.'/fine_masterpieces/';
$tile_count = count($manish_tiles);
$ext = '.jpg';

?>
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
