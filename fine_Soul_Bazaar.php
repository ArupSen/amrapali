<?php
// -- fine_Soul_Bazaar.php --
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
	array('Bijoux-necklace-(a)','Bijoux necklace (a)<br />Diamond & ruby set in silver & gold'),
	array('Bijoux-necklace-(b)','Bijoux necklace (b)<br />Diamond & emerald set in silver & gold'),
	array('Bijoux-necklace-(c)','Bijoux necklace (c)<br />Diamond & ruby set in silver & gold'),
	array('Lotus-Charm-Bracelet-(a)','Lotus Charm Bracelet (a)<br />Carved emerald & diamond set in silver & gold'),
	array('Lotus-Charm-Bracelet-(c)','Lotus Charm Bracelet (c)<br />Carved tanzanite & diamond set in silver & gold')
);
$manish_large_tiles = array(array('Lotus-Charm-Bracelet-(b)-big','Lotus Charm Bracelet (b)<br />Carved ruby & diamond set in silver & gold'));
$tile_image_path = TILE_PATH_PREFIX.'/fine_soul_bazaar/';
$tile_count = count($manish_tiles);
$ext = '.jpg';

?>
<div class="collection-blurb">
  <h3>DISCOVER</h3>
  <hr />
  <h2>SOUL BAZAAR</h2>
  <hr />
  <p>Bijoux collection of accessible pieces which fuses traditional Indian techniques as well as the soul of the with an elegant Western twist. A contemporary vision of the heritage and spirit of India. Influences from the Mughal period, temple jewellery and ornaments.</p>
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
