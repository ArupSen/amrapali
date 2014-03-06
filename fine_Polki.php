<?php
// -- fine_Polki.php --
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
	array('Art-Deco-Style-Hoop-Earrings-(a)','Art Deco Style Hoop Earrings (a)<br />Diamond & South Sea Pearl set in silver & gold'),
	array('Art-Deco-Style-Hoop-Earrings-(b)','Art Deco Style Hoop Earrings (b)<br />Diamond & South Sea Pearl set in silver & gold'),
	array('Art-Deco-Style-Hoop-Earrings-(c)','Art Deco Style Hoop Earrings (c)<br />Diamond & South Sea Pearl set in silver & gold'),
	array('Art-Deco-Style-Hoop-Earrings-(d)','Art Deco Style Hoop Earrings (d)<br />Diamond & South Sea Pearl set in silver & gold'),
	array('Long-Peacock-Maharaja-Necklace','Long Peacock Maharaja Necklace<br />Diamond, pearl & emerald set in silver & gold'),
	array('Pair-of-Antique-Finish-Rose-Cut-Diamond-Floral-Rings','Pair of Antique Finish Rose Cut Diamond<br />Diamond set in silver & gold')
);
$manish_large_tiles = array(array('Stack-of-Bangles-big','Stack of Bangles<br />Diamond set in silver & gold'));
$tile_image_path = TILE_PATH_PREFIX.'/fine_polki/';
$tile_count = count($manish_tiles);
$ext = '.jpg';

?>
<div class="collection-blurb">
  <h3>DISCOVER</h3>
  <hr />
  <h2>POLKI</h2>
  <hr />
  <p>Flat, rose and brilliant cut diamonds set in the traditional Indian way. All pieces are fine works of art with beautiful hidden details on the back.
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
